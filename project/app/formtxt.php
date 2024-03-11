<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $lname = $_POST['lname'];
    $spec = $_POST['spec'];
    $kurs = $_POST['kurs'];

    $content = $name . "\t" . $lname . "\t" . $spec . "\t" . $kurs . "\n";

    $storage = __DIR__  . '/../storage/student.txt';

    // file_put_contents($storage, $content, FILE_APPEND);
    if (!file_exists($storage)) {
        $f = fopen($storage, "w");
    } else {
        $f = fopen($storage, "a");
    }

    fwrite($f, $content);
    fclose($f);
    
    $saved = true;
}