<?php

    namespace App\controllers;

    class ProductDetailsController{

        public $page = "views/productDetails.php";

        public function index(){
            return $this -> page;
        }

    }
?>