<?php

if (isset($_GET["txtID"])) {

    $txtID = (isset($_GET["txtID"])) ? $_GET["txtID"] : "";
    //Buscar eL archivo relacionado con el empleado
    $sentencia = $conexion->prepare("SELECT imagenes FROM imagenes WHERE id_usuario=:id");
    $sentencia->bindParam(":id", $txtID);
    $sentencia->execute();
    $registro_recuperado = $sentencia->fetch(PDO::FETCH_LAZY);

    if (isset($registro_recuperado["foto"]) && $registro_recuperado["foto"] != "") {
        if (file_exists("./img/" . $registro_recuperado["foto"]) && file_exists("../php_dashboard/img/" . $registro_recuperado["foto"])) {
            unlink("./img/" . $registro_recuperado["foto"]);
            unlink("../php_dashboard/img/" . $registro_recuperado["foto"]);
        }
    }

    $sentencia = $conexion->prepare("DELETE FROM recordatorios WHERE id_usuario=:id;");
    $sentencia->bindParam(":id", $txtID);
    $sentencia->execute();
    $sentencia = $conexion->prepare("DELETE FROM imagenes WHERE id_usuario=:id;");
    $sentencia->bindParam(":id", $txtID);
    $sentencia->execute();
    $sentencia = $conexion->prepare("DELETE FROM accesos WHERE id_usuario=:id;");
    $sentencia->bindParam(":id", $txtID);
    $sentencia->execute();
    $sentencia = $conexion->prepare("DELETE FROM usuarios WHERE id_usuario=:id;");

    $sentencia->bindParam(":id", $txtID);
    $sentencia->execute();
    $mensaje = "Registro Eliminado";
    header("Location:./dashboardAdmin.php?mensaje=" . $mensaje);

}

$sentencia = $conexion->prepare("SELECT *,
(SELECT nombre_rol 
FROM roles 
WHERE usuarios.id_rol_usuario = roles.id_rol limit 1) as rol,
(SELECT count(*)
FROM recordatorios 
WHERE usuarios.id_usuario = recordatorios.id_usuario limit 1) as n_recordatorios,
(SELECT nombre_imagen
FROM imagenes 
WHERE usuarios.id_usuario = imagenes.id_usuario limit 1) as url_img 
FROM usuarios WHERE id_rol_usuario = (SELECT id_rol FROM ROLES WHERE nombre_rol='user') ORDER BY id_usuario");
$sentencia->execute();
$lista_tbl_usuarios = $sentencia->fetchAll(PDO::FETCH_ASSOC);


if (isset($_GET["ID"])) {

    $txtID = (isset($_GET["ID"])) ? $_GET["ID"] : "";
    $sentencia = $conexion->prepare("SELECT * FROM usuarios WHERE id_usuario=:id");
    $sentencia->bindParam(":id", $txtID);
    $sentencia->execute();
    $user = $sentencia->fetch(PDO::FETCH_ASSOC);

}

if ($_POST && isset($_GET["id"])) {
    $id = intval($_GET["id"]); // Convertir el valor de id a entero

    // Recolectar los datos del método POST
    $rol = (isset($_POST["id_rol"]) && is_numeric($_POST["id_rol"])) ? intval($_POST["id_rol"]) : 1;
    if ($rol != "2") {

        $mensaje = "Registro No Valido";
        header("Location: http://localhost/app_remembers/php/admin/dashboardAdmin.php?mensaje=" . $mensaje);
    } else {

        // Preparar la actualización de los datos
        $sentencia = $conexion->prepare("UPDATE usuarios SET id_rol_usuario=:id_rol WHERE id_usuario=:id;");

        // Asignar valores a los parámetros en la consulta preparada
        $sentencia->bindParam(":id_rol", $rol);
        $sentencia->bindParam(":id", $id, PDO::PARAM_INT); // Especificar el tipo de dato como entero

        // Ejecutar la consulta
        $sentencia->execute();

        $mensaje = "Registro Actualizado";
        header("Location: http://localhost/app_remembers/php/admin/dashboardAdmin.php?mensaje=" . $mensaje);
    }


}


?>