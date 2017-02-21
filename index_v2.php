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
	<title>Accesibilidad Web. Hacemos tu página web accesible accesible.</title>
	<!-- Metadatos de contenidos de la web -->
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

	<!-- Metadatos para los buscadores -->
	<meta name="description" content="Proyectos Accesibilidad Web, consultoría y formación en accesibilidad Web." />
	<meta name="keywords" content="accesibilidad, accesibilidad web, web accesible" />
	<meta name="title" content="Accesibilidad Web. Hacemos tu página web accesible accesible." />
	<meta name="verify-v1" content="wGtOnqRKiqCMMzolI4LvmEeGpXbQLAwezPp8nfOvCdM=" />
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
				<!--ul>
					<li class="sel"><a href="index.php" accesskey="0">Inicio</a></li>
					<li><a href="blog/index.php" accesskey="6">Blog</a></li>
					<li class="reset"><a href="tanta_comunicacion.php" accesskey="7">Contacto</a></li>
				</ul-->
				<span>Para más información llámanos al 91 440 10 40 o <a href="#formContact">contáctanos</a></span>
			</div>
			<a href="index.php"><img src="img/accesibilidadweb.gif" width="243" height="18" alt="logotipo de accesibilidadweb.com" id="logo" /></a>
		</div>
		<div id="navBar">
			<ul>
				<li><a href="accesibilidad_web.php" accesskey="1">La Accesibilidad</a></li>
				<li><a href="auditoria_accesibilidad_web.php" accesskey="2">Auditoría</a></li>
				<li><a href="adecuacion_accesibilidad_web.php" accesskey="3">Adecuación y desarrollo</a></li>
				<li><a href="formacion_accesibilidad_web.php" accesskey="4">Formación</a></li>
				<li><a href="experiencia_accesibilidad_web.php" accesskey="5">Experiencia</a></li>
				<li class="reset"><a href="blog/index.php" accesskey="6">Blog</a></li>
			</ul>
		</div>
		<div id="bodyContent">
			<div id="content">

				<h1>¿Necesitas ayuda en Accesibilidad Web?</h1>
				<div class="text">
				<p>En Accesibilidadweb.com podemos ayudarte con la accesibilidad de tu página.</p>
				<p>Llevamos desde el 2004 desarrollando proyectos web accesibles, realizando auditorías de accesibilidad, formando a profesionales y realizando adecuaciones previas a la certificación de <a href="http://www.accesible.aenor.es">AENOR</a>.</p>
			<h2>¿Qué es la Accesibilidad Web?</h2>
			<p>El fin expl&iacute;cito de la <strong>Accesibilidad</strong> est&aacute; en proporcionar acceso a la informaci&oacute;n sin limitaci&oacute;n alguna por raz&oacute;n de deficiencia, discapacidad, o minusval&iacute;a para que todas las personas puedan navegar por la red en cualquier condici&oacute;n.</p>
			<h2>¿Cuándo una página Web es accesible?</h2>
			 <p>Cuando cualquier persona, con independencia de sus limitaciones personales, las caracter&iacute;sticas de su equipo de navegaci&oacute;n o el entorno ambiental desde donde accede a la Web, pueda utilizar y comprender sus contenidos.</p>

			<h2>¿Por qué debe ser mi página Web accesible?</h2>
			<h3>Por sentido común</h3>
					<ul>
						<li>Simplifica el desarrollo Web.</li>
						<li>Ahorra costes.</li>
						<li>Mejora la indexación de la página Web en buscadores.</li>
						<li>Facilita la independencia de dispositivo y la interoperabilidad.</li>
						<li>Mejora la usabilidad de las páginas Web.</li>
						<li>Mejora el acceso en general.</li>
						<li>Aumenta el público objetivo.</li>
					</ul>
				<h3>Porque me interesa la accesibilidad Web</h3>

				<ul>
					<li>Usuarios de edad avanzada con dificultades producidas por el envejecimiento.</li>
					<li>Usuarios afectados por circunstancias derivadas del entorno.</li>
					<li>Usuarios con falta de recursos para acceder a los servicios de Internet.</li>
					<li>Usuarios que no dominen el idioma, como los de habla extranjera o menor nivel cultural.</li>
					<li>Usuarios inexpertos.</li>
				</ul>

				<h3>Porque lo dice la ley</h3>

				<p>La ley obliga a tener una página Web accesible a:</p>
				<ul>
					<li>Administraciones Públicas o Webs elaboradas y/o mantenidas con financiación pública.</li>
					<li>Entidades y empresas que gestionan servicios públicos. Especialmente las de carácter educativo, sanitario y servicios sociales, así como centros educativos sostenidos, total o parcialmente, con fondos públicos.</li>
					<li>Empresas que prestan servicios de especial trascendencia económica (comunicaciones electrónicas, servicios financieros, suministro de agua, gas o electricidad, agencias de viajes, transporte de viajeros, actividades de comercio al por menor) siempre y cuando agrupen a más de cien trabajadores o tengan un volumen anual de operaciones que exceda de 6.010.121,04 euros.

					</li>
				</ul>

				<h2>¿En qué podemos ayudarte?</h2>
				<ul>
					<li><a href="auditoria_accesibilidad_web.php">Auditoría sobre accesibilidad Web</a></li>
					<li><a href="adecuacion_accesibilidad_web.php">Adecuación y desarrollo de una página Web accesible</a></li>
					<li><a href="formacion_accesibilidad_web.php">Formación en accesibilidad Web.</a></li>
				</ul>


				</div>

				<div id="contact">
					<h2 class="title">Solícitanos información</h2>
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
						<span class="submit v2"><span><input type="submit" value="Solicitar información" /></span></span>
						<span class="value"><span>Valoramos tu privacidad</span></span>

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
	<?php include('./includes/google-analytics.php'); ?>
</body>
</html>
