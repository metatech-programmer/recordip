// Función para obtener los nuevos mensajes del servidor
<<<<<<< HEAD
function obtenerNuevosMensajes() {
    return fetch('./recuperar_co.php') // Hacer petición al servidor
      .then(function(response) {
        return response.json(); // Obtener la respuesta como JSON
      });
  }
  
  // Función para actualizar el chat con nuevos mensajes
  function actualizarChat() {
    obtenerNuevosMensajes() // Obtener nuevos mensajes del servidor
      .then(function(mensajes) {
        mostrarMensajes(mensajes); // Mostrar los mensajes en el chat
      })
      .catch(function(error) {
        console.error(error);
      });
  }
  
  // Llamar a la función cada 5 segundos
  setInterval(actualizarChat, 1000); // 5000 milisegundos = 5 segundos
  
=======
async function obtenerNuevosMensajes() {
	const response = await fetch("./recuperar_co.php"); // Hacer petición al servidor
	return await response.json();
}

// Función para actualizar el chat con nuevos mensajes
function actualizarChat() {
	obtenerNuevosMensajes() // Obtener nuevos mensajes del servidor
		.then((mensajes) => {
			mostrarMensajes(mensajes); // Mostrar los mensajes en el chat
		})
		.catch((error) => {
			console.error(error);
		});
}

// Llamar a la función cada 5 segundos
setInterval(actualizarChat, 5000); // 5000 milisegundos = 5 segundos

// Función para obtener los nuevos mensajes del servidor
// biome-ignore lint/suspicious/noRedeclare: <explanation>
async function obtenerNuevosMensajes() {
	const response = await fetch("./recuperar_co.php"); // Hacer petición al servidor
	return await response.json();
}

// Función para actualizar el chat con nuevos mensajes
// biome-ignore lint/suspicious/noRedeclare: <explanation>
function actualizarChat() {
	obtenerNuevosMensajes() // Obtener nuevos mensajes del servidor
		.then((mensajes) => {
			mostrarMensajes(mensajes); // Mostrar los mensajes en el chat
		})
		.catch((error) => {
			console.error(error);
		});
}

// Llamar a la función cada 5 segundos
setInterval(actualizarChat, 5000); // 5000 milisegundos = 5 segundos
>>>>>>> e58a4b94673fa2635cf300002517e4372dff8182
