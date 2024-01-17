<?php
if ($_SESSION['rol'] != 'admin') {
    header("Location:../php_errors/error_403.php");
    exit();
}
?>