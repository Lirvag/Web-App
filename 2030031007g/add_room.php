<?php
  session_start();
  if(!isset($_SESSION['admin'])){
	
	header("location: login.php");
	exit();
}
if(!empty($_POST))
{
	include "db.php";
	$query = "INSERT INTO rooms(room_id,floor,l_r,square_surface)
VALUES('".$_POST["room_id"]."','".$_POST["floor"]."','".$_POST["l_r"]."',
'".$_POST["square_surface"]."')";
if($result = mysqli_query($link,$query))
	$message = "working room is added succesfully";
else
	 $message = "Error by adding";
 
}

?>

<html>
<head>
       <title>Adding new working room</title>
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
           <div id ="logB">
  <?php include "LogButton.php"?>
</div>
		   <h2>Adding new working room</h2>
		   <?php if(isset($message))echo $message;?>
		   <form method = "POST" action = "add_room.php">
		   <table border = "1">
		   <tr>
		      <td>Room number</td>
			  <td><input type = "text" name = "room_id"/></td>
			  
			</tr>
			<tr>
               <td>Floor</td>
               <td><input type  "text" name = "floor"/></td>	
             </tr>
            <tr>
			    <td>Left/Right</td>
				<td><input type = "text" name = "l_r"/></td>
            </tr>			
			<tr>
			  <td>Qadrature</td>
			  <td><input type = "text" name="square_surface"/></td>
			  
			 </tr>
            <tr>
               <td colspan = '2' align = 'center' ><input type = "submit" value = "ADD" /></td>
            </tr>			   
			</table>
			</form>
			</center>
			</div>
			</body>
			</html>