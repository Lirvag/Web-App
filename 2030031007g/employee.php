<?php
session_start();
include "db.php";
if(isset($_GET['pers_id']))
{
	if(!isset($_SESSION['admin']))
	{
		header("location: login.php");
		exit();
	} else if (!isset($_SESSION['admin'])) {
        header("location: login1.php");
        exit();
    }
	$query = "DELETE FROM employee WHERE pers_id = ".$_GET['pers_id'];
	if(mysqli_query($link,$query))
		   $message = "The Employe is successfully deleted";
	   else 
		   $message = "Error";
  
}
?>

<html>
<head>
<title>Rooms</title>
<link href = "site.css" rel="stylesheet" type="text/css" />
          <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body>



<div id="main">
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
<h2>Information about employees in the company</h2>
<?php if (isset($message)) echo $message; ?>
<table border = "1">
<tr>
    <th style = "background-color:987F28">Employee number</th>
	 <th style = "background-color:987F34">Name</th>
	  <th style = "background-color:987F40">Sirname</th>
	   <th style = "background-color:998F50">Family name</th>
	   <th style = "background-color:999F56">Gender</th>
	   <th style = "background-color:A0BD5B">Birthday</th>
	   <th style = "background-color:999F56">Cityy</th>
	   <th style = "background-color:998F50">Street</th>
	   <th style = "background-color:987F40">Phone</th>
	   <th style = "background-color:987F34">Department number</th>
	   <th style = "background-color:987F38">Room number</th>
	   <?php
			     if(isset($_SESSION['admin']))
				 {
			?>
	   <th style = "background-color:coral" >Edit</th>
	   <th style = "background-color:red" >Delete</th>
	   <?php
				 } else if(isset($_SESSION['admin'])) 
                   {
				 ?>
                  <th style = "background-color:coral">Edit</th>
                  <?php 
                   }
                   ?>
                 
</tr>
<?php
	
	$query = "SELECT * FROM employee";
	if($result = mysqli_query($link,$query))
	{
		
		while($row = mysqli_fetch_assoc($result)) {
			?>
			
			<tr>
			
			<td><?php echo $row['pers_id']; ?></td>
			<td><?php echo $row['first']; ?></td>
			<td><?php echo $row['father']; ?></td>
			<td><?php echo $row['last']; ?></td>
			<td><?php echo $row['sex']; ?></td>
			<td><?php echo $row['b_day']; ?></td>
			<td><?php echo $row['city']; ?></td>
			<td><?php echo $row['street']; ?></td>
			<td><?php echo $row['phone']; ?></td>
			<td><?php echo $row['depart_id']; ?></td>
			<td><?php echo $row['room_id']; ?></td>
			<?php
			     if(isset($_SESSION['admin']))
				 {
			?>
			    <td>
                       <a href = "edit_employee.php?pers_id=<?php echo $row['pers_id'];?>">Edit</a></td>
			      <td>
                    <style>
                             a {color:C40707;}
                     </style>
                       <a href="employee.php?pers_id=<?php echo $row['pers_id'];?>">Delete</a></td>
		         <?php
				        } else if(isset($_SESSION['admin'])) 
                    {
		               ?>
                 <td>
                    <style>
                              a {color:C40707;}
                     </style>
            <a href = "edit_employee.php?pers_id=<?php echo $row['pers_id'];?>">Edit</a></td>
            
			<?php
                 }
				 ?>
			</tr>
			<?php
		}
	}
	else {
		?>
		<tr><td colspan = '12' align = 'center'>No rcords</td></tr>
		<?php
	}
	?>
	<?php
			     if(isset($_SESSION['admin']))
				 {
			?>
	 <tr>
	        <td colspan = '12' align='center'>
			   <a href="add_employee.php">Add new employee</а>
			   </td>
	 </tr>
	 <?php
				 } else if (isset($_SESSION['admin'])){
				 ?>
                 <tr>
	        <td colspan = '12' align='center'>
			   <a href="add_employee.php">Add new employee</а>
			   </td>
	 </tr>
     <?php
     }
?>	
    </table>
	</center>
	</div>
	</div>
    </div>
    
	</body>
	</html>
