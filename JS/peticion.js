// Función para obtener los nuevos mensajes del servidor
function obtenerNuevosMensajes() {
    return fetch('./recuperar_co.php') // Hacer petición al servidor
      .then((response) => {
        return response.json(); // Obtener la respuesta como JSON
      });
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
  setInterval(actualizarChat, 86400000 ); // 86400000 milisegundos = 24 horas
  
