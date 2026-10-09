<?php
    class CalculationClass{
        function add($num1, $opr, $num2){
            if($opr === "+"){
                $res = $num1 + $num2;
                echo $num1 . $opr . $num2 . " = " . $res . "<br>";
            }else{
                echo "please put addition (+) sign <br>";
            }
        }
        function sub($num1, $opr, $num2){
            if($opr === "-"){
                $res = $num1 - $num2;
                echo $num1 . $opr . $num2 . " = " . $res . "<br>";
            }else{
                echo "please put subtraction (-) sign <br>";
            }
        }
        function mul($num1, $opr, $num2){
            if($opr === "*"){
                $res = $num1 * $num2;
                echo $num1 . $opr . $num2 . " = " . $res . "<br>";
            }else{
                echo "please put multiplication (*) sign <br>";
            }
        }
        function div($num1, $opr, $num2){
            if($opr === "/"){
                $res = $num1 / $num2;
                echo $num1 . $opr . " = " . $res . "<br>";
            }else{
                echo "please put division (/) sign <br>";
            }
        }
    }
?>