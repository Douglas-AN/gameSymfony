<?php

namespace App\Controller;

use App\Entity\Game;
use App\Form\Game1Type;
use App\Repository\GameRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Psr\Log\LoggerInterface;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\DependencyInjection\Extension\Extension;

/** 
* @Security("is_granted('ROLE_USER')") 
*/
#[Route('/game')]
class GameController extends AbstractController
{
    private const ROWS = 6;
    private const COLUMNS = 7;

    #[Route('/', name: 'app_game_index', methods: ['GET'])]
    public function index(GameRepository $gameRepository): Response
    {
        return $this->render('game/index.html.twig', [
            'games' => $gameRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_game_new', methods: ['GET', 'POST'])]
    public function new(Request $request, GameRepository $gameRepository, LoggerInterface $logger): Response
    {
        $game = new Game();
        $form = $this->createForm(Game1Type::class, $game);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $game->setGrid([
                    array('', '', '', '', '', '', ''),
                    array('', '', '', '', '', '', ''),
                    array('', '', '', '', '', '', ''),
                    array('', '', '', '', '', '', ''),
                    array('', '', '', '', '', '', ''),
                    array('', '', '', '', '', '', ''),
            ]);
            $gameRepository->save($game, true);

            return $this->redirectToRoute('app_game_index', [], Response::HTTP_SEE_OTHER);
        }
        $logger->info('New game');


        return $this->renderForm('game/new.html.twig', [
            'game' => $game,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_game_show')]
    public function show(Request $request, Game $game): Response
    {
        if ($request->isMethod('POST')) {
            $column = $request->request->get('column');
            $this->playMove($game, $column);
        }
        $this->playMove($game, self::COLUMNS);


        return $this->render('game/show.html.twig', [
            'game' => $game,    
            'board' => $game->getGrid(),
            'player' => $game->getCurrentPlayer(),
            'winner' => $game->getWinner(),
        ]);
    }

    public function playMove(Game $game, int $column): bool
    {
        $grid = $game->getGrid();
        $player = $game->getCurrentPlayer();


        // Chercher la première case vide dans la colonne
        for ($row = self::ROWS - 1; $row >= 0; $row--) {

            if ($column === '') {
                $grid[$row][$column] = $player;
                $game->setGrid($grid);
                return true;
            }
        }

        return false;
    }


    #[Route('/{id}', name: 'app_game_delete', methods: ['POST'])]
    public function delete(Request $request, Game $game, GameRepository $gameRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$game->getId(), $request->request->get('_token'))) {
            $gameRepository->remove($game, true);
        }

        return $this->redirectToRoute('app_game_index', [], Response::HTTP_SEE_OTHER);
    }

    #[Route('/serialized/game{id}.{extension}', name: 'app_game_serialized')]
    public function serialized(Game $game, string $extension): Response
    {
        $encoders = [new XmlEncoder(), new JsonEncoder()];
        $normalizers = [new ObjectNormalizer()];
        $serializer = new Serializer($normalizers, $encoders);
        
        return new Response($serializer->serialize($game, $extension), 200, ['content-type' => 'text/'.$extension]);
    }
}
