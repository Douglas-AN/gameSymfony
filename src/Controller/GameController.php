<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class GameController extends AbstractController
{
    #[Route('/game/controler', name: 'app_game_controler')]
    public function index(): Response
    {
        $game = $this->getDoctrine()
        ->getRepository(Game::class)
        ->find(1);

    $players = $this->getDoctrine()
        ->getRepository(Player::class)
        ->findAll();

    $grid = json_decode($game->getGrid(), true);

    return $this->render('game_controller/index.html.twig', [
        'game' => $game,
        'players' => $players,
        'grid' => $grid
    ]);
    }

    #[Route('/place/{column}', name: 'place')]
    public function place(Request $request, int $column): Response
    {
        $game = $this->getDoctrine()
            ->getRepository(Game::class)
            ->find(1);

        $grid = json_decode($game->getGrid(), true);
        $player = $this->getDoctrine()
            ->getRepository(Player::class)
            ->find(1);
        $color = $player->getColor();

        // Trouver la première case vide dans la colonne
        for ($row = 5; $row >= 0; $row--) {
            if ($grid[$row][$column] == null) {
                $grid[$row][$column] = $color;
                break;
            }
        }

        $game->setGrid(json_encode($grid));

        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($game);
        $entityManager->flush();

        // Vérifier si un joueur a aligné 4 de ses pions
        $winner = $this->checkWinner($grid);

        if ($winner != null) {
            return $this->redirectToRoute('winner', [
                'winner' => $winner
            ]);
        }

        // Vérifier si la grille est remplie (partie nulle)
        $full = true;

        for ($row = 0; $row < 6; $row++) {
            for ($col = 0; $col < 7; $col++) {
                if ($grid[$row][$col] == null) {
                    $full = false;
                    break 2;
                }
            }
        }

        if ($full) {
            return $this->redirectToRoute('tie');
        }

        // Changer de joueur
        $player = $this->getDoctrine()
            ->getRepository(Player::class)
            ->findOneByColor($player->getColor() == 'red' ? 'yellow' : 'red');

        return $this->redirectToRoute('index');
    }

    private function checkWinner($grid)
{
    // Vérifier les lignes horizontales
    for ($row = 0; $row < 6; $row++) {
        for ($col = 0; $col < 4; $col++) {
            if ($grid[$row][$col] != null &&
                $grid[$row][$col] == $grid[$row][$col + 1] &&
                $grid[$row][$col] == $grid[$row][$col + 2] &&
                $grid[$row][$col] == $grid[$row][$col + 3]) {
                return $grid[$row][$col];
            }
        }
    }

    // Vérifier les colonnes verticales
    for ($row = 0; $row < 3; $row++) {
        for ($col = 0; $col < 7; $col++) {
            if ($grid[$row][$col] != null &&
                $grid[$row][$col] == $grid[$row + 1][$col] &&
                $grid[$row][$col] == $grid[$row + 2][$col] &&
                $grid[$row][$col] == $grid[$row + 3][$col]) {
                return $grid[$row][$col];
            }
        }
    }

    // Vérifier les diagonales montantes
    for ($row = 3; $row < 6; $row++) {
        for ($col = 0; $col < 4; $col++) {
            if ($grid[$row][$col] != null &&
                $grid[$row][$col] == $grid[$row - 1][$col + 1] &&
                $grid[$row][$col] == $grid[$row - 2][$col + 2] &&
                $grid[$row][$col] == $grid[$row - 3][$col + 3]) {
                return $grid[$row][$col];
            }
        }
    }

    // Vérifier les diagonales descendantes
    for ($row = 0; $row < 3; $row++) {
        for ($col = 0; $col < 4; $col++) {
            if ($grid[$row][$col] != null &&
                $grid[$row][$col] == $grid[$row + 1][$col + 1] &&
                $grid[$row][$col] == $grid[$row + 2][$col + 2] &&
                $grid[$row][$col] == $grid[$row + 3][$col + 3]) {
                return $grid[$row][$col];
            }
        }
    }

    // S'il n'y a pas de gagnant
    return null;
}


}
