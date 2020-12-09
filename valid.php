<?php
include "connection.php";

  session_start();
  $uid= $_POST['userid'];
  $pass=$_POST['password'];
  //$md=md5($pwd);
    
  	 
     $s="SELECT * FROM login where userid='$uid' and password='$pass' ";
     $q = mysqli_query($connection, $s) or die("Record not found$$$$$$$$$....."); 
    if ($r=mysqli_fetch_row($q))
       {
         if ($r[2]==1){
         $_SESSION['adminlog']=$_POST['userid'];
        header("location:adminpage.php");
       }
        else{
             $s1="SELECT * FROM login where userid='$lid' and password= '$pass' ";
             $q1 = mysqli_query($connection, $s1) or die("Record not found$$$$$$$$$....."); 
             $r=mysqli_fetch_row($q1);
            // $a=$r[0]; 
      	    //$_SESSION['userlog']=$a;
           
            $_SESSION['userlog']=$_POST['userid'];
        header("location:dashboard.php");
	}
        
      }
     else
      {
         ?>    
                <script language="javascript">
                 alert("Invalid User, Move to Login Page...");     
                 location.href="login2.html";      
               </script> 
              <?php

       }


?>