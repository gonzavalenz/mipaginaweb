<?php


if (isset($_SESSION['username'])) {
    // El usuario ya ha iniciado sesión, redirigir a la página de inicio
    header("Location: /mipaginaweb/pages/home.php");
    exit;
}


?>