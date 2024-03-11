<?php
include("head.php");
$ime=$email=$datta=$comment=$pol="";
$imeer=$emailerr=$dattaerr=$polerr="";
if($_SERVER["REQUEST_METHOD"]=="POST"){
if(empty ($_POST["ime"])){
     $imeer="Името е задължително";
}else {$imeer = test_input($_POST["ime"]);
}
if(empty($_POST["email"])){
     $emailerr="E-MAIL e задължителен";
} else {
     $email=test_input($_POST["email"]);
	if (!filter_var($email,FILTER_VALIDATE_EMAIL)){
     $emailerr="Невалиден email  формат!";
	} 
 }
  
 if(empty($_POST["datta"])){
 $dattaerr="Датата е задължителна!";
 }else {
  $datta=test_input($_POST["datta"]);
  }
  if(empty ($_POST["comment"])) {
  $comment = "";
  }else {
  $comment=test_input($_POST["comment"]);
  }
  if(empty($_POST["pol"])) {
  $polerr="Изисква се да изберете пол!";
  }else {
  $pol=test_input($_POST["pol"]);
   }
  }
  
  function test_input($d){
   $d=trim($d);
   $d=stripslashes($d);  // tazi funkciq vizualizra dannite w web sever
   $d=htmlspecialchars($d); //preobrazuva specialni znaci w html obekti
   return $d;
  }
?>

<h2>PHP Регистрация</h2>
<p><span class = "err">*задължително поле</span></p>
     <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
     <table>
<tr>
     <td>Собствено име:</td>
     <td><input type ="text" name="ime">
	 <span class="err">*<?php echo $imeer;?></span>
	 </td>
</tr>
<tr>
     <td>E-MAIL:</td>
     <td><input type="text" name="email">
	 <span class = "err">*<?php echo $emailerr;?></span>
	 </td>
</tr>
<tr>
     <td>Дата:</td>
     <td><input type ="text" name="datta">
	 <span class="err">*<?php echo $dattaerr;?></span>
	 </td>
</tr>
<tr>
     <td>Коментар:</td>
     <td><textarea name="comment" rows="4" cols="20"></textarea></td>
</tr>
<tr>
     <td>Пол:</td>
     <td><input type ="radio" name="pol" value="femal">ЖЕНА<br>
	 <input type = "radio" name="pol" value="male">МЪЖ
	 <span class="err">*<?php echo $polerr;?></span>
	 </td>
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
echo"<h2>Въведете данни от формуляра са:</h2>";
echo"<br>";
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

$content = "<h2>Въведете данни от формуляра са:</h2>
<br>
Собствено име: $ime
<br>
E-MAIL: $email
<br>
ДАТА: $datta
<br>
КОМЕНТАР: $comment
<br>
ПОЛ: $pol
<br>";
if($email != '') {
     file_put_contents('asd.txt', $content);
}
include("foot.php");
?>