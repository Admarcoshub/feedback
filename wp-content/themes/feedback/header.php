<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title></title>
	<?php wp_head(); ?>
</head>
<body>
	<header class="encabezado">
		<div class="contenedor">
			<div class="name"><h1>feedback</h1></div>
			<div class="pages">
				<li>Inicio</li>
				<li>Nosotros</li>
				<li>Portafolio</li>
				<li>Servicios</li>
				<li>Blog</li>				
			</div>
		</div>
		<div class="contenedor-down">
			<div class="card"><?php get_template_directory_uri(); ?><img src="wp-content/themes/feedback/img/card.png" width="200" height="200"></div>
			<div class="socal-media"></div>
			<div class="copy"></div>
		</div>
	</header>