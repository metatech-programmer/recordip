<?php

session_start();
include("../../db.php");

if ($_POST) {


    $sentencia = $conexion->prepare("SELECT id_usuario as id,correo_acceso,
    password_acceso,count(*) as n_acceso,
    (SELECT apodo_usuario FROM usuarios WHERE usuarios.id_usuario=accesos.id_usuario) as nickname,
    (SELECT nombres_usuario FROM usuarios WHERE usuarios.id_usuario=accesos.id_usuario) as nombres,
    (SELECT apellidos_usuario FROM usuarios WHERE usuarios.id_usuario=accesos.id_usuario) as apellidos,
    (SELECT nombre_rol FROM roles 
    WHERE roles.id_rol=(SELECT id_rol_usuario FROM usuarios 
    WHERE usuarios.id_usuario=accesos.id_usuario)) as rol 
    FROM accesos WHERE correo_acceso=:correo_acceso AND password_acceso=:password_acceso  
    GROUP BY id_usuario,correo_acceso, password_acceso;");
    $correo = (isset($_POST["correo_acceso"]) ? $_POST["correo_acceso"] : "");
    $password = hash('sha512', (isset($_POST["password_acceso"]) ? $_POST["password_acceso"] : ""));

    $sentencia->bindParam(":correo_acceso", $correo);
    $sentencia->bindParam(":password_acceso", $password);
    $sentencia->execute();
    $registro = $sentencia->fetch(PDO::FETCH_LAZY);

    $originalUrl = "app_remembers/php/php_dashboard/dashboard.php?txtID=" . $registro["id"] . "&role=" . $registro["rol"];

    if ($registro["n_acceso"] > 0) {
        if ($registro["rol"] === "user") {
            $_SESSION['id'] = $registro["id"];
            $_SESSION['correo_acceso'] = $registro["correo_acceso"];
            $_SESSION['nickname'] = $registro["nickname"];
            $_SESSION['nombres'] = $registro["nombres"];
            $_SESSION['apellidos'] = $registro["apellidos"];
            $_SESSION['rol'] = $registro["rol"];
            $_SESSION['logueado'] = true;

            $_SESSION['previousURL'] = $originalUrl;

            header("Location:../php_dashboard/dashboard.php#?txtID=" . $_SESSION["id"] . "&role=" . $_SESSION["rol"]);

        } else if ($registro["rol"] === "admin") {

            $_SESSION['id'] = $registro["id"];
            $_SESSION['correo_acceso'] = $registro["correo_acceso"];
            $_SESSION['nickname'] = $registro["nickname"];
            $_SESSION['nombres'] = $registro["nombres"];
            $_SESSION['apellidos'] = $registro["apellidos"];
            $_SESSION['rol'] = $registro["rol"];
            $_SESSION['logueado'] = true;
            $_SESSION['previousURL'] = $originalUrl;

            header("Location:../admin/dashboardAdmin.php?#txtID=" . $_SESSION["id"] . "&role=" . $_SESSION["rol"]);
        } else {
            $mensaje = "Error: El usuario o contraseña son incorrectos";

        }
    } else {
        $mensaje = "Error: El usuario o contraseña son incorrectos";

    }


}


?>