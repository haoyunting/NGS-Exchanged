<?php 
	$db = mysql_connect("localhost","zj","201901f10075");
    mysql_select_db("db_zj", $db);

	if(isset($_GET['agreeid'])){
		$id = $_GET['agreeid'];
		$sql = "UPDATE application SET status='agree' WHERE id='$id' ";
		$result = mysql_query($sql,$db);
		header("location:Approval.php");
	}

	else if(isset($_GET['rejectid'])){
		$id = $_GET['rejectid'];
		$sql = "UPDATE application SET status='reject' WHERE id='$id' ";
		$result = mysql_query($sql,$db);
		header("location:Approval.php");
	}

	else{
			$status=$_POST['agreement'];
			$id = $_POST['id'];
			$sql = "UPDATE application SET status='$status' WHERE id='$id' ";
			$result = mysql_query($sql,$db);
			header("location:view.php");
	}
?>





