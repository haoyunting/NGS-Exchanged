<?php
	session_start();
  	$db = mysql_connect("localhost","zj","201901f10075");
    $sql="SELECT * FROM stuff";
    $result = $db->query($sql);

  if(isset($_POST['username'])){
  		$id=$_POST['id'];
   		$username=$_POST['username'];
   		$password=$_POST['password'];
   		$level=$_POST['level'];
		$department=$_POST['department'];
		
		mysqli_query($db,"UPDATE stuff 
 			SET id='$id',username='$username',password='$password',level='$level',department='$department' WHERE username='$username'");
  }
    $result = $db->query($sql);
    header("location:information.php");
 	
?>