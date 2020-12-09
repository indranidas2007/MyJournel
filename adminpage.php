<?php
require_once('connection.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>My Journel</title>
    <link rel="stylesheet" href="css/styleadmin.css">
    <link href="css/all.min.css" rel="stylesheet"> 
	<link href="css/fontawesome.min.css" rel="stylesheet"> 
    <div class="container">
      <button class="btnback" onclick="location.href='index.html' ">
      BACK<i class="fas fa-backward"></i></button>
    </div>

    <div class="site-content-section-inner">
						<div class="section-heading">Admin Panel</div>
						<div class="admin-sub-heading">Welcome <?php echo $_SESSION["adminlog"] . ".<br>"; ?></div>
					</div>
<div class="container2">
   <div class="buttons" >
      <button class="btn1" onclick="location.href='dashboardadmin.php'">
      Dashboard</button>
      <button class="btn2" onclick="location.href='reg2.html'">
      Registration</button>
      <button class="btn3" onclick="location.href='publish.html'">
      Publish Page</button>
   </div>
</div>