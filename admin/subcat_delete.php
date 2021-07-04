<?php

include("conn.php");

$id=$_GET["id"];
	
	$query = mysql_query("delete from product where sub_id=$id");
	
	$query1 = mysql_query("delete from sub_category where id=$id");
	

	header("location:update_subcat.php");
?>