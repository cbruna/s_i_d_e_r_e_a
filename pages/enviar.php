<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $to = "brunacr@hotmail.com"; // El correo destino
    $subject = "Nuevo mensaje del formulario web";
    $message = "Nombre: " . $_POST['nombre'] . "\n" . "Mensaje: " . $_POST['mensaje'];
    //$headers = "From: no-reply@tudominio.com"; // Importante: usa un dominio tuyo

    if(mail($to, $subject, $message, $headers)){
        echo "Correo enviado exitosamente.";
    } else {
        echo "Error al enviar.";
    }
}
?>
