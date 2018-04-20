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
			<div class="pages">
				<li>Inicio</li>
				<li>Nosotros</li>
				<li>Portafolio</li>
				<li>Servicios</li>
				<li>Blog</li>				
			</div>
		</div>
		<div class="contenedor-down">
			<div class="card">
				<div class="name"><h1>feedback</h1></div>
				<?php get_template_directory_uri(); ?><img src="wp-content/themes/feedback/img/card.png" width="200" height="200">
				<p class="title">AGENCIA DIGITAL</p>
				<div class="avances">
					<div class="avances-in">
						<p class="propo">Proyectos</p>
						<div class="detalle">
							<div class="number">3</div>
							<div class="avance-line"></div>
						</div>
					</div>
					<div class="avances-in">
						<p class="propo">Recursos</p>
						<div class="detalle">
							<div class="number">4</div>
							<div class="avance-line"></div>
						</div>
					</div>
					<div class="avances-in">
						<p class="propo">Clientes</p>
						<div class="detalle">
							<div class="number">2</div>
							<div class="avance-line"></div>
						</div>
					</div>
				</div>
			</div>


			<div class="social-media"></div>
			<div class="copy"></div>
		</div>
	</header>