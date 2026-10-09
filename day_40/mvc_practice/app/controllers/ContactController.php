<?php
    namespace App\controllers;

    class ContactController{
        var $contact = "views/contact.php";

        public function index(){
            return $this -> contact;
        }
    }
?>