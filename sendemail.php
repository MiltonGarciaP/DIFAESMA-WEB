<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Obtiene los datos del formulario
  $name = test_input($_POST["name"]);
  $email = test_input($_POST["email"]);
  $message = test_input($_POST["message"]);
  // Configura los encabezados del correo electrónico
  $to = "Miltongp26@gmail.com";
  $subject = "Mensaje de " . $name . " desde tu sitio web";
  $headers = "From: " . $email . "\r\n" .
             "Reply-To: " . $email . "\r\n" .
             "X-Mailer: PHP/" . phpversion();
  // Envía el correo electrónico
  if (mail($to, $subject, $message, $headers)) {
    // Envía una respuesta exitosa al cliente
    echo "¡Gracias por tu mensaje! Nos pondremos en contacto contigo pronto.";
  } else {
    // Envía una respuesta de error al cliente
    echo "Lo siento, ha ocurrido un error al enviar tu mensaje. Por favor, inténtalo de nuevo más tarde.";
  }
}
// Función para limpiar los datos del formulario
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
