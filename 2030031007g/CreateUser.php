<?php
  session_start();
  if(!isset($_SESSION['admin'])){
	
	header("location: login.php");
	exit();
}
if(!empty($_POST))
{
	include "db.php";
    
    $password = mysqli_real_escape_string($link, $_POST["pass"]);
    $password2 = mysqli_real_escape_string($link, $_POST["pass2"]);
    $type = "user";
      
	$query = "INSERT INTO users(user_id,user,password,type)
    VALUES('','".$_POST['user']."','".md5($_POST['pass'])."','user')";
    
if($password != $password2) {
    $message = "The both passwords doesn't match!!Please try again!";
}
  else if($result = mysqli_query($link,$query))
	$message = "New User is added succesfully";
else
	 $message = "Error by adding";
 
}

?>

<html>
<head>
       <title>Adding new User</title>
	   <link href = "site.css" rel = "stylesheet" type="text/css"/>
	   <meta http-equiv = "Content-Type" content="text/html; charset=utf-8">
	   </head>
	   <body>
	   
	   <div id = "main">
	       <div id = "menu">
		   <?php include "menu.php";?>
		   </div>
           <div id = "menu2">
<?php include "menu2.php";?>
</div>
		   <div id = "content">
		   <center>
		   <h2>Adding new User</h2>
		   <?php if(isset($message))echo $message;?>
		   <form method = "POST" action = "CreateUser.php">
		   <table border = "1">
		   <tr>
		      <td>User</td>
			  <td><input type = "text" name = "user"/></td>
			  
			</tr>
			<tr>
               <td>Password1</td>
               <td><input type  "password" name = "pass"/></td>	
             </tr>
             <tr>
               <td>Password2</td>
               <td><input type  "password" name = "pass2"/></td>	
             </tr>
		
               <td colspan = '2' align = 'center' ><input type = "submit" value = "Create" /></td>
            </tr>			   
			</table>
			</form>
			</center>
			</div>
			</body>
			</html>