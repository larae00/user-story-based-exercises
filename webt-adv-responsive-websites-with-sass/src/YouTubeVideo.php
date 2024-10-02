<?php
    require_once 'AbstractVideo.php';

    class YouTubeVideo extends AbstractVideo {
        public function getHTMLCode(): String {
            return '<iframe width="560" height="315" src="https://www.youtube.com/embed/' . $this->source . '" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>';
        }

        public function getVideoSource(): string {
            return 'Youtube';
        }
    }    
?>