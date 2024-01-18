<?php include("./loginCRUD.php"); ?>
<?php include("../../templates/peticion.php"); ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <link rel="stylesheet" href="../../css/style.css">
    <script src="../../JS/peticion.js"></script>
    <title>Inicio Sesion</title>
</head>

<body>
    <div class="body">
        <div class="header">
            <img src="../../img/icono.png" alt="Icono de APP" class="icono-app">
            <h1>Iniciar sesión en Recordip</h1>
        </div>
        <div class="inicio-sesion">

            <form action="" method="post">
                <p style="width: 90%; margin: 20px auto;">Introduzca su dirección de correo electrónico y contraseña.
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
                        <div class="input-group-text"> <img src="../../img/correo.png" alt="Icono de correo" class="icono-sesion">
                        </div>
                        <input type="email" class="form-control correo_acceso" name="correo_acceso" id="correo_acceso" placeholder="Correo electronico (prueba> (admin o user)@recordip.com)" list="correo_acceso">
                        <datalist id="correo_acceso">
                            <option value="admin@recordip.com"></option>
                            <option value="user@recordip.com"></option>
                        </datalist>

                    </div>
                </div>
                <div class="col-12 my-2">
                    <label class="visually-hidden" for="inlineFormInputGroupUsername">Digite su contraseña</label>
                    <div class="input-group">
                        <div class="input-group-text"> <img src="../../img/key.png" alt="Icono de correo" class="icono-sesion">
                        </div>

                        <input type="password" class="form-control password_acceso" name="password_acceso" id="password_acceso" placeholder="Digite su contraseña (prueba> 123456)" list="password_acceso">
                        <datalist id="password_acceso">
                            <option value="123456"></option>
                        </datalist>
                    </div>
                </div>
                <u>
                    <p><a href="./recuperar_co.php">¿Olvidaste tu contraseña?</a></p>
                </u>
                <button type="submit" class="btn btn-primary"><strong>Iniciar Sesión</strong></button>

                <p>¿Aún no tienes una cuenta? <u></u><a href="./registrar.php">Registrate</a> </u></p>

            </form>
        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>