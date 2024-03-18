<?php
session_start();

$username = $_POST['username'];
$password = $_POST['password'];

// Проверка данных пользователя (здесь я использую простое сравнение с данными из текстового файла)
$users = file("users.txt", FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
foreach ($users as $user) {
    list($stored_username, $stored_password) = explode(':', $user);
    if ($username === $stored_username && $password === $stored_password) {
        $_SESSION['username'] = $username;
        header("Location: index.php");
        exit();
    }
}

// Если вход неудачный, перенаправляем обратно на форму входа с сообщением об ошибке
header("Location: auth_form.php?error=1");
exit();
?>