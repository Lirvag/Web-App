<?php
$dbc=@mysql_connect('localhost','ki3','kl2room216','3kiz') OR die('Could not connect to MYSQL:'.mysqli_connect_error());
mysqli_set_charset($dbc,'utf-8');