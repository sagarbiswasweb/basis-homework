<?php

    namespace App\controllers;

    class ContactController{

        public $page = "views/contact.php";

        public function index(){
            return $this -> page;
        }

    }
?>