<?php
  session_start();
  $db=mysqli_connect("localhost","root","","test");

  if (!$db)
  {
  die('Could not connect: ' . mysql_error());
  }



  if(isset($_POST['save'])){
    $username=$_POST['username'];
		$department=$_POST['department'];
		$begintime=$_POST['begintime'];
		$day=$_POST['day'];
		$reason=$_POST['reason'];

    mysqli_query($db,"INSERT INTO application(username,department,begintime,day,reason) values('$username','$department','$begintime','$day','$reason')");


    header("location:success.html");

  }


 ?>
