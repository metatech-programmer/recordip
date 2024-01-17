<<<<<<< HEAD
<?php

// Obtener la hora y fecha actual
date_default_timezone_set('America/Bogota');
$hora_actual = date('H:i'); // Hora actual en formato HH:MM:SS
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


        if ($fila['fecha_recordatorio'] <= $fecha_actual) {
            if ($fila['hora_recordatorio'] <= $hora_actual) {

                // Obtener los datos necesarios
                $mensaje = $fila['mensaje_recordatorio'];
                $destinatario = $fila['destinatario'];

                // Enviar mensaje de Telegram utilizando el número de teléfono como ID de chat
                // Datos de la API de Telegram
                $api_url = 'https://api.telegram.org/bot5892139604:AAETOZNcN_76cbJ_CRAlvWuStJpjKHXOwCs/sendMessage'; // URL de la API de Telegram, reemplaza TU_TOKEN con tu token de bot de Telegram
                $chat_id = $destinatario; // Número de teléfono del destinatario

                // Crear el mensaje a enviar
                $data = array(
                    'chat_id' => $chat_id,
                    'text' => $mensaje
                );

                // Configurar las opciones de cURL
                $ch = curl_init();
                curl_setopt($ch, CURLOPT_URL, $api_url);
                curl_setopt($ch, CURLOPT_POST, 1);
                curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

                // Realizar la solicitud cURL
                $resultado = curl_exec($ch);
                // Verificar si la solicitud fue exitosa
                if ($resultado === false) {
                    // Registrar el error en el log de errores
                    error_log('Error al enviar el mensaje de Telegram: ' . curl_error($ch));

                } else {
                    // Registrar el éxito en el log de errores
                    error_log('Mensaje de Telegram enviado con éxito: ' . $resultado);


                    // Eliminar el registro de la base de datos después de enviar el mensaje
                    $id_recordatorio = $fila['id_recordatorio']; // Obtener el ID del recordatorio desde la fila de la base de datos
                    $sentencia_eliminar = $conexion->prepare("DELETE FROM recordatorios WHERE id_recordatorio = :id_recordatorio");
                    $sentencia_eliminar->bindParam(":id_recordatorio", $id_recordatorio);
                    $sentencia_eliminar->execute();
                }

                // Cerrar la sesión de cURL
                curl_close($ch);
            } else {

                error_log("No se encontraron recordatorios para la hora actual o pasada: $hora_actual $fecha_actual");
            }
        } else {

            error_log("No se encontraron recordatorios para la hora y fecha actual o pasada: $hora_actual $fecha_actual");
        }

    }
} else {
    // Registrar el error en el log de errores
    error_log("No se encontraron recordatorios para la hora y fecha actual o pasada: $hora_actual $fecha_actual");
}

=======
<?php

// Obtener la hora y fecha actual
date_default_timezone_set('America/Bogota');
$hora_actual = date('H:i'); // Hora actual en formato HH:MM:SS
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


        if ($fila['fecha_recordatorio'] <= $fecha_actual) {
            if ($fila['hora_recordatorio'] <= $hora_actual) {

                // Obtener los datos necesarios
                $mensaje = $fila['mensaje_recordatorio'];
                $destinatario = $fila['destinatario'];

                // Enviar mensaje de Telegram utilizando el número de teléfono como ID de chat
                // Datos de la API de Telegram
                $api_url = 'https://api.telegram.org/bot5892139604:AAETOZNcN_76cbJ_CRAlvWuStJpjKHXOwCs/sendMessage'; // URL de la API de Telegram, reemplaza TU_TOKEN con tu token de bot de Telegram
                $chat_id = $destinatario; // Número de teléfono del destinatario

                // Crear el mensaje a enviar
                $data = array(
                    'chat_id' => $chat_id,
                    'text' => $mensaje
                );

                // Configurar las opciones de cURL
                $ch = curl_init();
                curl_setopt($ch, CURLOPT_URL, $api_url);
                curl_setopt($ch, CURLOPT_POST, 1);
                curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

                // Realizar la solicitud cURL
                $resultado = curl_exec($ch);
                // Verificar si la solicitud fue exitosa
                if ($resultado === false) {
                    // Registrar el error en el log de errores
                    error_log('Error al enviar el mensaje de Telegram: ' . curl_error($ch));

                } else {
                    // Registrar el éxito en el log de errores
                    error_log('Mensaje de Telegram enviado con éxito: ' . $resultado);


                    // Eliminar el registro de la base de datos después de enviar el mensaje
                    $id_recordatorio = $fila['id_recordatorio']; // Obtener el ID del recordatorio desde la fila de la base de datos
                    $sentencia_eliminar = $conexion->prepare("DELETE FROM recordatorios WHERE id_recordatorio = :id_recordatorio");
                    $sentencia_eliminar->bindParam(":id_recordatorio", $id_recordatorio);
                    $sentencia_eliminar->execute();
                }

                // Cerrar la sesión de cURL
                curl_close($ch);
            } else {

                error_log("No se encontraron recordatorios para la hora actual o pasada: $hora_actual $fecha_actual");
            }
        } else {

            error_log("No se encontraron recordatorios para la hora y fecha actual o pasada: $hora_actual $fecha_actual");
        }

    }
} else {
    // Registrar el error en el log de errores
    error_log("No se encontraron recordatorios para la hora y fecha actual o pasada: $hora_actual $fecha_actual");
}

>>>>>>> 3af5b5a7b7323ad005b11fdcb45832df85278acc
?>