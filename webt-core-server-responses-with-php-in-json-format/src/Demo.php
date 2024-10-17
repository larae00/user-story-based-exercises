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
    $id = $_GET['id'];
    $OST = getOSTByID($id, $OSTs);

    if ($OST) {
        echo json_encode($OST);
    }
}


?>