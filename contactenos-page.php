<?php /* Template Name: Contactenos */ get_header(); ?>

<section class="slide_pages slide_contactenos">
	<div class="container">
		<h1><?= get_field('contactenos_titulo'); ?></h1>
		<p><?= get_field('contactenos_contenido'); ?></p>
		<div class="line_blue"></div>
	</div>
</section>

<?php include('include/form-contacto.php') ?>
<?php get_footer(); ?>