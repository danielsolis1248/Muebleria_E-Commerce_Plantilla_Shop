<?php 
//Conexion del archivo PHP
include("conexion.php");

//Crear conexion  a base de datos
$conexion = new mysqli($servidor, $usuario, $password, $nombreBD)

//Verificamos la conexion con el servidor MySQL
if ($conexion->connect_error) {
    die("Conexion fallida: " . $conexion->connect_error);
}

// sql Crea la tabla usando Lenguaje PHP
$sql = "CREATE TABLE clientes (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nombres VARCHAR(50) NOT NULL,
    apellidos VARCHAR(50) NOT NULL,
    email VARCHAR(50),
    telefono INT(10),
    password VARCHAR(50)
    )";

//Se verifica si la tabla se ha creado 
if($conexion->query($sql) === TRUE) {
    echo "La tabla clientes se creo exitosamente :)";   
} else {
    echo "Error en la creacion de la tabla clientes :(" . $conexion->error
}

//Cerramos la conexion
$conexion->close()
?>