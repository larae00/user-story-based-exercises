<?php
require_once __DIR__ . '/../vendor/autoload.php';

$loader = new \Twig\Loader\FilesystemLoader('../src');
$twig = new \Twig\Environment($loader);

echo $twig->render('index.html.twig', [
    'title' => 'Meine Webseite',
    'headline' => 'Willkommen auf meiner Seite',
    'content' => 'Dies ist der Hauptinhalt der Seite.',
    'date' => '2025',
    'ich' => 'Lara Ehart',
    'navigation' => [
        ['url' => './', 'text' => 'Home'],
        ['url' => './about.php', 'text' => 'Über mich'],
        ['url' => './contact.php', 'text' => 'Kontakt']
    ],
    'entities' => [
        ['name' => 'BG und BRG Stockerau', 'jahr' => '2017-2021'],
        ['name' => 'HTL Rennweg', 'jahr' => '2021-jetzt'],
    ]
]);
?>