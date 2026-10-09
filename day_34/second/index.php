<?php
    $person = [
        "Kuril" => [
            "name"          => "Rahim Uddin",
            "age"           => 30,
            "profession"    => "Web Developer"
        ],
        "Dhanmondi" => [
            "name"          => "Karim uddin",
            "age"           => 25,
            "profession"    => "App Developer"
        ],              
        "Shankar" => [
            "name"          => "Karim uddin",
            "age"           => 25,
            "profession"    => "App Developer"
        ]
    ];

    $keys = array_keys($person);
    // $values = array_values($person);
    for($x = 0; $x < count($keys); $x++){
<<<<<<< HEAD
        echo $keys[$x] . " " . $person[$keys[$x]] . "<br>";
=======
        echo $keys[$x] . "<br>";
>>>>>>> a7d1c8d0cc8fdd6ee6c5bbe97be7914a5f812ea0
    }
?>