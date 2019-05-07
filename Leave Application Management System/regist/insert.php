<?php
$con = mysql_connect("localhost","zj","201901f10075");
if (!$con)
{
die('Could not connect: ' . mysql_error());
}

/* select db */
mysql_select_db("db_zj", $con);

/* insert data using form into tbl persons */
$sql3="INSERT INTO staff(username,password,Level,department)
VALUES ('$_POST[username]','$_POST[userPassword]','$_POST[lev]','$_POST[dep]')";

if (!mysql_query($sql3,$con))
{
die('Error: ' . mysql_error());
}
echo"<h1>Registration is successful, welcome to join us</h1>";
echo "<p><a href='../Login/login.html'>return to login</a></p>";

mysql_close($con)
?>