<?php
//get data from form
$name = $_POST['name'];
$email= $_POST['email'];
$email= $_POST['subject'];
$message= $_POST['message'];
$to = "ahmadraza22586@gmail.com";
$subject = "Mail From Ahmad Resume";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n  subject = " . $subject . "\r\n Message =" . $message;
$headers = "From: noreply@AhmadResume.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
    //redirect
header("Location:thankyou.html");
}
?>