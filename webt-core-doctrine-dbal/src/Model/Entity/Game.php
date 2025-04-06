<?php

namespace Lara\WebtCoreDoctrineDbal\Model\Entity;

class Game
{
   public function __construct(protected int $id, protected string $playerName, protected string $symbol, protected \DateTime $gameDate){}

    public function getId(): int
    {
        return $this->id;
    }

    public function getPlayerName(): string
    {
        return $this->playerName;
    }

    public function getSymbol(): string
    {
        return $this->symbol;
    }

    public function getGameDate(): \DateTime
    {
        return $this->gameDate;
    }

    public function getSymbolEmoji(): string
    {
        return match($this->symbol) {
            'rock' => '✊',
            'paper' => '✋',
            'scissors' => '✌️',
            default => '❓'
        };
    }
} 