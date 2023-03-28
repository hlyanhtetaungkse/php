<?php

    // Array => index number

    // $mylove = array('Theint','Honey','Min');
    // $mylove = ['Theint','Honey','Min'];

    // echo '<pre>';

//    var_dump($mylove);;

// echo count($mylove) . "<br>";

// for ($i = 0; $i < count($mylove); $i++){
//     echo $mylove[$i] . "<br>";
// }

// foreach ($mylove as $hlyan){
//     echo $hlyan . "<br>";
// }

// associated array
$chitsone = [
    'name' => 'Theint Honey Min',
    'age'  => 24,
    'dob'  => "April 24, 1998",
    'details'=> [
        'a','b','c'
    ]
];

// var_dump($chitsone);
// var_dump($chitsone['name']);
// var_dump($chitsone['details']);
// var_dump($chitsone['details'][2]);

$mylove = ['Theint','Honey','Min',
[
    'name' => 'Theint Honey Min',
    'age'  => 24,
    'dob'  => "April 24, 1998",
    'details'=> [
        'a','b','c'
    ]
]
];

echo '<pre>';

// var_dump($mylove[3]['name']);;
var_dump($mylove[3]['details']);;
var_dump($mylove[3]['details'][2]);;








?>