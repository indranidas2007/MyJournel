<?php
require_once('connection.php');
session_start();
$id=$_POST['id'];
$sql="delete from editor where id=$id";
mysqli_query($connection,$sql);
?>