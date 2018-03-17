<?php

    interface Downloadable {
        public function checkIsDownloadable();
        public function download();
    }

    class Video implements Downloadable {

        public $isFreeVideo;
        public $text;

        function __construct()
        {
            $this->isFreeVideo = false;
            $this->text = "You cannot download this video.";
        }

        public function checkIsDownloadable()
        {
            // TODO: Implement checkIsDownloadable() method.
            return ($this->isFreeVideo);
        }

        public function download()
        {
            // TODO: Implement download() method.
            if($this->checkIsDownloadable()){
                $this->text = "You can download this video.";
            }
            echo $this->text;
        }

    }

    class Subtitle implements Downloadable {

        public $text = "You can download this subtitle.";

        public function checkIsDownloadable()
        {
            // TODO: Implement checkIsDownloadable() method.
            return true;
        }

        public function download()
        {
            // TODO: Implement download() method.
            echo $this->text;
        }
    }

    $video = new Video();
    $video->download();
    echo "<br/>";
    $video->isFreeVideo = true;
    $video->download();

    echo "<br/>";
    echo "<br/>";

    $subtitle = new Subtitle();
    $subtitle->download();

?>