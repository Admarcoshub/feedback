<?php 
	function feedback_styles() {

		// Registrando estilos
		wp_register_style('normalize' , get_template_directory_uri() . '/css/normalize.css' , array() , '8.0.0');
		wp_register_style('style', get_template_directory_uri() . '/style.css', array('normalize'), '1.0');
		wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array('normalize'), '4.1.0');


		// LLamando a los estilos
		wp_enqueue_style('normalize');
		wp_enqueue_style('style');
		wp_enqueue_style('bootstrap');

		// registrando JS
		wp_enqueue_script('bootstrap_js', get_template_directory_uri() . '/js/bootstrap.min.js', array() , '4.1.0' , true);
	}
	add_action('wp_enqueue_scripts', 'feedback_styles');

	function feedback_menus () {
		register_nav_menus(array(
			'header-menu' => __('Header Menu' , 'Agencia Digital'),
			'social-menu' => __('Social Menu' , 'Agencia Digital')
		));

	}

	add_action( 'init' , 'feedback_menus');
 ?>

