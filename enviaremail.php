<?php
	$asunto = $_POST{'asunto'};
	$nombre = $_POST{'nombre'};
	$email = $_POST{'email'};
	$mensaje = $nombre . "/n{'mensaje'};
	
	mail("ijzapata74@misena.edu.co", $asunto, $mensaje, "FROM: $email");
	echo '<script>alert("El mensaje fue enviado");</script>';
	header("Location: contactenos.html");
?>


