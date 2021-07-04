<?php
	session_start();
	if(!isSet($_SESSION['uid']))
	{
		header("Location:login.php");
	}
	else
	{
		include('conn.php');
		
		$pid = $_GET['pid'];
		$qty = $_GET['qty'];	
		
		$uid = $_SESSION['uid'];

	
		mysql_query("insert into cart values(NULL,$pid,$uid,$qty)");
		header("Location:checkout.php");
	}
?>