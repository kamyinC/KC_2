<?php
// Check for empty fields
if(empty($_POST['name'])  		||
   empty($_POST['email']) 		||
   empty($_POST['message'])	||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	echo "No arguments Provided!";
	return false;
   }
	
$EmailFrom = "$email";
$EmailTo = "kamyin.cheng@gmail.com";
$subject = "Contact from kamyincheng.com";
$name = Trim(stripslashes($_POST['name'])); 
$email = Trim(stripslashes($_POST['email'])); 
$message = Trim(stripslashes($_POST['message'])); 


// prepare email body text
$body = "";
$body .="You have receive new message from your website:";
$body .="\n";
$body .= "Name: ";
$body .= $name;
$body .= "\n";
$body .= "Email: ";
$body .= $email;
$body .= "\n";
$body .= "Message: ";
$body .= $message;
$body .= "\n";

mail($EmailTo, $subject, $body, $EmailFrom);
return true;			
?>