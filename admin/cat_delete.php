<?php

include("conn.php");

$id=$_GET["id"];
	
	$query = mysql_query("delete from product where cat_id=$id");
	
	$query1 = mysql_query("delete from sub_category where cat_id=$id");
	
	$query2 = mysql_query("delete from category where cat_id=$id");

	header("location:update_cat.php");
?>