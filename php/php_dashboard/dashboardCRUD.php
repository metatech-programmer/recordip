<?php
include("../../db.php");

if ($_POST && isset($_GET["txtIDUsu"])) {
    $txtIDUsu = isset($_GET["txtIDUsu"]) ? intval($_GET["txtIDUsu"]) : 0;

    print_r($_POST);

    // Recolectamos los datos del metodo POST
    $fecha = (isset($_POST["fecha"]) ? $_POST["fecha"] : "");
    $recordatorio = (isset($_POST["recordatorio"]) ? $_POST["recordatorio"] : "");
    $hora = (isset($_POST["hora"]) ? $_POST["hora"] : "");
    // Preparamnos la insercion de los datos
    $sentencia = $conexion->prepare("INSERT INTO recordatorios (id_usuario,fecha_recordatorio,hora_recordatorio,mensaje_recordatorio) VALUES (:id,:fecha,:hora,:recordatorio);");
    //Asignando los valores que vienen del metodo POST (Los que vienen del formulario)

    $sentencia->bindParam(":fecha", $fecha);
    $sentencia->bindParam(":recordatorio", $recordatorio);
    $sentencia->bindParam(":hora", $hora);
    $sentencia->bindParam(":id", $txtIDUsu);
    $sentencia->execute();
    $mensaje = "Registro agregado";
<<<<<<< HEAD
    header("Location:./dashboard.php?mensaje=" . $mensaje);
=======
    header("Location:http://localhost/app_remembers/php/php_dashboard/dashboard.php?mensaje=" . $mensaje);
>>>>>>> e58a4b94673fa2635cf300002517e4372dff8182
}
if ($_POST && isset($_GET["ID"])) {

    $id = isset($_GET["ID"]) ? intval($_GET["ID"]) : 0;

    // Recolectamos los datos del metodo POST
    $fecha = (isset($_POST["fecha"]) ? $_POST["fecha"] : "");
    $recordatorio = (isset($_POST["recordatorio"]) ? $_POST["recordatorio"] : "");
    $hora = (isset($_POST["hora"]) ? $_POST["hora"] : "");
    // Preparamnos la insercion de los datos
    $sentencia = $conexion->prepare("UPDATE recordatorios SET fecha_recordatorio=:fecha, hora_recordatorio=:hora, mensaje_recordatorio=:recordatorio WHERE id_recordatorio=:id;");

    $sentencia->bindParam(":fecha", $fecha);
    $sentencia->bindParam(":recordatorio", $recordatorio);
    $sentencia->bindParam(":hora", $hora);
    $sentencia->bindParam(":id", $id);
    $sentencia->execute();
    $mensaje = "Registro Actualizado";
<<<<<<< HEAD
    header("Location:./dashboard.php?mensaje=" . $mensaje);
=======
    header("Location:http://localhost/app_remembers/php/php_dashboard/dashboard.php?mensaje=" . $mensaje);
>>>>>>> e58a4b94673fa2635cf300002517e4372dff8182
}


if (isset($_GET["txtID"])) {
    $txtID = (isset($_GET["txtID"])) ? $_GET["txtID"] : "";
    $sentencia = $conexion->prepare("DELETE FROM recordatorios WHERE id_recordatorio=:id;");
    $sentencia->bindParam(":id", $txtID);
    $sentencia->execute();
    $mensaje = "Registro Eliminado";
<<<<<<< HEAD
    header("Location:./dashboard.php?mensaje=" . $mensaje);
=======
    header("Location:http://localhost/app_remembers/php/php_dashboard/dashboard.php?mensaje=" . $mensaje);
>>>>>>> e58a4b94673fa2635cf300002517e4372dff8182
}


if (isset($_GET["id"])) {
    $txtID = (isset($_GET["id"])) ? $_GET["id"] : "";
    $sentencia = $conexion->prepare("SELECT * FROM recordatorios WHERE id_recordatorio=:id;");
    $sentencia->bindParam(":id", $txtID);
    $sentencia->execute();
    $_recordatorios = $sentencia->fetch(PDO::FETCH_LAZY);
}

$sentencia = $conexion->prepare("SELECT * FROM recordatorios WHERE id_usuario=:id ORDER BY id_recordatorio;");
$sentencia->bindParam(":id", $_SESSION['id']);
$sentencia->execute();
$lista_tbl_recordatorios = $sentencia->fetchAll(PDO::FETCH_ASSOC);

?>