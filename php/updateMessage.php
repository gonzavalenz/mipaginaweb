<?php

include 'database.php';

session_start();

$messageId = $_POST["messageId"]; 
$message = $_POST["message"];

$query = "UPDATE mensajes SET mensaje = '$message' WHERE id_mensaje = '$messageId';";

if (!mysqli_query($conn, $query)) {
    $_SESSION['messageInfoUD'] = "No se puede actualizar el mensaje en este momento."; 
} else {
    $_SESSION['messageInfoUD'] = "Mensaje actualizado con éxito.";
}

header('Location: ../pages/contacto.php');
exit;

?>
