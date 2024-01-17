<?php
if ($_SESSION['rol'] != 'admin') {
<<<<<<< HEAD
    header("Location:../php_errors/error_403.php");
=======
    header("Location:http://localhost/app_remembers/php/php_errors/error_403.php");
>>>>>>> e58a4b94673fa2635cf300002517e4372dff8182
    exit();
}
?>