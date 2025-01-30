<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $nombre = htmlspecialchars($_POST['nombre']);
    $apellido = htmlspecialchars($_POST['apellido']);
    $telefono = htmlspecialchars($_POST['telefono']);
    $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
    $mensaje = htmlspecialchars($_POST['mensaje']);

    // Validar campos obligatorios
    if (!$nombre || !$apellido || !$telefono || !$email || !$mensaje) {
        echo "Por favor, complete todos los campos correctamente.";
        exit;
    }

    // Configuración del correo
    $to = "info@jdfinmuebles.com"; // Cambiar al correo destino
    $subject = "Nuevo mensaje desde la web";
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    $body = "Nombre: $nombre $apellido\n";
    $body .= "Teléfono: $telefono\n";
    $body .= "Email: $email\n\n";
    $body .= "Mensaje:\n$mensaje\n";

    // Enviar el correo
    if (mail($to, $subject, $body, $headers)) {
        echo "Mensaje enviado con éxito.";
    } else {
        echo "Hubo un problema al enviar el mensaje. Inténtelo más tarde.";
    }
} else {
    echo "Acceso no permitido.";
}
error_log("Error al enviar correo: " . print_r(error_get_last(), true));
