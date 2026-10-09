<?php
    namespace App\classes;

    class Calculation{
        public function addition($num_1, $num_2){
            $result = $num_1 + $num_2;
            echo $num_1 . " + " . $num_2 . " = " . $result . "<br>";
        }
        public function subtraction($num_1, $num_2){
            $result = $num_1 - $num_2;
            echo $num_1 . " - " . $num_2 . " = " . $result . "<br>";
        }
        public function multiplication($num_1, $num_2){
            $result =  $num_1 * $num_2;
            echo $num_1 . " * " . $num_2 . " = " . $result . "<br>";
        }
        public function division($num_1, $num_2){
            $result = $num_1 / $num_2;
            echo $num_1 . " / " . $num_2 . " = " . $result . "<br>";
        }
    }
?>