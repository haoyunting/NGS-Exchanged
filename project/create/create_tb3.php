<?php

$con = mysql_connect("localhost","dlu","201901f10077");
if (!$con)
{
die('Could not connect: ' . mysql_error());
}

// query create table in db_nafbti
mysql_select_db("db_dlu", $con);


$sql3 = "CREATE TABLE staff
(

id int,
username varchar(15),
password varchar(15),
Level varchar(15),
department varchar(15)



)";

 if (mysql_query($sql3,$con))
{
  echo "<br />Table3 created";
}
else
{
  die('<br />Error creating table: ' . mysql_error());
}

mysql_close($con);
?>
