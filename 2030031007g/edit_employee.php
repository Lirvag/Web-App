<?php
session_start();
if(!isset($_SESSION['admin'])){
	
	header("location: login.php");
	exit();
} else if(!isset($_SESSION['admin'])){
    header("location: login.php");
	exit();
}
	include "db.php";

if(!empty($_POST))
{

	$query = "UPDATE employee
SET first = '".$_POST["first"]."',
father = '".$_POST["father"]."',
last = '".$_POST["last"]."',
sex = '".$_POST["sex"]."',
b_day = '".$_POST["b_day"]."',
city = '".$_POST["city"]."',
street = '".$_POST["street"]."',
phone = '".$_POST["phone"]."',
depart_id = '".$_POST["depart_id"]."',
room_id = '".$_POST["room_id"]."'

WHERE pers_id = " .$_GET['pers_id'];
if($result = mysqli_query($link,$query))
	$message = "Information is edited succesfully";
else
	 $message = "Error by editing";
 
}

if(isset($_GET["pers_id"])&&  $_GET["pers_id"]>0) {
	
	$query = "SELECT * FROM employee WHERE pers_id = ".$_GET['pers_id'];
	if($result = mysqli_query($link,$query))
		$data = mysqli_fetch_assoc($result);
	else $message = "Employee with this number,doesn't exist";
}

?>

<html>
<head>
       <title>Edit new employee</title>
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
		   <h2>Edit new employee</h2>
		   <?php if(isset($message))echo $message;?>
		   <form action = "edit_employee.php?pers_id=<?php echo $_GET['pers_id']; ?>" method = "post" >
		   <table border="1">
		  <tr>
               <td>Name</td>
                <td><input type = "text" name = "first" value="<?php echo $data["first"];?>"/></td>
             </tr>
            <tr>
			    <td>Sirname</td>
				 <td><input type = "text" name = "father" value="<?php echo $data["father"];?>"/></td>
            </tr>			
			<tr>
			  <td>Family name</td>
			   <td><input type = "text" name = "last" value="<?php echo $data["last"];?>"/></td>
			  
			 </tr>
			 <tr>
			  <td>Gender</td>
			   <td><input type = "text" name = "sex" value="<?php echo $data["sex"];?>"/></td>
			  
			 </tr>
			 <tr>
			  <td>Birthday</td>
			   <td><input type = "text" name = "b_day" value="<?php echo $data["b_day"];?>"/></td>
			  
			 </tr>
			 <tr>
			  <td>City</td>
			   <td><input type = "text" name = "city" value="<?php echo $data["city"];?>"/></td>
			  
			 </tr>
			 <tr>
			  <td>Street</td>
			   <td><input type = "text" name = "street" value="<?php echo $data["street"];?>"/></td>
			  
			 </tr>
			 <tr>
			  <td>Phone</td>
			  <td><input type = "text" name = "phone" value="<?php echo $data["phone"];?>"/></td>
			  
			 </tr>
			 <tr>
			  <td>Department number</td>
			   <td><input type = "text" name = "depart_id" value="<?php echo $data["depart_id"];?>"/></td>
			  
			 </tr>
			 <tr>
			  <td>Room number</td>
			  <td><input type = "text" name = "room_id" value="<?php echo $data["room_id"];?>"/></td>
			  
			 </tr>
            <tr>
               <td colspan = '11' align = 'center' ><input type = "submit" value = "EDIT" /></td>
            </tr>			   
			</table>
			</form>
			</center>
			</div>
			</div>
			</body>
			</html>