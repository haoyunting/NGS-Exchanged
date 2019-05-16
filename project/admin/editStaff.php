<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>CRUD:CReate,UPdate,DElete PHP MySQL</title>
	<link rel="stylesheet" type="text/css" href="addStaff.css">

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

	<?php
		$id = $_GET["id"];
		$db = mysql_connect("localhost","zj","201901f10075");
		mysql_select_db("db_zj", $db);
		$sql = "select * from staff where id='$id'";
		$result = mysql_query($sql,$db);
		$attr = mysql_fetch_array($result)
	?>	

</head>
<body>
<div class="conter">
	<a href="index.php" onclick="javascript:return del();"><img src="images/5.svg" class="return"></a>

	<div class="set">
		<div class="title">
			<h1>Please edit the  information:</h1>
		</div>

		<div class="input_form">
			
			<form method="post" action="server_staff.php">
				<div>
					<table>
						<tr>
							<td><label>Username:</label></td>
							<td>
								<input type="hidden" name="id" value="<?php echo $attr[0]; ?>">				
								<input type="text" name="username" value="<?php echo $attr[1]; ?>">
							</td>
						</tr>
						<tr>
							<td><label>Password:</label></td>
							<td>
								<input type="text" name="password" value="<?php echo $attr[2]; ?>">
							</td>
						</tr>
						<tr>
							<td><label>Stafflevel:</label></td>
							<td>
								<input type="text" name="level" value="<?php echo $attr[3]; ?>">
							</td>
						</tr>
						<tr>
							<td><label>Depart:</label></td>
							<td>
								<input type="text" name="department" value="<?php echo $attr[4]; ?>">
							</td>
						</tr>
					</table>
				</div>
				<div><input class="btn" type="submit" value="update"></div>
			</form>
		</div>
	</div>
</div>
</body>
</html>