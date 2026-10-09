<?php
    namespace App\Controllers;

    class HomeController{
        public $page = "home";

        public function index(){
            return "views/{$this->page}.php";
        }
    }
?>