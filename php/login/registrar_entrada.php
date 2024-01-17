<?php
$txtID = isset($_GET["txtID"]) ? intval($_GET["txtID"]) : 0;
include("../../db.php");


if ($_POST) {

    // Recolectamos los datos del metodo POST
    $correo = (isset($_POST["correo"]) ? $_POST["correo"] : "");
    $password = hash('sha512', (isset($_POST["password"]) ? $_POST["password"] : ""));

    $sentencia = $conexion->prepare("SELECT correo_acceso,count(*) as n_cuentas FROM accesos WHERE correo_acceso=:correo GROUP BY correo_acceso;");
    $sentencia->bindParam(":correo", $correo);
    $sentencia->execute();
    $registro = $sentencia->fetch(PDO::FETCH_LAZY);

    if ($registro["n_cuentas"] > 0) {
        $mensaje = "Ese correo ya esta inscrito en Recordip. Intenta con otro.";
    } else {

        $foto = "default.png";
        // Preparamnos la insercion de los datos
        $sentencia = $conexion->prepare("INSERT INTO accesos (id_usuario,correo_acceso,password_acceso) VALUES (:id,:correo,:password);");
        $sentencia_2 = $conexion->prepare("INSERT INTO imagenes (id_usuario,nombre_imagen) VALUES (:id,:nombre_foto);");
        //Asignando los valores que vienen del metodo POST (Los que vienen del formulario)

        $sentencia->bindParam(":id", $txtID);
        $sentencia->bindParam(":correo", $correo);
        $sentencia->bindParam(":password", $password);
        $sentencia->execute();

        $sentencia_2->bindParam(":id", $txtID);

        $fechita = new DateTime();

        $nombreArchivo_foto = ($foto != '') ? $fechita->getTimestamp() . "_" . $foto : "";
        $tmp_foto = "../../img/default.png";

        if ($tmp_foto != "") {
            copy($tmp_foto, "../php_dashboard/img/" . $nombreArchivo_foto);
            copy($tmp_foto, "../admin/img/" . $nombreArchivo_foto);
        }

        $sentencia_2->bindParam(":nombre_foto", $nombreArchivo_foto);
        $sentencia_2->execute();


        $mensaje = "Registro agregado";


        header("Location:./inicio_sesion.php?mensaje=" . urlencode($mensaje) . "&txtID=" . $txtID);


    }
}
?>
<?php include("../../templates/peticion.php"); ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <script src="http://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <link rel="stylesheet" href="../../css/style.css">
    <script src="../../JS/peticion.js"></script>
    <title>Registar</title>
</head>

<body>
    <div class="body">
        <div class="header">
            <img src="../../img/icono.png" alt="Icono de APP" class="icono-app">
            <h1>Create una cuenta en Recordip</h1>
        </div>
        <div class="Registro">
            <form action="" method="post">
                <p style="width: 90%; margin: 20px auto;">Regístrese con su correo electrónico y una contraseña .
                </p>
                <?php if (isset($mensaje)) { ?>
                    <div class="alert alert-danger center" role="alert">
                        <strong>
                            <?php echo $mensaje; ?>
                        </strong>
                    </div>
                    <?php
                } ?>
                <div class="col-12 my-2">
                    <label class="visually-hidden" for="inlineFormInputGroupUsername">Correo electronico</label>
                    <div class="input-group">
                        <div class="input-group-text"> <img src="../../img/correo.png" alt="Icono de correo"
                                class="icono-sesion">
                        </div>
                        <input type="email" name="correo" class="form-control" id="inlineFormInputGroupUsername"
                            placeholder="Correo electronico" required>
                    </div>
                </div>
                <div class="col-12 my-2">
                    <label class="visually-hidden" for="inlineFormInputGroupUsername">Digite su contraseña</label>
                    <div class="input-group">
                        <div class="input-group-text"> <img src="../../img/key.png" alt="Icono de correo"
                                class="icono-sesion">
                        </div>
                        <input type="password" name="password" class="form-control" id="inlineFormInputGroupUsername"
                            placeholder="Digite su contraseña" required>

                    </div>
                </div>

                <button class="btn btn-primary" type="submit"
                    style="margin-top: 40px;"><strong>Registrarse</strong></button>


            </form>
        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
</body>

</html>