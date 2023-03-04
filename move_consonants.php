<!-- send a POST request with POSTMAN to 
http://localhost/weekend-trip-php/move_consonants.php

with the following parametrs:
string: banana -->


<?php

$string = $_POST["string"];

function moveConsonants($string){
    if(isset($string)){
    $consonants = preg_match("/[bcdfghjklmnpqrstvwxys]*/", $string, $matches);
    $consonants = implode("", $matches);
    $consonants_length = strlen($consonants);
    $remaining_str = substr($string, $consonants_length);
    $final_str = $remaining_str . $consonants . "ay";
    return $final_str;
}}

$final_str=moveConsonants($string);

echo $final_str;
?>