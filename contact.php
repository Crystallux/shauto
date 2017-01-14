<?php
if(!isset($_POST['submit']))
{
	//This page should not be accessed directly. Need to submit the form.
	echo "error; you need to submit the form!";
}
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$message = $_POST['message'];

//Validate first
if(empty($name)||empty($visitor_email)) 
{
    echo 'Name and email are mandatory!';
    exit;
}

if(IsInjected($visitor_email))
{
    echo 'Bad email value!';
    exit;
}

$email_from = '$mack.comley@gmail.com';//<== update the email address
$email_subject = 'New Form submission';
$email_body = 'You have received a new message from $name. Here is the message: $message'.
    
$to = 'mack.comley@gmail.com';//<== update the email address
$headers = 'From: $email_from';
$headers .= 'Reply-To: $visitor_email';
//Send the email!
mail('mack.comley@gmail.com',$email_subject,$email_body,$headers);
//done. redirect to thank-you page.
