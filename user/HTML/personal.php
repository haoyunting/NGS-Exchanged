<!DOCTYPE html>
<html>
<head>
	<title>personal</title>
	<link rel="stylesheet" type="text/css" href="../CSS/personal.css">
</head>

<?php
	 $db=mysqli_connect("localhost","root","","test");

	 $sql="select * from staff";
	 $result = $db->query($sql);


	 if(isset($_GET['username'])){
		$username = $_GET['username'];

		while($attr = $result->fetch_row()){
			if($attr[1]==$username){
				$id=$attr[0];
				$password=$attr[2];
				$level=$attr[3];
				$department=$attr[4];
			}
		}
	}
?>


<body>
	<div class="title">Personal Information</div>
	<div>
		<div class="content">
			<div ><img src="../images/title.png" class="img2" style="position: relative; top: 29px; "></div>
			<br><br>
			<form method="post" action="personal11.php"> 
			<table>
				<tr>
					<td>id:</td>
					<td>
						<input type="text" name="id" value="<?php  echo $id;?>" readonly>
					</td>
				</tr>
				<tr>
					<td>username:</td>
					<td>
						<input type="text" name="username" value="<?php  echo $username;?>" >
					</td>
				</tr>
				<tr>
					<td>password:</td>
					<td>
						<input type="text" name="password" value="<?php echo $password;?>" >
					</td>
				</tr>
				<tr>
					<td>level:</td>
					<td>
						<input type="text" name="level" value="<?php  echo $level;?>" ></td>
				</tr>
				<tr>
					<td>department:</td>
					<td>
						<input type="text" name="department" value="<?php  echo $department;?>"></td>
				</tr>
			</table>
			<div>
					<button class="but1" onclick="{location.href='personal.php?username=<?php echo $username;?>'}">Edit</button>&nbsp;&nbsp;&nbsp;
					<button type="submit" name="save" class="but2" >Save</button>
				</form>
			</div>
		</div>
	</div>
	</div>
</body>
</html>