<?php

include("conn.php");

$id=$_POST["id"];
$image=$_FILES["image"]["name"];

if( $_FILES['image']['name'] != "" )
{
	$query = mysql_query("update slider set image='$image' where id=$id");
	move_uploaded_file($_FILES['image']['tmp_name'],"../images/slider/".$_FILES['image']['name']);
}
	
	header("location:update_slider.php");
?>