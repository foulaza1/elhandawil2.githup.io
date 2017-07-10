<?php


$email = $_POST['eamil'];
$message = $_POST['message'];

$emal_message = "
Email: ".$email."
Message: ".$message."

";

mail( "mail@gmail.com" , "New inquiry" , $email_message );
header("Location: email_success.php");

?>