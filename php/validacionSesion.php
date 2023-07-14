<?php

// Valida que exista la variable de session 'username', en el caso de ser incorrecto te redirige a la pagina de login

session_start();

if (!isset($_SESSION['username'])) {
    // El usuario no ha iniciado sesión
    header("Location: ../pages/login.php");
    exit;
}

?>