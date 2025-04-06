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
} 