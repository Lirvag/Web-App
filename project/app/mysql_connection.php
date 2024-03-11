<?php
$user = 'root';
$pass = '';
$dbh = new PDO('mysql:host=localhost;dbname=test', $user, $pass);


function query($sql, $data = []) {
    global $dbh;
    $stmt= $dbh->prepare($sql);
    $result = $stmt->execute($data);
    return $result ? $stmt->fetchAll() : false;
}
?>
