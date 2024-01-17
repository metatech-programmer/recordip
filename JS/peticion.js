<<<<<<< HEAD
// Función para obtener los nuevos mensajes del servidor
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
  setInterval(actualizarChat, 5000); // 5000 milisegundos = 5 segundos
=======
// Función para obtener los nuevos mensajes del servidor
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
  setInterval(actualizarChat, 5000); // 5000 milisegundos = 5 segundos
>>>>>>> 3af5b5a7b7323ad005b11fdcb45832df85278acc
  