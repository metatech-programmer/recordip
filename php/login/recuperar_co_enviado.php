<?php include("../../db.php"); ?>
<?php include("../../templates/peticion.php");?>
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
            <h1>¡El correo electónico se ha enviado!</h1>
        </div>
        <div class="recuperar_contrasenna">

            <form action="" method="post">
                <p style="width: 90%; margin: 20px auto;">Te hemos enviado un correo electrónico a tu dirección con
                    instrucciones sobre cómo restablecer la contraseña. Si no lo recibes en unos minutos, comprueba que
                    has usado la dirección de correo electrónico para tu cuenta de Recordip y vuelve a intentarlo.</p>

               <a href="inicio_sesion.php"><button class="btn btn-primary my-3" type="button"><strong>Iniciar Sesión</strong></button></a>

            </form>
        </div>

    </div>
    <script src="../../JS/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
 
</body>

</html>