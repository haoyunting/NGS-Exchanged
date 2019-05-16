<?php
session_start();
    function Output(){
    	
        echo $_SESSION['USER']; 
     }
?>


<!DOCTYPE html>

<html>
<head>
	<meta charset="UTF-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>
	<div>
		<div class="text1">
			<p class="p1">H E L L O , <?php Output();?></p>
		</div>

		<div class="text2">
			<p class="p2"><b>Dear <?php Output();?>, What do you want to do?</b></p>
		</div>
	</div>

	<div class="content">
		<div class="content_item content_1">
			<div><img src="images/1.svg"></div>
			<div><span>Staff Information</span></div>
			<a href="staffList.php" class="enter_but">ENTER</a>
		</div>

		<div class="content_item content_2">
			<div><img src="images/2.svg"></div>
			<div><span>All Application</span></div>
			<a href="applicationList.php" class="enter_but">ENTER</a>
		</div>

		<div class="content_item content_4">
			<div><img src="images/4.svg"></div>
			<div><span>Log Out</span></div>
			<a href="../login/Login/login.html" class="enter_but">ENTER</a>
		</div>

	</div>

	<!-- footer -->
	<div class="footer">
		<br>
		<p><b>Write By : ChenRuoFan | DingLu | ZhangJiaWang | HaoYunTing</b></p>
	</div>
</body>
</html>