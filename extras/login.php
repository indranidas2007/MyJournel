<?php
//echo "<A HREF='index.html'>HOME</a>";

//echo"<img border='0' alt='google' img src='bg.jpg' width='100' height='100'>";
//echo "<body bgcolor='  #abb2b9 '>";

echo "<center>"; 
//echo "<img src='images/2.jpg' title='logo'/>";
 echo "<br><br><br>";
echo "<table border=1 WIDTH=30% COLOR=RED>";
echo "<caption><FONT SIZE=5 FACE='TIMES' COLOR= #6c3483 >LOGIN MENU</FONT></caption>";



echo "<form name=b1 action= valid.php method= post>";
echo "<table border=1>";
//echo "<caption>LOGIN MENU</caption>";
echo "<tr><td>ENTER USERID </td>";
echo "<td><input type=text name=userid size=20 maxlength=20 placeholder='enter login id'></td>";
echo "<tr><td>ENTER PASSWORD</td>";
echo "<td><input type=password name=password size=20 maxlength=20 placeholder='type password'></td>";
echo "<tr><td colspan=2 align = center> <Input type=submit value= submit></td>";
echo "</table></form>";

echo "<form name=b2 action= reg.php method= post>";

echo "<tr><td colspan=2 align = center> <Input type=submit value= Register></td>";
echo "</table></form>";


echo "<center>"; 
echo "<body>";



?>

