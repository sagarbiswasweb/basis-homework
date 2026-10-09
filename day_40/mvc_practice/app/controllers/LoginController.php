<?php
    namespace App\controllers;

    class LoginController{
        var $login = "views/login.php";

        public function index(){
            return $this -> login;
        }
    }
?>