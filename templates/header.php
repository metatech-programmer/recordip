<?php
session_start();

<<<<<<< HEAD
$url_base = "/app_remembers/";
=======
$url_base = "http://localhost/app_remembers/";
>>>>>>> e58a4b94673fa2635cf300002517e4372dff8182


include("../../db.php");
 include("../../templates/peticion.php");

if (!isset($_SESSION['correo_acceso'])) {

    header("Location:" . $url_base . "php/login/inicio_sesion.php");
}


if (isset($_SESSION["id"])) {
    $txtID = (isset($_SESSION["id"])) ? $_SESSION["id"] : "";
    $sentencia = $conexion->prepare("SELECT * FROM usuarios WHERE id_usuario=:id;");
    $sentencia->bindParam(":id", $txtID);
    $sentencia->execute();

    $registro = $sentencia->fetch(PDO::FETCH_LAZY);
    $nombres = $registro["nombres_usuario"];
    $apellidos = $registro["apellidos_usuario"];
    $nickname = $registro["apodo_usuario"];
    $telegram_id = $registro["telegram_id_usuario"];


    $sentencia = $conexion->prepare("SELECT nombre_imagen FROM imagenes WHERE id_usuario=:id");
    $sentencia->bindParam(":id", $txtID);
    $sentencia->execute();
    $registro = $sentencia->fetch(PDO::FETCH_ASSOC);
    if ($registro) {
        $foto = $registro['nombre_imagen'];
    } else {
        $foto = "../../../img/default.png"; // O asigna un valor por defecto si no se encuentra ningún resultado
    }



}
?>

<script>
    const currentURL = window.location.href;

    console.log('URL actual: ' + currentURL);
    function handleURLChange() {
        // Restaurar la URL original
        window.location = currentURL; // Reemplazar con la URL original que deseas utilizar
    }

    // Agregar el evento 'hashchange' para detectar la modificación de la URL
    window.addEventListener('hashchange', handleURLChange);


</script>
<!DOCTYPE html>

<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<<<<<<< HEAD
    <link rel="stylesheet" href="../../css/style.css">
=======
    <link rel="stylesheet" href="<?php echo $url_base; ?>css/style.css">
>>>>>>> e58a4b94673fa2635cf300002517e4372dff8182
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"
        integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />

    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>

    <script src="http://cdn.jsdelivr.net/npm/sweetalert2@10"></script>


    <?php if (isset($_GET['mensaje'])) { ?>
        <script>
            Swal.fire({ icon: "success", title: "<?php echo $_GET['mensaje']; ?>" });
        </script>
    <?php } ?>