<!DOCTYPE html>
<html>
<head>
	<title>index</title>
	<link rel="stylesheet" type="text/css" href="../CSS/index.css">

	<?php
		if(isset($_GET['username'])){
			$username=$_GET['username'];

		}
		$username="ding";
	?>
</head>
<body>
	<div class="text2">
		<p><b><span class="p1"> Office System</span><br><span class="p2">Dear <?php echo $username;?>, what do you want to do?</span></b></p>
	</div>

	<div class="content">
		<div class="content_item content_1">
			<div><img src="../images/personal.png"></div>
			<div><span>Personal information</span></div>
			<a href="personal0.php?username=<?php echo $username;?>" class="enter_but">View</a>
		</div>

		<div class="content_item content_2">
			<div><img src="../images/apply.png"></div>
			<div><span>Apply for leave</span></div>
			<a href="leave.html" class="enter_but">View</a>
		</div>

		<div class="content_item content_4">
			<div><img src="../images/result.png"></div>
			<div><span>Application result</span></div>		
			<a href="result.php?username=<?php echo $username;?>" class="enter_but">View</a>	
		</div>
	</div>


</body>
</html>