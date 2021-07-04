<?php

$email = $_POST['email'];
$question=$_POST['question'];
$answer=$_POST['answer'];

echo $email."<br>";
echo $question."<br>";
echo $answer."<br>";

include("conn.php");

$result = mysql_query("select * from register where email_id='$email' AND question='$question' AND answer='$answer' ");
$count = mysql_num_rows($result);

if($count > 0)
{
	$row = mysql_fetch_row($result);
	header("Location:new_pwd.php?email=$email");
	
}	
else
	header("Location:login.php");






?>