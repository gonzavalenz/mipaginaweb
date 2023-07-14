<?php
$servername = "localhost";
$database = "mipaginaweb";
$username = "id20690161_messi";
$password = "Messi912$";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Error de conexión: " . mysqli_connect_error());
}

?>