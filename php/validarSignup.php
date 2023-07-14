<?php
require 'database.php';

session_start();

// Obtener los datos enviados por el formulario
$username = $_POST['username'];
$pais = $_POST['pais'];
$email = $_POST['email'];
$password = $_POST['contrasena'];
$confirmPassword = $_POST['confirmacion_contrasena'];
$message = 'ok';

// Verificar si los campos están vacíos
if (empty($username) || empty($pais) || empty($email) || empty($password) || empty($confirmPassword)) {
    $message = "Por favor, complete todos los campos.";
    header("Location: /mipaginaweb/pages/signup.php");
}

// Verificar si las contraseñas coinciden
if ($password !== $confirmPassword) {
    $message = "Las contraseñas no coinciden.";
    header("Location: /mipaginaweb/pages/signup.php");
}

// Verificar si el nombre de usuario o el correo electrónico ya existen
$query = "SELECT * FROM usuarios WHERE username = '$username' OR email = '$email'";
$result = mysqli_query($conn, $query);
if (mysqli_num_rows($result) > 0) {
    $message = "El nombre de usuario o el correo electrónico ya están en uso.";
    header("Location: /mipaginaweb/pages/signup.php");
}

// Verificar si el país existe en la tabla de paises
$query = "SELECT * FROM paises WHERE id = '$pais'";
$result = mysqli_query($conn, $query);
if (mysqli_num_rows($result) == 0) {
    $message = "El país seleccionado no es válido.";
    header("Location: /mipaginaweb/pages/signup.php");
}

// Hashear la contraseña
$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

// Insertar el nuevo usuario en la base de datos
$query = "INSERT INTO usuarios (username, pais_id, email, contrasena) VALUES ('$username', '$pais', '$email', '$hashedPassword')";
if (mysqli_query($conn, $query)) {
    header("Location: /mipaginaweb/pages/login.php");
} else {
    $_SESSION['message'] = "No es posible el registro del usuario.";
    header("Location: /mipaginaweb/pages/signup.php");
}

mysqli_close($conn);
exit;
?>
