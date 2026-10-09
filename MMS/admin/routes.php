<?php

    // header include 
    include "views/includes/header.php";

    if(isset($_GET["page"])){

        if("login" == ($_GET["page"])){
            include "views/login.php";
        }
        
        elseif("home" == ($_GET["page"])){
            include "views/home.php";
        }elseif("members" == ($_GET["page"])){
            include "views/members.php";
        }elseif("workers" == ($_GET["page"])){
            include "views/workers.php";
        }elseif("foods" == ($_GET["page"])){
            include "views/foods.php";
        }elseif("meals" == ($_GET["page"])){
            include "views/meals.php";
        }elseif("accounts" == ($_GET["page"])){
            include "views/accounts.php";
        }elseif("services" == ($_GET["page"])){
            include "views/services.php";
        }elseif("edit-members" == ($_GET["page"])){
            include "views/edit-members.php";
        }

        elseif("add-members" == ($_GET["page"])){
            include "views/add-members.php";
        }elseif("add-workers" == ($_GET["page"])){
            include "views/add-workers.php";
        }elseif("workers-working-days" == ($_GET["page"])){
            include "views/workers-working-days.php";
        }elseif("workers-salary" == ($_GET["page"])){
            include "views/workers-salary.php";
        }

        elseif("deposit-members" == ($_GET["page"])){
            include "views/deposit-members.php";
        }

        

        elseif("edit-members" == ($_GET["page"])){
            include "views/edit-members.php";
        }elseif("edit-workers" == ($_GET["page"])){
            include "views/edit-workers.php";
        }
        
        elseif("foods" == ($_GET["page"])){
            include "views/foods.php";
        }

        else{
            echo "error 404";
        }
    }else{
        echo "error 404";
    }

    // footer include 
    include "views/includes/footer.php";
?>