<?php
    require_once "vendor/autoload.php";
    use App\controllers\HomeController;
    use App\controllers\AboutController;
    use App\controllers\ContactController;
    use App\controllers\ProductDetailsController;
    

    if(isset($_GET["page"])){

        if("login" != ($_GET["page"])){
            include "views/includes/header.php";
        }
        

        if("home" == ($_GET["page"])){
            // include "views/home.php";
            $homeC = new HomeController();
            $sliderA = $homeC -> getSliderValues();
            $itemA = $homeC -> getItemValues();
            // print_r($itemA);
            include $homeC -> index();
        }
        elseif("about" == ($_GET["page"])){
            // include "views/about.php";
            $aboutC = new AboutController();
            include $aboutC -> index();
        }
        elseif("contact" == ($_GET["page"])){
            // include "views/contact.php";
            $contactC = new ContactController();
            include $contactC -> index();
        }
        elseif("product-details" == ($_GET["page"])){
            $productDetails = new ProductDetailsController();
            include $productDetails -> index();
        }
        elseif("login" == ($_GET["page"])){
            include "views/login.php";
        }
        else{
            echo "<h1>Error 404</h1>";
        }

        include "views/includes/footer.php";
    }
    else{
        header("location: routes.php?page=home");
    }
