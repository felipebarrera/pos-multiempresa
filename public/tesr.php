<?php
$conn = new mysqli('localhost', 'root', '', 'admin_posmultiempresa');
if ($conn->connect_error) {
    die("Error: " . $conn->connect_error);
} else {
    echo "¡Conexión exitosa!";
}