<?php

include "connection.php";

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
  //$md=md5($pwd);

     $s="SELECT * FROM login where userid='$uid'";
     $q = mysqli_query($connection,$s) or die("Record not found$$$$$$$$$....."); 
    if ($r=mysqli_fetch_row($q))
       {
         ?>    
                <script language="javascript">
                 alert("LOGIN ID already exist...");     
                 location.href="reg2.html";      
               </script> 
              <?php
       }
      else
          {



echo $fname." ".$mname." ".$lname." ".$dob." ".$gen." ".$uid." ".$pass." ".$addr." ".$email." ".$phone;


$q1="INSERT into register(firstname, middlename, lastname, dob, gender, userid, password, address, email, phone) values('$fname','$mname','$lname','$dob','$gen','$uid','$pass','$addr','$email','$phone')";


                $results = mysqli_query($connection,$q1) or die("Database connection failure!"); 
$z=0;

$q2="INSERT into login(userid, password, status) values ('$uid','$pass','$z')";
                $results = mysqli_query($connection,$q2) or die("Error123.........."); 

         //$_SESSION['custlog']=$uid;
	header("location:login2.html");


}



?>
