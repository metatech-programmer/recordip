<?php

$servidor = 'localhost';
$puerto = '8096';
$baseDeDatos = 'db_app_remembers';
$usuario = 'php_app';
$contrasenna = '654321';

try {
    $conexion = new PDO("pgsql:host=$servidor;port=$puerto; dbname=$baseDeDatos", $usuario, $contrasenna);

} catch (PDOException $ex) {
    echo "Error al conectar a la base de datos: " . $ex->getMessage();
   phpinfo();
}

?>