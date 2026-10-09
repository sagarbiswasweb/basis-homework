<?php
    require_once "vendor/autoload.php";
    use App\controllers\HomeController;
    use App\controllers\AboutController;
    use App\controllers\ContactController;
    use App\controllers\LoginController;

    if(isset($_GET["page"])){
        if("login" != ($_GET["page"])){
            include "views/includes/header.php";
        }

        if("home" == ($_GET["page"])){
            $homeC = new HomeController();
            $itemArray = $homeC -> getData();
            // print_r($itemArray);
            include $homeC -> index();
        }elseif("about" == ($_GET["page"])){
            $aboutC = new AboutController();
            include $aboutC -> index();
        }elseif("contact" == ($_GET["page"])){
            $contactC = new ContactController();
            include $contactC -> index();
        }elseif("login" == ($_GET["page"])){
            $loginC = new LoginController();
            include $loginC -> index();
        }

        if("login" != ($_GET["page"])){
            include "views/includes/footer.php";
        }
    }else{
        header("location: routes.php?page=home");
    }
?>