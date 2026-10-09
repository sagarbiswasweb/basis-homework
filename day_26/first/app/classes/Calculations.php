<?php
    class Calculations{
        public function add($num1, $num2){
            $result = $num1 + $num2;
            echo $num1 . " + " . $num2 . " = " . $result . "<br>";
        }
        public function sub($num1, $num2){
            $result = $num1 - $num2;
            echo $num1 . " - " . $num2 . " = " . $result . "<br>";
        }
        public function mul($num1, $num2){
            $result = $num1 * $num2;
            echo $num1 . " * " . $num2 . " = " . $result . "<br>";
        }
        public function div($num1, $num2){
            $result = $num1 / $num2;
            echo $num1 . " / " . $num2 . " = " . $result . "<br>";
        }
    }
?>