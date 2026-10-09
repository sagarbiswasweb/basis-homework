<?php
    
    // header included
    include "views/includes/header.php";

    if(isset($_GET)){
        if("home" == ($_GET["page"])){
            include "views/home.php";
        }
        elseif("about" == ($_GET["page"])){
            include "views/about.php";
        }
        elseif("contact-us" == ($_GET["page"])){
            include "views/contact-us.php";
        }
        elseif("login" == ($_GET["page"])){
            include "views/login.php";
        }
        elseif("registration" == ($_GET["page"])){
            include "views/registration.php";
        }
        elseif("products" == ($_GET["page"])){
            include "views/products.php";
        }
        elseif("categories" == ($_GET["page"])){
            include "views/categories.php";
        }
        //for categories
        elseif("cat-1" == ($_GET["page"])){
            include "views/product-categories/cat-1.php";
        }
        elseif("cat-2" == ($_GET["page"])){
            include "views/product-categories/cat-2.php";
        }
        elseif("cat-3" == ($_GET["page"])){
            include "views/product-categories/cat-3.php";
        }
        elseif("cat-4" == ($_GET["page"])){
            include "views/product-categories/cat-4.php";
        }
        elseif("cat-5" == ($_GET["page"])){
            include "views/product-categories/cat-5.php";
        }
        //product details
        elseif("product-details" == ($_GET["page"])){
            include "views/product-details.php";
        }
        else{
            echo "error 404";
        }
    }

    // foter included
    include "views/includes/footer.php";
?>