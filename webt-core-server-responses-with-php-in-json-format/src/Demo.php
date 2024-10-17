<?php
require 'OST.php';
require 'Song.php';
require 'Seeder.php';
class Demo {
    public static function run() {
        
        $OSTs = Seeder::seed();

        $OSTArrays = [];
        foreach ($OSTs as $OST) {
            print_r($OST);
        }

    }
}

Demo::run();
?>