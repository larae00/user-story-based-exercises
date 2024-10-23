<?php
require '../src/OST.php';
require '../src/Song.php';
require '../src/Seeder.php';

header('Content-Type: application/json');   

$OSTs = Seeder::seed();

//Funktion um nur einen OST mit einer spezifischen id zu bekommen
function getOSTByID($id, $OSTList) {
    foreach ($OSTList as $OST) {
        if ($OST->getId() == $id) {
            return $OST;
        }
    }
    return null;
}

if (isset($_GET['id']) && isset($_GET['all']) && $_GET['all'] === 'true') {
    echo json_encode($OSTs);
} else if (isset($_GET['id'])) {
    $id = intval($_GET['id']);      //intval() konvertiert den GET-Parameter in ein int, sodass z.B. wenn man einen String angibt nur 0 zurückkommt und nicht etwas schädliches ausgeführt werden kann.
    if (count($OSTs) < $id){
        echo "zu großer Wert";
    }
    $OST = getOSTByID($id, $OSTs);

    if ($OST) {
        echo json_encode($OST);
    }
} else if (isset($_GET['all']) && $_GET['all'] === 'true') {
    echo json_encode($OSTs);
} else if (isset($_GET['all']) && $_GET['all'] !== 'true') {
    echo "falsche Eingabe";
}

?>