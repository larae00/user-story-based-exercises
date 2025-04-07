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


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $gameRepository = new GameRepository($connectionParams);
    $gameRepository->addNewGame($_POST);
    header('Location: index.php');
    exit;
}

$templateRenderer = new TemplateRenderer('../templates');
// we render the games with the help of a twig template
echo $templateRenderer->render(
    'new_game.html'
);