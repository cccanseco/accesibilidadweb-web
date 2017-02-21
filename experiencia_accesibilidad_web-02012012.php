<?
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
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
<head>
	<title>Experiencia en accesibilidad web </title>
	<!-- Metadatos de contenidos de la web -->
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

	<!-- Metadatos para los buscadores -->
	<meta name="description" content="Somos TANTA, compañía integrada en el Grupo OneTec, cuya actividad se centra en el suministro de soluciones y servicios en el ámbito de las Nuevas Tecnologías y la Comunicación. Consúltanos." />
	<meta name="keywords" content="accesibilidad, accesibilidad web, experiencia accesibilidad web" />
	<meta name="title" content="Accesibilidad Web - Experiencia" />
	<!-- Metadatos de navegacion semantica -->
	<link rel="start" href="index.php" title="Página inicial" />
	<link rel="index" href="index.php" title="Página inicial" />
	<link rel="author" href="accesibilidad_web.php" title="La Accesibilidad" />
	<link rel="author" href="auditoria_accesibilidad_web.php" title="Auditoría" />
	<link rel="author" href="adecuacion_accesibilidad_web.php" title="Adecuación y desarrollo" />
	<link rel="section" href="formacion_accesibilidad_web.php" title="Formación" />
	<link rel="section" href="experiencia_accesibilidad_web.php" title="Experiencia" />
	<link rel="section" href="blog/index.php" title="Blog" />
	<link rel="section" href="tanta_comunicacion.php" title="Contacto" />

	<link rel="stylesheet" type="text/css" href="css/styles.css" />

	<!-- Icono en la barra de la URL -->
	 <link rel="shortcut icon" href="favicon.ico" />
	  <!--[if lte IE 6]>
		<link rel="stylesheet" type="text/css" href="css/fixIE6.css" />
	<![endif]-->
	<!--[if IE 7]>
		<link rel="stylesheet" type="text/css" href="css/fixIE7.css" />
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="css/impresion.css" media="print" />

	<script type="text/javascript" src="js/funciones.js"></script>




</head>

<body id="home">

	<div id="wrapper">
		<div class="hide">
			<ul title="Enlaces de salto:">
				<li><a href="#navBar">Menú de navegación</a></li>
				<li><a href="#content">Contenido</a></li>
			</ul>
		</div>
		<div id="header">
			<div>
				<ul>
					<li><a href="index.php" accesskey="0">Inicio</a></li>
					<li><a href="blog/index.php" accesskey="6">Blog</a></li>
					<li class="reset"><a href="tanta_comunicacion.php" accesskey="7">Contacto</a></li>
				</ul>
			</div>
			<a href="index.php"><img src="img/accesibilidadweb.gif" width="243" height="18" alt="logotipo de accesibilidadweb.com" id="logo" /></a>
		</div>
		<div id="navBar">
			<ul>
				<li><a href="accesibilidad_web.php" accesskey="1">La Accesibilidad</a></li>
				<li><a href="auditoria_accesibilidad_web.php" accesskey="2">Auditoría</a></li>
				<li><a href="adecuacion_accesibilidad_web.php" accesskey="3">Adecuación y desarrollo</a></li>
				<li><a href="formacion_accesibilidad_web.php" accesskey="4">Formación</a></li>
				<li class="reset sel"><a href="experiencia_accesibilidad_web.php" accesskey="5">Experiencia</a></li>
			</ul>
		</div>
		<div id="bodyContent">

			<div id="content">
				<h1>Experiencia en Accesibilidad Web</h1>
				<div class="text">
				<p>Somos <strong><a title="abrir enlace externo en ventana nueva" rel="external" href="http://www.tantacom.com/" target="_blank">TANTA Comunicación</a></strong>, compañía integrada en el <strong>Grupo OneTec</strong>, cuya actividad se centra en el suministro de soluciones y servicios en el ámbito de las <strong>Nuevas Tecnologías</strong> y la <strong>Comunicación</strong>.</p>
<span id="linkContact"><a href="#formContact" title="formulario de contacto">¡Contacta ahora!</a></span>
			<p>Nos dirigimos tanto a Clientes Finales como a Empresas desarrolladoras que necesiten cubrir esta necesidad dentro de sus clientes.</p>
			<h2>Casos más representativos:</h2>
			<ul>
				<li><strong>Agencia Nacional de Evaluación de la Calidad y la Acreditación (ANECA)</strong>: nivel doble A de Accesibilidad. <a title="abrir enlace externo en ventana nueva" rel="external" href="http://www.aneca.es" target="_blank">www.aneca.es</a> </li>
				<li><strong>Foro de Reputación Corporativa</strong>: nivel doble A de Accesibilidad. <a title="abrir enlace externo en ventana nueva" rel="external" href="http://www.reputacioncorporativa.org" target="_blank">www.reputacioncorporativa.org</a> </li>
				<li><strong>ACCIONA</strong>: nivel doble A de Accesibilidad. <a title="abrir enlace externo en ventana nueva" rel="external" href="http://www.acciona.es" target="_blank">www.acciona.es</a>. Certificado por <acronym title="Asociación Española de Normalización y Certificación">AENOR</acronym> según la Norma UNE 139803, <em>"Aplicaciones informáticas para personas con discapacidad. Requisitos de accesibilidad para contenidos en la web"</em>. <a title="abrir enlace externo en ventana nueva" rel="external" href="http://www.tawdis.net/taw3/cms/es/premio/premiados.html" target="_blank">Finalista premios TAW 2008</a>.</li>
				<li><strong>La Mirada Positiva</strong>: nivel doble A de Accesibilidad.</li>
				<li><strong>Sociedad Estatal para la Gestión de la Innovación y las Tecnologías Turísticas (SEGITTUR)</strong>: nivel doble A de Accesibilidad. <a title="abrir enlace externo en ventana nueva" rel="external" href="http://www.segittur.es" target="_blank">www.segittur.es</a></li>
				<li><strong>INDRA</strong>. Servicios de adecuación de Accesibilidad para Indra: <acronym title="Aeropuertos Españoles y Navegación Aérea">AENA</acronym>, Gis SIGMA (<a hreflang="en" title="abrir enlace externo en ventana nueva" rel="external" href="http://www.citizensonline.org.uk/e-inclusionawards_eu/finalists/eaccessibility" target="_blank">finalista en los premios e-inclusion 2008 en la categoría de e-Accessibility</a>, <a title="abrir enlace externo en ventana nueva" rel="external" href="http://www.tawdis.net/taw3/cms/es/premio/ii_edicion.html" target="_blank">premio TAW 2006</a> al mejor proyecto de Accesibilidad Web), gobierno de Aragón, presidencia de la Comunidad de Madrid, etc.,</li>
				<li>Desarrollo de aplicación de gestión de paneles de publicidad para la <acronym title="Organización Nacional de Ciegos Españoles">ONCE</acronym>.</li>
				<li><strong>Ministerio de Cultura</strong>: nivel doble A de Accesibilidad. </li>
				<li><strong>Ministerio de Economía y Hacienda</strong>: consultoría y Adecuación doble A de la página inicial. <a title="abrir enlace externo en ventana nueva" rel="external" href="http://www.meh.es" target="_blank">www.meh.es</a></li>
			</ul>

<p class="copy">Para un presupuesto a medida rellena el siguiente formulario.</p>
				</div>

<div id="contact">
					<h2 class="title">¡Contacta con nosotros ahora!</h2>
					<? if($error) { ?>
					<div class="msgError">
						<ul class="errores">
							<? if($errorNombre) { ?><li>(!) El campo 'Nombre' es obligatorio</li> <?php }?>
						  <? if($mailIncorrecto) {?><li> (!) El formato del campo 'Correo electr&oacute;nico' no es correcto</li><?php }
							 else
								if($mailVacio) {?><li>	(!) El campo 'Correo electr&oacute;nico' es obligatorio</li><?php }?>
						</ul>
					</div>

					<?php }?>
					<form action="" method="post" id="formContact" name="formContact">
						<p>Los campos marcados con asterisco (*) son obligatorios.</p>
						<ul class="clearFix">
							<li class="clr">
								<label for="solucion">Cuéntanos qué buscas para que podamos darte soluciones:</label>
								<select id="solucion" name="solucion" class="text"><option>Auditoría</option><option>Formación</option><option>Adecuación y desarrollo</option></select>
							</li>
							<li>
								<label for="empresa">Empresa:</label>
								 <input type="text" id="empresa" name="empresa" class="text" />
							</li>
							<li>
								<label for="empresa">Sitio Web:</label>
								<input type="text" id="web" name="web" class="text" />
							</li>
							<li>
								<label for="nombre">Nombre (*):</label>
								<input type="text" id="nombre" name="nombre" class="text" />
							</li>
							<li>
								<label for="mail">Correo electrónico (*): </label>
								<input type="text" id="mail" name="mail" value="micuenta@dominio.com" class="text" />
							</li>
							<li>
								<label for="telefono">Teléfono:</label>
								<input type="text" id="telefono" name="telefono" class="text" />
							</li>
						</ul>
						<span class="submit"><span><input type="submit" value="Solicitar información" /></span></span>
				</form>
			</div>
			</div>
		</div>
		<div id="footer">
			&copy; <span lang="en">Copyright</span> accesibilidadweb.com: Accesibilidad Web
			<ul>
				<li><a href="aviso_legal.php" accesskey="8">Aviso Legal</a></li>
				<li class="reset"><a href="accesibilidad.php" accesskey="s">Accesibilidad del sitio</a></li>
			</ul>
		</div>

	</div>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-203003-27']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</body>
</html>
