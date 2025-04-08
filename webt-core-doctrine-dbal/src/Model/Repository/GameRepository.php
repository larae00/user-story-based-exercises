<?php

namespace Lara\WebtCoreDoctrineDbal\Model\Repository;

use Doctrine\DBAL\Connection;
use Doctrine\DBAL\DriverManager;
use Lara\WebtCoreDoctrineDbal\Model\Entity\Game;

class GameRepository
{
    private Connection $connection;

    public function __construct(array $connectionParams)
    {
        $this->connection = DriverManager::getConnection($connectionParams);
    }

    public function findAll(): array
    {
        $queryBuilder = $this->connection->createQueryBuilder();
        $queryBuilder
            ->select('id', 'player_name', 'symbol', 'game_date')
            ->from('game_rounds');

        $results = $queryBuilder->executeQuery()->fetchAllAssociative();

        $games = [];
        foreach ($results as $result) {
            $games[] = new Game(
                $result['id'],
                $result['player_name'],
                $result['symbol'],
                new \DateTime($result['game_date'])
            );
        }
        return $games;
    }

    public function addNewGame(array $data): void
    {
        $playerName = $data['playerName'] ?? '';
        $symbol = $data['symbol'] ?? '';
        
        if (!empty($playerName) && !empty($symbol)) {
            $this->connection->insert('game_rounds', [
                'player_name' => $playerName,
                'symbol' => $symbol,
                'game_date' => date('Y-m-d H:i:s')
            ]);
        }
    }

    public function getGameById(int $id): ?Game
    {
        $queryBuilder = $this->connection->createQueryBuilder();
        $queryBuilder
            ->select('id', 'player_name', 'symbol', 'game_date')
            ->from('game_rounds')
            ->where('id = ?')
            ->setParameter(0, $id);

        $result = $queryBuilder->executeQuery()->fetchAssociative();

        if (!$result) {
            return null;
        }

        return new Game(
            $result['id'],
            $result['player_name'],
            $result['symbol'],
            new \DateTime($result['game_date'])
        );
    }

    public function deleteGame(int $id): void
    {
        $this->connection->delete('game_rounds', ['id' => $id]);
    }


} 