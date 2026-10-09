<?php
    namespace App\controllers;
    use App\models\Item;

    class HomeController{
        public $home = "views/home.php";

        public function index(){
            return $this -> home;
        }

        public function getData(){
            $item = new Item();
            return $item -> items;
        }

    }
?>