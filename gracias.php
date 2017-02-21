<?php
$referer = $_SERVER["HTTP_REFERER"];
$ok = $_GET["ok"];
if($ok != true || !isset($ok)){
	$url = split("/", $referer);
	$num = count($url);
	header("location: ".$url[3]);
}else{
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
<head>
	<title>&iexcl;Contacta con nosotros Ahora! - Pídenos presupuesto sin compromiso</title>

	<!-- Metadatos de contenidos de la web -->
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

	<!-- Metadatos para los buscadores -->
	<meta name="description" content="Acesibilidad web, una iniciativa de Tanta Comunicación." />
	<meta name="keywords" content="TANTA Comunicación, Grupo Onetec" />
	<meta name="title" content="Accesibilidad Web - Quiénes somos" />




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
				<li><a href="accesibilidad_web.php" accesskey="1">La Accesibilidad</a></li>
				<li><a href="auditoria_accesibilidad_web.php" accesskey="2">Auditoría</a></li>
				<li><a href="adecuacion_accesibilidad_web.php" accesskey="3">Adecuación y desarrollo</a></li>
				<li><a href="formacion_accesibilidad_web.php" accesskey="4">Formación</a></li>
				<li class="reset"><a href="experiencia_accesibilidad_web.php" accesskey="5">Experiencia</a></li>
			</ul>
		</div>
		<div id="bodyContent">

			<div id="content">
				<div id="contact" class="ok">
					<h1 class="title">&iexcl; Contacta con nosotros ahora !</h1>
					<div class="text">
						<p>Somos expertos en Desarrollo y Accesibilidad Web, Marketing Online y Optimizaci&oacute;n de sitios web para el Posicionamiento en Buscadores.</p>
						<p>Ll&aacute;manos al 914 401 040 y solic&iacute;tanos informaci&oacute;n sin compromiso o completa el siguiente formulario y nosotros mismos nos pondremos en contacto contigo para ver en qu&eacute; podemos ayudarte.</p>


						<p><em>Su solicitud de contacto ha sido enviada correctamente. En breve nos pondremos en contacto con usted.</em></p>
						<h2>Otros datos de contacto</h2>
						<p>
						<strong>TANTA Tecnolog&iacute;a y Comunicaci&oacute;n</strong><br />
						C/ Juli&aacute;n Camarillo 26, 1&#186; Local 2<br />
						Madrid, 28037<br />
						Tel&eacute;fono: 91 440 10 40<br />

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
<!-- Google Code for formulario accesibilidad web Conversion Page -->
<script type="text/javascript">
<!--
var google_conversion_id = 1069926938;
var google_conversion_language = "es";
var google_conversion_format = "1";
var google_conversion_color = "ffffff";
var google_conversion_label = "9dRbCIyFggEQmpSX_gM";
//-->
</script>
<script type="text/javascript" src="http://www.googleadservices.com/pagead/conversion.js"></script>
<noscript><img height="1" width="1" src="http://www.googleadservices.com/pagead/conversion/1069926938/?label=9dRbCIyFggEQmpSX_gM&amp;guid=ON&amp;script=0" alt="" /></noscript>

</html>
<?php }?>
