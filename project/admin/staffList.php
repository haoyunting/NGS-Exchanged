<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>CRUD:CReate,UPdate,DElete PHP MySQL</title>
	<link rel="stylesheet" type="text/css" href="staffList.css">

	<?php 
		 $db = mysql_connect("localhost","zj","201901f10075");
         mysql_select_db("db_zj", $db);
		 $sql = "select * from staff";
		 $result = mysql_query($sql,$db);
	?>
</head>
<body>
<div class="conter">
	<a href="index.php"><img src="images/5.svg" class="return"></a>
	<a href="addStaff.php"><img src="images/6.svg" class="add"></a>

	<table>
		<thead>
			<tr>
	   			<th>N O . </th>
	    		<th><a href="">n a  m e</a><a class="aa" href="staffAfterOrder.php?order=username"> ▴ </a><a class="aa" href="staffAfterOrderdes.php?order=username"> ▾ </a></th>
	    		<th>P a s s w o r d</th>
	    		<th><a href="">L e v e l</a><a class="aa" href="staffAfterOrder.php?order=level"> ▴ </a><a class="aa" href="staffAfterOrderdes.php?order=level"> ▾ </a></th>
	    		<th><a href="">D e p a r t</a><a class="aa" href="staffAfterOrder.php?order=department"> ▴ </a><a class="aa" href="staffAfterOrderdes.php?order=department"> ▾ </a></th>
	    		<th>A c t i o n </th>
  			</tr>
		</thead>
		<?php $i=1; while($attr = mysql_fetch_array($result)){?>
			<tr>
				<td><?php echo $i; ?></td>
				<td><?php echo $attr[1]; ?></td>
				<td><?php echo $attr[2]; ?></td>
				<td><?php echo $attr[3]; ?></td>
				<td><?php echo $attr[4]; ?></td>
				<td>
					<a href='editStaff.php?id=<?php echo $attr[0]; ?>' class="edit_btn"><u>Edit</u></a>
				
					<script type="text/javascript">
						function del() {
							var msg = "\n**************Are you sure you want to delete？***********\n\n*************Once deleted,it cannot be restored！*********";
							if (confirm(msg)==true){
								return true;
							}else{
								return false;
							}
						}
					</script>

					<a href="server_staff.php?del=<?php echo $attr[0]; ?>" onclick="javascript:return del();" class="del_btn"><u>Delete</u></a>
				</td>
			</tr>
		<?php $i++;} ?> 
	</table> 




</div>
</body>
</html>