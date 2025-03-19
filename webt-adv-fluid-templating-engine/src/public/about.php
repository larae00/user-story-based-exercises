<?php
require_once __DIR__ . '/../../vendor/autoload.php';

$view = new \TYPO3Fluid\Fluid\View\TemplateView();

$paths = $view->getRenderingContext()->getTemplatePaths();
$paths->setTemplateRootPaths(['../private/templates']);
$paths->setLayoutRootPaths(['../private/layouts']);
$paths->setPartialRootPaths(['../private/partials']);

$data = [
    'title' => 'Über uns - Las Vegas Hotels',
    'headline' => 'Über unser Unternehmen',
    'description' => 'Wir sind Ihr vertrauenswürdiger Partner für Luxushotels in Las Vegas.',
    'contact' => [
        'phone' => '+1 123 456 789',
        'email' => 'info@lasvegas-hotels.com',
        'address' => 'Las Vegas Strip, NV 89109, USA'
    ]
];

$view->assignMultiple($data);
echo $view->render('About'); 