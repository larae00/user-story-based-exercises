<?php

namespace Lara\WebtCoreDoctrineDbal\Controller;

use Lara\WebtCoreDoctrineDbal\Model\Repository\GameRepository;

class GameController
{
    private GameRepository $gameRepository;

    public function __construct(array $connectionParams)
    {
        $this->gameRepository = new GameRepository($connectionParams);
    }

    public function saveGame(array $postData): void
    {
        $playerName = $postData['playerName'] ?? '';
        $symbol = $postData['symbol'] ?? '';
        
        if (!empty($playerName) && !empty($symbol)) {
            $this->gameRepository->addNewGame([
                'playerName' => $playerName,
                'symbol' => $symbol,
                'gameDate' => date('Y-m-d H:i:s')
            ]);
        }
    }
}