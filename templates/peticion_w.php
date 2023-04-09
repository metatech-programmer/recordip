<?php
// Obtener la hora y fecha actual
$hora_actual = date("H:i:s"); // Hora actual en formato HH:MM:SS
$fecha_actual = date("Y-m-d"); // Fecha actual en formato YYYY-MM-DD

// Realizar la consulta a la base de datos (ejemplo con PDO)
$sentencia = $conexion->prepare("SELECT *,(SELECT telegram_id_usuario FROM usuarios WHERE  usuarios.id_usuario=recordatorios.id_usuario) as destinatario FROM recordatorios WHERE fecha_recordatorio <= :fecha_actual AND hora_recordatorio <= :hora_actual ORDER BY id_recordatorio;");
$sentencia->bindParam(":fecha_actual", $fecha_actual);
$sentencia->bindParam(":hora_actual", $hora_actual);
$sentencia->execute();
$lista_tbl_recordatorios = $sentencia->fetchAll(PDO::FETCH_ASSOC);


// Verificar si se obtuvieron resultados
if (count($lista_tbl_recordatorios) > 0) {
    // Recorrer los resultados
    foreach ($lista_tbl_recordatorios as $fila) {
        // Obtener los datos necesarios
        $mensaje = $fila['mensaje_recordatorio']; // Ejemplo de obtener el mensaje desde la fila de la base de datos
        $destinatario = $fila['destinatario']; // Ejemplo de obtener el destinatario desde la fila de la base de datos

        // Enviar mensaje de WhatsApp en segundo plano con el token de WhatsApp Business
        // ... (código para enviar el mensaje de WhatsApp utilizando el token de WhatsApp Business)
// Datos de la API de WhatsApp Business
        $api_url = 'https://api.example.com'; // URL de la API de WhatsApp Business
        $token = 'TU_TOKEN'; // Token de WhatsApp Business

        // Datos del mensaje de WhatsApp
        $mensaje = 'Hola, este es un mensaje de prueba'; // Mensaje a enviar
        $destinatario = '1234567890'; // Número de teléfono del destinatario

        // Crear la estructura del mensaje en formato JSON
        $data = array(
            'phone' => $destinatario,
            'message' => $mensaje
        );
        $json_data = json_encode($data);

        // Configurar las opciones de cURL
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $api_url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $json_data);
        curl_setopt(
            $ch,
            CURLOPT_HTTPHEADER,
            array(
                'Content-Type: application/json',
                'Authorization: Bearer ' . $token
            )
        );
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        // Realizar la solicitud cURL
        $resultado = curl_exec($ch);

        // Verificar si la solicitud fue exitosa
        if ($resultado === false) {
            // Registrar el error en el log de errores
            error_log('Error al enviar el mensaje de WhatsApp: ' . curl_error($ch));
        } else {
            // Registrar el éxito en el log de errores
            error_log('Mensaje de WhatsApp enviado con éxito: ' . $resultado);
        }

        // Cerrar la sesión de cURL
        curl_close($ch);

        // Registrar el éxito en el log de errores
        error_log("Mensaje de WhatsApp enviado con éxito a $destinatario: $mensaje");
    }
} else {
    // Registrar el error en el log de errores
    error_log("No se encontraron recordatorios para la hora y fecha actual o pasada: $hora_actual $fecha_actual");
}

?>