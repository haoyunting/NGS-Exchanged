<?php 
	$db = mysql_connect("localhost","zj","201901f10075");

	if(isset($_GET['agreeid'])){
		$id = $_GET['agreeid'];
		$sql = "UPDATE application SET status='agree' WHERE id='$id' ";
		$result = $db->query($sql);
		header("location:Approval.php");
	}

	else if(isset($_GET['rejectid'])){
		$id = $_GET['rejectid'];
		$sql = "UPDATE application SET status='reject' WHERE id='$id' ";
		$result = $db->query($sql);
		header("location:Approval.php");
	}

	else{
			$status=$_POST['agreement'];
			$id = $_POST['id'];
			$sql = "UPDATE application SET status='$status' WHERE id='$id' ";
			$result = $db->query($sql);
			header("location:view.php");
	}
?>





