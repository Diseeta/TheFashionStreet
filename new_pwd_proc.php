<?php
include("conn.php");

$email = $_POST['email'];
$password = $_POST['password'];

$query = mysql_query("update register set password='$password' where email_id='$email'");

header("Location:index.php");

?>
