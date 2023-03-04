<!-- send a POST request with POSTMAN to 
http://localhost/weekend-trip-php/prime.php

with the following parametrs:
age: some age -->


<?php
$age= $_POST["age"];

function checkPrime($n)
{
 for($x=2; $x<$n; $x++)
   {
      if($n %$x ==0)
	      {
		   return 1;
		  }
    }
    return 0;
   }
checkPrime($age);
if(checkPrime($age)){
$prime="Not A Prime";
}
else{
    $prime="A Prime";
}
echo ($prime);
?>