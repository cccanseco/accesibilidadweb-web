<? require_once 'commons.php'; ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
<head>
	<title>¿Necesitas información de accesibilidad web?</title>
	<!-- Metadatos de contenidos de la web -->
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

	<!-- Metadatos para los buscadores -->
	<meta name="description" content="Llámanos al 91 440 10 40 y solicítanos información sin compromiso en nuestra web." />
	<meta name="keywords" content="TANTA Comunicación, Grupo Onetec" />
	<meta name="title" content="Accesibilidad Web - Quiénes somos" />
	<meta name="google-site-verification" content="CXFQiJ4JSVEaT_KYOvyN9b9PQ_KlMPeTblnRFodZuCg" />
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
					<li class="reset sel"><a href="tanta_comunicacion.php" accesskey="7">Contacto</a></li>
				</ul>
			</div>
			<a href="index.php"><img src="img/accesibilidadweb.gif" width="243" height="18" alt="logotipo de accesibilidadweb.com" id="logo" /></a>
		</div>
		<div id="navBar">
			<ul>
				<li><a href="index.php" accesskey="1">La Accesibilidad</a></li>
				<li><a href="auditoria_accesibilidad_web.php" accesskey="2">Auditoría</a></li>
				<li><a href="adecuacion_accesibilidad_web.php" accesskey="3">Adecuación y desarrollo</a></li>
				<li><a href="formacion_accesibilidad_web.php" accesskey="4">Formación</a></li>
				<li class="reset"><a href="experiencia_accesibilidad_web.php" accesskey="5">Experiencia</a></li>
			</ul>
		</div>
		<div id="bodyContent">

			<div id="content">
				<div id="contact" class="section">
					<h1 class="title">&iexcl; Contacta con nosotros ahora !</h1>
					<div class="text">
					<? if(!empty ($error)) { ?>
					<div class="msgError">
						<ul class="errores">
							<? if (!empty ($errorToken)){ ?>
							<li>(!) No se ha podido realizar el envío. Inténtalo de nuevo</li>
							<? } ?>
							<? if(!empty ($errorNombre)) { ?><li>(!) El campo 'Nombre' es obligatorio</li> <?php }?>
						  <? if(!empty ($mailIncorrecto)) {?><li> (!) El formato del campo 'Correo electr&oacute;nico' no es correcto</li><?php }
							 else
								if(!empty ($mailVacio)) {?><li>	(!) El campo 'Correo electr&oacute;nico' es obligatorio</li><?php }?>

						</ul>
					</div>

					<?php }?>
					<form action="" method="post" id="formContact" name="formContact">
						<input type="hidden" name="token" value="<?php echo $newToken; ?>">
						<p>Ll&aacute;manos al 91 440 10 40 y solic&iacute;tanos informaci&oacute;n sin compromiso o completa el siguiente formulario y nosotros mismos nos pondremos en contacto contigo para ver en qu&eacute; podemos ayudarte.</p>
						<p>Los campos marcados con asterisco (*) son obligatorios.</p>
						<ul class="clearFix">
							<li class="clr">
								<label for="solucion">Cuéntanos qué buscas para que podamos darte soluciones:</label>
								<select id="solucion" name="solucion" class="text"><option>Auditoría</option><option>Formación</option><option>Adecuación y desarrollo</option></select>
							</li>
							<li>
								<label for="nombre">Tu nombre (*):</label>
								<input type="text" id="nombre" name="nombre" class="text" />
							</li>
							<li>
								<label for="mail">Tu email (*): </label>
								<input type="text" id="mail" name="mail" value="micuenta@dominio.com" class="text" />
							</li>
							<li>
								<label for="telefono">Tu teléfono:</label>
								<input type="text" id="telefono" name="telefono" class="text" />
							</li>
							<li>
								<label for="empresa">Tu empresa:</label>
								 <input type="text" id="empresa" name="empresa" class="text" />
							</li>
							<li>
								<label for="empresa">Tu web:</label>
								<input type="text" id="web" name="web" class="text" />
							</li>
							<li class="acepto">
								<label for="acepto"><input type="checkbox" id="acepto" name="acepto"> Acepto las <a href="aviso_legal.php" target="_blank">condiciones legales</a></label>
							</li>
						</ul>
						<span class="submit"><span><input type="submit" value="Solicitar información" /></span></span>


				</form>

				<h2>Otros datos de contacto</h2>
				<p>
				<strong>TANTA Tecnología y Comunicación</strong><br />
				C/ Julián Camarillo 26, 1º Local 2<br />
				Madrid, 28037<br />
				Teléfono: 91 440 10 40<br />
				Fax: 91 304 91 24<br />
				<a href="http://www.tantacom.com/" rel="external" title="abrir enlace externo en ventana nueva"><strong>http://www.tantacom.com</strong></a>
				</p>
					</div>
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
