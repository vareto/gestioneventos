<?php
function cogerConexion() {
    $conn = new mysqli("localhost", "root", "", "events");
    if (mysqli_connect_errno()) {
        printf("Error de conexión: %s\n", mysqli_connect_error());
        exit();
    }
    return $conn;
}
