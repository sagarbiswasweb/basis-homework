<?php
    namespace App\classes;

    class Home{
        function index(){
            return header("location: action.php?page=home");
        }
    }
?>