<!DOCTYPE html>
<html>
<body>
<h1>My first php page</h1>
<p>
<?php
echo"Hello World";
$txt = "Приятни забавления с PHP.";
echo "<p>I love $txt.</p>";
echo "Обичам - ".$txt."<br>";
$x = 4;
$y = 2;
echo "Оценка (".$x + $y.")<br>";
function myTest(){
	global $x;
	$t = 5;
	echo "<p>Променливата t е вътрешна функция:$t</p>";
	echo $t + $x;
}
myTest();
echo"<p>Променливата t е външна функция: $t</p>";
$cars = array("Opel","BMW","VW","Renaut","Audi");
var_dump($cars);
echo "<br>";
$fname = "Иван";
$lname = "Иванов";
echo "Твоето име е - ".$fname." ".$lname.".";
echo"<br>";
echo"Любимата ми кола е: ".$cars[4];
echo "<br>";
$men = array('Fname'=>'Мая','Lname'=>'Иванова','Age'=>'25');
echo "Твоята възраст е: ".$men['Age'];
echo"<br>";
echo "Твоето име е:".$men['Fname']." ".$men['Lname'].".";
echo "<br>";
echo "Твоето име е ".$men['Fname']." ".$men['Lname']." и твоята възраст е ".$men['Age']." години.";
echo "<br>";

define("gree","Welcome!");
echo gree;
echo "<br>";

$age=array("Peter"=>"35","Ivan"=>"37","Qna"=>"23","Iva"=>"19");
ksort($age);
foreach($age as $key=>$x_value) {
	echo "Колегата ".$key." е на възраст - ".$x_value;
	echo"<br>";
}




?>
</p>
</body>
</html>
