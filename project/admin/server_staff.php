<?php 
	session_start();
	
	$db = mysql_connect("localhost","zj","201901f10075");
    mysql_select_db("db_zj", $db);

	//initialize variables
	$username = "";
	$password = "";
	$level = "";
	$department = "";
	$id = 1;
	$update = false;

	if(isset($_POST['save'])){
		$username = $_POST['username'];
		$password = $_POST['password'];
		$level = $_POST['level'];
		$department = $_POST['department'];

		mysql_query("INSERT INTO staff(username,password,level,department) VALUES('$username','$password','$level','$department')",$db);
		$_SESSION['message'] = "New Staff saved";
		header('location:staffList.php');
	}

	if(isset($_GET['del'])){
		$id = $_GET['del'];
		mysql_query("DELETE FROM staff WHERE id=$id",$db);
		$_SESSION['message'] = "Staff deleted!";
		header('location:staffList.php');
	}
?>

<?php
	$id=$_POST["id"];
	$username=$_POST["username"];
	$password=$_POST["password"];
	$level=$_POST["level"];
	$department=$_POST["department"];
	
	$sql="update staff set username='$username',password='$password',level='$level',department='$department' where id='$id'";
	$result = mysql_query($sql,$db);
	header('location:staffList.php');
?>

