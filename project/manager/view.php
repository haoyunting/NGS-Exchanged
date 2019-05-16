<!DOCTYPE html>
<html>
  <head>
    <meta charset='UTF-8'/>
    <title>information</title>
    <link rel="stylesheet" type="text/css" href="css/view.css">
  </head>
  <body>
  	<div>
  		<a href="manager.html"><img src="images/return.png" /></a>
  		<span class="title">View Page</span>
  		<span class="user">user:&nbsp;&nbsp;&nbsp;&nbsp;
  			<img src="images/3.jpeg" class="userimg"></span>
  	</div>
  	<br/><br/>
  	<h3 class="htitle">All Staffs</h3><br>
  	<div id="menu">
  		<ul class="menu">
  			<li><a href="">home</a></li>
  			<li><a href="">admin</a></li>
  			<li><a href="">login</a></li>
  			<li><a href="">regist</a></li>
  			<li><a href="">search</a></li>
  			<li><a href="">my</a></li>
  			<li><a href="">set</a></li>
  		</ul>
  	</div>
	
  	<div id="staff">
  		
  		<table class="staff">
			<tr>
	    		<th> 
	    			<a href="view.php?order='name'">name</a> 
	    			<a href="stuffAfterOrder.php?order=username"> ▴ </a>
	    			<a href="stuffAfterOrderdes.php?order=username"> ▾ </a>
	    		</th>
	    		<th>
	    			<a href="">Department</a>
	    			<a href="stuffAfterOrder.php?order=department"> ▴ </a>
	    			<a href="stuffAfterOrderdes.php?order=department"> ▾ </a>
	    		</th>
  			</tr>
  		<?php 
			$db = mysql_connect("localhost","zj","201901f10075");
    		mysql_select_db("db_zj", $db);
        	$sql = "select * from stuff where level = 'stuff' ";
        	$result = mysql_query($sql,$db);
        	while($attr = mysql_fetch_array($result)){
			$id = $attr[0];
			$username = $attr[1];
			$department = $attr[4]; 
		?>
  				<tr>
  					<td><a href="view.php?username=<?php echo $username; ?>"><?php echo $username; ?></a></td>
  					<td><?php echo $department; ?></td>
  				</tr>
		 
		<?php } ?>	
	</table>
  	</div>
  	<div id="application"> 

  	<?php 
  		if(isset($_GET['username'])){
			$username = $_GET['username'];
			$sql = "SELECT * FROM application WHERE username='$username' ";
			$result = mysql_query($sql,$db);
			while($attr = $result->fetch_row()){
				$id = $attr[0];
				$username = $attr[1];
				$department = $attr[2];
				$begintime = $attr[3];
				$days = $attr[4];
				$reason = $attr[5];
				$status = $attr[6];
				$applytime = $attr[7];
				$checker = $attr[8];
				?>
				<table id="table1" border="1" cellspacing="0">
					<tr>
						<td>NAME：</td>
						<td><?php echo $username; ?></td>
					</tr>
					<tr>
						<td>TYPE:</td>
						<td><?php echo $department; ?></td>
					</tr>
					<tr>
						<td>START:</td>
						<td><?php echo $begintime;?></td>
					</tr>
					<tr>
						<td>Day:</td>
						<td><?php echo $day; ?></td>
					</tr>
					<tr>
						<td>Description:</td>
						<td><?php echo $reason;?></td>
					</tr>
					<tr>
						<td>Status：</td>
						<td>
							now:<?php echo $status ?>
							<br>

							
							<!-- <form action="action.php" method="POST">
								<select name="agreement">
									<option>agree</option>
									<option>reject</option>
									<option>waiting</option>
							 	</select>

							 	<button type="submit"> <a href="action.php? id= <?php echo $id ?>">save</a> </button>
							</form> -->
							<form action="action.php" method="POST">
								<select name="agreement">
									<option>agree</option>
									<option>reject</option>
									<option>waiting</option>
									<input type="hidden" name="id"  value="<?php echo $id ?>">
									<button type="submit">save</button>
							 	</select>
							</form>

						</td>
					</tr>
					<tr>
						<td>Applytime：</td>
						<td><?php echo $applytime; ?></td>
					</tr>
					<tr>
						<td>Checker：</td>
						<td><?php echo $checker; ?></td>
					</tr>
	  		</table>

		<?php	}
		}
	?>
		<br><br>
  	 	</div>
  	 	<div id="application"> 

  	<?php 
  		if(isset($_GET['username'])){
			$username = $_GET['username'];
			$sql = "SELECT * FROM application WHERE username='$username' ";
			$result = mysql_query($sql,$db);
			while($attr = mysql_fetch_array($result)){
				$id = $attr[0];
				$username = $attr[1];
				$department = $attr[2];
				$begintime = $attr[3];
				$days = $attr[4];
				$reason = $attr[5];
				$status = $attr[6];
				$applytime = $attr[7];
				$checker = $attr[8];
				?>
				<table id="table1" border="1" cellspacing="0">
					<tr>
						<td>NAME：</td>
						<td><?php echo $username; ?></td>
					</tr>
					<tr>
						<td>TYPE:</td>
						<td><?php echo $department; ?></td>
					</tr>
					<tr>
						<td>START:</td>
						<td><?php echo $begintime;?></td>
					</tr>
					<tr>
						<td>Day:</td>
						<td><?php echo $day; ?></td>
					</tr>
					<tr>
						<td>Description:</td>
						<td><?php echo $reason;?></td>
					</tr>
					<tr>
						<td>Status：</td>
						<td>
							now:<?php echo $status ?>
							<br>

							
							<!-- <form action="action.php" method="POST">
								<select name="agreement">
									<option>agree</option>
									<option>reject</option>
									<option>waiting</option>
							 	</select>

							 	<button type="submit"> <a href="action.php? id= <?php echo $id ?>">save</a> </button>
							</form> -->
							<form action="action.php" method="POST">
								<select name="agreement">
									<option>agree</option>
									<option>reject</option>
									<option>waiting</option>
									<input type="hidden" name="id"  value="<?php echo $id ?>">
									<button type="submit">save</button>
							 	</select>
							</form>

						</td>
					</tr>
					<tr>
						<td>Applytime：</td>
						<td><?php echo $applytime; ?></td>
					</tr>
					<tr>
						<td>Checker：</td>
						<td><?php echo $checker; ?></td>
					</tr>
	  		</table>

		<?php	}
		}
	?>
		<br><br>
  	 	</div>
  </body> 
</html>