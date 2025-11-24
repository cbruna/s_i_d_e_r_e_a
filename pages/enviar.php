<?php
// 1. CONFIGURACIÓN
// Aquí pon el correo que YA crearon en cPanel (el de tu jefe/empresa)
$destinatario = "info@siderea.com.ar"; 

$asunto = "Nuevo mensaje desde el sitio web";

// 2. CAPTURA DE DATOS
$nombre = $_POST['nombre'];
$empresa = $_POST['empresa'];
$direccion = $_POST['direccion'];
$localidad = $_POST['localidad'];
$pais = $_POST['pais'];
$telefono = $_POST['telefono'];
$email = $_POST['email'];
$mensaje = $_POST['mensaje'];

// 3. ARMADO DEL CORREO
$cuerpo_mensaje = "Has recibido un nuevo mensaje desde el formulario web.\n\n";
$cuerpo_mensaje .= "Nombre: " . $nombre . "\n";
$cuerpo_mensaje .= "Empresa: " . $empresa . "\n";
$cuerpo_mensaje .= "Dirección: " . $direccion . "\n";
$cuerpo_mensaje .= "Localidad: " . $localidad . "\n";
$cuerpo_mensaje .= "País: " . $pais . "\n";
$cuerpo_mensaje .= "Teléfono/Fax: " . $telefono . "\n";
$cuerpo_mensaje .= "E-mail: " . $email . "\n";
$cuerpo_mensaje .= "Comentario: \n" . $mensaje . "\n";

// 4. CABECERAS (HEADERS) - ¡IMPORTANTE!
// El "From" DEBE ser una dirección válida de tu dominio para que Nuthost no lo bloquee.
// Puedes usar la misma dirección de destino o una tipo 'no-reply@tudominio.com'
$headers = "From: " . $destinatario . "\r\n";
$headers .= "Reply-To: " . $email . "\r\n"; // Para que al dar "responder", le responda al cliente
$headers .= "X-Mailer: PHP/" . phpversion();

// 5. ENVÍO
if (mail($destinatario, $asunto, $cuerpo_mensaje, $headers)) {
    // Si se envió correctamente:
    echo "<h1>¡Mensaje enviado con éxito!</h1>";
    echo "<p>Gracias por contactarnos.</p>";
} else {
    // Si falló:
    echo "<h1>Error al enviar</h1>";
    echo "<p>Por favor intenta nuevamente.</p>";
}
?>
