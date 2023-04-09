<?php include("../../templates/header.php");
$txtID = isset($_GET["txtID"]) ? intval($_GET["txtID"]) : 0; ?>

<title></title>
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
                <button type="button" class="btn-close btn_p" data-bs-dismiss="offcanvas" aria-label="Close"></button>
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

                        <a href="dashboard.php#?txtID=<?php echo $_SESSION['id']; ?>" class="nav-link"><button
                                class="nav-link " id="v-pills-home-tab" data-bs-toggle="pill"
                                data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home"
                                aria-selected="true">Inicio</button></a>

                        <a href="perfil.php#?txtID=<?php echo $_SESSION['id']; ?>" class="nav-link"> <button
                                class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill"
                                data-bs-target="#v-pills-profile" type="button" role="tab"
                                aria-controls="v-pills-profile" aria-selected="false">Perfil</button></a>

                        <button class="nav-link active" id="v-pills-settings-tab" data-bs-toggle="pill"
                            data-bs-target="#v-pills-settings" type="button" role="tab" aria-controls="v-pills-settings"
                            aria-selected="false">Ajustes</button>

                        <a href="<?php echo $url_base; ?>php/php_dashboard/cerrar.php" class="nav-link"> <button
                                class="nav-link bg-danger text-white opacity-50 btn_exit" type="button" role="button"
                                id="close">Cerrar
                                sesion</button></a>
                    </div>

                </div>
            </div>

        </div>

        <div class="tab-content contenedor-inicio h-75 " id="v-pills-tabContent">
            <div class="tab-pane fade show active d-flex flex-row w-100 h-100 " id="v-pills-settings" role="tabpanel"
                aria-labelledby="v-pills-settings-tab" tabindex="0">
                <h1 class="w-75 m-auto">Ajustes de la aplicación</h1>
                <div class=" bg-black bg-opacity-10 m-1 w-50 p-4 overflow-auto" style="border-radius: 15px;">
                    <form>
                        <fieldset>
                            <legend>Preferencias de idioma</legend>
                            <label for="language-selector">Idioma:</label>
                            <select class="form-select w-50 m-auto mt-2" id="language-selector"
                                name="language-selector">
                                <option value="es">Español</option>
                                <option value="en">Inglés</option>
                            </select>
                        </fieldset>
                        <fieldset>
                            <legend class="lbl_modo">Modo oscuro</legend>
                            <p>Activa o desactiva el modo oscuro:</p>
                            <button id="toggle-theme" class="btn btn-lg btn-outline-secondary">
                                <i id="icon-moon" class="bi bi-moon"></i>
                                <i id="icon-sun" class="bi bi-sun" style="display:none"></i>
                            </button>
                        </fieldset>
                        <button class="bg-primary border-primary btn-primary text-white rounded-2 w-50 m-auto"
                            type="submit">Guardar cambios</button>
                    </form>
                </div>
            </div>
        </div>

        <?php include("../../templates/footer.php"); ?>