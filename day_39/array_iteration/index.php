<?php
    $array = [
        [
            "f_name" => "sagar",
            "l_name" => "biswas",
            "dob" => "15 aug 1993",
            "mobile" => "01306472108",
            "address" => [
                "present" => "dhaka",
                "permanent" => "kushtia"
            ],
            "blood_group" => "A+"

        ],
        [
            "f_name" => "saikat",
            "l_name" => "shikder",
            "dob" => "25 jun 1995",
            "mobile" => "01325742563",
            "address" => [
                "present" => "khulna",
                "permanent" => "kushtia"
            ],
            "blood_group" => "D+"

        ],
        [
            "f_name" => "sajib",
            "l_name" => "majumder",
            "dob" => "05 sept 1994",
            "mobile" => "23157569853",
            "address" => [
                "present" => "gajipur",
                "permanent" => "kushtia"
            ],
            "blood_group" => "V+"

        ]
    ];

    foreach($array as $arrayValue){
        echo "<pre>";
        // print_r($arrayValue);
        echo $arrayValue["address"]["permanent"];
    }
?>