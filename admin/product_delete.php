<?php

include("conn.php");

$id=$_GET["id"];

	$query = mysql_query("delete from product where pid=$id");
	header("location:update_product.php");
?>