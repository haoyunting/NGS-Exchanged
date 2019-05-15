<?php 
	session_start();
	$db = mysql_connect("localhost","zj","201901f10075");
		
	$department=$_POST['department'];

	$sql="SELECT * FROM staff where department='$department'";
	$result = $db->query($sql);

	while($attr = $result->fetch_row()){
		echo $attr[1];
		echo "<br>";
		echo $attr[2];
		echo "<br>";
		echo $attr[3];
		echo "<br>";
		echo $attr[4];
		echo "<br>";
	}
?>	
		


