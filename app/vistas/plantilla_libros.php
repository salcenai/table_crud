<!DOCTYPE HTML>
<html lang='<?php echo \core\Idioma::get(); ?>'>
	<head>
		<title><?php echo TITULO; ?></title>
		<meta name="Description" content="Esta pagina contiene una tabla con datos sobre libros" /> 
		<meta name="Keywords" content="inicio, mvc, modelo, vista, controlador, libros, libro, bilioteca" /> 
		<meta name="Generator" content="esmvcphp framewroko" /> 
	 	<meta name="Origen" content="salcenai" /> 
		<meta name="Author" content="Aitor Salas" /> 
		<meta name="Locality" content="Madrid, Espa�a" /> 
		<meta name="Lang" content="es" /> 
		<meta name="Viewport" content="maximum-scale=10.0" /> 
		<meta name="revisit-after" content="1 days" /> 
		<meta name="robots" content="INDEX,FOLLOW,NOODP" /> 
		<meta http-equiv="Content-Type" content="text/html;charset=utf8" /> 
		
		<link href="favicon.ico" rel="shortcut icon" type="image/x-icon" />
		<link href="favicon.ico" rel="icon" type="image/x-icon" /> 
		
		<link rel="stylesheet" type="text/css" href="<?php echo URL_ROOT; ?>recursos/css/libros.css" />
		<style type="text/css" >
			/* Definiciones hoja de estilos interna */
		</style>

		<script type="text/javascript" src=""></script>
		
		<script type="text/javascript" >
			/* l�neas del script */
		</script>
		
	</head>

	<body id="body">
	
		<!-- Contenido que se visualizara en el navegador, organizado con la ayuda de etiquetas html -->
		<div id="inicio"></div>
		<div id="encabezado">
			<img src="<?php echo URL_ROOT; ?>recursos/imagenes/libros.png" width="100px" height="75px" alt="foto de libros" title="Logo" />
			<h1 id="titulo">Libros</h1>
		</div>
		
		<div id="div_menu" >
			<ul id="menu" class="menu">
				<?php echo \core\HTML_Tag::li_menu("item", array("inicio"), "Inicio"); ?>
				<?php echo \core\HTML_Tag::li_menu("item", array("libros"), "Libros"); ?>
				<?php echo \core\HTML_Tag::li_menu("item", array("categorias"), "Categorias"); ?>
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
                
		<div id='globals'>
			<?php
				print "<pre>"; print_r($GLOBALS);print "</pre>";
			?>
		</div>
		
		<?php
			if (isset($_SESSION["alerta"])) {
				echo "
					<script type='text/javascript'>
						alert('{$_SESSION["alerta"]}');
					</script>
				";
				unset($_SESSION["alerta"]);
			}
		?>
		
	</body>

</html>
