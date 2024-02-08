<?php

class Router{
    private $pages = [];

    public function addPages($url, $path) : void
    {
        $this->pages[$url] = $path;
    }

    public function route($url) : void
    {
        $path = $this->pages[$url];
        $file_dir = "pages/" . $path;

        if ($path == ''){
            require "404.php";
            exit();
        }

        if (file_exists($file_dir)){
            require $file_dir;
        } else {
            require "404.php";
            exit();
        }
    }
}