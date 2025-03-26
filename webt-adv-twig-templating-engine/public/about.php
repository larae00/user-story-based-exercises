<?php
require_once __DIR__ . '/../vendor/autoload.php';

$loader = new \Twig\Loader\FilesystemLoader('../src');
$twig = new \Twig\Environment($loader);

echo $twig->render('about.html.twig', [
    'headline1'=> 'Über mich',
    'info'=>'Mein name ist Lara Ehart und ich wurde am 22.12.2006 in Wien geboren.',
    'wohnen'=>'Ich wohne mit meiner Familie in einem Haus in Hausleiten.',
    'Ort'=>'3464 Hausleiten',
    'navigation' => [
        ['url' => './', 'text' => 'Home'],
        ['url' => './about.php', 'text' => 'Über mich'],
        ['url' => './contact.php', 'text' => 'Kontakt']
    ],
    'date' => '2025',
    'ich' => 'Lara Ehart'
]);
?>