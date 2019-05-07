<?php

$con = mysql_connect("localhost","zj","201901f10075");
if (!$con)
{
die('Could not connect: ' . mysql_error());
}

// query create table in db_nafbti
mysql_select_db("db_zj", $con);

$sql1 = "CREATE TABLE application
(
id int,
username varchar(15),
department varchar(15),
begintime varchar(15),
days varchar(15),
reason varchar(15),
applytime varchar(15),
status varchar(15),
checker varchar(15)

)";



if (mysql_query($sql1,$con))
{
  echo "<br />Table1 created";
}

else
{
  die('<br />Error creating table: ' . mysql_error());
}

mysql_close($con);
?>
