<?php
	 session_start();
  	$db=mysqli_connect("localhost","root","","test");

  	$sql="select * from staff";
	 $result = $db->query($sql);



  if(isset($_POST['save'])){
  		$id=$_POST['id'];
   		$username=$_POST['username'];
   		$password=$_POST['password'];
   		$level=$_POST['level'];
		$department=$_POST['department'];
		
		mysqli_query($db,"UPDATE staff 
 			SET id='$id',username='$username',password='$password',level='$level',department='$department' WHERE id='$id'");


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