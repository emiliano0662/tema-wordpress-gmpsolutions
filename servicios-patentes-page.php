<?php /* Template Name: Servicios Patentes */ get_header(); ?>

<section class="slide_pages slide_servicios">
	<div class="container">
		<h1><?= get_field('servicios_patentes_bloque_1_titulo'); ?></h1>
		<p><?= get_field('servicios_patentes_bloque_1_contenido'); ?></p>
		<div class="line_blue"></div>
	</div>
</section>

<div class="container page">

	<div class="center">
		<h2><?= get_field('servicios_patentes_bloque_2_titulo'); ?></h2>
		<div class="margin-auto line_blue"></div>
	</div>

	<div>
		<div class="six columns justify">
			
			<?= get_field('servicios_patentes_bloque_2_bloque_derecho'); ?>

			<a class="button button-primary btnAzul" href="<?= get_site_url(); ?>/contactenos"><?=(qtrans_getLanguage()=='es')?'Contrata este servicio':'Hire this service';?></a>
			
		</div>

		<div class="six columns">

			<img class="twelve columns" src="<?= get_field('servicios_patentes_bloque_2_imagen'); ?>" alt="">

			<?= get_field('servicios_patentes_bloque_2_bloque_izquierdo'); ?>

		</div>

	</div>

</div>

<?php include('include/quieres-conocer.php') ?>
<?php include('include/form-contacto.php') ?>
<?php get_footer(); ?>