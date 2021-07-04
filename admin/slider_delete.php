<?php

include("conn.php");

$id=$_GET["id"];
	
	$query = mysql_query("delete from slider where id=$id");
	
	header("location:update_slider.php");
?>