<?php
    require_once 'AbstractVideo.php';

    class VimeoVideo extends AbstractVideo {
        public function getHTMLCode(): String {
            return '<iframe width="100%" height="600" src="https://player.vimeo.com/video/' . $this->source . '" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>';
        }

        public function getVideoSource(): string {
            return 'Vimeo';
        }
    }
?>