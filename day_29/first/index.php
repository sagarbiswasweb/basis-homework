<?php
    require_once "app/classes/AddClass.php";
    require_once "app/classes/SubClass.php";
    require_once "app/classes/MulClass.php";
    require_once "app/classes/DivClass.php";

    $objAdd = new AddClass();
    $objAdd->add(5, 10);

    $objSub = new SubClass();
    $objSub->sub(10, 6);

    $objMul = new MulClass();
    $objMul->mul(5, 5);

    $objDiv = new DivClass();
    $objDiv->div(100, 60);
?>