<?php
    class Song {
        public $id;
        public $name;
        public $artist;
        public $trackNumber;
        public $duration;

        //Constructor 
        public function __construct($id, $name, $artist, $trackNumber, $duration) {
            $this->id = $id;
            $this->name = $name;
            $this->artist = $artist;
            $this->trackNumber = $trackNumber;
            $this->duration = $duration;
        }
    }
?>
