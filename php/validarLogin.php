<?php
require 'database.php';

session_start();

// Obtener los datos enviados por el formulario
$username = $_POST['username'];
$password = $_POST['contrasena'];
$message = '';

// Verificar si los campos están vacíos
if (empty($username) || empty($password)) {
    $message = "Por favor, complete todos los campos.";
    header("Location: /mipaginaweb/pages/login.php");
    exit;
}

// Verificar si el usuario existe en la base de datos
$query = "SELECT * FROM usuarios WHERE username = '$username'";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) == 0) {
    $_SESSION['message'] = "Usuario o contraseña inválido.";
    header("Location: /mipaginaweb/pages/login.php");
    exit;
}

// Obtener los datos del usuario
$row = mysqli_fetch_assoc($result);
$hashedPassword = $row['contrasena'];

// Verificar la contraseña
if (!password_verify($password, $hashedPassword)) {
    $_SESSION['message'] = "Usuario o contraseña inválido.";
    header("Location: /mipaginaweb/pages/login.php");
    exit;
} else {
    $flag = true;
}

if ($flag) {
    $_SESSION['username'] = $username;
    header("Location: /mipaginaweb/pages/home.php");
    exit;
}



?>
