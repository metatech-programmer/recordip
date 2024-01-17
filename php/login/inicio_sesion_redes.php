<?php include("../../db.php"); ?>
<?php include("../../templates/peticion.php"); ?>

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
    <title>Bienvenido a Recordip</title>
</head>

<body>
    <div class="body">
        <div class="header" style="margin-bottom: 50px;">
            <img src="../../img/icono.png" alt="Icono de APP" class="icono-app">
            <h1>Bienvenido a Recordip</h1>
        </div>
        <div class="inicio-sesion">
            <form action="" method="get">
                <p style="width: 95%; ">Inicie sesión con uno de los siguientes:</p>

                <a href="http://www.gmail.com" target="_blank" rel="noopener noreferrer"><button
                        class="btn google redes btn-primary justify-content-center" type="button">
                        <img src="../../img/gmail.png" alt="Icono de correo" class="icono-redes"> Google
                    </button></a>

                <a href="./inicio_sesion.php" rel="noopener noreferrer">
                    <button type="button" class=" redes btn btn-secondary justify-content-center">Correo
                        electrónico</button></a>

                <p>¿Aún no tienes una cuenta? <u></u><a href="./registrar.php">Registrate</a> </u></p>

            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
    <script src="../../JS/main.js"></script>
  
</body>

</html>