<?php /* Template Name: Servicios Agroquimicos */ get_header(); ?>

<section class="slide_pages slide_servicios">
	<div class="container">
		<h1><?= get_field('servicios_agroquimicos_bloque_1_titulo'); ?></h1>
		<p><?= get_field('servicios_agroquimicos_bloque_1_contenido'); ?></p>
		<div class="line_blue"></div>
	</div>
</section>

<div class="container page">

	<div class="center">
		<h2><?= get_field('servicios_agroquimicos_bloque_2_titulo'); ?></h2>
		<div class="margin-auto line_blue"></div>
	</div>

	<div>
		<div class="six columns justify">

			<p><?= get_field('servicios_agroquimicos_bloque_2_contenido'); ?></p>
			
			<ul class="list-page">
				<?= get_field('servicios_agroquimicos_bloque_2_listado'); ?>
			</ul>
			
			<a class="button button-primary btnAzul" href="<?= get_site_url(); ?>/contactenos"><?=(qtrans_getLanguage()=='es')?'Contrata este servicio':'Hire this service';?></a>
			
		</div>

		<div class="six columns">
			<img class="twelve columns" src="<?= get_field('servicios_agroquimicos_bloque_2_imagen'); ?>" alt="">
		</div>

	</div>

</div>

<?php include('include/quieres-conocer.php') ?>
<?php include('include/form-contacto.php') ?>
<?php get_footer(); ?>