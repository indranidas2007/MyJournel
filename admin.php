<?php 
 
        $user = $_POST["userid"]; 
        $pass = $_POST["password"];
         
        echo $user."  ".$pass;
   
         if($user=="indrani2007" && $pass=="indrani2007"){
			  ?>
			 <script language="javascript">
                 alert( "Login successful");     
                 //location.href="Admin_login.html";      
               </script> 
			   <?php
				  
                  //header("location:admin_page.html");
          } 
          else{
                ?>    
                <script language="javascript">
                 alert("Invalid User, Move to Login Page...");     
                 //location.href="dashboard.php";      
               </script> 
              <?php
          } 


     ?>