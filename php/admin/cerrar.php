<?php
session_start();
session_destroy();
header("Location:../login/inicio_sesion_redes.php");
?>