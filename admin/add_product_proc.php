<?php
include("conn.php");
$cat_id=$_POST["cat_id"];
$sub_id=$_POST["sub_id"];	
$pname=$_POST["pname"];
$price=$_POST["price"];
$desc=$_POST["desc"];
$psize=$_POST["psize"];
$qua=$_POST["qua"];
$img1=$_FILES["img1"]["name"];
$img2=$_FILES["img2"]["name"];
$img3=$_FILES["img3"]["name"];

if( $_FILES['img1']['name'] != "" )	
{ 
	if( $_FILES['img2']['name'] != "" )	
	{ 
		if( $_FILES['img3']['name'] != "" )	
		{ 
			$name=$_FILES["img1"]["name"];
			move_uploaded_file($_FILES['img1']['tmp_name'],"../images/".$_FILES['img1']['name']);

			$name=$_FILES["img2"]["name"];
			move_uploaded_file($_FILES['img2']['tmp_name'],"../images/".$_FILES['img2']['name']);

			$name=$_FILES["img3"]["name"];
			move_uploaded_file($_FILES['img3']['tmp_name'],"../images/".$_FILES['img3']['name']);

			$query = mysql_query("INSERT INTO product values (NULL,  $cat_id,  $sub_id,  '$pname',  $price,  '$desc',  '$img1',  '$img2',  '$img3',  '$qua',  '$psize')");

			header("location:update_product.php");
		}
		else
		{
			echo "please select all files";
		}
	}
	else
	{
		echo "please select all files";
	}
}
else
{
	echo "please select all files";
}
?>