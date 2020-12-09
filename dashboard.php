<?php
require_once('connection.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Side Navigation Bar</title>
	<link rel="stylesheet" href="css/styledashboard.css">
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
		
	
</head>
<body>

<div class="wrapper">
    <div class="sidebar">
        <h2>My Journel</h2>
        <?php
echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Welcome, " . $_SESSION["userlog"] . ".<br>";
?>
        <ul>
            <li><a href="dashboard.php"><i class="fas fa-home"></i>Home</a></li>
            <li><a href="#"><i class="fas fa-user"></i>Compose</a></li>
            <li><a href="#"><i class="fas fa-address-card"></i>Starred</a></li>
            <li><a href="publish.php"><i class="fas fa-project-diagram"></i>Share</a></li>
            <li><a href="About.php"><i class="fas fa-blog">About</i></a></li>
            <li><a href="logout.php"><i class="fas fa-address-book"></i>Logout</a></li>
            <li><a href="#"><i class="fas fa-map-pin"></i>Contact</a></li>
        </ul>
       
        <div class="social_media">

          <a href="#"><i class="fab fa-facebook-f"></i></a>
          <a href="#"><i class="fab fa-twitter"></i></a>
          <a href="#"><i class="fab fa-instagram"></i></a>
      </div>
    </div>
    <div class="main_content">
        <div class="header">Write your thought!</div>  
        <div class="container">
          <form method="post" action="submittext.php">
        	 <textarea name="t1"></textarea>
        </div>
        	 <script src="ckeditor/ckeditor.js"></script>
 
             <script>
             	CKEDITOR.replace('t1');
             </script>
      	
          
        
    </div>

              <div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
	              <input type=submit class="btn" name="submit" value="Save" align="centre">
              </div>
</div>
 
</body>
</html>
