<?php

namespace Lara\WebtCoreDoctrineDbal;

use Lara\WebtCoreDoctrineDbal\Model\Repository\GameRepository;
use Lara\WebtCoreDoctrineDbal\View\TemplateRenderer;

require_once '../vendor/autoload.php';
$connectionParams = [
    'dbname' => 'usarps_championship',
    'user' => 'root',
    'password' => '',
    'host' => 'localhost',
    'driver' => 'pdo_mysql',
];


// we make use of the Repository here to fetch an array of Game Entities
$gameRepository = new GameRepository($connectionParams);
$templateRenderer = new TemplateRenderer('../templates');
// we render the games with the help of a twig template
echo $templateRenderer->render(
    'index.html',
    array(
        'games' => $gameRepository->findAll()
    )
);