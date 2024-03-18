<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: auth_form.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pharmacy App - Order</title>
</head>
<body>
    <h2>Order Form</h2>
    <form action="process_order.php" method="post">
        <label for="medication">Medication:</label><br>
        <input type="text" id="medication" name="medication" required><br>
        <label for="quantity">Quantity:</label><br>
        <input type="number" id="quantity" name="quantity" required><br>
        <input type="submit" value="Submit Order">
    </form>
    <br>
    <a href="index.php">Back to Home</a>
</body>
</html>