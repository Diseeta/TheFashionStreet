<?php
session_start();

include("conn.php");

$cname=$_POST["cname"];
$image=$_FILES["file"]["name"];

echo $cname."<br>";
echo $image."<br>";

if( $_FILES['file']['name'] != "" )
{ 
	$name=$_FILES["file"]["name"];
	move_uploaded_file($_FILES['file']['tmp_name'],"../images/".$_FILES['file']['name']);

	$query = mysql_query("INSERT INTO  category values (NULL, '$cname',  '$image')");
	
	header("location:update_cat.php");
	
}
?>