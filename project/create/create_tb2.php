<?php

$con = mysql_connect("localhost","dlu","201901f10077");
if (!$con)
{
die('Could not connect: ' . mysql_error());
}

// query create table in db_nafbti
mysql_select_db("db_dlu", $con);


$sql2 = "CREATE TABLE department
(
id int,
name varchar(15)
)";


if (mysql_query($sql2,$con))
{
  echo "<br />Table2 created";
}

else
{
  die('<br />Error creating table: ' . mysql_error());
}

mysql_close($con);
?>
