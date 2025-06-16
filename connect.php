<?php
$host = 'localhost';
$user = 'root';
$pass = '';       // contraseña vacía en XAMPP
$db   = 'login';  // crea primero la BD 'login'

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die('DB connection failed: ' . $conn->connect_error);
}
$conn->set_charset('utf8mb4');
?>