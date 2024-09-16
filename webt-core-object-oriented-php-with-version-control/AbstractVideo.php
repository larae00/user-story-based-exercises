<?php
    require_once 'VideoInterface.php';

    abstract class AbstractVideo implements VideoInterface {
        protected $name;
        protected $source;
        protected $VideoSource;
    
        public function __construct($name, $source) {
            $this->name = $name;
            $this->source = $source;
        }

        public function getName(): string {
            return $this->name;
        }

        public function getSource(): string {
            return $this->source;
        }

        abstract public function getVideoSource(): string;

        abstract public function getHTMLCode(): string; //weil für Vimeo und Youtube nicht gleich abstract
    }
?>