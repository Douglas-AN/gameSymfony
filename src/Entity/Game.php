<?php

namespace App\Entity;

use App\Repository\GameRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: GameRepository::class)]
class Game
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @ORM\Column(type="integer")
     */
    private $currentPlayer;

    /**
     * @ORM\Column(type="integer")
     */
    private $winner;

    /**
     * @ORM\Column(type="integer")
     */
    private $width;

    /**
     * @ORM\Column(type="integer")
     */
    private $height;

    /**
     * @ORM\Column(type="integer")
     */
    private $lastMove;

    #[ORM\Column(type: Types::ARRAY)]
    private array $grid = [];
  

    public function getCurrentPlayer(): ?int
    {
        return $this->currentPlayer;
    }

    public function setCurrentPlayer(int $currentPlayer): self
    {
        $this->currentPlayer = $currentPlayer;
        return $this;
    }

    public function getWinner(): ?int
    {
        return $this->winner;
    }

    public function setWinner(int $winner): self
    {
        $this->winner = $winner;
        return $this;
    }

    public function getGrid(): array
    {
        return $this->grid;
    }

    public function setGrid(array $grid): self
    {
        $this->grid = $grid;

        return $this;
    }
}
