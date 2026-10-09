<?php
    //single line array
    // $arr1 = ["sagar", "shara", "pranto", "toma"];
    // echo $arr1[0] . "<br>" . $arr1[1] . "<br>" . $arr1[2] . "<br>" . $arr1[3] . "<br>";
    // echo "<pre>";
    // print_r($arr1);
    // echo "<br>";

    // $arr2 = [
    //     0 => "sagar",
    //     1 => "shara",
    //     2 => "pranto",
    //     3 => "toma"
    // ];
    // echo $arr2[0] . "<br>" . $arr2[1] . "<br>" . $arr2[2] . "<br>" . $arr2[3] . "<br>";
    // print_r($arr2);
    // echo "<br>";


    //multi dimentional array
    $arr3 = [
        0 => "Dhaka",
        1 => [
            0 => "Khulna",
            1 => [
                0 => "Kushtia",
                1 => "Mirpur",
                2 => [
                    0 => "Khoksa",
                    1 => [
                        0 => [
                            0 => "Iswardi",
                            1 => "Ekterpur",
                            2 => "Khagorbaria",
                            3 => "Char Dashkahaniya",
                            4 => "Puran Para"
                        ],
                        1 => "Islampur",
                        2 => "Manik kaat"
                    ],
                    2 => "Somoshpur"
                ],
                3 => "Kumarkhali"
            ],
            2 => "Jessore",
        ],
        2 => "Barishal",
        3 => "Sylhet",
        4 => "Chittagong",
        5 => "Rajshahi"
    ];
    echo "<pre>";
    // $arrayLength = count($arr3);
    // echo $arrayLength;
    echo "<br>";
    // echo $arr3[1][1][2][1][0][0];
    print_r(array_keys($arr3));
    // print_r(array_values($arr3));
    // echo array_keys($arr3);
            // echo $arr3[$x][$y] . " ";

    // for($x = 0; $x < count($arr3); $x++){
    //     for($y = 0; $y < count($arr3[0][1]); $y++){
    //         for($z = 0; $z < count($arr[1][1]); $z++){
    //             // for($a = 0; $a < $arrayLength; $a++){
    //             //     for($b = 0; $b < $arrayLength; $b++){
    //                     // for($c = 0; $c < $arrayLength; $c++){
    //                         echo $arr3[$x][$y][$z][$a][$b] . " ";
    //                     // }
    //             //     }
    //             // }
    //         }
    //     }
    // }

    // echo "from for loop";
    // for($x = 0; $x <= $arrayLength; $x++){
    //     echo $arr3[$x];
    //     echo "<br>";
    // }


    
?>