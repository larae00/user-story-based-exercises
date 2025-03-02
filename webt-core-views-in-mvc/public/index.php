<?php
// Template Engine
function renderTemplate($templatePath, $variables) {
    $template = fread(fopen($templatePath, 'r'), filesize($templatePath));
    
    foreach ($variables as $key => $value) {
        $template = str_replace('{{' . $key . '}}', $value, $template);
    }
    
    return $template;
}

// Hotel Daten
$hotelData = [
    'TITLE' => 'Las Vegas Hotels',
    'HEADLINE' => 'Die besten Hotels am Strip',
    'HOTEL1_NAME' => 'Bellagio',
    'HOTEL1_DESCRIPTION' => <<<TEXT
        Das Bellagio ist bekannt für seine eleganten Brunnen und luxuriöse Atmosphäre.
        Mit 3.950 Zimmern, einem Casino und erstklassigen Restaurants ist es ein Wahrzeichen von Las Vegas.
    TEXT,
    'HOTEL1_PRICE' => '€299',
    
    'HOTEL2_NAME' => 'Caesars Palace',
    'HOTEL2_DESCRIPTION' => <<<TEXT
        Ein klassisches römisch-inspiriertes Hotel mit 3.960 Zimmern.
        Berühmt für sein Forum Shops und das Colosseum Theater.
    TEXT,
    'HOTEL2_PRICE' => '€259',
    
    'HOTEL3_NAME' => 'The Venetian',
    'HOTEL3_DESCRIPTION' => <<<TEXT
        Inspiriert von Venedig, bietet dieses Resort Gondelfahrten und italienische Architektur.
        Mit über 7.000 Suiten ist es eines der größten Hotels der Welt.
    TEXT,
    'HOTEL3_PRICE' => '€279'
];

// Template rendern
echo renderTemplate('../src/index.html', $hotelData);
?>
