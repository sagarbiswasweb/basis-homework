<?php

    if(isset($_GET)){
        if("sagar" == $_GET["name"]){
            // header("location: get-practice.php");
            include "get-practice.php";
        }else{
            // header("location: not-coding.php");
            include "not-coding.php";
        }
    }
?>