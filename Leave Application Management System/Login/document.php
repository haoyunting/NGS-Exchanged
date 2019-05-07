<?php
// Start up your PHP Session
session_start();

// If the user is not logged in send him/her to the login form
if ($_SESSION["Login"] != "YES") {
header("Location: login.php");
 
 }
?>
<html>
<head>
<title>Document</title>
</head>
<body>
 
 <div align="center">
		<h2>All Logged In User Can View This Page</h2>
	<p>
	
 <?php
 echo '<p>Sorry, '.$_SESSION['USER']; 
 echo "<h1>Incorrect username or password</h1>";
 echo "<p><a href='login.html'> return to login </a></p>";
 
 ?>
</form>
</body>
</html>