<?php

    namespace App\controllers;

    class AboutController{

        public $page = "views/about.php";

        public function index(){
            return $this -> page;
        }

    }
?>