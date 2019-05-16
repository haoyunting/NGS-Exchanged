<?php
// Start up your PHP Session
session_start();
if ($_SESSION["LEVEL"] == Admin) { 
 
 echo '<p>Welcome, '.$_SESSION['USER']; 
 }
else{
	echo "it does not work";
}

 ?>
