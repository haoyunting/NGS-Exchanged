<?php
	session_start();
  	$db = mysql_connect("localhost","zj","201901f10075");
    mysql_select_db("db_zj", $db);
    $sql="SELECT * FROM staff";
    $result = mysql_query($sql,$db);

  if(isset($_POST['username'])){
  		$id=$_POST['id'];
   		$username=$_POST['username'];
   		$password=$_POST['password'];
   		$level=$_POST['level'];
		$department=$_POST['department'];
		
		$sql1="UPDATE staff 
 			SET id='$id',username='$username',password='$password',Level='$level',department='$department' WHERE username='$username'";
      mysql_query($sql1,$db);
  }
    $result = mysql_query($sql,$db);
    header("location:information.php");
 	
?>