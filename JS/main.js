const form = document.querySelector("form");
const toggleButton = document.querySelector("#toggle-theme");
const iconMoon = document.querySelector("#icon-moon");
const iconSun = document.querySelector("#icon-sun");
const themeLabel = document.querySelector("#theme-label");
const body = document.querySelector(".body");
let isDarkMode = false;

const titulo = document.querySelector("h1");
const descripcion = document.querySelector("p");
const boton = document.querySelector('button[type="submit"]');
const tituloperfil = document.getElementById("perfil_titulo");
const tituloconfg = document.getElementById("ajustes_titulo");
const titulodash = document.getElementById("dash_titulo");

// Agrega un evento 'submit' al formulario y evita que se envíe
form.addEventListener("submit", (event) => {
	event.preventDefault();
	guardarPreferencias();
});

function idiom() {
	const language = document.querySelector("#language-selector").value;

	// Guarda la preferencia de idioma en cookies
	document.cookie = `language=${language}; expires=${new Date(
		2030,
		0,
		1,
	).toUTCString()} path=/`;

	// Actualiza el contenido de la página según el idioma seleccionado

	if (language === "es") {
		titulo.textContent = "Preferencias de idioma";
		descripcion.textContent = "Seleccione su tema preferido:";
		boton.textContent = "Guardar cambios";
		tituloconfg.innerText = "Recordip | Ajustes app";
		titulodash.innerText = "Recordip | Panel app";
		tituloperfil.innerText = "Recordip | Perfil app";
	} else {
		titulo.textContent = "Language preferences";
		descripcion.textContent = "Select your preferred theme:";
		boton.textContent = "Save changes";
		tituloconfg.innerText = "Recordip | Settings app";
		titulodash.innerText = "Recordip | Dashboard app";
		tituloperfil.innerText = "Recordip | Profile app";
	}
}

// Comprueba si hay una preferencia de idioma guardada en las cookies al cargar la página
window.addEventListener("DOMContentLoaded", () => {
	const cookieArray = document.cookie
		.split(";")
		.map((cookie) => cookie.trim().split("="));
	const languageCookie = cookieArray.find((cookie) => cookie[0] === "language");

	if (languageCookie) {
		const language = languageCookie[1];
		// Establece la preferencia de idioma guardada en cookies
		document.querySelector("#language-selector").value = language;
		// Actualiza el contenido de la página según la preferencia de idioma guardada
		idiom();
	}
});

// Escucha cambios en la selección de idioma
document.querySelector("#language-selector").addEventListener("change", idiom);

// Agrega una función para cambiar el tema oscuro
toggleButton.addEventListener("click", () => {
	if (isDarkMode) {
		body.classList.remove("dark-mode");
		iconMoon.style.display = "inline-block";
		iconSun.style.display = "none";
		themeLabel.textContent = "Oscuro";
		isDarkMode = false;
	} else {
		body.classList.add("dark-mode");
		iconMoon.style.display = "none";
		iconSun.style.display = "inline-block";
		themeLabel.textContent = "Claro";
		isDarkMode = true;
	}
});

// Agrega una función para guardar la preferencia del usuario en cookies
function guardarPreferencias() {
	const isDarkMode = body.classList.contains("dark-mode");
	document.cookie = `isDarkMode=${isDarkMode}; expires=${new Date(
		2030,
		0,
		1,
	).toUTCString()} path=/`;
}

// Agrega código para cargar las preferencias del usuario al cargar la página
window.addEventListener("load", () => {
	const cookies = document.cookie.split(";");
	// biome-ignore lint/complexity/noForEach: <explanation>
	cookies.forEach((cookie) => {
		const [name, value] = cookie.split("=");
		if (name.trim() === "language") {
			document.querySelector("#language-selector").value !== value;
		} else if (name.trim() === "isDarkMode") {
			if (value === "true") {
				toggleButton.click();
			}
		}
	});
});
