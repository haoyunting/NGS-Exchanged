<?php 
// Start up your PHP Session
session_start();

include('config.php');

// username and password sent from form login.php
$myusername=$_POST['username'];
$mypassword=$_POST['password'];


$sql="SELECT * FROM staff WHERE username='$myusername' and password='$mypassword'";

$result=mysql_query($sql);
$rows=mysql_fetch_array($result); //fetch record row
$user_name=$rows['username'];
$user_id=$rows['password'];
$user_level=$rows['Level'];
	
// mysql_num_row is counting table row
$count=mysql_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1){
		
$_SESSION["Login"] = "YES";
 
// Add user information to the session (global session variables)
$_SESSION['USER'] = $user_name;
$_SESSION['ID'] = $user_id;
$_SESSION['LEVEL'] = $user_level;
header("location:document_level.php");
/*echo "<p><a href='document_level.php'><h1>You are now correctly logged in</h1></a></p>";*/

 
}

//if wrong username and password
else {

$_SESSION["Login"] = "NO";
 
echo "<h1>Incorrect username or password </h1>";
echo "<p><a href='login.html'> restart to login</a></p>";
}



?>
		 
	  

 
