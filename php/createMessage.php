<?php

include 'database.php';

session_start();

$username = $_SESSION["username"];
$message = $_POST["messageInput"];

$query = "INSERT INTO mensajes (mensaje, username, fecha_hora) VALUES ('$message', '$username', NOW())";

if (!mysqli_query($conn, $query)) {
    $_SESSION['messageInfo'] = "No se pudo guardar el mensaje.";    
} else {
    $_SESSION['messageInfo'] = "Mensaje guardado con éxito.";
}

header('Location: ../pages/contacto.php');

exit;


?>