<?php

session_start();

header("Access-Control-Allow-Origin: http://localhost:5173"); 
header("Access-Control-Allow-Methods: POST, GET, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type, Authorization");
header("Access-Control-Allow-Credentials: true");

$conexion = mysqli_connect("localhost", "root", "", "controlasistencia");
if (!$conexion) {
    echo json_encode([
        "cod" => 0,
        "msj" => "Error al conectar con la base de datos.",
        "icono" => "error"
    ]);
    exit;
}

?>