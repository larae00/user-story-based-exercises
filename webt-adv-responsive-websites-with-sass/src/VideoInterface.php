<?php
    interface VideoInterface {
        function getName(): string;
        function getSource(): string;
        function getHTMLCode(): string;
        function getVideoSource(): string;
    }
?>