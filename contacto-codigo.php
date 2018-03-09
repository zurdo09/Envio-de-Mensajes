<?php

	include ( "NexmoMessage.php" );

	if (empty($_POST['name']) && empty($_POST['email'])) {
		header('refresh:1; url=index.php');
	} else {
		$nombre = $_POST['name'];
		$email = $_POST['email'];
		$telefono = $_POST['telefono'];
		$codigo = $_POST['codigo'];
		$bcc =  "Bcc: " . "\r\n";
		$email_usuario = $email;
		$cuerpomensaje = "Nombre: " . $nombre . "\n" . "E-Mail: " . $email . "\n" . "Telefono: " . $telefono;
		mail("web7@tickets.nerdtecs.com", "Summer Fest Designcenter", $cuerpomensaje,'From:'. $email . "\r\n".$bcc);
		// header('refresh:2; url=index.php');

		if ($email_usuario = $email ){

			$telefono_usuario = $telefono;
			$mensajefest = "Su codigo de validacion es: ";

			// mensaje de texto
			$from = "Designcenter";
			$message = $mensajefest . $codigo;
			$nexmo_sms = new NexmoMessage('92ae98dc', 'J2g1oPDPOgtJX29e');
			$info = $nexmo_sms->sendText($telefono_usuario, $from, $message);
			echo $nexmo_sms->displayOverview($info);
		} else {
			echo "Ya ha participado una ves";
		}
	}

?>



<center><h3>Gracias por escribirnos. Le enviaremos una respuesta a la brevedad posible</h3></center> 