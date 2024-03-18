<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: auth_form.php");
    exit();
}

$medication = $_POST['medication'];
$quantity = $_POST['quantity'];

// Здесь можно добавить логику обработки заказа, например, сохранение в базе данных или отправку на сервер аптеки

// После обработки заказа перенаправляем обратно на главную форму
header("Location: index.php");
exit();
?>