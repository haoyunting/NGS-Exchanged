<!DOCTYPE html>
<html>
<head>
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


	if(isset($_GET['order'])){
		$orderby = $_GET['order'];

		if($orderby == 'department'){
			$sql="SELECT * FROM stuff ORDER BY department DESC";		
		}
		else if($orderby == 'username'){
			$sql="SELECT * FROM stuff ORDER BY username DESC";	
		}			
	}
?>
<h3>&nbsp;&nbsp;&nbsp;&nbsp;All Staffs:</h3>
  	<div id="staff">
  		
  		<table class="staff">
			<tr>
	    		<th> 
	    			<a href="view.php?order='name'">name</a> 
	    			<a href="stuffAfterOrder.php?order=username"> ▴ </a>
	    			<a href="stuffAfterOrderdes.php?order=department"> ▾ </a>
	    		</th>
	    		<th>
	    			<a href="">Department</a>
	    			<a href="stuffAfterOrder.php?order=department"> ▴ </a>
	    			<a href="stuffAfterOrderdes.php?order=department"> ▾ </a>
	    		</th>
  			</tr>


		<?php 
			$result = $db->query($sql);
			$i=1;
			while($attr = $result->fetch_row()){?>
			    <tr>
			      
			      <td><?php echo $attr[1]; ?></td>
			      <td><?php echo $attr[4]; ?></td>
			      
			     </tr>
			       
			<?php $i++;} ?> 
		
</table> 
</div>
</body>
</html>