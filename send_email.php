<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $name = htmlspecialchars($_GET['name']);
    $email = htmlspecialchars($_GET['email']);
    $message = htmlspecialchars($_GET['message']);

    // Configura los detalles del correo
    $to = "cristina@cuatrorlabs.cl"; // Reemplaza con tu dirección de correo
    $subject = "Nuevo mensaje de contacto";
    $body = "Nombre: $name\nCorreo: $email\n\nMensaje:\n$message";
    $headers = "From: $email";

    // Enviar el correo
    if (mail($to, $subject, $body, $headers)) {
        echo "Mensaje enviado con éxito.";
    } else {
        echo "Error al enviar el mensaje. Inténtalo de nuevo.";
    }
} else {
    echo "Método no permitido.";
}
?>
