<?php
$to_email = $_POST['email'];
// $subject = "Helperland(Change Password)";
$body = $_SESSION['mail'];
$headers = "From:mihirbhuva743@gmail.com";
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
// $headers = "mihirbhuva1717@gmail.com";

if (mail($to_email, $subject, $body, $headers)) {
   $_SESSION['sendmailsp']="success";
} else {
    $_SESSION['sendmail']= "Emailaddress Not Exist";
}