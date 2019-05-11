<!DOCTYPE html>
<html>
<head>
	<title>Office system leave</title>
	<link rel="stylesheet" type="text/css" href="../CSS/leave.css">

	<script src="laydate/laydate.js"></script>
	<script type="text/javascript">
		laydate.render({
			elem:'#starttime'
			,lang:'en'
		});

	</script>

	<?php

		$db=mysqli_connect("localhost","root","","test");
		$sql = "select *from department";
		$result = $db->query($sql);


		$username="";
		$department="";
		$begintime="";
		$day="";
		$reason="";

	 ?>
</head>
<body>

	<div class="main">
		<div class="title"><b style="font-size: 2em;">written request for leave</b></div>
		<form method="post" action="leave1.php">
			<table class="table1" border="1" cellspacing="0">
				<tr>
					<td class="td1"><font color="red">*</font>NAME：&nbsp;</td>
					<td class="td2"><input type="text" style="width: 290px;height: 40px;" name="username" value="<?php echo $username; ?>"></td>
				</tr>
				
				<tr>
					<td class="td1"><font color="red">*</font>TYPE:&nbsp;</td>
						<td class="td2">
							<select   style="width: 290px;height: 40px;" name="department">
								<?php while($attr = $result->fetch_row()){ ?>
									<option><?php echo $attr[1];?></option>
								<?php } ?>
								
							</select>
						</td>
				</tr>
				<tr>
					<td class="td1"><font color="red">*</font>START:&nbsp;</td>
					<td class="td2"><div class="time01"><input type="text" id="starttime" style="width: 150px;height: 30px;" name="begintime" value="<?php echo $begintime; ?>"></div><img src="../images/time.png" class="im1"></td>
				</tr>
				<tr>
					<td class="td1"><font color="red">*</font>Day:&nbsp;</td>
					<td class="td2"><div class="time01"><input type="text" id="endtime" style="width: 150px;height: 30px;" name="day" value="<?php echo $day; ?>">
					</td>
				</tr>

				<tr>
					<td class="td1">Description:&nbsp;</td>
					<td class="td2"><textarea rows="10" cols="50" class="textarea1" name="reason" value="<?php echo $reason;?>"></textarea></td>
				</tr>
			</table>

			<!-- <input type="button" value="Submit" style="border-radius: 5px;" class="webbtn"> -->

			<button type="submit" name="save" class="webbtn">Submit</button>

		</form>
	</div>
</body>
</html>
