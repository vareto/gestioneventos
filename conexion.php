<?php
function cogerConexion() {
    $conn = new mysqli("mysql.hostinger.es", "u515621581_root", "", "u515621581_event");
    if (mysqli_connect_errno()) {
        printf("Error de conexión: %s\n", mysqli_connect_error());
        exit();
    }
    return $conn;
}
