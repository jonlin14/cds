<?php

    class CD {
        private $album_title;

        function __construct($title) {
            $this->album_title = $title;
        }

        function setAlbumTitle($title) {
            $this->album_title = $title;
        }

        function getAlbum() {
            return $this->$album_title;
        }



    }

    ?>
