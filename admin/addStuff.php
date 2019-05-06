<!DOCTYPE html>
<html>
<head>
	<title>CRUD:CReate,UPdate,DElete PHP MySQL</title>
	<link rel="stylesheet" type="text/css" href="addStuff.css">
</head>
<body>
<div class="conter">
	<script type="text/javascript">
		function del() {
			var msg = "\n*********Information will not be retained after leaving***********\n\n************************Are you really leaving?********************";
			if (confirm(msg)==true){
				return true;
			}else{
				return false;
			}
		}
	</script>
	<a href="stuffList.php" onclick="javascript:return del();"><img src="images/5.svg" class="return"></a>

	<?php 
		$db = mysqli_connect('localhost','root','','test');
	 ?>
	<div class="set">
	<div class="title">
		<h1>Please fill in the following information:</h1>
	</div>

	<div class="input_form">
		<form method="post" action="server_stuff.php">
			<div>
				<table>
					<tr>
						<td><label>Username:</label></td>
						<td>
							<input type="hidden" name="id" value="<?php echo $id; ?>">
							<input type="text" name="username" value="<?php echo $username; ?>">
						</td>
					</tr>
					<tr>
						<td><label>Password:</label></td>
						<td>
							<input type="text" name="password" value="<?php echo $password; ?>">
						</td>
					</tr>
					<tr>
						<td><label>Stufflevel:</label></td>
						<td>
							<input type="text" name="level" value="<?php echo $level; ?>">
						</td>
					</tr>
					<tr>
						<td><label>Department:</label></td>
						<td>
							<input type="text" name="department" value="<?php echo $department; ?>">
						</td>
					</tr>
				</table>
			</div>
			<div>
				<button class="btn" type="submit" name="save">Save</button>
			</div>
		</form>
	</div>
	</div>
</div>
</body>
</html>