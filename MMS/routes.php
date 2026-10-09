<?php

    // header include 
    include "views/includes/header.php";

    if(isset($_GET)){
        if("home" == ($_GET["page"])){
            include "views/home.php";
        }elseif("deposit" == ($_GET["page"])){
            include "views/deposit.php";
        }elseif("profile" == ($_GET["page"])){
            include "views/profile.php";
        }elseif("login" == ($_GET["page"])){
            include "views/login.php";
        }
        else{
            echo "error 404";
        }
    }

    // footer include 
    include "views/includes/footer.php";
    
?>