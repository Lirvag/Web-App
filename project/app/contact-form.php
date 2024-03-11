<?php
// Валидация на данните
$errors = [];
$inserted = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // дали са попълнени всички нужни полета
    $required_fields = ['name', 'date', 'email', 'phone', 'gender'];
    foreach ($required_fields as $field) {
        if (isset($_POST[$field]) && !$_POST[$field]) {
            $errors[$field][] = "Полето {$field} е задължително";
        }
    }

    // дали са попълнение правилно (имейл)
    if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $errors['email'][] = "Невалиден email  формат!";
    }
    if (isset($_POST['gender']) && $_POST['gender'] != 'male' && $_POST['gender'] != 'female') {
        $errors['gender'][] = "Невалиден пол!";
    }

    /** изчиства данните от входа */
    function saveInput($text)
    {
        return  htmlspecialchars(trim($text));
    }

    // ако няма грешки, продължаваме изпълнението със записа в базата с данни
    if (!empty($errors)) {
        return;
    }
    require 'mysql_connection.php';

    $db = query('insert into messages (name,date,email,phone,gender,comment) VALUES (?,?,?,?,?,?)', [
        saveInput($_POST['name']),
        saveInput($_POST['date']),
        saveInput($_POST['email']),
        saveInput($_POST['phone']),
        saveInput($_POST['gender']),
        saveInput(isset($_POST['comment']) ? $_POST['comment'] : ''),
    ]);
    $inserted = ($db !== false) ? true : false;
}
