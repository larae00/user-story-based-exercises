<?php
    interface VideoInterface {
        public function getName(): string;
        public function getSource(): string;
        public function getHTMLCode(): string;
    }
?>