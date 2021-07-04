<?php

include("conn.php");
$id=$_POST["id"];
$cat_id=$_POST["cat_id"];
$sub_id=$_POST["sub_id"];
$pname=$_POST["pname"];	
$price=$_POST["price"];
$image1=$_FILES["image1"]["name"];
$image2=$_FILES["image2"]["name"];
$image3=$_FILES["image3"]["name"];
$des=$_POST["des"];

echo $id."<br>";
echo $cat_id."<br>";
echo $sub_id."<br>";
echo $pname."<br>";
echo $image1."<br>";
echo $image2."<br>";
echo $image3."<br>";
echo $des."<br>";
		
 if( $_FILES['image1']['name'] != "" && $_FILES['image2']['name'] != "" && $_FILES['image3']['name'] != "" )
{
	$query = mysql_query("UPDATE product SET image1='$image1', image2='$image2', image3='$image3',pname='$pname' ,des='$des',price='$price' ,sub_id=$sub_id, cat_id=$cat_id WHERE pid=$id",$con);
	move_uploaded_file($_FILES['image1']['tmp_name'],"../images/".$_FILES['image1']['name']);
	move_uploaded_file($_FILES['image2']['tmp_name'],"../images/".$_FILES['image2']['name']);
	move_uploaded_file($_FILES['image3']['tmp_name'],"../images/".$_FILES['image3']['name']);

}
else if($_FILES['image1']['name'] != "" )
{
	$query = mysql_query("UPDATE product SET image1='$image1', pname='$pname' ,des='$des', price='$price', sub_id=$sub_id, cat_id=$cat_id WHERE pid=$id",$con);
	move_uploaded_file($_FILES['image1']['tmp_name'],"../images/".$_FILES['image1']['name']);
}
else if($_FILES['image2']['name'] != "" )
{
	$query = mysql_query("UPDATE product SET image2='$image2', pname='$pname' ,des='$des',price='$price', sub_id=$sub_id, cat_id=$cat_id WHERE pid=$id",$con);
	move_uploaded_file($_FILES['image2']['tmp_name'],"../images/".$_FILES['image2']['name']);
}
else if($_FILES['image3']['name'] != "" )
{
	$query = mysql_query("UPDATE product SET image3='$image3', pname='$pname' ,des='$des',price='$price', sub_id=$sub_id, cat_id=$cat_id WHERE pid=$id",$con);
	move_uploaded_file($_FILES['image3']['tmp_name'],"../images/".$_FILES['image3']['name']);
}
else if($_FILES['image1']['name'] != "" )
{
	$query = mysql_query("UPDATE product SET image1='$image1'.image2='$image2', pname='$pname' ,des='$des', price='$price', sub_id=$sub_id, cat_id=$cat_id WHERE pid=$id",$con);
	move_uploaded_file($_FILES['image1']['tmp_name'],"../images/".$_FILES['image1']['name']);
	move_uploaded_file($_FILES['image2']['tmp_name'],"../images/".$_FILES['image2']['name']);

}
else if($_FILES['image2']['name'] != "" )
{
	$query = mysql_query("UPDATE product SET image2='$image2'.image3='$image3', pname='$pname' ,des='$des',price='$price', sub_id=$sub_id, cat_id=$cat_id WHERE pid=$id",$con);
	move_uploaded_file($_FILES['image2']['tmp_name'],"../images/".$_FILES['image2']['name']);
	move_uploaded_file($_FILES['image3']['tmp_name'],"../images/".$_FILES['image3']['name']);

}
else if($_FILES['image1']['name'] != "" )
{
	$query = mysql_query("UPDATE product SET image1='$image1'.image3='$image3', pname='$pname' ,des='$des',price='$price', sub_id=$sub_id, cat_id=$cat_id WHERE pid=$id",$con);
	move_uploaded_file($_FILES['image1']['tmp_name'],"../images/".$_FILES['image1']['name']);
	move_uploaded_file($_FILES['image3']['tmp_name'],"../images/".$_FILES['image3']['name']);

}

else
{
	$query = mysql_query("update product set pname='$pname' ,des='$des',price='$price', sub_id=$sub_id, cat_id=$cat_id  where pid=$id");
	
}
	
header("location:display_product.php");
?>
