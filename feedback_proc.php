<?php

$EmailFrom = "divukanjariya26@gmail.com";
$EmailTo = "divukanjariya26@gmail.com";
$Subject = "Contact Form from website";
$name = Trim(stripslashes($_POST['name'])); 
$email_id = Trim(stripslashes($_POST['email_id'])); 
$mobile_no = Trim(stripslashes($_POST['mobile_no'])); 
$message = Trim(stripslashes($_POST['message'])); 


// prepare email body text
$Body = "";
$Body .= "name: ";
$Body .= $name;
$Body .= "\n";
$Body .= "email_id: ";
$Body .= $email_id;
$Body .= "\n";
$Body .= "Phone Number: ";
$Body .= $mobile_no;
$Body .= "\n";
$Body .= "message: ";
$Body .= $message;
$Body .= "\n";

// send email 
$success = mail($EmailTo, $Subject, $Body, "From: <$EmailFrom>");

// redirect to success page 
if ($success){
	//echo "done";
}
else{
	echo "not";
}
$name = $_POST['name'];
$email_id = $_POST['email_id'];
$mobile_no = $_POST['mobile_no'];
$message = $_POST['message'];



include("conn.php");

mysql_query("insert into feedback values(NULL,'$name','$email_id', $mobile_no ,'$message') ");

header("Location:index.php");



?>