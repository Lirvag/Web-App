<?php
session_start();
if(!isset($_SESSION['admin'])){
	
	header("location: login.php");
	exit();
}
	include "db.php";
if(!empty($_POST))
{

	$query = "UPDATE rooms
SET room_id = '".$_POST["room_id"]."',
floor = '".$_POST["floor"]."',
l_r = '".$_POST["l_r"]."',
square_surface =  '".$_POST["square_surface"]."'
WHERE room_id = " .$_GET['room_id'];
if($result = mysqli_query($link,$query))
	$message = "Information is edited succesfully";
else
	 $message = "Error by editing";
 
}

if(isset($_GET["room_id"])&&  $_GET["room_id"]>0) {
	
	$query = "SELECT * FROM rooms WHERE room_id = ".$_GET['room_id'];
	if($result = mysqli_query($link,$query))
		$data = mysqli_fetch_assoc($result);
	else $message = "Room with this number,doesn't exist";
}

?>

<html>
<head>
       <title>Edit new working room</title>
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
		   <h2>Edit new working room</h2>
		   <?php if(isset($message))echo $message;?>
		   <form action = "edit_room.php?room_id=<?php echo $_GET['room_id'];?>" method = "post"> 
		   <table border = "1">
		   <tr>
		      <td>Room number</td>
			  <td><input type = "text" name = "room_id" value="<?php echo $data["room_id"];?>"/></td>
			  
			</tr>
			<tr>
               <td>Floor</td>
               <td><input type = "text" name = "floor" value="<?php echo $data["floor"];?>"/></td>	
             </tr>
            <tr>
			    <td>Left/Right</td>
				<td><input type = "text" name = "l_r" value="<?php echo $data["l_r"];?>"/></td>
            </tr>			
			<tr>
			  <td>Qadratity</td>
			  <td><input type = "text" name = "square_surface" value="<?php echo $data["square_surface"];?>"/></td>
			  
			 </tr>
            <tr>
               <td colspan = '2' align = 'center' ><input type = "submit" value = "EDIT" /></td>
            </tr>			   
			</table>
			</form>
			</center>
			</div>
			</body>
			</html>