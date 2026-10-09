<?php

    require_once "vendor/autoload.php";
    use App\Controllers\HomeController;

    if(isset($_GET["page"])){

        include "views/includes/header.php";

        if("home" == ($_GET["page"])){
            $homeC = new HomeController();
            include $homeC->index();
        }

        include "views/includes/footer.php";
    }
?>