<!DOCTYPE html>
<html>
<head>
	<title>CRUD:CReate,UPdate,DElete PHP MySQL</title>
	<link rel="stylesheet" type="text/css" href="addStuff.css">
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

</head>
<body>
<div class="conter">
	<a href="index.html" onclick="javascript:return del();"><img src="images/5.svg" class="return"></a>

	<div class="set">
		<div class="title">
			<h1>Please edit the  information:</h1>
		</div>

		<div class="input_form">
			<?php

				$id = $_GET["id"];//取到cade主键值。去查询数据

				$db = mysql_connect("localhost","zj","201901f10075");
·

				$sql = "select * from stuff where id='{$id}'";

				$result = $db->query($sql);

				$attr = $result->fetch_row();

			?>
			<form method="post" action="server_stuff.php">
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
							<td><label>Stufflevel:</label></td>
							<td>
								<input type="text" name="level" value="<?php echo $attr[3]; ?>">
							</td>
						</tr>
						<tr>
							<td><label>Department:</label></td>
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