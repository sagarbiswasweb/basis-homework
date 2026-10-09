<?php
    require_once "app/classes/Calculation.php";

    use App\classes\Calculation;

    $get_calculation = new Calculation();

    $get_calculation->addition(50, 25);
    $get_calculation->subtraction(50, 25);
    $get_calculation->multiplication(50, 25);
    $get_calculation->division(50, 25);
    echo "<hr>";
    $get_calculation->addition(20, 36);
    $get_calculation->subtraction(20, 36);
    $get_calculation->multiplication(20, 36);
    $get_calculation->division(20, 36);
?>