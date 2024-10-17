<?php
    class OST {
        public $id;
        public $name;
        public $gameName;
        public $releaseYear;
        public $trackList = [];

        //Constructor 
        public function __construct($id, $name, $gameName, $releaseYear, $trackList = []) {
            $this->id = $id;
            $this->name = $name;
            $this->gameName = $gameName;
            $this->releaseYear = $releaseYear;
            $this->trackList = $trackList;
        }

        
        public function addSong(Song $song) {
            $this->trackList[] = $song;    //Song wird einfach am Ende zum Array dazugefügt
        }

    }
?>
