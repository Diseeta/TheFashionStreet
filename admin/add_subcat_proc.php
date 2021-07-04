<?php

include("conn.php");
$cat_id=$_POST["cat_id"];
$sub_category_name=$_POST["name"];	
$image=$_FILES["image"]["name"];
$image1=$_FILES["image1"]["name"];
$desc=$_POST["desc"];

//echo $cat_id."<br>";
//echo $name."<br>";
//echo $image."<br>";
//echo $image1."<br>";
//echo $desc."<br>";
		
if( $_FILES['image']['name'] != "" )
{
	$name=$_FILES["image"]["name"];
	move_uploaded_file($_FILES['img1']['tmp_name'],"../images/".$_FILES['image']['name']);

	$name=$_FILES["image1"]["name"];
	move_uploaded_file($_FILES['img2']['tmp_name'],"../images/".$_FILES['image1']['name']);

	$query = mysql_query("INSERT INTO  sub_category values (NULL, $cat_id, '$sub_category_name', '$image', '$image1', '$desc')");
	
	header("location:update_subcat.php");
	}
?>