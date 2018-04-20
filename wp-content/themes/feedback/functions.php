<?php 
	function feedback_styles() {

		//
		wp_register_style('normalize' , get_template_directory_uri() . '/css/normalize.css' , array() , '8.0.0');
		wp_register_style('style', get_template_directory_uri() . '/style.css', array('normalize'), '1.0');

		wp_enqueue_style('normalize');
		wp_enqueue_style('style');
	}
	add_action('wp_enqueue_scripts', 'feedback_styles');

	function feedback_nenus () {
		register_nav_menus(array(
			'header-menu' => __('Header Menu' , 'Agencia Digital'),
			'social-menu' => __('Social Menu' , 'Agencia Digital')
		));

	}

	add_action( 'init' , 'feedback_nenus');
 ?>

