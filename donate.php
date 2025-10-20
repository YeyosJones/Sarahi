<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nombre = htmlspecialchars($_POST['nombre']);
  $correo = htmlspecialchars($_POST['correo']);
  $mensaje = htmlspecialchars($_POST['mensaje']);

  // Enviar correo (requiere configuración del servidor)
  $to = "tucorreo@ejemplo.com";
  $subject = "Nuevo mensaje de apoyo de $nombre";
  $body = "Nombre: $nombre\nCorreo: $correo\n\nMensaje:\n$mensaje";
  $headers = "From: $correo";

  if (mail($to, $subject, $body, $headers)) {
    echo "<h2>Gracias por tu mensaje, $nombre. 💙</h2>";
  } else {
    echo "<h2>Hubo un problema al enviar tu mensaje. Inténtalo más tarde.</h2>";
  }
}
?>