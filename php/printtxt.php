<!DOCTYPE>
<html>
<head>
<title>Print txt</title>
<meta charset="utf-8">
</head>
<body>
<?php
	if(!isset($_POST['submit']))
		header('localhost:formtxt.php');
	else
	{$name=$_POST['name'];
	$lname=$_POST['lname'];
	$spec=$_POST['spec'];
	$kurs=$_POST['kurs'];
	
	$zapis=$name."\t".$lname."\t".$spec."\t".$kurs."\n";
	
	if(!file_exists("student.txt"))
	{$f=fopen("student.txt","w");}
	else
	{$f=fopen("student.txt","a");}
	
	fwrite($f,$zapis);
	fclose($f);
	echo '<b>Въвеждането е успешно!</b>';
	foreach($_SERVER as $key => $value)
		echo $key.'-->'.$value.'<br>';
	}
	include('formtxt.php');
?>



</body>
</html>