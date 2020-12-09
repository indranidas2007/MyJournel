<html>
<head>
<script language="javascript">
    function fvalid()
	{
		 if(document.f1.firstname.value==""){
			 alert ("Invalid name.....");
			document.f1.firstname.focus;
            return false;			
		 }  
		 
                   
		 if(document.f1.lastname.value==""){
			 alert ("Invalid name.....");
			document.f1.lastname.focus;
            return false;			
		 }  
		 
		
		 document.f1.action="userreg.php";
		 document.f1.submit();
	}
</script>
<link rel="stylesheet" href="CSS/stylereg.css" type="text/css">
</head>


<body>
<div class="header"></div>
<?php
echo "<A HREF='login2.html'>BACK</a>";
echo "<body bgcolor='  #abb2b9 '>";

echo "<center>"; 
//echo "<img src='images/2.jpg' title='logo'/>";
 echo "<br><br><br>";
echo "<table border=1 WIDTH=30% BGCOLOR=#af7ac5>";
echo "<caption><FONT SIZE=5 FACE='TIMES' COLOR=#6c3483>REGISTRATION </FONT></caption>";

 echo "</table>";
include "connection.php";
    //$s="SELECT count(*)+1 FROM register ";
   //  $q = mysqli_query($connection,$s) or die("Record not found$$$$$$$$$....."); 
   // $r=mysqli_fetch_row($q);
   //  $user=trim("USER_".$r[0]);





echo "<form name=f1 method= post>";
echo "<table border=1>";
//echo "<caption>REGISTRATION </caption>";
//echo "<tr><td>USER ID </td>";
//echo "<td>$user<input type=hidden name=cid value='$user'></td>";

echo "<tr><td>Firstname </td>";
echo "<td><input type=text name=firstname size=15 maxlength=15 placeholder='enter firstname'></td>";
echo "<tr><td>Middlename</td>";
echo "<td><input type=text name=middlename size=10 maxlength=10 placeholder='enter middlename'></td>";
echo "<tr><td>Lastname</td>";
echo "<td><input type=text name=lastname size=10 maxlength=10 placeholder='enter lastname'></td>";
echo "<tr><td>DOB</td>";
echo "<td><input type=date name=dob></td>";
echo "<tr><td>Gender</td>";
echo "<td><input type=text name=gender size=6 maxlength=6 placeholder='enter gender'></td>";
echo "<tr><td>Choose an UserId </td>";
echo "<td><input type=text name=userid size=20 maxlength=20 placeholder='enter login id'></td>";
echo "<tr><td>Choose an Password</td>";
echo "<td><input type=text name=password size=30 maxlength=30 placeholder='enter password'></td>";
echo "<tr><td>Address</td>";
echo "<td><input type=text name=address size=30 maxlength=30 placeholder='enter address'></td>";
echo "<tr><td>Email</td>";
echo "<td><input type=text name=email size=20 maxlength=20 placeholder='enter email'></td>";
echo "<tr><td>Phone</td>";
echo "<td><input type=text name=phone size=12 maxlength=12 placeholder='enter phone number'></td>";
//echo "<tr><td colspan=2 align = center> <Input type=submit class="btn" value=submit onclick='fvalid();' ></td>";
echo "</table></form>";
?>
<tr><td colspan=2 align = center> <Input type=submit class="btn" value=Register onclick='fvalid();' ></td>
</body>
</html>