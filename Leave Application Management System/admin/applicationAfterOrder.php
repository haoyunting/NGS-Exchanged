<!DOCTYPE html>
<html>
<head>
	<title>CRUD:CReate,UPdate,DElete PHP MySQL</title>
	<link rel="stylesheet" type="text/css" href="applicationList.css">
</head>
<body>
<div class="conter">
<?php 
	$db =mysql_connect("localhost","zj","201901f10075");


	if(isset($_GET['order'])){
		$orderby = $_GET['order'];

		if($orderby == 'username'){
			$sql="SELECT * FROM application ORDER BY username";		
		}
		else if($orderby == 'Department'){
			$sql="SELECT * FROM application ORDER BY department";	
		}	
		else if($orderby == 'Begintime'){
			$sql="SELECT * FROM application ORDER BY begintime";	
		}	
		else if($orderby == 'Applytime'){
			$sql="SELECT * FROM application ORDER BY applytime";	
		}	
		else if($orderby == 'Status'){
			$sql="SELECT * FROM application ORDER BY Status";	
		}
		else if($orderby == 'Checker'){
			$sql="SELECT * FROM application ORDER BY Checker";	
		}	
		else if($orderby == 'Days'){
			$sql="SELECT * FROM application ORDER BY days";	
		}
	}
?>

	<a href="index.html"><img src="images/5.svg" class="return"></a>
	<a href="#"><img src="images/7.svg" class="check"></a>

	<table>
		<thead>
			<tr>
				<th>No.</th>
	    		
				<th><a>name</a><a class="aa" href="applicationAfterOrder.php?order=username">▴</a><a class="aa" href="applicationAfterOrderdes.php?order=username">▾</a> </th>

				<th><a>Department</a><a class="aa" href="applicationAfterOrder.php?order=Department">▴</a><a class="aa" href="applicationAfterOrderdes.php?order=Department">▾</a> </th>

				<th><a>Begintime</a><a class="aa" href="applicationAfterOrder.php?order=Begintime">▴</a><a class="aa" href="applicationAfterOrderdes.php?order=Begintime">▾</a> </th>

				<th><a>Days</a><a class="aa" href="applicationAfterOrder.php?order=Days">▴</a><a class="aa" href="applicationAfterOrderdes.php?order=Days">▾</a> </th>

				<th>Reason</th>
				<th><a>Applytime</a><a class="aa" href="applicationAfterOrder.php?order=Applytime">▴</a><a class="aa" href="applicationAfterOrderdes.php?order=Applytime">▾</a> </th>

				<th><a>Status</a><a class="aa" href="applicationAfterOrder.php?order=Status">▴</a><a class="aa" href="applicationAfterOrderdes.php?order=Status">▾</a> </th>

				<th><a>Checker</a><a class="aa" href="applicationAfterOrder.php?order=Checker">▴</a><a class="aa" href="applicationAfterOrderdes.php?order=Checker">▾</a> </th>
			</tr>
		</thead>

		<?php 
			$i=1; 
			$result = $db->query($sql);
			while ($row = mysqli_fetch_array($result)) { ?>

			<tr>
				<td> <?php echo $i; ?> </td>
				<td><?php echo $row['username']; ?></td>
				<td><?php echo $row['department']; ?></td>
				<td><?php echo $row['begintime']; ?></td>
				<td><?php echo $row['days']; ?></td>
				<td><?php echo $row['reason']; ?></td>
				<td><?php echo $row['applytime']; ?></td>
				<td><?php echo $row['status']; ?></td>
				<td><?php echo $row['checker']; ?></td>
			</tr>
			
		<?php $i++;} ?> 
	</table> 
</div>
</body>
</html>