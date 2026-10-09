<?php
    $person = [
        [
            "name"          => "Rahim Uddin",
            "age"           => 30,
            "profession"    => "Web Developer",
            "address"       => [
                "village"   => "iswardi",
                "thana"     => "khoksa",
                "jila"      => "kushtia"
            ]
        ],
        [
            "name"          => "Karim uddin",
            "age"           => 25,
            "profession"    => "App Developer",
            "address"       => [
                "village"   => "dashkahania",
                "thana"     => "ekterpur",
                "jila"      => "kushtia"
            ]
        ],              
        [
            "name"          => "Karim uddin",
            "age"           => 25,
            "profession"    => "App Developer",
            "address"       => [
                "village"   => "jhitka",
                "thana"     => "harirampur",
                "jila"      => "manikganj"
            ]
        ]
    ];

    echo "<pre>";

    $keys = array_keys($person);
    $limit =count($person);
    // print_r($keys);

    // $values = array_values($person);
    // print_r($values);

    for($x = 0; $x < $limit; $x++){
        // echo $person[$keys[$x]] . "<br>";
        $keys1 = array_keys($person[$keys[$x]]);
        $limit1 =count($person[$keys[$x]]);
        for($y = 0; $y < $limit1; $y++){
            echo "<pre>";
            print_r($person[$keys[$x]][$keys1[$y]])  . "<br>";
            // $keys2 = array_keys($person[$keys[$x]][$keys1[$y]]);
            // $limit2 =count($person[$keys[$x]][$keys1[$y]]);
            // for($z = 0; $z < $limit2; $z++){
            //     echo $person[$keys[$x]][$keys1[$y]][$keys2[$z]] . "<br>";
            // }
        }
    }
?>