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

$gameRepository = new GameRepository($connectionParams);
$templateRenderer = new TemplateRenderer('../templates');

// Wenn POST wird gelöscht
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = (int)($_POST['id'] ?? 0);
    if ($id > 0) {
        $gameRepository->deleteGame($id);
    }
    header('Location: index.php');
    exit;
}

// Wenn GET löschdaten holen
$id = (int)($_GET['id'] ?? 0);
if ($id === 0) {
    header('Location: index.php');
    exit;
}

$game = $gameRepository->getGameById($id);
if ($game === null) {
    header('Location: index.php');
    exit;
}

echo $templateRenderer->render(
    'delete_game.html', 
    array(
        'game' => $game)); 