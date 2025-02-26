<?php
require_once __DIR__ . '/../vendor/autoload.php';

$loader = new \Twig\Loader\FilesystemLoader('../src');
$twig = new \Twig\Environment($loader);
$url = 'webt-adv-twig-templating-engine/public';

echo $twig->render('contact.html.twig', [
    'headline1'=> 'Angaben zur Person',
    'name'=>'Lara Ehart',
    'wohnen'=>'Dr.-Beiglböck-Straße 11',
    'ort'=>'3464 Hausleiten',
    'headline2'=> 'Kontakt',
    'tel'=> 'Telefon: +43 660 3444106',
    'mail'=> 'E-Mail: lara@ehart.eu',
    'navigation' => [
        ['url' => './', 'text' => 'Home'],
        ['url' => './about.php', 'text' => 'Über mich'],
        ['url' => './contact.php', 'text' => 'Kontakt']
    ],
    'date' => '2025',
    'ich' => 'Lara Ehart'
]);
?>