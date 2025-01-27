<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    $to = "cristina@cuatrorlabs.cl"; // Reemplaza con tu dirección de correo
    $subject = "Nuevo mensaje de contacto";
    $body = "Nombre: $name\nCorreo: $email\n\nMensaje:\n$message";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "Mensaje enviado con éxito.";
    } else {
        echo "Error al enviar el mensaje. Inténtalo de nuevo.";
    }
} else {
    echo "Método no permitido.";
}
?>
