<?php include("../../templates/header.php");
include("./dashboardCRUD.php");
include("./control.php"); ?>


<title id="dash_titulo"></title>
</head>

<body>
    <div class="bg-primary d-flex align-items-center menusito z-1">

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

                        <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill"
                            data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home"
                            aria-selected="true">Inicio</button>

<<<<<<< HEAD
                        <a href="./perfil.php#?txtID=<?php echo $_SESSION['id']; ?>" class="nav-link"> <button
=======
                        <a href="perfil.php#?txtID=<?php echo $_SESSION['id']; ?>" class="nav-link"> <button
>>>>>>> e58a4b94673fa2635cf300002517e4372dff8182
                                class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill"
                                data-bs-target="#v-pills-profile" type="button" role="tab"
                                aria-controls="v-pills-profile" aria-selected="false">Perfil</button></a>

<<<<<<< HEAD
                        <a href="./ajustes.php#?txtID=<?php echo $_SESSION['id']; ?>" class="nav-link"> <button
=======
                        <a href="ajustes.php#?txtID=<?php echo $_SESSION['id']; ?>" class="nav-link"> <button
>>>>>>> e58a4b94673fa2635cf300002517e4372dff8182
                                class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill"
                                data-bs-target="#v-pills-settings" type="button" role="tab"
                                aria-controls="v-pills-settings" aria-selected="false">Ajustes</button></a>

<<<<<<< HEAD
                        <a href="./cerrar.php" class="nav-link"> <button
=======
                        <a href="<?php echo $url_base; ?>php/admin/cerrar.php" class="nav-link"> <button
>>>>>>> e58a4b94673fa2635cf300002517e4372dff8182
                                class="nav-link bg-danger text-white opacity-50 btn_exit" type="button" role="button"
                                id="close">Cerrar sesion</button></a>
                    </div>

                </div>
            </div>

        </div>

        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog ">
                <div class="modal-content" id="modal_mensaje">
                    <div class="modal-header bg-primary">
                        <h1 class="modal-title fs-5 text-white" id="exampleModalLabel">
                            Nuevo Recordatorio</h1>
                        <button type="button" class="btn-close btn-close-white " data-bs-dismiss="modal"
                            aria-label="Close" id="closing_2"></button>
                    </div>
                    <br>
                    <div class="modal-body">
                        <form action="" method="post" enctype="multipart/form-data" id="formulario_a">
                            <div class="mb-3">
                                <label for="recipient-hour" class="col-form-label h_reminder">Rol</label>
                                <input type="text" class="form-control form_rol" id="recipient-hour" name="id_rol">
                            </div>
                            <div class="modal-footer">
                                <a class="btn btn-secondary btnc_reminder" data-bs-dismiss="modal"
<<<<<<< HEAD
                            aria-label="Close" href="./dashboardAdmin.php"
=======
                            aria-label="Close" href="http://localhost/app_remembers/php/admin/dashboardAdmin.php"
>>>>>>> e58a4b94673fa2635cf300002517e4372dff8182
                                    id="closing">Cerrar</a>
                                <a  class="btn btn-primary btn_r btn_actualizar" onclick="btnEditar();"
                                >Actualizar</a>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>

<<<<<<< HEAD
        <div class="tab-content contenedor-inicio h-75 overflow-auto" id="v-pills-tabContent">
=======
        <div class="tab-content contenedor-inicio h-75" id="v-pills-tabContent">
>>>>>>> e58a4b94673fa2635cf300002517e4372dff8182
            <div class="card z-0">
                <div class="card-body" style="color: black;">
                    <div class="table-responsive-sm ">
                        <table class="table " id="tabla_id">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Rol</th>
                                    <th scope="col">Foto Perfil</th>
                                    <th scope="col">No. Recordatorios</th>
                                    <th scope="col">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($lista_tbl_usuarios as $registro) { ?>
                                    <tr class="">
                                        <td scope="row">
                                            <?php echo $registro['id_usuario'] ?>
                                        </td>
                                        <td>
                                            <?php echo $registro['nombres_usuario'] ?>
                                            <?php echo $registro['apellidos_usuario'] ?>
                                        </td>
                                        <td>
                                            <?php echo $registro['rol'] ?>
                                        </td>
                                        <td>
                                            <img width="50" src="./img/<?php echo $registro['url_img']; ?>" alt="Perfil"
                                                class="img-fluid rounded-top">
                                        </td>

                                        <td>
                                            <?php echo $registro['n_recordatorios']; ?>
                                        </td>
                                        <td>
                                            <a class="btn btn-info edit modal_on" id="modal"
<<<<<<< HEAD
                                                href="./dashboardAdmin.php?id=<?php echo $registro['id_usuario']; ?>"
=======
                                                href="http://localhost/app_remembers/php/admin/dashboardAdmin.php?id=<?php echo $registro['id_usuario']; ?>"
>>>>>>> e58a4b94673fa2635cf300002517e4372dff8182
                                                type="button" role="button">Editar</a>

                                            <!-- MODAL -->

                                            <a class="btn btn-danger clear"
                                                href="javascript:btnborrar(<?php echo $registro['id_usuario']; ?>);"
                                                type="button" role="button">Eliminar</a>

                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>

                </div>

            </div>


            <?php include("../../templates/footer.php"); ?>