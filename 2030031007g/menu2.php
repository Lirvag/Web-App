<?php
	 if(isset($_SESSION['admin']))
	 {
?>

<style>
img {
  padding-bottom: 0px;
  padding-right: 0px;
  
}
</style>
<img src="Theatro.jpg"  width="100" height="90">

<a href = "add_room.php" ><style>
a {
    animation-name: mymoves;
    animation-duration:3s;
    animation-fill-mode: forwards;
    
}
@keyframes mymoves {
  from {top: 0px;}
  to {top: 200px;}
}
</style>Add new room</a> 
<a href = "add_employee.php">Add new Employee</a> 
<a href = "add_department.php">Add new Department</a>


 <?php
 } else if (isset($_SESSION['user'])){
     
 ?>

<style>
img {
  padding-bottom: 0px;
  padding-right: 0px;
  
}
</style>


<a href = "add_room.php" ><style>
a {
    animation-name: mymoves;
    animation-duration:3s;
    animation-fill-mode: forwards;
    
}
@keyframes mymoves {
  from {top: 0px;}
  to {top: 200px;}
}
</style>Add new room</a> 
<a href = "add_employee.php">Add new Employee</a> 
<a href = "add_department.php">Add new Department</a>


 <?php
 
 }
 ?>
 