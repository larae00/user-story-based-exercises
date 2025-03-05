<?php
function renderTemplate($templatePath, $variables)
{
    $template = fread(fopen($templatePath, 'r'), filesize($templatePath));

    foreach ($variables as $key => $value) {
        if (is_array($value)) {
            $blockPattern = '/{{#FOREACH\s+' . $key . '}}(.*){{#ENDFOREACH}}/s';
            preg_match($blockPattern, $template, $matches);

            if (isset($matches[1])) {
                $hotelblocks = '';
                //erstellt für jeden eintrag im array den Block
                foreach ($value as $hotel) {
                    $block = $matches[1]; //das ist der block nur das: (.*)
                    foreach ($hotel as $hotelKey => $hotelValue) {
                        $block = str_replace('{{' . $hotelKey . '}}', $hotelValue, $block);
                    }
                    $hotelblocks .= $block;
                }
                //ersetzt gesamten block mit den hotel blöcken
                $template = str_replace($matches[0], $hotelblocks, $template);
            }
        } else {
            // für title und headline
            $template = str_replace('{{' . $key . '}}', $value, $template);
        }
    }

    return $template;
}

$hotelData = [
    'TITLE' => 'Las Vegas Hotels',
    'HEADLINE' => 'Die besten Hotels am Strip',
    'hotels' => [
        [
            'name' => 'Bellagio',
            'description' => 
            'Das Bellagio ist bekannt für seine eleganten Brunnen und luxuriöse Atmosphäre.<br>
            Mit 3.950 Zimmern, einem Casino und erstklassigen Restaurants ist es ein Wahrzeichen von Las Vegas.',
            'price' => '€299'
        ],
        [
            'name' => 'Caesars Palace',
            'description' => 
            'Ein klassisches römisch-inspiriertes Hotel mit 3.960 Zimmern.<br>
            Berühmt für sein Forum Shops und das Colosseum Theater.',
            'price' => '€259'
        ],
        [
            'name' => 'The Venetian',
            'description' => 
            'Inspiriert von Venedig, bietet dieses Resort Gondelfahrten und italienische Architektur.<br>
            Mit über 7.000 Suiten ist es eines der größten Hotels der Welt.',
            'price' => '€279'
        ],
        [
            'name' => 'MGM Grand',
            'description' => 
            'Das größte Hotel in den USA mit über 6.800 Zimmern.<br>
            Bekannt für seine riesige Casino-Fläche, Entertainment-Shows und den berühmten Löwen als Wahrzeichen.',
            'price' => '€249'
        ],
        [
            'name' => 'Luxor Hotel',
            'description' => 
            'Ein einzigartiges pyramidenförmiges Hotel mit ägyptischem Thema.<br>
            Der weltbekannte Luxor Sky Beam ist der stärkste Lichtstrahl der Welt und nachts vom Weltall aus sichtbar.<br>
            Mit über 4.400 Zimmern bietet es eine unvergessliche Las Vegas Erfahrung.',
            'price' => '€199'
        ]
    ]
];

// Template rendern
echo renderTemplate('../src/index.html', $hotelData);
?>