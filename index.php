<!-- send a POST request with POSTMAN to 
http://localhost/weekend-trip-php/index.php

with the following parametrs:
password: some password,
email: some email, -->

<?php

$email=$_POST["email"];
$password=$_POST["password"];

if(strlen($email)>0){
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $email_result="email valid";
        }
    else{
        $email_result="email not valid";
    }
}
else{
    $email_result="email can not be less than 8 characters";
}

if(strlen($password)>0){
    $number = preg_match('@[0-9]@', $password);
    $uppercase = preg_match('@[A-Z]@', $password);
    $lowercase = preg_match('@[a-z]@', $password);
    $specialChars = preg_match('@[^\w]@', $password);
    if(strlen($password) < 8 || !$number || !$uppercase || !$lowercase || !$specialChars) {
        $pass_result= "password is not valid";
    }
    else{
        $pass_result="password is valid";
    }
}
else{
    $pass_result="password can not be empty";
}
$array=[
    "mail_result"=>$email_result,
    "password_result"=>$pass_result,
];

echo json_encode($array);

?>