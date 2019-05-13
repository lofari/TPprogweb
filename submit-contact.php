<?php
	// captura de variables
	$nombre=$_POST['name'];
	$email=$_POST['email'];
	$asunto='Consulta desde la web de ' . $nombre;
	$comentarios=$_POST['message'];

	// cuerpo del email
	$mensaje="
	<strong>Nombre completo:</strong> $nombre<br><br>
	<strong>Correo electrónico:</strong> $email<br><br>
	<strong>Asunto:</strong> $asunto<br><br>
	<strong>Comentarios:</strong> $comentarios<br><br>
	";



	mail("info@winlermarket.com", "Contacto desde la web", $mensaje, "From: WinlerMarket <test@maderaslitoralenos.com> \nReply-To:$email \nContent-Type: text/html; charset=utf-8\n");
?>
<!DOCTYPE html>
<html lang="es">
	<head>


		<meta charset="utf-8">
		<title>Gracias</title>
	</head>

	<body>
		<h1>Gracias contactarte con nosotros!</h1>
		<a href="index.php">Volver</a>
	</body>
</html>
