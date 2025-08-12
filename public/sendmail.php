<?php
// Configuración
$to = 'tu-correo@tudominio.com'; // Cambia esto por tu correo
$subject = 'Nueva solicitud desde el formulario web';

// Sanitizar y obtener datos del formulario
$name = isset($_POST['name']) ? strip_tags(trim($_POST['name'])) : '';
$email = isset($_POST['email']) ? filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL) : '';
$message = isset($_POST['message']) ? strip_tags(trim($_POST['message'])) : '';

// Puedes agregar más campos según tu formulario

// Validar campos requeridos
if ($name && $email) {
    $headers = "From: $name <$email>\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    $body = "Nombre: $name\n";
    $body .= "Email: $email\n";
    $body .= "Mensaje: $message\n";
    // Agrega más campos aquí si es necesario

    if (mail($to, $subject, $body, $headers)) {
        header('Location: /thank-you');
        exit();
    } else {
        echo 'Error al enviar el correo. Intenta de nuevo más tarde.';
    }
} else {
    echo 'Por favor completa todos los campos requeridos.';
}
?>
