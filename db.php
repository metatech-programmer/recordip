<!-- POSTGRESS -->
<?php
// Configurar el nivel de error para no mostrar advertencias
error_reporting(E_ERROR | E_PARSE | E_CORE_ERROR | E_COMPILE_ERROR | E_RECOVERABLE_ERROR);

$servidor = 'ep-jolly-hill-24721875.ap-southeast-1.aws.neon.fl0.io';
$puerto = '5432';
$baseDeDatos = 'recordip';
$usuario = 'fl0user';
$contrasenna = 'h5x0yiVmuEcM';


try {
    $conexion = new PDO("pgsql:host=$servidor;port=$puerto; dbname=$baseDeDatos", $usuario, $contrasenna);
} catch (PDOException $ex) {
    echo "Error al conectar a la base de datos: " . $ex->getMessage();
    phpinfo();
}
?>




<!-- MY SQL 
<?php /*
error_reporting(E_ERROR | E_PARSE | E_CORE_ERROR | E_COMPILE_ERROR | E_RECOVERABLE_ERROR);

$servidor = 'localhost';
$puerto = '3306';
$baseDeDatos = 'id20563866_db_app';
$usuario = 'id20563866_php_app';
$contrasenna = 'k[n-v%{8]&b_d^iN';
try {
$conexion = new PDO("mysql:host=$servidor;dbname=$baseDeDatos;charset=utf8mb4", $usuario, $contrasenna);
$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $ex) {
echo "Error al conectar a la base de datos: " . $ex->getMessage();
phpinfo();
}
*/
?>
-->