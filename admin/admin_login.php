<?php

session_start();
$admin_id = $_POST['admin_id'];
$admin_pwd = md5($_POST['admin_pwd']);

include("conn.php");

$result = mysql_query("select * from admin where admin_id='$admin_id' AND admin_pwd='$admin_pwd' ");
$count = mysql_num_rows($result);

if($count > 0)
{
	$row = mysql_fetch_row($result);
	
	$_SESSION['login'] = "yes";
	$_SESSION['user_name'] = $row[1];
	
	header("Location:display_cat.php");
	
}	
else
	header("Location:index.php?login='wrong'");






?>