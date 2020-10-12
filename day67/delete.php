<?php

error_reporting(0);
$con= mysqli_connect("localhost","root","","student") or die("connection failed");


$id=$_GET['id'];
$query=mysqli_query($con,"delete from certi where id='$id'");
header('location:display.php');

?>