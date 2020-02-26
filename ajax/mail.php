<?php
$email = $_POST['email'];
$name = $_POST['name'];
$phone = $_POST['phone'];
$mass = $_POST['mass'];



$subject = "=?utf-8?B?".base64_encode("сообщение с сайта")."?=";
$headers = "from: $email \r\nreply-to: $email\r\nContent-type: text/html; charset=utf8\r\n";

$success = mail("5679101124zu@gmail.com", $subject, $mass, $headers, $phone ,$name);
echo $success;
?>