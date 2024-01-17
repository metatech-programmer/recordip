<?php
// Configurar el nivel de error para no mostrar advertencias
error_reporting(E_ERROR | E_PARSE | E_CORE_ERROR | E_COMPILE_ERROR | E_RECOVERABLE_ERROR);

$servidor = 'ep-quiet-lake-52744492-pooler.us-east-1.postgres.vercel-storage.com';
$puerto = '5432';
$baseDeDatos = 'verceldb';
$usuario = 'default';
$contrasenna = 'uY2LiBPEH3eD';

$sslmode = 'require'; // Puedes ajustar esto según tus necesidades
$endpointId = 'ep-quiet-lake-52744492-pooler'; // Ajusta esto según tu configuración

try {
    $conexion = new PDO("pgsql:host=$servidor;port=$puerto;dbname=$baseDeDatos;user=$usuario;password=$contrasenna;sslmode=$sslmode;options='endpoint=$endpointId'");
} catch (PDOException $ex) {
    echo "Error al conectar a la base de datos: " . $ex->getMessage();
    phpinfo();
}
?>
