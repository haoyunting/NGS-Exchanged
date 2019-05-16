<!DOCTYPE html>
<html>
  <head>
    <meta charset='UTF-8'/>
    <title>information</title>
    <link rel="stylesheet" type="text/css" href="css/information.css">
  </head>
  <body>
  	<div>
  		<a href="#"  onclick="JavaScript:window.history.back();" ><img src="images/return.png" /></a>
  		<span class="title">Information Page</span>
  		<span class="user">user:&nbsp;&nbsp;
  			<img src="images/3.jpeg" class="userimg">&nbsp;
  			<a href="manager.html"><img src="images/4.svg" class="logout" /></a>
  			</span>
  	</div>
  	<br/><br/>
    <h3 align="center">You can change your information!</h3>
  	
  	<div id="inf">
        <?php
          $username=$_GET['username'];
          $db = mysql_connect("localhost","zj","201901f10075");
          mysql_select_db("db_zj", $db);
          $sql = "SELECT * FROM staff where username='$username'";
          $result = mysql_query($sql,$db);
          
         while($attr = mysql_fetch_array($result)){
      if($attr[1]==$username){
        $id=$attr[0];
        $password=$attr[2];
        $level=$attr[3];
        $department=$attr[4];
      }
      

            ?>
              <form method="post" action="change-inf.php">
                <table class="basic" cellspacing="0">
                  <tr>
                    <td><label>Username:</label></td>
                    <td>
                      <input type="hidden" name="id" value="<?php echo $attr[0]; ?>">        
                      <input type="text" name="username" value="<?php echo $attr[1]; ?>">
                    </td>
                  </tr>
                  <tr>
                    <td><label>Password:</label></td>
                    <td>
                      <input type="text" name="password" value="<?php echo $attr[2]; ?>">
                    </td>
                  </tr>
                  <tr>
                    <td><label>Stafflevel:</label></td>
                    <td>
                      <input type="text" name="level" value="<?php echo $attr[3]; ?>">
                    </td>
                  </tr>
                  <tr>
                    <td><label>Department:</label></td>
                    <td>
                      <input type="text" name="department" value="<?php echo $attr[4]; ?>">
                    </td>
                  </tr>
                  <tr style="line-height: 40px;">
                  <td colspan="2"><button class="btn1"  onclick="{location.href='change-inf.php?username=<?php echo $username;?>'}">save</button></td>      
                </tr>
                </table> 
            </form>
        <?php  } ?>
      
    </div>  
  </body>
</html>
