<!DOCTYPE html>
<html>
<head>
	<title>Application Reuslt</title>
	<link rel="stylesheet" type="text/css" href="../CSS/result.css">
</head>
<body>
	<div class="title">Application Reuslt</div>
	<div>
 <?php 
	 $db = mysql_connect("localhost","zj","201901f10075");
     mysql_select_db("db_zj", $db);

	 $sql="select * from application";
     $result = mysql_query($sql,$db);

	 if(isset($_GET['username'])){
		$username = $_GET['username'];

		while($attr = mysql_fetch_array($result)){
			if($attr[1]==$username){
				$id=$attr[0];
				$username=$attr[1];
				$department=$attr[2];
				$begintime=$attr[3];
				$day=$attr[4];
				$reason=$attr[5];
				$status=$attr[7]; ?>
			
			<div class="content">
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
						<input type="text" name="username" value="<?php  echo $username;?>" readonly>
					</td>
				</tr>
				<tr>
					<td>department:</td>
					<td>
						<input type="text" name="department" value="<?php  echo $department;?>"readonly></td>
				</tr>
				<tr>
					<td>begintime:</td>
					<td>
						<input type="text" name="begintime" value="<?php echo $begintime;?>"readonly>
					</td>
				</tr>
				<tr>
					<td>day:</td>
					<td>
						<input type="text" name="day" value="<?php echo $day;?>"readonly>
					</td>
				</tr>
				<tr>
					<td>reason:</td>
					<td>
						<input type="text" name="reason" value="<?php echo $reason;?>"readonly>
					</td>
				</tr>
				<tr>
					<td>status:</td>
					<td>
						<input type="text" name="status" value="<?php echo $status;?>"readonly>
					</td>
				</tr>
			</table>
			<div>
			<?php }
		}
	}
?>
			
				
			</div>
		</div>
	
</body>
</html>