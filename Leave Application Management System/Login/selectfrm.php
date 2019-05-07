<?php
//connection to server
$con = mysql_connect("localhost","zj","201901f10075");
if (!$con)
{
die('Could not connect: ' . mysql_error());
}
//select the dbase
mysql_select_db("db_zj", $con);
$result = mysql_query("SELECT * FROM staff where FirstName =('$_POST[firstname]')");
while($row = mysql_fetch_array($result))
{
echo $row['FirstName'] . " " . $row['LastName'];
echo "<br/>";
}
mysql_close($con);
?>