<?php
// Recibe los datos del formulario
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$mensaje = $_POST['mensaje'];
$fecha = date('Y-m-d H:i:s'); // Fecha y hora actual

// Limpia el mensaje por si tiene comas o saltos
$mensaje = str_replace(["\n", "\r", ","], " ", $mensaje);

// Abre el archivo datos.csv y agrega una nueva línea
$file = fopen('datos.csv', 'a'); // 'a' significa "agregar al final"
fputcsv($file, [$nombre, $email, $mensaje, $fecha]);
fclose($file);

// Muestra un mensaje de éxito
echo "<h2>¡Gracias, $nombre!</h2>";
echo "<p>Tus datos se guardaron correctamente.</p>";
echo "<a href='index.html'>Volver</a>";
?>