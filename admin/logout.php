<?php
	session_start();
	$_SESSION['login'] = "no";
	header("Location:index.php");
?>