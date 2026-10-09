<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MMS | <?php echo $_GET["page"] ?></title>
    <!-- bootstrap css min  -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- custom css  -->
    <link rel="stylesheet" href=assets/css/style.css">
</head>

<body>
    <!-- =========================NAVBAR START======================= -->
    <header>
        <nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
            <div class="container">
                <a class="navbar-brand" href="?page=home">MMS</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link <?php if("home" == ($_GET["page"])){echo "active";} ?>" href="?page=home">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php if("deposit" == ($_GET["page"])){echo "active";} ?>" href="?page=deposit">Deposit</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php if("profile" == ($_GET["page"])){echo "active";} ?>" href="?page=profile">Profile</a>
                        </li>
                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                    <a class="btn btn-primary ms-2">Login</a>
                </div>
            </div>
        </nav>
    </header>
    <!-- =========================NAVBAR END======================= -->