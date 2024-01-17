<?php include("../../db.php"); ?><?php include("../../templates/peticion.php");?>
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
        <div class="recuperar_contrasenna">

            <form action="" method="post">

                <div class="col-12 my-3">
                    <label class="visually-hidden" for="inlineFormInputGroupUsername">Nueva Contraseña</label>
                    <div class="input-group">
                        <div class="input-group-text"> <img src="../../img/key.png" alt="Icono de contraseña"
                                class="icono-sesion">
                        </div>
                        <input type="password" class="form-control" id="inlineFormInputGroupUsername"
                            placeholder="Nueva Contraseña" required>
                    </div>
                </div>
                <div class="col-12 my-3">
                    <label class="visually-hidden" for="inlineFormInputGroupUsername">Confirmar Contraseña</label>
                    <div class="input-group">
                        <div class="input-group-text"> <img src="../../img/key.png" alt="Icono de contraseña"
                                class="icono-sesion">
                        </div>
                        <input type="password" class="form-control" id="inlineFormInputGroupUsername"
                            placeholder="Confirmar Contraseña" required>
                    </div>
                </div>
                <button class="btn btn-primary my-3" type="submit"><strong>Restablecer contraseña</strong></button>

            </form>
        </div>

    </div>
    <script src="../../JS/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
</body>

</html>