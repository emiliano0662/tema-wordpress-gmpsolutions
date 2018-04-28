<?php /* Template Name: Almacenamiento */ get_header(); ?>

<section class="slide_pages">
	<div class="container">
		<h1><?= get_field('almacenamiento_bloque_1_titulo'); ?></h1>
		<p><?= get_field('almacenamiento_bloque_1_contenido'); ?></p>
		<div class="line_blue"></div>
	</div>
</section>

<div class="container page">

	<div class="center">
		<h2><?= get_field('almacenamiento_bloque_2_titulo'); ?></h2>
		<div class="margin-auto line_blue"></div>
	</div>
	
	<div>
		<div class="six columns justify">
			<?= get_field('almacenamiento_bloque_2_contenido'); ?>
		</div>

		<div class="six columns">
			<img class="twelve columns" src="<?= get_field('almacenamiento_bloque_2_imagen'); ?>" alt="">
		</div>

	</div>

</div>

<ul class="list-page container">
	<?= get_field('almacenamiento_bloque_2_listado'); ?>
</ul>

<?php include('include/nuestros-servicios.php') ?>
<?php get_footer(); ?>