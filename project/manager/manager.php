<?php
session_start();
    function Output(){
    	
        echo $_SESSION['USER']; 
     }
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset='UTF-8'/>
	<title>manager</title>
	<link rel="stylesheet" type="text/css" href="css/manager.css">
</head>
<body>
	<div align="center">
		<br>
		<h2 style="letter-spacing: 0.3em;">HELLO,<?php Output();?>!</h2>
		<br>
		<h3>You can operate...</h3>
	</div>  
	<br><br>
	<div class="content">

		<div class="content_item">
			<div><img src="images/3.svg"></div>
			<div><span>Approval</div>
			<a href="Approval.php" class="enter_but">ENTER</a>
		</div>

		<div class="content_item">
			<div><img src="images/2.svg"></div>
			<div><span>All Application</span></div>
			<a href="view.php" class="enter_but">ENTER</a>
		</div>

		<div class="content_item">
			<div><img src="images/1.svg"></div>
			<div><span>Manager information</span></div>
			<a href="information.php?username=<?php echo Output();?>" class="enter_but">ENTER</a>
		</div>

	</div>

	<div class="footer">
		<p><b class="foot">Write By : ChenRuoFan & DingLu &  ZhangJiaWang &  HaoYunTing</b></p>
	</div>
</body>
</html>