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
<?php 
	$db = mysql_connect("localhost","zj","201901f10075");
    mysql_select_db("db_zj", $db);

	if(isset($_GET['order'])){
		$orderby = $_GET['order'];

		if($orderby == 'department'){
			$sql="SELECT * FROM staff ORDER BY department DESC";		
		}
		else if($orderby == 'username'){
			$sql="SELECT * FROM staff ORDER BY username DESC";	
		}			
	}
?>
<h3>&nbsp;&nbsp;&nbsp;&nbsp;All Staffs:</h3>
  	<div id="staff">
  		
  		<table class="staff">
			<tr>
	    		<th> 
	    			<a href="view.php?order='name'">name</a> 
	    			<a href="staffAfterOrder.php?order=username"> ▴ </a>
	    			<a href="staffAfterOrderdes.php?order=department"> ▾ </a>
	    		</th>
	    		<th>
	    			<a href="">Department</a>
	    			<a href="staffAfterOrder.php?order=department"> ▴ </a>
	    			<a href="staffAfterOrderdes.php?order=department"> ▾ </a>
	    		</th>
  			</tr>


		<?php 
			$result = mysql_query($sql,$db);
			$i=1;
			while($attr = mysql_fetch_array($result)){?>
			    <tr>
			      
			      <td><?php echo $attr[1]; ?></td>
			      <td><?php echo $attr[4]; ?></td>
			      
			     </tr>
			       
			<?php $i++;} ?> 
		
</table> 
</div>
</body>
</html>