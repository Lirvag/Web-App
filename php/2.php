<!DOCTYPE html>
<html>
<head>
<title>Формуляр</title>
<meta charset = "utf-8">
</head>
<body>
<?php
$ime=$email=$datta=$comment=$pol="";
if($_SERVER["REQUEST_METHOD"]=="POST"){
  $ime=test_input($_POST["ime"]);
  $email=test_input($_POST["email"]);
  $datta=test_input($_POST["datta"]);
  $comment=test_input($_POST["comment"]);
  $pol=test_input($_POST["pol"]);
  }
  
  function test_input($d){
   $d=trim($d);
   $d=stripslashes($d);  // tazi funkciq vizualizra dannite w web sever
   $d=htmlspecialchars($d); //preobrazuva specialni znaci w html obekti
   return $d;
  }
?>

<h2>PHP Регистрация</h2>
     <form method="post" action="form.php">
     <table>
<tr>
     <td>Собствено име:</td>
     <td><input type ="text" name="ime"></td>
</tr>
<tr>
     <td>E-MAIL:</td>
     <td><input type="text" name"email"></td>
</tr>
<tr>
     <td>Дата:</td>
     <td><input type ="text" name="datta"></td>
</tr>
<tr>
     <td>Коментар:</td>
     <td><textarea name="comment" rows="4" cols="20"></textarea></td>
</tr>
<tr>
     <td>Пол:</td>
     <td><input type ="radio" name="pol" value="femal">ЖЕНА<br>
	 <input type = "radio" name="pol" value="male">МЪЖ</td>
</tr>

<tr>
     <td colspan = "2">
<center>
     <input type="submit" name = "submit" value = "ИЗПРАТИ">
</center>
</td>
</tr>

</table>
</form>
<?php
echo"<h2>Въведете данни от формуляра са:</h2><br>";
echo"Собствено име: ".$ime;
echo"<br>";
echo "E-MAIL: ".$email;
echo"<br>";
echo"ДАТА: ".$datta;
echo"<br>";
echo"КОМЕНТАР: ".$comment;
echo "<br>";
echo"ПОЛ: " .$pol;
echo"<br>";


?>

</body>
</html>