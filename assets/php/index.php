<?php
$name = $_POST["name"];
$email = $_POST["email"];
$tel = $_POST["tel"];
$message = $_POST["message"];
 
$EmailTo = "izignamx@gmail.com";
$Subject = "Nuevo Mensaje de Hispano WEB";
 
// prepare email body text
$Body .= "Name: ";
$Body .= $name;
$Body .= "\n";
 
$Body .= "Email: ";
$Body .= $email;
$Body .= "\n";

$Body .= "Telephone: ";
$Body .= $tel;
$Body .= "\n";
 
$Body .= "Message: ";
$Body .= $message;
$Body .= "\n";

$headers = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-Transfer-Encoding: 8bit' . "\r\n";
$headers .= 'Content-Type: text/plain; charset=UTF-8' . "\r\n";
 
// send email
$success = mail($EmailTo, $Subject, $Body, "From:".$email, $headers);
 
// redirect to success page
if ($success){
   echo "success";
}else{
    echo "invalid";
}
 
?>