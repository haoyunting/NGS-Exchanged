
<!DOCTYPE html>
<html>
  <head>
    <meta charset='UTF-8'/>
    <title>Approval</title>
    <link rel="stylesheet" type="text/css" href="css/leave.css">
    </head>
  <body>
  	<div>
  		<a href="#"  onclick="JavaScript:window.history.back();" ><img src="images/return.png" /></a>
  		<span class="title">Approval Page</span>
  		<span class="user">user:&nbsp;&nbsp;&nbsp;&nbsp;
  			<img src="images/3.jpeg" class="userimg"></span>
  	</div><br><br>
  	<h2 align="center">Leave application</h2>
	
	<div id="box" align="center">
    <?php
		$db = mysql_connect("localhost","zj","201901f10075");
   		mysql_select_db("db_zj", $db);
		$sql = "select * from application where status='waiting'";
		$result = mysql_query($sql,$db);
		while($attr = mysql_fetch_array($result)){
			$id = $attr[0];
			$username = $attr[1];
			$department = $attr[2];
			$begintime = $attr[3];
			$day = $attr[4];
			$reason = $attr[5];
		 ?>
		<div class="one">
		<form method="post" action="action.php">
	  		<table class="table1" border="1" cellspacing="0">
					<tr>
						<td>NAME：</td>
						<td><input type="text" disabled name="username" value="<?php echo $username; ?>"></td>
					</tr>
					<tr>
						<td>TYPE:</td>
						<td><input type="text" disabled name="department" value="<?php echo $department; ?>"></td>
					</tr>
					<tr>
						<td>START:</td>
						<td><input type="text" disabled id="starttime" name="begintime" value="<?php echo $begintime; ?>"></td>
					</tr>
					<tr>
						<td>Day:</td>
						<td><input type="text" disabled id="endtime" name="day" value="<?php echo $day; ?>">
						</td>
					</tr>
					<tr>
						<td>Description:</td>
						<td><textarea rows="10" cols="40" class="textarea1" disabled name="reason" value="<?php echo $reason;?>"></textarea></td>
					</tr>
	  		</table>
	  	</form>	
	  		<br>
  			<div class="btn">
				<a href="action.php?agreeid=<?php echo $id;?>" onclick="javascript:put();">agree</a>&nbsp;&nbsp;&nbsp;
				<a href="action.php?rejectid=<?php echo $id;?>" onclick="javascript:put();">reject</a>
				
			</div>
			<br>
		</div>
	<?php } ?>	
  	</div>
  	<script type="text/javascript">
  		function put(){
  			var message = confirm("Are you sure?");
  			if(message == true){
  				return true;
  			}
  			else{
  				return false;
  			}
  		}
  	</script>
  </body>
</html>