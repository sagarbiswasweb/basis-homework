<?php
    // linking class files  
    require_once "app/classes/Calculations.php";
    require_once "app/classes/Addition.php";
    require_once "app/classes/Subtraction.php";
    require_once "app/classes/Multiplication.php";
    require_once "app/classes/Division.php";

    // creating objects
    $calc = new Calculations();
    $add = new Addition();
    $sub = new Subtraction();
    $mul = new Multiplication();
    $div = new Division();

    $add->add(4, 5);
    $sub->sub(10, 2);
    $mul->mul(5, 5);
    $div->div(6,3);


    
    // $calc->add(10, 20);
    // $calc->sub(10, 20);
    // $calc->mul(10, 20);
    // $calc->div(10, 20);
?>