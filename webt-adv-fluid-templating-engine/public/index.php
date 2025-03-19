<?php
require_once __DIR__ . '/../vendor/autoload.php';

$view = new \TYPO3Fluid\Fluid\View\TemplateView();

$paths = $view->getRenderingContext()->getTemplatePaths();
$paths->setTemplateRootPaths(['../private/templates']);
$paths->setLayoutRootPaths(['../private/layouts']);
$paths->setPartialRootPaths(['../private/partials']);

$hotelData = [
    'title' => 'Las Vegas Hotels',
    'headline' => 'Die besten Hotels am Strip',
    'hotels' => [
        [
            'name' => 'Bellagio',
            'description' => 'Das Bellagio ist bekannt für seine eleganten Brunnen und luxuriöse Atmosphäre.<br>
            Mit 3.950 Zimmern, einem Casino und erstklassigen Restaurants ist es ein Wahrzeichen von Las Vegas.',
            'price' => '€299',
            'image' => 'images/bellagio.jpg'
        ],
        [
            'name' => 'Caesars Palace',
            'description' => 'Ein klassisches römisch-inspiriertes Hotel mit 3.960 Zimmern.<br>
            Berühmt für sein Forum Shops und das Colosseum Theater.',
            'price' => '€259',
            'image' => 'images/caesars-palace.jpg'
        ],
        [
            'name' => 'The Venetian',
            'description' => 'Inspiriert von Venedig, bietet dieses Resort Gondelfahrten und italienische Architektur.<br>
            Mit über 7.000 Suiten ist es eines der größten Hotels der Welt.',
            'price' => '€279',
            'image' => 'images/venetian.jpg'
        ],
        [
            'name' => 'MGM Grand',
            'description' => 'Das größte Hotel in den USA mit über 6.800 Zimmern.<br>
            Bekannt für seine riesige Casino-Fläche, Entertainment-Shows und den berühmten Löwen als Wahrzeichen.',
            'price' => '€249',
            'image' => 'images/mgm-grand.jpg'
        ],
        [
            'name' => 'Luxor Hotel',
            'description' => 'Ein einzigartiges pyramidenförmiges Hotel mit ägyptischem Thema.<br>
            Der weltbekannte Luxor Sky Beam ist der stärkste Lichtstrahl der Welt und nachts vom Weltall aus sichtbar.<br>
            Mit über 4.400 Zimmern bietet es eine unvergessliche Las Vegas Erfahrung.',
            'price' => '€199',
            'image' => 'images/luxor.jpg'
        ]
    ]
];

$view->assignMultiple($hotelData);
echo $view->render('Hotels'); 