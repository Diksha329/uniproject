<?php
$name=$_POST['name'];
$visitor_email=$_POST['email'];
$subject= $_POST['subject'];
$message =$_POST['message'];

$email_from = 'info@yourwebsite.com';
$email_subject ='New form Submission';

$email_boby= "User Name: $name.\n".
             "User Email: $visitor_email.\n".
             "Subject: $subject.\n".
             "User message: $message.\n";
$to ="dikshash719@gmail.com";

$headers ="From: $email_from \r\n";

$headers ="Reply-to: $visitor_email \r\n";

mail($to,$email_subject,$email_boby,$headers)

header("Location: contact.html")


 ?>            