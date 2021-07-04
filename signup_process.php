<?php

$name = $_POST['name'];
$email = $_POST['email'];
$password = md5($_POST['password']);
$number = $_POST['number'];
$address = $_POST['address'];
$city = $_POST['city'];
$state = $_POST['state'];
$question=$_POST['question'];
$answer=$_POST['answer'];

/*
echo $name."<br>";
echo $email."<br>";
echo $password."<br>";
echo $number."<br>";
echo $address."<br>";
echo $city."<br>";
echo $state."<br>";
echo $question."<br>";
echo $answer."<br>"; */


include("conn.php");

mysql_query("insert into register values(NULL,'$name','$email','$password','$number' ,'$address','$city','$state','$question','$answer') ");

header("Location:login.php");



?>