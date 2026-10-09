<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Z-Shop | <?php echo $_GET["page"]; ?></title>
    <!-- bootstrap css min  -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- custom css  -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

    <!-- ========================== HEADER START======================= -->
    <header>
    <nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
        <div class="container">
            <a class="navbar-brand" href="?page=home">Z-Shop</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link <?php if("home" == ($_GET["page"])){echo "active";} ?>" href="?page=home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php if("products" == ($_GET["page"])){echo "active";} ?>" href="?page=products">All products</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle 
                        <?php
                                if("categories" == ($_GET["page"])){
                                    echo "active";
                                }elseif("cat-1" == ($_GET["page"])){
                                    echo "active";
                                }elseif("cat-2" == ($_GET["page"])){
                                    echo "active";
                                }elseif("cat-3" == ($_GET["page"])){
                                    echo "active";
                                }elseif("cat-4" == ($_GET["page"])){
                                    echo "active";
                                }elseif("cat-5" == ($_GET["page"])){
                                    echo "active";
                                }
                            ?>
                        " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <!-- for dynamically change the dropdown menu title  -->
                            <?php
                                if("categories" == ($_GET["page"])){
                                    echo "All Category";
                                }elseif("cat-1" == ($_GET["page"])){
                                    echo "Category-1";
                                }elseif("cat-2" == ($_GET["page"])){
                                    echo "Category-2";
                                }elseif("cat-3" == ($_GET["page"])){
                                    echo "Category-3";
                                }elseif("cat-4" == ($_GET["page"])){
                                    echo "Category-4";
                                }elseif("cat-5" == ($_GET["page"])){
                                    echo "Category-5";
                                }else{
                                    echo "Categories";
                                }
                            ?>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="?page=categories">All Category</a></li>
                            <li><a class="dropdown-item" href="?page=cat-1">Category-1</a></li>
                            <li><a class="dropdown-item" href="?page=cat-2">Category-2</a></li>
                            <!-- <li><hr class="dropdown-divider"></li> -->
                            <li><a class="dropdown-item" href="?page=cat-3">Category-3</a></li>
                            <li><a class="dropdown-item" href="?page=cat-4">Category-4</a></li>
                            <li><a class="dropdown-item" href="?page=cat-5">Category-5</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php if("about" == ($_GET["page"])){echo "active";} ?>" href="?page=about">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php if("contact-us" == ($_GET["page"])){echo "active";} ?>" href="?page=contact-us">Contact Us</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
                <a href="?page=login" class="ms-2 btn btn-primary">Login</a>
            </div>
        </div>
    </nav>
    </header>
    <!-- ========================== HEADER END======================= -->



