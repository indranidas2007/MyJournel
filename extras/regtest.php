<?php
include('connection.php');
//session_start();

  $fname= $_POST['firstname'];
  $mname= $_POST['middlename'];
  $lname=$_POST['lastname'];
  $dob=$_POST['dob'];
  $gen=$_POST['gender'];
  $uid=$_POST['userid'];
  $pass=$_POST['password'];
  $addr=$_POST['address'];
  $email=$_POST['email'];
  $phone=$_POST['phone'];
$sql = "INSERT INTO `register` (`firstname`, `middlename`, `lastname`, `lastname`, `dob`, `gender`, `userid`,`password`, `address`, `email`, `phone`) VALUES ('$fname','mname','$lname','$dob','$gen','$uid', '$pass',,'$addr','$email','phone')";
$query = mysqli_query($connection, $sql)or die("Database connection failure!");
if($query){
	echo 'true';
}else{
	echo 'false';
}
?>