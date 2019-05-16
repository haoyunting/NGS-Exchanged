<?php 
	$db = mysql_connect("localhost","zj","201901f10075");
    mysql_select_db("db_zj", $db);

	if(isset($_GET['status'])){
		$status = $_GET['status'];
		$sql = "UPDATE application SET status='$status' WHERE id='$id' ";
		$result = mysql_query($sql,$db);
		header("location:view.php");
	}

?>