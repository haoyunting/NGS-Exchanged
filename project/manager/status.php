<?php 
	$db = mysql_connect("localhost","zj","201901f10075");

	if(isset($_GET['status'])){
		$status = $_GET['status'];
		$sql = "UPDATE application SET status='$status' WHERE id='$id' ";
		$result = $db->query($sql);
		header("location:view.php");
	}

?>