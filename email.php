<?php

$EmailFrom = "kirangroup2017@gmail.com";
$EmailTo = "kirangroup2017@gmail.com";
$Subject = "Contact Form from website";
$FName = Trim(stripslashes($_POST['Name'])); 
$Email = Trim(stripslashes($_POST['Email'])); 
$Number = Trim(stripslashes($_POST['Number'])); 
$Message = Trim(stripslashes($_POST['Message'])); 


// prepare email body text
$Body = "";
$Body .= "Name: ";
$Body .= $FName;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $Email;
$Body .= "\n";
$Body .= "Phone Number: ";
$Body .= $Number;
$Body .= "\n";
$Body .= "Message: ";
$Body .= $Message;
$Body .= "\n";

// send email 
$success = mail($EmailTo, $Subject, $Body, "From: <$EmailFrom>");

// redirect to success page 
if ($success){
	header('Location: http://kirangroupn.in/contact.html');
}
else{
	header('Location: http://kirangroupn.in/contact.html');
}
?>