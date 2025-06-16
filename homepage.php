<?php
session_start();
require 'connect.php';
if (!isset($_SESSION['uid'])) {
    header('Location: index.php');
    exit;
}
$name = $_SESSION['name'] ?? 'User';
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Home</title>
</head>
<body>
  <div style="text-align:center;padding:15%;">
    <p style="font-size:50px;font-weight:bold;">Hello <?= htmlspecialchars($name) ?></p>
    <a href="logout.php">Logout</a>
  </div>
</body>
</html>