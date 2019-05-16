<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>CRUD:CReate,UPdate,DElete PHP MySQL</title>
	<link rel="stylesheet" type="text/css" href="applicationList.css">
	<?php 
		session_start();
		$db = mysql_connect("localhost","zj","201901f10075");
	    mysql_select_db("db_zj", $db);
	    $results = mysql_query("SELECT * FROM application",$db);
	    $i=1;
	 ?>

</head>
<body>
<div class="conter">
	<a href="index.php"><img src="images/5.svg" class="return"></a>
	<a href="../manager/Approval.php"><img src="images/7.svg" class="check"></a>

	<table>
		<thead>
			<tr>
				<th>No.</th>
	    		
				<th><a>name</a><a class="aa" href="applicationAfterOrder.php?order=username">▴</a><a class="aa" href="applicationAfterOrderdes.php?order=username">▾</a> </th>

				<th>P a s s w o r d</th>
				
				<th><a>Depart</a><a class="aa" href="applicationAfterOrder.php?order=Department">▴</a><a class="aa" href="applicationAfterOrderdes.php?order=Department">▾</a> </th>

				<th><a>Begintime</a><a class="aa" href="applicationAfterOrder.php?order=Begintime">▴</a><a class="aa" href="applicationAfterOrderdes.php?order=Begintime">▾</a> </th>

				<th><a>Days</a><a class="aa" href="applicationAfterOrder.php?order=Days">▴</a><a class="aa" href="applicationAfterOrderdes.php?order=Days">▾</a> </th>

				<th>Reason</th>
				<th><a>Applytime</a><a class="aa" href="applicationAfterOrder.php?order=Applytime">▴</a><a class="aa" href="applicationAfterOrderdes.php?order=Applytime">▾</a> </th>

				<th><a>Status</a><a class="aa" href="applicationAfterOrder.php?order=Status">▴</a><a class="aa" href="applicationAfterOrderdes.php?order=Status">▾</a> </th>

				<th><a>Checker</a><a class="aa" href="applicationAfterOrder.php?order=Checker">▴</a><a class="aa" href="applicationAfterOrderdes.php?order=Checker">▾</a> </th>
			</tr>
		</thead>
		
		<?php while($row = mysql_fetch_array($results)){ ?>
			<tr>
				<td><?php echo $i; ?> </td>
				<td><?php echo $row['username']; ?></td>
				<td><?php echo $row['password']; ?></td>
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