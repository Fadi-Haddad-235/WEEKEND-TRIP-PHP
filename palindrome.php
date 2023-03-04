<!-- http://localhost/weekend-trip-php/sort.php?string=madam -->
<?php

$string = $_GET["string"];


$result = "not a palindrome";
function check_palindrome($string) 
{
  if ($string == strrev($string))
      $result = "palindrome";
}
check_palindrome($string);

$object =[
    "string"=>$string,
    "result"=>$result,
];

echo json_encode($object);

?>