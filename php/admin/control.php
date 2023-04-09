<?php
if ($_SESSION['rol'] != 'admin') {
    header("Location:http://localhost/app_remembers/php/php_errors/error_403.php");
    exit();
}
?>