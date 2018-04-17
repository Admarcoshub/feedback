<?php get_header(); ?>

	<h1>Hola Mundo desde Single.php</h1>
	<?php 
		while(have_posts()):the_post();
			the_title('<h1>' , '</h1>');
			the_content();
		endwhile;
	 ?>
<?php get_footer(); ?>