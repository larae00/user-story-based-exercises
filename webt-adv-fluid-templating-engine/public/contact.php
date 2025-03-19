<?php
require_once __DIR__ . '/../vendor/autoload.php';

$view = new \TYPO3Fluid\Fluid\View\TemplateView();

$paths = $view->getRenderingContext()->getTemplatePaths();
$paths->setTemplateRootPaths(['../private/templates']);
$paths->setLayoutRootPaths(['../private/layouts']);
$paths->setPartialRootPaths(['../private/partials']);

$data = [
    'title' => 'Kontakt - Las Vegas Hotels',
    'headline' => 'Kontaktieren Sie uns',
    'contactInfo' => [
        'phone' => '+1 123 456 789',
        'email' => 'info@lasvegas-hotels.com',
        'address' => 'Las Vegas Strip, NV 89109, USA',
        'hours' => 'Montag - Sonntag: 24/7'
    ]
];

$view->assignMultiple($data);
echo $view->render('Contact'); 