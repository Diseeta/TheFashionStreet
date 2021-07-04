<?php

include("conn.php");

$id=$_GET["id"];
	
	$query = mysql_query("delete from register where id=$id");
	
	header("location:reg_view.php");
?>