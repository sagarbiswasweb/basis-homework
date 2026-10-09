<?php

    namespace App\controllers;
    use App\models\Slider;
    use App\models\Item;
    
    class HomeController{

        public $page = "views/home.php";

        public function index(){
            return $this -> page;
        }

        public function getSliderValues(){
            $sliderArray = new Slider();
            return $sliderArray -> sliderValues;
        }

        public function getItemValues(){
            $itemArray = new Item();
            return $itemArray -> items;
        }
        
    }
?>  