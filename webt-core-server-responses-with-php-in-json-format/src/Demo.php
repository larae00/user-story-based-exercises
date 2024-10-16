<?php
require 'OST.php';
require 'Song.php';
require 'Seeder.php';
class Demo {
    public static function run() {
        
        $OSTs = Seeder::seed();

        $OSTArrays = [];
        foreach ($OSTs as $OST) {
            $OSTArrays[] = $OST->toArray();
        }

        header('Content-Type: application/json');
        echo json_encode($OSTArrays);
    }
}

Demo::run();
?>