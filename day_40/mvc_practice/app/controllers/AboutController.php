<?php
    namespace App\controllers;

    class AboutController{
        public $about = "views/about.php";

        public function index(){
            return $this -> about;
        }
        
    }
?>