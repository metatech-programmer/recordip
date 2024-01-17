<?php include("../../db.php"); ?>
<?php include("../../templates/peticion.php"); ?>

<?php


//////////////////////////////////////////////////////////////
require '../../libs/src/PHPMailer.php';
require '../../libs/src/SMTP.php';
require '../../libs/src/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if ($_POST) {

    $correo = (isset($_POST["correo"]) ? $_POST["correo"] : "");

    $sentencia = $conexion->prepare("SELECT id_usuario as id,correo_acceso,count(*) as n_cuenta,
    (SELECT apodo_usuario FROM usuarios WHERE usuarios.id_usuario=accesos.id_usuario) as nickname
    FROM accesos WHERE correo_acceso=:correo_acceso GROUP BY id_usuario,correo_acceso;");
    $sentencia->bindParam(":correo_acceso", $correo);
    $sentencia->execute();

    $registro = $sentencia->fetch(PDO::FETCH_LAZY);

    if ($registro["n_cuenta"] === 1) {

        // Crear una nueva instancia de PHPMailer
        $mail = new PHPMailer();

        // Configurar el servidor de correo saliente (SMTP) de Gmail
        $mail->isSMTP();
        $mail->Host = 'smtp-relay.sendinblue.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'santiagofred3.0@gmail.com';
        $mail->Password = 'YIFa96yDgVTBRdvC';
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        // Configurar los detalles del correo electrónico
        $mail->setFrom('recordip@hotmail.com', 'Recordip'); // Tu dirección de correo electrónico y tu nombre
        $mail->addAddress($registro["correo_acceso"], $registro["nickname"]); // Dirección de correo electrónico del destinatario y su nombre opcional
        $mail->Subject = 'RECUPERA Y RECUERDA TU CONTRASE&Ntilde;A'; // Asunto del correo electrónico

        $mail->Body = '<div style="background-image:url(https://i.ibb.co/fp8PyPH/image.png); filter: drop-shadow(2px 4px 6px blue); background-size: cover; vertical-align:top;text-align:left; border:3px solid #4e9bc8; padding:50px; margin:auto; border-radius:15px; width: 450px;" align="center" valign="top"><h1 id="m_4175552137319060143logo" style="color:#000;display:block;font-family:hybrea,proxima-nova,"helvetica neue",helvetica,arial,geneva,sans-serif;font-size:32px;font-weight:200;text-align:left;margin:0 0 40px;color: black; -webkit-text-stroke-width: thin; text-underline-position: under; text-transform: math-auto;" align="left"><img src="https://i.ibb.co/qWr4gxy/Mi-proyecto.png" alt="Mi-proyecto" border="0" height="60"></h1><p style=" margin:20px 0;color: black;  font-weight: bolder; text-shadow: 2px 2px 5px black;  -webkit-text-stroke-width: thin; text-underline-position: under; text-transform: math-auto;">Alguien (con suerte usted) ha solicitado un restablecimiento de contrase&ntilde;a para su cuenta de Recordip. Siga el siguiente enlace para establecer una nueva contrase&ntilde;a:</p><p style=" margin:20px 0;color: black;  font-weight: bolder; text-shadow: 2px 2px 5px black;  -webkit-text-stroke-width: thin; text-underline-position: under; text-transform: math-auto;"><a href="http://localhost:3000/php/login/recuperar_co_verificacion.php?txtID=' . $registro["id"] . '" target="_blank" data-saferedirecturl="http://localhost:3000/php/login/recuperar_co_verificacion.php?txtID=' . $registro["id"] . '">https://id.recordip.com/account/password/reset/' . $registro["id"] . '</a></p><p style=" margin:20px 0;color: black;  font-weight: bolder; text-shadow: 2px 2px 5px black;  -webkit-text-stroke-width: thin; text-underline-position: under; text-transform: math-auto;">Si no desea restablecer su contrase&ntilde;a, ignore este correo electr&oacute;nico y no se tomar&aacute; ninguna medida.</p><p style=" margin:20px 0;color: black;  font-weight: bolder; text-shadow: 2px 2px 5px black;  -webkit-text-stroke-width: thin; text-underline-position: under; text-transform: math-auto;">El equipo de recordip<br><a href="http://localhost:3000/php/login/" style="color:#4e9bc8" target="_blank">https://recordip.com</a></p></div> '; // Cuerpo del correo electrónico con enlace como hipervínculo y estilos CSS

        // Enviar el correo electrónico
        if ($mail->send()) {
            // echo 'El email se ha enviado correctamente.';
        } else {
            //echo 'Hubo un error al enviar el mensaje: ' . $mail->ErrorInfo;
        }
        /////////////////////////////////////////////////////////////

        header("Location:./recuperar_co_enviado.php#?message=" . $mensaje);
    } else {
        $mensaje = "Error: No se encuentra registrado el correo, por favor verificalo nuevamente";

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
            <h1>¿Has olvidado tu contraseña?</h1>
        </div>
<<<<<<< HEAD

        <div class="recuperar_contrasenna">

            <form action="" method="post" enctype="multipart/form-data">
                <p style="width: 90%; margin: 20px auto;">Escribe el correo electrónico que usaste para registrarte. Te
                    enviaremos un correo electrónico con instrucciones sobre cómo restablecer tu contraseña.
                </p>
                <?php if (isset($mensaje)) { ?>
                    <div class="alert alert-danger center" role="alert">
                        <strong>
                            <?php echo $mensaje; ?>
                        </strong>
                    </div>
                    <?php
                } ?>
                <div class="col-12 my-3">
                    <label class="visually-hidden" for="inlineFormInputGroupUsername">Correo electronico</label>
                    <div class="input-group">
                        <div class="input-group-text"> <img src="../../img/correo.png" alt="Icono de correo"
                                class="icono-sesion">
                        </div>
                        <input type="email" class="form-control" id="inlineFormInputGroupUsername"
                            placeholder="Correo electronico" name="correo" required>
=======
        <div class="recuperar_contrasenna">

            <form action="" method="post">
                <p style="width: 90%; margin: 20px auto;">Escribe el correo electrónico que usaste para registrarte. Te
                    enviaremos un correo electrónico con instrucciones sobre cómo restablecer tu contraseña.
                </p>
                <div class="col-12 my-3">
                    <label class="visually-hidden" for="inlineFormInputGroupUsername">Correo electronico</label>
                    <div class="input-group">
                        <div class="input-group-text"> <img src="../../img/correo.png" alt="Icono de correo" class="icono-sesion">
                        </div>
                        <input type="email" class="form-control" id="inlineFormInputGroupUsername"
                            placeholder="Correo electronico" required>
>>>>>>> e58a4b94673fa2635cf300002517e4372dff8182
                    </div>
                </div>
                <button class="btn btn-primary my-3" type="submit"><strong>Enviar correo electronico</strong></button>

<<<<<<< HEAD
                <p>¿Recuerdas tu contraseña? <u></u><a href="./inicio_sesion.php">Iniciar Sesión</a> </u></p>
=======
                <p>¿Recuerdas tu contraseña? <u></u><a href="inicio_sesion.php">Iniciar Sesión</a> </u></p>
>>>>>>> e58a4b94673fa2635cf300002517e4372dff8182

            </form>
        </div>

    </div>
<<<<<<< HEAD
=======
    <script src="../../JS/main.js"></script>
>>>>>>> e58a4b94673fa2635cf300002517e4372dff8182
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
</body>

</html>