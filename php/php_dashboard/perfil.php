<?php include("../../templates/header.php"); ?>
<?php
if ($_POST) {

    // Recolectamos los datos del metodo POST
    $txtID = (isset($_SESSION["id"])) ? $_SESSION["id"] : "";

    $nombres = (isset($_POST["nombres"]) ? $_POST["nombres"] : "");
    $apellidos = (isset($_POST["apellidos"]) ? $_POST["apellidos"] : "");
    $nickname = (isset($_POST["nickname"]) ? $_POST["nickname"] : "");
    $telegram_id = (isset($_POST["telegram_id"]) ? $_POST["telegram_id"] : "");

    // Preparamnos la insercion de los dato
    $sentencia = $conexion->prepare("UPDATE usuarios SET nombres_usuario=:nombres, apellidos_usuario=:apellidos, apodo_usuario=:nickname , telegram_id_usuario=:telegram_id WHERE id_usuario=:id;");

    //Asignando los valores que vienen del metodo POST (Los que vienen del formulario)
    $sentencia->bindParam(":nombres", $nombres);
    $sentencia->bindParam(":apellidos", $apellidos);
    $sentencia->bindParam(":nickname", $nickname);
    $sentencia->bindParam(":telegram_id", $telegram_id);
    $sentencia->bindParam(":id", $txtID);
    $sentencia->execute();



    ///////////////////////////////////////////////////////////////


    $foto = (isset($_FILES["foto"]['name']) ? $_FILES["foto"]['name'] : "");

    $fechita = new DateTime();

    $nombreArchivo_foto = ($foto != '') ? $fechita->getTimestamp() . "_" . $_FILES["foto"]['name'] : "";
    $tmp_foto = $_FILES["foto"]['tmp_name'];

    if ($tmp_foto != '') {

        copy($tmp_foto, "./img/" . $nombreArchivo_foto);

        copy($tmp_foto, "../admin/img/" . $nombreArchivo_foto);


        $sentencia = $conexion->prepare("SELECT nombre_imagen FROM imagenes WHERE id_usuario=:id");
        $sentencia->bindParam(":id", $txtID);
        $sentencia->execute();

        $registro_recuperado = $sentencia->fetch(PDO::FETCH_LAZY);

        if (isset($registro_recuperado["nombre_imagen"]) && $registro_recuperado["nombre_imagen"] != "") {

            if (file_exists("./img/" . $registro_recuperado["nombre_imagen"]) && file_exists("../admin/img/" . $registro_recuperado["nombre_imagen"])) {
                unlink("./img/" . $registro_recuperado["nombre_imagen"]);
                unlink("../admin/img/" . $registro_recuperado["nombre_imagen"]);
            }
        }

        $sentencia = $conexion->prepare("UPDATE imagenes SET nombre_imagen=:foto WHERE id_usuario=:id;");
        $sentencia->bindParam(":foto", $nombreArchivo_foto);
        $sentencia->bindParam(":id", $txtID);
        $sentencia->execute();

    }


    $mensaje = "Registro actualizado";
    header("Location:./perfil.php?mensaje=" . $mensaje);

}
?>
<title id="perfil_titulo"></title>
</head>

<body>
    <div class="bg-primary d-flex align-items-center menusito">

        <button class="btn btn-primary m-2 " type="button" data-bs-toggle="offcanvas" data-bs-target="#staticBackdrop"
            aria-controls="staticBackdrop">
            <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-list"
                viewBox="0 0 16 16">
                <path fill-rule="evenodd"
                    d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
            </svg>
        </button>
        <div class="d-flex justify-content-end w-100" style="margin-right: 20px;">
            <select class="form-select w-25 m-auto mt-2 opacity-0" id="language-selector" name="language-selector"
                disabled>
                <option value="es">Español</option>
                <option value="en">Inglés</option>
            </select>
            <form action="" style="display: none; width: 0; height: 0;">
                <button type="submit" id="toggle-theme" class="btn btn-sm btn-outline-secondary opacity-0 disabled">
                    <i id="icon-moon" class="bi bi-moon"></i>
                    <i id="icon-sun" class="bi bi-sun" style="display:none"></i>
                    <span id="theme-label">Oscuro</span>
                </button>
            </form>
            <h4 class="m-3 text-white">Recordip</h4><img src="../../img/icono.png" alt="icono" width="65px"
                height="65px">
        </div>
    </div>
    <div class="body align-items-center" id="body">



        <div class="offcanvas offcanvas-start menu-lado" data-bs-backdrop="static" tabindex="-1" id="staticBackdrop"
            aria-labelledby="staticBackdropLabel">
            <div class="offcanvas-header text-start">
                <img src="../../img/icono.png" alt="icono" width="60px">
                <h4 class="offcanvas-title text-decoration-underline menu_t" id="staticBackdropLabel">Recordip,
                    recuerdalo.
                </h4>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <hr>
            <div class=" bg-color p-lg-5 text-white m-auto">
                <div class="imagen-login"> <img src="./img/<?php echo $foto; ?>" alt="" height="125px" width="125px"
                        style="border-radius: 50%; box-shadow: 0 7px 10px rgb(3, 39, 73);"></div>
                <h3 style="font-size: 135%; overflow-x: clip; border-radius: 0 0 15px;">@
                    <?php echo (isset($nickname)) ? $nickname : $_SESSION['nickname']; ?>
                </h3>
            </div>
            <hr>
            <div class="offcanvas-body">

                <div class="d-flex justify-content-center fs-3 dash">
                    <div class="nav flex-column nav-pills me-3 dash-menu" id="v-pills-tab" role="tablist"
                        aria-orientation="vertical">
                        <a href="./dashboard.php#?txtID=<?php echo $_SESSION['id']; ?>" class="nav-link"> <button
                                class="nav-link " id="v-pills-home-tab" data-bs-toggle="pill"
                                data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home"
                                aria-selected="false">Inicio</button></a>
                        <button class="nav-link active" id="v-pills-profile-tab" data-bs-toggle="pill"
                            data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile"
                            aria-selected="true">Perfil</button>
                        <a href="./ajustes.php#?txtID=<?php echo $_SESSION['id']; ?>" class="nav-link"> <button
                                class="nav-link " id="v-pills-settings-tab" data-bs-toggle="pill"
                                data-bs-target="#v-pills-settings" type="button" role="tab"
                                aria-controls="v-pills-settings" aria-selected="false">Ajustes</button></a>
                        <a href="./cerrar.php" class="nav-link"> <button
                                class="nav-link bg-danger text-white opacity-50 btn_exit" type="button" role="button"
                                id="close">Cerrar
                                sesion</button></a>
                    </div>

                </div>
            </div>

        </div>

        <div class="tab-content contenedor-inicio h-75 " id="v-pills-tabContent">


            <div class="tab-pane fade show active d-flex flex-row w-100 h-100 justify-content-center"
                id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab" tabindex="0">

                <div class="imagen-login m-auto container position-relative">
                    <img src="./img/<?php echo $foto; ?>" alt="" height="125px" width="125px"
                        style="border-radius: 50%; box-shadow: 0 7px 10px rgb(3, 39, 73);">
                    <div class="overlay" style="overflow:clip">
                        <h3 class="m-3 fw-bolder"
                            style="overflow-x: clip; border-top: 2px solid white;  border-bottom: 2px solid white;">
                            Recuerda tu imagen
                        </h3>
                    </div>
                    <br>
                    <h3 class="p-2 fw-bolder text-decoration-underline">@
                        <?php echo $nickname; ?>
                    </h3>

                </div>

                <div class=" bg-black bg-opacity-10  w-75 p-4 overflow-auto" style="border-radius: 15px;">
                    <div class="perfil ">
                        <form action="" method="post" style=" align-items: baseline!important;"
                            enctype="multipart/form-data">
                            <p style="width: 90%; margin: 20px auto; font-size: 20px;" class="mensaje_p">Recuerda que
                                puedes actualizar
                                tus datos,
                                <?php echo $nombres . " " . $apellidos; ?>
                            </p>
                            <div class="row g-3 my-3">
                                <div class="col  w-100 d-flex">
                                    <input type="text" name="nombres" class="form-control" placeholder="Nombre"
                                        aria-label="Nombre" value="<?php echo $nombres; ?>">
                                </div>
                                <a href="#" class="text-decoration-none text-white">
                                    <button class="btn btn-primary w-100" type="submit" id="btnedit">
                                        <strong>Actualizar</strong></button></a>
                                <div class="col  w-100 d-flex">
                                    <input type="text" name="apellidos" class="form-control" placeholder="Apellidos"
                                        aria-label="Apellidos" value="<?php echo $apellidos; ?>"><a href="#"
                                        class="text-decoration-none text-white">
                                </div>
                                <button class="btn btn-primary w-100" type="submit" id="btnedit">
                                    <strong>Actualizar</strong></button></a>
                            </div>
                            <div class="col-12 my-2 w-100 d-flex">
                                <label class="visually-hidden" for="inlineFormInputGroupUsername">NickName</label>
                                <div class="input-group ">
                                    <div class="input-group-text">@</div>
                                    <input type="text" name="nickname" class="form-control rounded-end-2"
                                        id="inlineFormInputGroupUsername" placeholder="NickName"
                                        value="<?php echo $nickname; ?>"><a href="#"
                                        class="text-decoration-none text-white">
                                        <button class="btn btn-primary w-100" style="margin-left: 10px;" type="submit"
                                            id="btneditnick">
                                            <strong>Actualizar Nick</strong></button></a>
                                </div>
                            </div>
                            <div class="row-2 g-3 my-3">
                                <div class="col  w-100 d-flex">
                                    <input type="text" name="telegram_id" class="form-control w-75" placeholder="telegram Id"
                                        aria-label="telegram_id" value="<?php echo $telegram_id; ?>"><a href="#"
                                        class="text-decoration-none text-white">
                                        <button class="btn btn-primary w-100" style="margin-left: 10px;" type="submit"
                                            id="btnedit">
                                            <strong>Actualizar</strong></button></a>
                                </div>
                                <div class="row-2 g-3 my-3">
                                    <div class="col  w-100 d-flex">
                                        <input type="file" name="foto" class="form-control w-75"
                                            placeholder="Foto perfil" aria-label="foto" value="<?php echo $foto; ?>"><a
                                            href="#" class="text-decoration-none text-white">
                                            <button class="btn btn-primary w-100" style="margin-left: 10px;"
                                                type="submit" id="btnedit">
                                                <strong>Actualizar</strong></button></a>
                                    </div>
                                </div>
                            </div>

                        </form>

                    </div>

                </div>
            </div>

        </div>


        <?php include("../../templates/footer.php"); ?>