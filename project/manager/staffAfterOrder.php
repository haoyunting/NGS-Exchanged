<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>CRUD:CReate,UPdate,DElete PHP MySQL</title>
	<link rel="stylesheet" type="text/css" href="css/view.css">
</head>
	<body>
  	<div>
  		<a href="view.php"><img src="images/return.png" /></a>
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
<?php 
	$db = mysql_connect("localhost","zj","201901f10075");
    mysql_select_db("db_zj", $db);


	if(isset($_GET['order'])){
		$orderby = $_GET['order'];

		if($orderby == 'username'){
			$sql="SELECT * FROM staff WHERE level='Staff' ORDER BY username";		
		}
		else if($orderby == 'department'){
			$sql="SELECT * FROM staff WHERE level='Staff' ORDER BY department";	
		}	
		
	}
?>
  	<div id="staff">
  		
  		<table class="staff">
			<tr>
	    		<th> 
	    			<a href="view.php?order='name'">name</a> 
	    			<a href="staffAfterOrder.php?order=username"> ▴ </a>
	    			<a href="staffAfterOrderdes.php?order=username"> ▾ </a>
	    		</th>
	    		<th>
	    			<a href="view.php?order='name'">Department</a>
	    			<a href="staffAfterOrder.php?order=department"> ▴ </a>
	    			<a href="staffAfterOrderdes.php?order=department"> ▾ </a>
	    		</th>
  			</tr>

		<?php 

			$i=1; 
			$result = mysql_query($sql,$db);
			while($attr = mysql_fetch_array($result)){?>
			    <tr>
			      <td><a href="view.php?username=<?php echo $attr[1]; ?>"><?php echo $attr[1]; ?></a></td>
			      <td><?php echo $attr[4]; ?></td>
			  	</tr>
		 <?php } ?>	
	</table> 
</div>

</body>
</html>