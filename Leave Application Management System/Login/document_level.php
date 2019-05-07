<?php
// Start up your PHP Session
session_start();
if ($_SESSION["LEVEL"] == Admin) { 
 
 echo '<p>Welcome, '.$_SESSION['USER']; 
 echo '<p>You are user level is:'.$_SESSION['LEVEL'];
  echo "<p><a href='../admin/index.html'>Admin Page</a></p>";  


 }
  
// If the user is not logged in send him/her to the login form
else if ($_SESSION["LEVEL"] == Manager) {
	
 echo '<p>Welcome, '.$_SESSION['USER']; 
 echo '<p>You are user level is: '.$_SESSION['LEVEL'];
 echo "<p><a href='https://my.utm.my/'>Manager Page</a></p>";  //need to modify
	 
  
 }
 else{
 echo '<p>Welcome, '.$_SESSION['USER']; 
 echo '<p>You are user level is: '.$_SESSION['LEVEL'];
 echo "<p><a href='https://github.com/'>Staff Page</a></p>";  //need to modify
 }
 
  
 ?>
 
 
 
 