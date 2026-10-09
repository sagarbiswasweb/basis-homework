<?php
    require_once "app/classes/CalculationClass.php";

    $objCalculation = new CalculationClass();

    $objCalculation->add(5, "+" ,5);
    $objCalculation->sub(5, "-", 10);
    $objCalculation->mul(5, "*", 10);
    $objCalculation->div(5, "/", 10);
?>