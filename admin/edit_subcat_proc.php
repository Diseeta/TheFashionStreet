<?php

include("conn.php");
$id=$_POST["id"];
$cat_id=$_POST["cat_id"];
$sub_name=$_POST["sub_name"];	
$image=$_FILES["image"]["name"];
$image1=$_FILES["image1"]["name"];
$des=$_POST["des"];

echo $id."<br>";
echo $cat_id."<br>";
echo $sub_name."<br>";
echo $image."<br>";
echo $image1."<br>";
echo $des."<br>";
		
 if( $_FILES['image']['name'] != "" && $_FILES['image1']['name'] != ""  )
{
	$query = mysql_query("UPDATE sub_category SET image='$image', image1='$image1',name='$sub_name' ,des='$des' ,cat_id=$cat_id WHERE id=$id",$con);
	move_uploaded_file($_FILES['image']['tmp_name'],"../images/".$_FILES['image']['name']);
	move_uploaded_file($_FILES['image1']['tmp_name'],"../images/".$_FILES['image1']['name']);
	echo "if";
}
else if($_FILES['image']['name'] != "" )
{
	$query = mysql_query("UPDATE sub_category SET image='$image', name='$sub_name' ,des='$des' ,cat_id=$cat_id WHERE id=$id",$con);
	move_uploaded_file($_FILES['image']['tmp_name'],"../images/".$_FILES['image']['name']);
}
else if($_FILES['image1']['name'] != "" )
{
	$query = mysql_query("UPDATE sub_category SET image1='$image1', name='$sub_name' ,des='$des' ,cat_id=$cat_id WHERE id=$id",$con);
	move_uploaded_file($_FILES['image']['tmp_name'],"../images/".$_FILES['image']['name']);
}
else
{
	$query = mysql_query("update sub_category set cat_id=$cat_id, name='$sub_name' ,des='$des'  where id=$id");
	
}
	header("location:display_subcat.php");
?>