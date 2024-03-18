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
    <title>Pharmacy App - Home</title>
</head>
<body>
    <h2>Welcome, <?php echo $_SESSION['username']; ?></h2>
    <a href="order_form.php">Place an Order</a>
    <br>
    <a href="logout.php">Logout</a>
</body>
</html>