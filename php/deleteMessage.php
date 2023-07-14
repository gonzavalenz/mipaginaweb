<?php

include 'database.php';

session_start();

$messageId = $_POST["deleteMessageId"]; 

$query = "DELETE FROM mensajes WHERE id_mensaje='$messageId';";

if (!mysqli_query($conn, $query)) {
    $_SESSION['messageInfoUD'] = "No se pudo eliminar el mensaje."; 
} else {
    $_SESSION['messageInfoUD'] = "Mensaje eliminado con éxito.";
}

header('Location: ../pages/contacto.php');
exit;

?>
