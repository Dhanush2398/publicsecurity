<?php
//get data from form  

$name = $_POST['name'];
$email= $_POST['email'];
$message= $_POST['message'];
$msg_subject= $_POST['msg_subject'];
$number = $_POST['phone_number'];

$to ="primedetectives@yahoo.com";
$subject = "New contact from $name";
$txt = "Name = ". $name ."\r\nMobileNumber = " . $number .  "\r\nEmail = " . $email .  "\r\nSubject = " . $msg_subject .  "\r\nMessage =" . $message ;
$headers = "From: $name <$email>" . "\r\n" .
"CC:";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>
