<?php
include("../../db.php");

if ($_POST) {

    // Recolectamos los datos del metodo POST
    $nombres = (isset($_POST["nombres"]) ? $_POST["nombres"] : "");
    $apellidos = (isset($_POST["apellidos"]) ? $_POST["apellidos"] : "");
    $apodo = (isset($_POST["apodo"]) ? $_POST["apodo"] : "");
    $telegram_id = (isset($_POST["telegram_id"]) ? $_POST["telegram_id"] : "");
    // Preparamos la inserción de los datos
    $sentencia = $conexion->prepare("INSERT INTO usuarios (id_rol_usuario,nombres_usuario,apellidos_usuario,apodo_usuario,telegram_id_usuario) VALUES (:id_rol,:nombres,:apellidos,:apodo,:telegram_id) RETURNING id_usuario;");
    // Asignamos los valores que vienen del metodo POST (Los que vienen del formulario)

    $id_rol = 1;
    $sentencia->bindParam(":id_rol", $id_rol);
    $sentencia->bindParam(":nombres", $nombres, PDO::PARAM_STR);
    $sentencia->bindParam(":apellidos", $apellidos, PDO::PARAM_STR);
    $sentencia->bindParam(":apodo", $apodo, PDO::PARAM_STR);
    $sentencia->bindParam(":telegram_id", $telegram_id, PDO::PARAM_STR);
    $sentencia->execute();

    $mensaje = "Registro agregado";

    $id_usuario = $conexion->lastInsertId();

    header("Location:./registrar_entrada.php?mensaje=" . urlencode($mensaje) . "&txtID=" . $id_usuario);
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
    <script src="../../JS/peticion.js"></script>

    <link rel="stylesheet" href="../../css/style.css">
    <title>Registar</title>
</head>

<body>
    <div class="body">
        <div class="header">
            <img src="../../img/icono.png" alt="Icono de APP" class="icono-app">
            <h1>Create una cuenta en Recordip</h1>
        </div>
        <div class="registro">
            <form action="" method="post" enctype="multipart/form-data">
                <p style="width: 90%; margin: 20px auto;">Ingrese los datos para su registro exitoso.
                </p>
                <div class="row g-3 my-3">
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Nombres" aria-label="Nombres"
                            name="nombres" required>
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Apellidos" aria-label="Apellidos"
                            name="apellidos" required>
                    </div>
                </div>
                <div class="col-12 my-2">
                    <label class="visually-hidden" for="inlineFormInputGroupUsername">NickName</label>
                    <div class="input-group">
                        <div class="input-group-text">@</div>
                        <input type="text" class="form-control" id="inlineFormInputGroupUsername" placeholder="NickName"
                            name="apodo" required>
                    </div>
                </div>
                <div class="row g-3 my-1 align-items-baseline ">
                    <div class="col-7">
                        <input type="tel" class="form-control" name="telegram_id" placeholder="telegram id"
                            aria-label="telegram_id" required>
                    </div>
                    <!-- Modal trigger button -->
                    <button type="button" class=" bg-transparent border-0 m-0 p-0 col-5" style="height: fit-content;"
                        data-bs-toggle="modal" data-bs-target="#miModal">
                        ¿Quieres saber donde esta?
                    </button>

                    <div class="modal modal-sm" id="miModal">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Sigue los pasos:</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Cerrar"></button>
                                </div>
                                <div class="modal-body">
                                    <div id="miCarrusel" class="carousel slide" data-bs-ride="carousel">
                                        <!-- Indicadores del carrusel -->
                                        <ol class="carousel-indicators">
                                            <li data-bs-target="#miCarrusel" data-bs-slide-to="0" class="active"></li>
                                            <li data-bs-target="#miCarrusel" data-bs-slide-to="1"></li>
                                            <li data-bs-target="#miCarrusel" data-bs-slide-to="2"></li>
                                            <li data-bs-target="#miCarrusel" data-bs-slide-to="3"></li>
                                            <li data-bs-target="#miCarrusel" data-bs-slide-to="4"></li>
                                            <!-- Agrega más indicadores si hay más elementos en el carrusel -->
                                        </ol>

                                        <!-- Slides del carrusel -->
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <img src="../../img/primer_paso.jpg" class="img-fluid w-100"
                                                    style="max-height: 500px;" alt="Primer paso">
                                                <div class="carousel-caption">
                                                    <h3>Paso No.1 :</h3>
                                                    <p>Abra telegram y dirigete al apartado de busqueda</p>
                                                </div>
                                            </div>
                                            <div class="carousel-item ">
                                                <p>Antes de seguir debes hacer los siguientes dos pasos para que te
                                                    lleguen los recordatorios:</p>
                                                <img src="../../img/paso_add.jpg" class="img-fluid w-100"
                                                    style="max-height: 500px;" alt="Primer paso">
                                                <div class="carousel-caption">
                                                    <h3>Paso No.2 :</h3>
                                                    <p>Busca al siguiente usuario: @Remind_O_TronBot</p>
                                                </div>
                                            </div>
                                            <div class="carousel-item ">
                                                <img src="../../img/paso_add_2.jpg" class="img-fluid w-100"
                                                    style="max-height: 500px;" alt="Primer paso">
                                                <div class="carousel-caption">
                                                    <h3>Paso No.3 :</h3>
                                                    <p>Ingresa a la primera opcion y dale click en iniciar</p>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <p>Ahora si, continuemos:</p>
                                                <img src="../../img/segundo_paso.jpg" class="img-fluid w-100"
                                                    style="max-height: 500px;" alt="Segundo paso">
                                                <div class="carousel-caption">
                                                    <h3>Paso No.4 :</h3>
                                                    <p>Ahora ve atras y busca al siguiente usuario: @Get My ID</p>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <img src="../../img/ultimo_paso.jpg" class="img-fluid w-100 "
                                                    style="max-height: 500px;" alt="Ultimo paso">
                                                <div class="carousel-caption">
                                                    <h3>Paso No.5 :</h3>
                                                    <p>Ingresa a la primera opcion y dale click en iniciar</p>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Controles del carrusel -->
                                        <a class="carousel-control-prev" href="#miCarrusel" role="button"
                                            data-bs-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Anterior</span>
                                        </a>
                                        <a class="carousel-control-next" href="#miCarrusel" role="button"
                                            data-bs-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Siguiente</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
                <button class="btn btn-primary w-75 auto m-auto  mt-3 mb-2" type="submit" style="margin-top: 40px;">
                    <strong>Siguiente</strong></button>

                <p>¿Ya tienes una cuenta? <u></u><a href="./inicio_sesion.php">Inicia Sesión</a> </u></p>

            </form>
        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>

</body>

</html>