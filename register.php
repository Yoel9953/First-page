<?php
session_start();
require 'connect.php';

/* ========== REGISTRO ========== */
if (isset($_POST['signUp'])) {
    $first = trim($_POST['fName'] ?? '');
    $last  = trim($_POST['lName'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $pass  = $_POST['password']   ?? '';

    if ($first === '' || $email === '' || $pass === '') {
        exit('Faltan campos');
    }

    // ¿email ya existe?
    $stmt = $conn->prepare('SELECT 1 FROM users WHERE email = ?');
    $stmt->bind_param('s', $email);
    $stmt->execute();
    if ($stmt->get_result()->num_rows) {
        exit('El correo ya está registrado');
    }
    $stmt->close();

    // insertar
    $hash = password_hash($pass, PASSWORD_DEFAULT);
    $stmt = $conn->prepare(
      'INSERT INTO users (firstName, lastName, email, passHash)
       VALUES (?,?,?,?)'
    );
    $stmt->bind_param('ssss', $first, $last, $email, $hash);
    $stmt->execute();

    header('Location: index.php?ok=signup');
    exit;
}

/* ========== LOGIN ========== */
if (isset($_POST['signIn'])) {
    $email = trim($_POST['email']    ?? '');
    $pass  = $_POST['password']      ?? '';

    $stmt = $conn->prepare(
      'SELECT id, firstName, lastName, passHash FROM users WHERE email = ?'
    );
    $stmt->bind_param('s', $email);
    $stmt->execute();
    $res = $stmt->get_result();

    if ($row = $res->fetch_assoc()) {
        if (password_verify($pass, $row['passHash'])) {
            $_SESSION['uid']  = $row['id'];
            $_SESSION['name'] = $row['firstName'].' '.$row['lastName'];
            header('Location: homepage.php');
            exit;
        }
    }
    exit('Correo o contraseña incorrectos');
}
?>