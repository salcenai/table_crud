<!DOCTYPE HTML>
<html lang='<?php echo \core\Idioma::get(); ?>'>
	<head>
		<title><?php echo \core\Idioma::text("title", "plantilla_internacional"); ?></title>
		<meta name="Description" content="Es la pagina principal del sitio Web" /> 
		<meta name="Keywords" content="inicio, mvc, modelo, vista, controlador" /> 
		<meta name="Generator" content="esmvcphp framewrok" /> 
	 	<meta name="Origen" content="salcenai" /> 
		<meta name="Author" content="Aitor Salas" /> 
		<meta name="Locality" content="Madrid, España" /> 
		<meta name="Lang" content="<?php echo \core\Idioma::get(); ?>" /> 
		<meta name="Viewport" content="maximum-scale=10.0" /> 
		<meta name="revisit-after" content="1 days" /> 
		<meta name="robots" content="INDEX,FOLLOW,NOODP" /> 
		<meta http-equiv="Content-Type" content="text/html; charset=utf8" />
		<meta http-equiv="Content-Language" content="<?php echo \core\Idioma::get(); ?>"/>
	
		<link href="favicon.ico" rel="shortcut icon" type="image/x-icon" />
		<link href="favicon.ico" rel="icon" type="image/x-icon" /> 
		
		<link rel="stylesheet" type="text/css" href="<?php echo URL_ROOT; ?>recursos/css/principal.css" />
		<style type="text/css" >
			/* Definiciones hoja de estilos interna */
		</style>
		<?php if (isset($_GET["administrator"])): ?>
			<link rel="stylesheet" type="text/css" href="<?php echo URL_ROOT; ?>recursos/css/administrator.css" />
		<?php endif; ?>
		
		<script type='text/javascript' src="<?php echo URL_ROOT."recursos".DS."js".DS."jquery".DS."jquery-1.10.2.min.js"; ?>" ></script>
		<script type='text/javascript' src="<?php echo URL_ROOT."recursos".DS."js".DS."general.js"; ?>" ></script>
		<script type="text/javascript" src=""></script>
		
		<script type="text/javascript" >
			/* líneas del script */
		</script>
		
	</head>

	<body id="body" onload='onload();'>
		<div id="encabezado">
			<img src="<?php echo URL_ROOT; ?>recursos/imagenes/MVC_imagen2.png" width="100px" height="75px" alt="foto de MVC" title="Logo" />
			<h1 id="titulo">
			<?php if (isset($_GET["administrator"])): ?>
				Administrator:
			<?php endif; ?>
			Aplicación con patrón MVC</h1>
		</div>
		
		<!-- Div del recuadro de los usuarios -->
		
		<!--
		<div id="div_derecha_logo">
			Usuario: 
			<?php 
			echo "<b>".\core\Usuario::$login."</b>";
			if (\core\Usuario::$login != 'anonimo') {
				echo " <a href='".\core\URL::generar("usuarios/desconectar")."'>Desconectar</a>";
			}
			else {
				if ((\core\Usuario::$login == "anonimo") && ! (\core\Distribuidor::get_controlador_instanciado() == "usuarios" && \core\Distribuidor::get_metodo_invocado() == "form_login")) {
					echo " <a href='".\core\URL::generar("usuarios/form_login")."'>Conectar</a>";
				}
				if ((\core\Usuario::$login == "anonimo") && ! (\core\Distribuidor::get_controlador_instanciado() == "usuarios" && \core\Distribuidor::get_metodo_invocado() == "form_insertar_externo")) {
					echo " <a href='".\core\URL::generar("usuarios/form_insertar_externo")."'>Regístrate</a>";
				}
			}
			echo "<br />Fecha local: <span id='fecha'></span>";
			echo "<br />Tiempo desde conexión: <span id='tiempo_desde_conexion'>".gmdate('H:i:s',  \core\Usuario::$sesion_segundos_duracion)."</span>";
			echo "<br />Tiempo inactivo: <span id='tiempo_inactivo'></span>";	
			?>
		</div>
		-->
  
		<div id="div_menu" >
			<ul id="menu" class="menu">
				<?php echo \core\HTML_Tag::li_menu("item", array("inicio"), "Inicio"); ?>
				<?php echo \core\HTML_Tag::li_menu("item", array("libros"), "Libros"); ?>
			</ul>
		</div>

		<div id="view_content">
			
			<?php
				echo $datos['view_content'];
			?>
			
		</div>

		<div id="pie">
			Documento actualizado por Aitor Salas. <a href="a@a.com">Contactar</a><br />
			Fecha última actualización: 30 de Enero de 2014.
		</div>
		
		<?php echo \core\HTML_Tag::post_request_form(); ?>
		
		
		<script type="text/javascript" />
			var alerta;
			function onload() {
				visualizar_alerta();
			}

			function visualizar_alerta() {
				if (alerta != undefined) {
					$("body").css("opacity","0.3").css("filter", "alpha(opacity=30)");
					alert(alerta);
					alerta = undefined;
					$("body").css("opacity","1.0").css("filter", "alpha(opacity=100)");
				}
			}

		</script>

	
<?php
if (isset($_SESSION["alerta"])) {
	echo <<<heredoc
<script type="text/javascript" />
	// alert("{$_SESSION["alerta"]}");
	var alerta = '{$_SESSION["alerta"]}';
</script>
heredoc;
	unset($_SESSION["alerta"]);
}
elseif (isset($datos["alerta"])) {
	echo <<<heredoc
<script type="text/javascript" />
	// alert("{$datos["alerta"]}");
	var alerta = '{$datos["alerta"]}';
</script>
heredoc;
}
?>	
	
		<div id='globals'>
			<?php
				/*
				 print "<pre>"; 
				  //print_r($GLOBALS);
				 print("\$_GET "); print_r($_GET);
				 print("\$_POST ");print_r($_POST);
				 print("\$_COOKIE ");print_r($_COOKIE);
				 print("\$_REQUEST ");print_r($_REQUEST);
				 print("\$_SESSION ");print_r($_SESSION);
				 print("\$_SERVER ");print_r($_SERVER);
				 print "</pre>";
				 print("xdebug_get_code_coverage() ");
				 var_dump(xdebug_get_code_coverage());
				 */
			?>
		</div>
		
		
		
	</body>

</html>