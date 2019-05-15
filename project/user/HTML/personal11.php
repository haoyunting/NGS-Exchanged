<?php
	 session_start();
  	 $db = mysql_connect("localhost","zj","201901f10075");
     mysql_select_db("db_zj", $db);

	 $sql="select * from staff";
     $result = mysql_query($sql,$db);



  if(isset($_POST['save'])){
  		$id=$_POST['id'];
   		$username=$_POST['username'];
   		$password=$_POST['password'];
   		$level=$_POST['level'];
		$department=$_POST['department'];
		
		$sql="UPDATE staff 
 			SET id='$id',username='$username',password='$password',Level='$level',department='$department' WHERE id='$id'";
		mysql_query($sql,$db);
		


  }
 
 	
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../CSS/personal.css">
</head>
<body>
	<div class="title">Personal Information</div>
	<div>
		<div class="content">
			<div ><img src="../images/title.png" class="img2" style="position: relative; top: 29px; "></div>
			<br><br>
			<table>
				<tr>
					<td>id:</td>
					<td>
						<input type="text" value="<?php  echo $id;?>" readonly>
					</td>
				</tr>
				<tr>
					<td>username:</td>
					<td>
						<input type="text" value="<?php  echo $username;?>" readonly>
					</td>
				</tr>
				<tr>
					<td>password:</td>
					<td>
						<input type="text" value="<?php echo $password;?>" readonly>
					</td>
				</tr>
				<tr>
					<td>level:</td>
					<td>
						<input type="text" value="<?php  echo $level;?>" readonly></td>
				</tr>
				<tr>
					<td>department:</td>
					<td>
						<input type="text" value="<?php  echo $department;?>" readonly></td>
				</tr>
			</table>
			<div>
				<button class="but1" onclick="{location.href='personal.php?username=<?php echo $username;?>'}">Edit</button>&nbsp;&nbsp;&nbsp;
				<button class="but2">Save</button>
			</div>
		</div>
	</div>
</body>
</html>