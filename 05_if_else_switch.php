<?php

// if, if else , if else if else, switch

$num1 = 3;

// if($num1 ==1){
//     echo "one"."<br>";
// }else if($num1 == 2){
//     echo "two"."<br>";
// }else{
//     echo "error"."<br>";
// }

switch($num1){
    case 1 : 
        echo "this is one"."<br>";
    break;
    case 2 : 
        echo "this is two"."<br>";
    break;
    case 3 : 
        echo "this is three"."<br>";
    break;
    default:
        echo "error"."<br>";
    break;
}

echo "end";

