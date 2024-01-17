<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</div>

<script>
  const form = document.querySelector("form");
  const toggleButton = document.querySelector("#toggle-theme");
  const iconMoon = document.querySelector("#icon-moon");
  const iconSun = document.querySelector("#icon-sun");
  const lblIdioma = document.querySelector("label");
  const lblPreferencia = document.querySelector("legend.lbl_preferencia");
  const lblModo = document.querySelector("legend.lbl_modo");
  const body = document.querySelector(".body");
  let isDarkMode = false;


  const menuTabHome = document.querySelector("#v-pills-home-tab");
  const menuTabPerfil = document.querySelector("#v-pills-profile-tab");
  const menuTabAjustes = document.querySelector("#v-pills-settings-tab");
  const menuTabClose = document.querySelector("#close");

  const btn_update = document.querySelector(".btn_actualizar");

  const modal = document.querySelector("#modal_mensaje");

  const titulo = document.querySelector("h1");
  const tituloBtnDash = document.querySelector(".n_reminder");
  const fechaReminder = document.querySelector(".f_reminder");
  const horaReminder = document.querySelector(".h_reminder");
  const reminderR = document.querySelector(".r_reminder");
  const fechaReminderlbl = document.querySelector("label.f_reminder");
  const horaReminderlbl = document.querySelector("label.h_reminder");
  const reminderRlbl = document.querySelector("label.r_reminder");
  const btnCReminder = document.querySelector(".btnc_reminder");
  const descripcion = document.querySelector("p");
  const boton = document.querySelector('.btn_r');
  const btnEdit = document.querySelectorAll('#btnedit');
  const btnEditNick = document.querySelector('#btneditnick');
  const mensajeP = document.querySelector('.mensaje_p');
  const input = document.querySelectorAll('input');
  const menuT = document.querySelector('h4.menu_t');
  const menuLado = document.querySelector('div.menu-lado');
  const btnedit = document.querySelectorAll('.edit');
  const btnclear = document.querySelectorAll('.clear');

  const closer = document.querySelectorAll('.closer');
  const closere = document.querySelectorAll('.closere');
  const closing = document.querySelectorAll('.closing');
  const closing_2 = document.querySelectorAll('.closing_2');

  const titulo_actions = document.querySelector('.titulo_actions');
  const languages = document.querySelector("html").getAttribute("lang");




 
  function idiom() {

    const language = document.querySelector("#language-selector").value;

    // Guarda la preferencia de idioma en cookies
    document.cookie = `language=${language}; expires=${new Date(
      2030,
      0,
      1
    ).toUTCString()} path=/`;

    // Actualiza el contenido de la página según el idioma seleccionado
    const url = window.location.href;

    if (language === "es") {
      menuTabAjustes.textContent = "Ajustes";
      menuTabPerfil.textContent = "Perfil";
      menuTabHome.textContent = "Inicio";
      menuTabClose.textContent = "Cerrar sesion";
      menuT.textContent = "Recordip, recuerdalo.";

      if (menuTabAjustes.classList.contains("active")) {

        titulo.textContent = "Preferencias de idioma";
        descripcion.textContent = "Seleccione su tema preferido:";
        boton.textContent = "Guardar cambios";
        document.title = "Recordip | Ajustes app";
        lblIdioma.textContent = "Idioma:";
        lblPreferencia.textContent = "Preferencias de idioma";
        lblModo.textContent = "Modo oscuro";
      }
      else if (menuTabPerfil.classList.contains("active")) {
        document.title = "Recordip | Perfil app";
        btnEdit.forEach(btn => {
          btn.innerHTML = "<strong>Actualizar</strong>";
        }
        );
        btnEditNick.innerHTML = "<strong>Actualizar Nick</strong>";
        mensajeP.innerHTML = "Recuerda que puedes actualizar tus datos,  <?php echo (isset($nombres, $apellidos)) ? $nombres . " " . $apellidos : ""; ?>";
        input.item(0).setAttribute("placeholder", "Nombres");
        input.item(1).setAttribute("placeholder", "Apellidos");
        input.item(2).setAttribute("placeholder", "Nick");
        input.item(3).setAttribute("placeholder", "telegram_id");

      }
      else if (menuTabHome.classList.contains("active") && !url.includes("admin")) {
        document.title = "Recordip | Inicio app";
        titulo.textContent = "Nuevo recordatorio";
        tituloBtnDash.innerHTML = "<br> Nuevo Recordatorio";
        btnCReminder.textContent = " cerrar";
        fechaReminder.textContent = " Fecha";
        horaReminder.textContent = " Hora";
        reminderR.textContent = " Recordatorio";
        fechaReminderlbl.textContent = " Fecha";
        horaReminderlbl.textContent = " Hora";
        reminderRlbl.textContent = " recordatorio";
        boton.textContent = "RECORDAR !!!";
        btnedit.forEach(btn => {
          btn.textContent = "Editar";
        });
        btnclear.forEach(btn => {
          btn.textContent = "Eliminar";
        });
        titulo_actions.textContent = "Acciones";
      } else {
        console.log("No pasa nada");
      }


    } else {

      menuTabAjustes.textContent = "Settings";
      menuTabPerfil.textContent = "Profile";
      menuTabHome.textContent = "Dashboard";
      menuTabClose.textContent = "Close session";
      menuT.textContent = "Recordip, remember.";

      if (menuTabAjustes.classList.contains("active")) {

        titulo.textContent = "Language preferences";
        descripcion.textContent = "Select your preferred theme:";
        boton.textContent = "Save changes";
        document.title = "Recordip | Settings app";
        lblIdioma.textContent = "Language:";
        lblPreferencia.textContent = "Preferences of the language:";
        lblModo.textContent = "Mode dark";


      } else if (menuTabPerfil.classList.contains("active")) {
        document.title = "Recordip | Profile app";
        btnEdit.forEach(btn => {
          btn.innerHTML = "<strong>Update</strong>";
        });
        btnEditNick.innerHTML = "<strong>Update Nick</strong>";
        mensajeP.innerHTML = "Reminder that you can update your data,  <?php echo (isset($nombres, $apellidos)) ? $nombres . " " . $apellidos : ""; ?>";
        input.item(0).setAttribute("placeholder", "Names");
        input.item(1).setAttribute("placeholder", "Lastnames");
        input.item(2).setAttribute("placeholder", "Nick");
        input.item(3).setAttribute("placeholder", "Telegram");
      }
      else if (menuTabHome.classList.contains("active") && !url.includes("admin")) {
        document.title = "Recordip | Dashboard app";
        titulo.textContent = "New Reminder";
        tituloBtnDash.innerHTML = " <br> New Reminder";
        btnCReminder.textContent = " close";
        fechaReminder.textContent = " Date";
        horaReminder.textContent = " Time";
        reminderR.textContent = " Reminder";
        fechaReminderlbl.textContent = " Date";
        horaReminderlbl.textContent = " Time";
        reminderRlbl.textContent = " Reminder";
        boton.textContent = "REMINDER !!!";
        btnedit.forEach(btn => {
          btn.textContent = "Edit";
        });
        btnclear.forEach(btn => {
          btn.textContent = "Delete";
        });
        titulo_actions.textContent = "Actions";



      } else {
        console.log("No pasa nada");
      }
    }


  }

   // Agrega un evento 'submit' al formulario y evita que se envíe
   form.addEventListener("submit", function (event) {
    event.preventDefault();
    guardarPreferencias();
  });


  // Función para obtener los nuevos mensajes del servidor

function obtenerNuevosMensajes() {
  return fetch('./perfil.php') // Hacer petición al servidor
    .then(function(response) {
      return response.json(); // Obtener la respuesta como JSON
    });
}

// Función para actualizar el chat con nuevos mensajes
function actualizarChat() {
  obtenerNuevosMensajes() // Obtener nuevos mensajes del servidor
    .then(function(mensajes) {
      console.log(mensajes); // Mostrar los mensajes en el chat
    })
    .catch(function(error) {
      console.error(error);
    });
}

// Llamar a la función cada 5 segundos
setInterval(actualizarChat, 5000); // 5000 milisegundos = 5 segundos


  // Comprueba si hay una preferencia de idioma guardada en las cookies al cargar la página
  window.addEventListener("DOMContentLoaded", () => {
    const cookieArray = document.cookie
      .split(";")
      .map((cookie) => cookie.trim().split("="));
    const languageCookie = cookieArray.find((cookie) => cookie[0] === "language");

    if (languageCookie) {
      const language = languageCookie[1];
      // Establece la preferencia de idioma guardada en cookies
      document.querySelector("html").setAttribute("lang", language);
      document.querySelector("#language-selector").value = language;

      // Actualiza el contenido de la página según la preferencia de idioma guardada
      idiom();

    }
  });

  // Escucha cambios en la selección de idioma
  document.querySelector("#language-selector").addEventListener("change", idiom);

  // Agrega una función para cambiar el tema oscuro
  toggleButton.addEventListener("click", function () {
    if (isDarkMode) {
      body.classList.remove("dark-mode");
      menuLado.classList.remove("dark-mode");
      document.querySelector("button.btn_p").classList.remove("btn-close-white");
      iconMoon.style.display = "inline-block";
      iconSun.style.display = "none";
      isDarkMode = false;
    } else {
      body.classList.add("dark-mode");
      menuLado.classList.add("dark-mode");
      document.querySelector("button.btn_p").classList.add("btn-close-white");

      iconMoon.style.display = "none";
      iconSun.style.display = "inline-block";
      isDarkMode = true;
    }
  });

  // Agrega una función para guardar la preferencia del usuario en cookies
  function guardarPreferencias() {
    const isDarkMode = body.classList.contains("dark-mode");
    document.cookie = `isDarkMode=${isDarkMode}; expires=${new Date(
      2030,
      0,
      1
    ).toUTCString()} path=/`;
  }

  // Agrega código para cargar las preferencias del usuario al cargar la página
  window.addEventListener("load", function () {
    const cookies = document.cookie.split(";");
    cookies.forEach((cookie) => {
      const [name, value] = cookie.split("=");
      if (name.trim() === "language") {
        document.querySelector("#language-selector").value != value;
      } else if (name.trim() === "isDarkMode") {
        if (value === "true") {
          toggleButton.click();
          if (menuTabHome.classList.contains("active")) {
            if (isDarkMode) {
              modal.classList.add("modal_dark");
            } else {
              modal.classList.remove("modal_dark");
            }
          }
        }
      }
    });
  });
</script>
<script>

  function checkCookieValue(name) {
    var cookies = document.cookie.split(';');
    for (var i = 0; i < cookies.length; i++) {
      var cookie = cookies[i].trim();
      if (cookie.indexOf(name) == 0) {
        var value = cookie.substring(name.length + 1);
        if (value == "true") {
          return true;
        }
      }
    }
    return false;
  }


  /* El código anterior usa el complemento jQuery DataTables para crear una tabla con paginación e idioma
  localización. La tabla se identifica con el ID "tabla_id" y tiene una longitud de página de 3. La longitud
  El menú permite al usuario elegir entre mostrar 3, 10, 25 o 50 filas por página. el lenguaje de
  la tabla se establece en español usando un archivo de idioma del complemento DataTables. */

  $(document).ready(function () {
    $("#tabla_id").DataTable({
      "pageLength": 3,
      lengthMenu: [
        [3, 10, 25, 50],
        [3, 10, 25, 50]
      ],
      "language": {
        "url": "https://cdn.datatables.net/plug-ins/1.13.1/i18n/es-ES.json"

      }

    })
  }

  );

  // Agregar un controlador de eventos a la clase común
  $('.modal_on').on('click', function () {
    // Obtener la URL del botón
    let href = $(this).attr("href");

    // Obtener el valor del parámetro ID de la URL
    let id = href.match(/[?&]ID=(\d+)/);

    // Verificar si se encontró el valor del parámetro ID
    if (id && id.length > 1) {
      // El valor del parámetro ID se encuentra en la posición 1 del arreglo
      id = id[1];

      // Actualizar la URL con el valor del parámetro ID

      // Realizar la solicitud GET con la URL actualizada
      $.get(href, function (data) {
        // Procesar la información recibida en 'data'

        // Actualizar la URL
        window.history.pushState(null, '', href);
        if (document.querySelector("html").getAttribute("lang") === "es") {

          titulo.textContent = "Estas editando el recordatorio No. " + id;
        } else {
          titulo.textContent = "You are editing the reminder No. " + id;

        }
        // Abrir el modal después de que se complete la solicitud y se haya actualizado la URL
        $('#exampleModal').modal('show');
      });
    } else {
      window.history.pushState(null, '', href);
      idiom();
      // Abrir el modal después de que se complete la solicitud y se haya actualizado la URL
      $('#exampleModal').modal('show');
    }

    // Prevenir el comportamiento predeterminado del botón, que podría ser seguir la URL o recargar la página
    return false;
  });





  /* Este código agrega detectores de eventos a dos elementos con ID "closer" y "closere". Cuando estos elementos
  se hace clic, actualiza la URL en el historial del navegador para
  "http://localhost/app_remembers/php/php_dashboard/dashboard.php". Esto permite al usuario utilizar el
  botón Atrás del navegador para volver a la página anterior cuando se cierra el modal. */


  if (closer) {
    closer.addEventListener("click", () => {
      $('#exampleModal').modal('hide');
    });
  }
  if (closere) {
    closere.addEventListener("click", () => {
      $('#exampleModal').modal('hide');
    });
  }
  if (closing) {
    closing.addEventListener("click", () => {
      $('#exampleModal').modal('hide');
    });
  }
  if (closing_2) {

    closing_2.addEventListener("click", () => {
      $('#exampleModal').modal('hide');
    });
  }





  function borrar(id) {
    Swal.fire({
      title: '¿Desea borrar el registro?',
      showCancelButton: true,
      confirmButtonText: 'Si, borrar',
    }).then((result) => {
      if (result.isConfirmed) {
        window.location = "./dashboard.php?txtID=" + id;
      }
    })


  }

  function btnborrar(id) {
    Swal.fire({
      title: '¿Desea borrar el registro?',
      showCancelButton: true,
      confirmButtonText: 'Si, borrar',
    }).then((result) => {
      if (result.isConfirmed) {
        window.location = "./dashboardAdmin.php?txtID=" + id;
      }
    })
  }
  
  function btnEditar() {
    if (document.querySelector(".form_rol").value == "2") {
      Swal.fire({
        title: '¿Desea actualizar el usuario?',
        showCancelButton: true,
        confirmButtonText: 'Si, promover a ADMIN',
      }).then((result) => {
        if (result.isConfirmed) {
          document.getElementById("formulario_a").submit();
        }
      })
    } else {
      Swal.fire({
        title: 'Has dado un rol invalido',
        showCancelButton: true,
        confirmButtonText: 'User again',
      }).then((result) => {
        if (result.isConfirmed) {
          document.getElementById("formulario_a").submit();
          $('#exampleModal').modal('hide');
        }
      })
    }

  }
</script>

</body>

</html>