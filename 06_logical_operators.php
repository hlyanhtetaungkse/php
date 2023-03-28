<?php

// and &&

// if (1==1 and 2==3 and 3==3){
//     echo "right";
// }else{
//     echo "wrong";
// }

// if (1==1 && 2==3 && 3==3){
//     echo "right";
// }else{
//     echo "wrong";
// }

// or ||
// if (1==1 or 2==4 or 3==5){
//     echo "right";
// }else{
//     echo "wrong";
// }

// if (1==1 || 2==4 || 3==5){
//     echo "right";
// }else{
//     echo "wrong";
// }

// not !

$status = false;
if ($status){
    echo "right";
}else{
    echo "wrong";
}

$status = false;
if (!$status){
    echo "right";
}else{
    echo "wrong";
}