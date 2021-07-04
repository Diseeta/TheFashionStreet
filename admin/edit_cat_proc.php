<?php

include("conn.php");

$id=$_POST["id"];
$cname=$_POST["cname"];
$image=$_FILES["image"]["name"];

if( $_FILES['image']['name'] != "" )
{
	$query = mysql_query("update category set image='$image', cname='$cname' where cat_id=$id");
	move_uploaded_file($_FILES['image']['tmp_name'],"../images/".$_FILES['image']['name']);
}
else
{
	$query = mysql_query("update category set cname='$cname' where cat_id=$id");
}
	
	header("location:display_cat.php");
?>