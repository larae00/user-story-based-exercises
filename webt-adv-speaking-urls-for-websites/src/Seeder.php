<?php
require_once 'OST.php';
require_once 'Song.php';
    class Seeder {
        public static function seed() {
            $OSTs = [];

            // OST 1
            $OST1 = new OST(1, "Valorant Official Soundtrack", "Valorant", 2024, 
            array(
                new Song(1, "Die For You", "Grabbitz", 1, "3:45"),
                new Song(2, "Can’t Slow Me Down", "Neffex", 2, "3:28"),
                new Song(3, "Fire Again", "Ashnikko", 3, "3:00"),
                new Song(4, "Visions", "ARMNHMR ft. Danny Olson, Salty", 4, "4:12")
            ));
  

            $OSTs[] = $OST1;

            // OST 2
            $OST2 = new OST(2, "Fortnite Official Soundtrack", "Fortnite", 2024,
            array(
                new Song(5, "Goosebumps (Fortnite Edition)", "Travis Scott", 1, "3:24"),
                new Song(6, "The Scotts", "Travis Scott & Kid Cudi", 2, "2:45"),
                new Song(7, "Fortnite Chapter 2 Main Theme", "Pinar Toprak", 4, "2:12"),
                new Song(8, "Fortnite OG (Classic) Theme", "Epic Games", 5, "1:58")
            ));

            $OSTs[] = $OST2;

            // OST 3
            $OST3 = new OST(3, "GTA V Official Soundtrack", "GTA V", 2024,
            array(
                new Song(9, "Fade Away", "Logic", 2, "4:50"),
                new Song(10, "I Can’t Wait", "Stevie Nicks", 3, "4:37"),
                new Song(11, "Midnight City", "M83", 4, "4:03"),
                new Song(12, "Sleepwalking", "The Chain Gang of 1974", 5, "3:40")
            ));

            $OSTs[] = $OST3;

            return $OSTs;
        }
    }
?>
