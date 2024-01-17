<?php include("../../db.php"); ?>
<?php include("../../templates/peticion.php"); ?>

<?php
if ($_POST && isset($_GET["txtID"])) {

    $id = (isset($_GET["txtID"]) ? $_GET["txtID"] : "");

    // Recolectamos los datos del metodo POST
    $password = hash('sha512', (isset($_POST["password"]) ? $_POST["password"] : ""));
    $confirmacion = hash('sha512', (isset($_POST["confirmacion"]) ? $_POST["confirmacion"] : ""));
    // Preparamos la inserción de los datos

    if ($password === $confirmacion) {

        $sentencia = $conexion->prepare("UPDATE accesos SET password_acceso=:password WHERE id_usuario=:id;");

        $sentencia->bindParam(":id", $id);
        $sentencia->bindParam(":password", $password);
        $sentencia->execute();

        $mensaje = "Actualizacion completa";

        header("Location:./recuperar_co_confirmacion.php?mensaje=" . urlencode($mensaje));
    } else {
        $mensaje = "Error: Las contraseñas no coinciden. Vuelve a intentarlo";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <link rel="stylesheet" href="../../css/style.css">
    <script src="../../JS/peticion.js"></script>
    <title>Restablecer tu contraseña</title>
</head>

<body>
    <div class="body">
        <div class="header">
            <img src="../../img/icono.png" alt="Icono de APP" class="icono-app">
            <h1>Restablecer tu contraseña</h1>
        </div>
<<<<<<< HEAD
        <form action="" method="post" enctype="multipart/form-data">
            <div class="recuperar_contrasenna">
                <?php if (isset($mensaje)) { ?>
                    <div class="alert alert-danger center" role="alert">
                        <strong>
                            <?php echo $mensaje; ?>
                        </strong>
                    </div>
                    <?php
                } ?>
=======
        <div class="recuperar_contrasenna">

            <form action="" method="post">
>>>>>>> e58a4b94673fa2635cf300002517e4372dff8182

                <div class="col-12 my-3">
                    <label class="visually-hidden" for="inlineFormInputGroupUsername">Nueva Contraseña</label>
                    <div class="input-group">
                        <div class="input-group-text"> <img src="../../img/key.png" alt="Icono de contraseña"
                                class="icono-sesion">
                        </div>
                        <input type="password" class="form-control" id="inlineFormInputGroupUsername"
<<<<<<< HEAD
                            placeholder="Nueva Contraseña" name="password" required>
=======
                            placeholder="Nueva Contraseña" required>
>>>>>>> e58a4b94673fa2635cf300002517e4372dff8182
                    </div>
                </div>
                <div class="col-12 my-3">
                    <label class="visually-hidden" for="inlineFormInputGroupUsername">Confirmar Contraseña</label>
                    <div class="input-group">
                        <div class="input-group-text"> <img src="../../img/key.png" alt="Icono de contraseña"
                                class="icono-sesion">
                        </div>
                        <input type="password" class="form-control" id="inlineFormInputGroupUsername"
<<<<<<< HEAD
                            placeholder="Confirmar Contraseña" name="confirmacion" required>
=======
                            placeholder="Confirmar Contraseña" required>
>>>>>>> e58a4b94673fa2635cf300002517e4372dff8182
                    </div>
                </div>
                <button class="btn btn-primary my-3" type="submit"><strong>Restablecer contraseña</strong></button>

<<<<<<< HEAD
        </form>
    </div>

    </div>
=======
            </form>
        </div>

    </div>
    <script src="../../JS/main.js"></script>
>>>>>>> e58a4b94673fa2635cf300002517e4372dff8182
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
</body>

</html>