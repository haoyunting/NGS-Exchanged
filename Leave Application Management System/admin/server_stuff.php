<?php 
	session_start();
	$db = mysql_connect("localhost","zj","201901f10075");


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

		mysqli_query($db,"INSERT INTO stuff(username,password,level,department) VALUES('$username','$password','$level','$department')");
		$_SESSION['message'] = "New Stuff saved";
		header('location:stuffList.php');
	}

	if(isset($_GET['del'])){
		$id = $_GET['del'];
		mysqli_query($db,"DELETE FROM stuff WHERE id=$id");
		$_SESSION['message'] = "Stuff deleted!";
		header('location:stuffList.php');
	}
?>

<?php
	$id=$_POST["id"];
	$username=$_POST["username"];
	$password=$_POST["password"];
	$level=$_POST["level"];
	$department=$_POST["department"];

	$db=mysqli_connect('localhost','root','','test');

	$sql="update stuff set username='{$username}',password='{$password}',level='{$level}',department='{$department}' where id='{$id}'";

	$result=$db->query($sql);

	header('location:stuffList.php');
?>

