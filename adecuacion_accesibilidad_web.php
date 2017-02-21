<? require_once 'commons.php'; ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
<head>
	<title>Adecuación y desarrollo accesible</title>
	<!-- Metadatos de contenidos de la web -->
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

	<!-- Metadatos para los buscadores -->
	<meta name="description" content="Tanto para web sites ya existentes como para nuevos desarrollos, lo planificamos, lo desarrollamos y nos encargamos también de su futuro mantenimiento. Consúltanos." />
	<meta name="keywords" content="auditoría accesibilidad, mantenimiento, accesibilidad web, directrices de accesibilidad, WAI, UNE 139803, Disposición Adicional 5º, LSSICE, eEurope 2002, AENOR, Ley de Impulso de la Sociedad de la Información, LISI" />
	<meta name="title" content="Accesibilidad web - Consultoríaa en Accesibilidad Web" />
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
				<li class="sel"><a href="adecuacion_accesibilidad_web.php" accesskey="3">Adecuación y desarrollo</a></li>
				<li><a href="formacion_accesibilidad_web.php" accesskey="4">Formación</a></li>
				<li class="reset"><a href="experiencia_accesibilidad_web.php" accesskey="5">Experiencia</a></li>
			</ul>
		</div>
		<div id="bodyContent">

			<div id="content">
				<h1>Adecuación y desarrollo</h1>
				<div class="text">
				<p> Tanto para web sites ya existentes, como para nuevos desarrollos.</p>
			<p>Alternativas de <strong>adecuaci&oacute;n y desarrollo de webs accesibles</strong>, as&iacute; como planificaci&oacute;n del desarrollo y de su futuro mantenimiento, en funci&oacute;n del <strong>nivel de accesibilidad</strong> que se desee conseguir (<strong>A, AA, AAA</strong>). As&iacute; mismo, si el cliente lo solicita,  se gestionar&aacute; la solicitud de <strong>certificaci&oacute;n</strong> por parte de <strong>AENOR (Asociaci&oacute;n Espa&ntilde;ola de Normalizaci&oacute;n y Certificaci&oacute;n)</strong>.</p>

			<p>Nos basamos en las <strong>directrices de Accesibilidad </strong> al contenido Web recomendadas por la <strong><acronym title="Web Accesibility Initiative" lang="en">WAI</acronym></strong> / <strong><acronym title="World Wide Web Consotium" lang="en">W3C</acronym></strong>, as&iacute; como en la norma espa&ntilde;ola <a href="http://www.inteco.es/frontinteco/files/frontIntecoAction.do;jsessionid=7ACA4271DEBACF2BF769CC6A2C3B1B2D?action=getFile&amp;fileID=50363" title="descargar UNE en formato PDF"><strong><acronym title="Una Norma Espa&ntilde;ola" lang="es">UNE</acronym> 139803:2004</strong></a>.</p>



			<p class="copy">Para un presupuesto a medida rellena el siguiente formulario.</p>


				</div>

<div id="contact">
					<h2 class="title">¡Contacta con nosotros ahora!</h2>
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
