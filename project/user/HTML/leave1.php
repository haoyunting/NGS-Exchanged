<?php
  session_start();
$db = mysql_connect("localhost","zj","201901f10075");

  if (!$db)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db("db_zj", $db);

    $username=$_POST['username'];
		$department=$_POST['department'];
		$begintime=$_POST['begintime'];
		$day=$_POST['day'];
		$reason=$_POST['reason'];



    /* insert data using form into tbl persons */
$sql3="INSERT INTO application(username,department,begintime,days,reason) values('$username','$department','$begintime','$day','$reason')";


if (!mysql_query($sql3,$db))
{
die('Error: ' . mysql_error());
}

    header("location:success.html");
mysql_close($con);
  


 ?>
