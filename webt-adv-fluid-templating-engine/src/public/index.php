<?php
require_once __DIR__ . '/../../vendor/autoload.php';

use Lara\WebtAdvFluidTemplatingEngine\Model\Hotel;

$view = new \TYPO3Fluid\Fluid\View\TemplateView();

$paths = $view->getRenderingContext()->getTemplatePaths();
$paths->setTemplateRootPaths(['../private/templates']);
$paths->setLayoutRootPaths(['../private/layouts']);
$paths->setPartialRootPaths(['../private/partials']);

$hotelData = [
    'title' => 'Las Vegas Hotels',
    'headline' => 'Die besten Hotels am Strip',
    'hotels' => [
        new Hotel(
            'Bellagio',
            'Das Bellagio ist bekannt für seine eleganten Brunnen und luxuriöse Atmosphäre.
            Mit 3.950 Zimmern, einem Casino und erstklassigen Restaurants ist es ein Wahrzeichen von Las Vegas.',
            '€299',
            'images/bellagio.jpg'
        ),
        new Hotel(
            'Caesars Palace',
            'Ein klassisches römisch-inspiriertes Hotel mit 3.960 Zimmern.
            Berühmt für sein Forum Shops und das Colosseum Theater.',
            '€259',
            'images/caesars-palace.jpg'
        ),
        new Hotel(
            'The Venetian',
            'Inspiriert von Venedig, bietet dieses Resort Gondelfahrten und italienische Architektur.
            Mit über 7.000 Suiten ist es eines der größten Hotels der Welt.',
            '€279',
            'images/venetian.jpg'
        ),
        new Hotel(
            'MGM Grand',
            'Das größte Hotel in den USA mit über 6.800 Zimmern.
            Bekannt für seine riesige Casino-Fläche, Entertainment-Shows und den berühmten Löwen als Wahrzeichen.',
            '€249',
            'images/mgm-grand.jpg'
        ),
        new Hotel(
            'Luxor Hotel',
            'Ein einzigartiges pyramidenförmiges Hotel mit ägyptischem Thema.
            Der weltbekannte Luxor Sky Beam ist der stärkste Lichtstrahl der Welt und nachts vom Weltall aus sichtbar.
            Mit über 4.400 Zimmern bietet es eine unvergessliche Las Vegas Erfahrung.',
            '€199',
            'images/luxor.jpg'
        )
    ]
];

$view->assignMultiple($hotelData);
echo $view->render('Hotels'); 