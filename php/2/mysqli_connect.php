<?php
$dbc=@mysqli_connect('localhost','ki3','kl2staq216','3kiz')OR 
		die('Could not connect to MySQL: '.mysqli_connect_error());
mysqli_set_charset($dbc,'utf-8');
