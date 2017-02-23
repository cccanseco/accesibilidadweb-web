<?php

session_start();

function generateFormToken($form) {
    
       // generate a token from an unique value
    	$token = md5(uniqid(microtime(), true));  
    	
    	// Write the generated token to the session variable to check it against the hidden field when the form is sent
    	$_SESSION[$form.'_token'] = $token; 
    	
    	return $token;

}

function verifyFormToken($form) {
    
    // check if a session is started and a token is transmitted, if not return an error
	if(!isset($_SESSION[$form.'_token'])) { 
		return false;
    }
	
	// check if the form is sent with token in it
	if(!isset($_POST['token'])) {
		return false;
    }
	
	// compare the tokens against each other if they are still the same
	if ($_SESSION[$form.'_token'] !== $_POST['token']) {
		return false;
    }
	
	return true;
}

function check_email_address($email) {
	// Primero se comprueba que existe una @ y que las longitudes son correctas
	if (!ereg("[^@]{1,64}@[^@]{1,255}", $email)) {
		// Email inválido por un número incorrecto de carácteres o número incorrecto de @'s
		return false;
	}
	// Partimos el email en porciones, a partir de la @ y el .
	$email_array = explode("@", $email);
	$local_array = explode(".", $email_array[0]);
	for ($i = 0; $i < sizeof($local_array); $i++) {
		if (!ereg("^(([A-Za-z0-9!#$%&'*+/=?^_`{|}~-][A-Za-z0-9!#$%&'*+/=?^_`{|}~\.-]{0,63})|(\"[^(\\|\")]{0,62}\"))$", $local_array[$i])) {
			return false;
		}
	}
	if (!ereg("^\[?[0-9\.]+\]?$", $email_array[1])) {
		// Comprobamos si el dominio es una IP
		$domain_array = explode(".", $email_array[1]);
		if (sizeof($domain_array) < 2) {
			return false; // Dominio con partes insuficientes
		}
		for ($i = 0; $i < sizeof($domain_array); $i++) {
			if (!ereg("^(([A-Za-z0-9][A-Za-z0-9-]{0,61}[A-Za-z0-9])|([A-Za-z0-9]+))$", $domain_array[$i])) {
				return false;
			}
		}
	}
return true;
}

if ($_POST) {
	if (verifyFormToken('formContact')) {
		if(!($_POST["nombre"]) || !($_POST["mail"]) || (($_POST["mail"]) && !(check_email_address($_POST["mail"])))) {
			$error=true;
			if(!($_POST["nombre"])) $errorNombre = true;
			if(($_POST["mail"])) {
				  if (!(check_email_address($_POST["mail"]))) $mailIncorrecto=true;
			}else $mailVacio=true;

		}else{

			$destinatario = "tanta@tantacom.com";
			$subject = "Solicitud de contacto en www.accesibilidadweb.com";
			$nombre = HTMLEntities($_POST["nombre"], ENT_COMPAT, "UTF-8");
			$solucion = HTMLEntities($_POST["solucion"], ENT_COMPAT, "UTF-8");

			$cuerpo = "Nombre: " . $nombre . "\n";
			$cuerpo .= "Solución: " . $_POST["solucion"] . "\n";
			$cuerpo .= "Correo electrónico: " . $_POST["mail"] . "\n";
			$cuerpo .= "Empresa: " . $_POST["empresa"] . "\n";
			$cuerpo .= "Telefono: " . $_POST["telefono"] . "\n";
			$cuerpo .= "Sitio Web: " . $_POST["web"] . "\n";

			$headers = "MIME-Version: 1.0\r\n";
			$headers .= "Content-type: text/html; charset=UTF-8\r\n";
			$headers .= "From: ".$nombre." <".$_POST['mail'].">\r\n";
			$result = mail($destinatario,$subject,$cuerpo,$headers);
			header("location: ./gracias.php?ok=true");
		}
	}
	else{
		$error=true;
		$errorToken = true;
	}
}
else{
	$newToken = generateFormToken('formContact');
}

?>