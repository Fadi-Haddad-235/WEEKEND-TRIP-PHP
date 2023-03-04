<?php

$str=$_GET["str"];


function extractNumbers($str) {
    $numbers_array = array();
    $str2 = array();
    for ($i = 0; $i < strlen($str); $i++) {
        if (is_numeric($str[$i])) {
            array_push($numbers_array, $str[$i]);
        }
    }
    $numbers_array = array_reverse($numbers_array);
    for ($j = 0; $j < strlen($str); $j++) {
        if (is_numeric($str[$j])) {
            array_push($str2, $numbers_array[0]);
            array_shift($numbers_array);
        } else {
            array_push($str2, $str[$j]);
        }
    }
    return implode("", $str2);
}

$reversed=extractNumbers($str);
echo $reversed;


?>