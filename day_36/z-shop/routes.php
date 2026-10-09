<h1>this is route page</h1>

<?php
    
    $uriVal = isset($_GET["name"]);

    if($uriVal){
        if($uriVal == "sagar"){
            echo "hi mr sagar";
        }else{
            echo "you are not sagar";
        }
    }else{
        echo "no uri value found";
    }