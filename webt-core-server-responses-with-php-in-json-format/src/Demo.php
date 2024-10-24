<?php
require 'OST.php';
require 'Song.php';
require 'Seeder.php';

header('Content-Type: application/json');   

$OSTs = Seeder::seed();

/*
foreach ($OSTs as $OST) {
    print_r($OST);
}
*/

function getOSTByID($id, $OSTList) {
    foreach ($OSTList as $OST) {
        if ($OST->id == $id) {
            return $OST;
        }
    }
    return null;
}

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);      //intval() konvertiert den GET-Parameter in ein int, sodass z.B. wenn man einen String angibt nur 0 zurückkommt und nicht etwas schädliches ausgeführt werden kann.
    $OST = getOSTByID($id, $OSTs);

    if ($OST) {
        echo json_encode($OST);
    }
}


if (isset($_GET['all']) && $_GET['all'] == true) {
    echo json_encode($OSTs);
}

?>