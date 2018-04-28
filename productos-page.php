<?php /* Template Name: Productos */ get_header(); ?>

<section class="slide_pages">
	<div class="container">
		<h1><?= get_field('productos_bloque_1_titulo'); ?></h1>
		<p><?= get_field('productos_bloque_1_contenido'); ?></p>
		<div class="line_blue"></div>
	</div>
</section>

<div class="container center">

	<h2><?= get_field('productos_bloque_2_titulo'); ?></h2>
	<div class="margin-auto line_blue"></div>

	<p><?= get_field('productos_bloque_2_contenido'); ?></p>

	<ul class="button-page">
		<li><a  onclick="openCity(event, 'linea')" class="tablinks active"><?= get_field('productos_bloque_2_titulo_uno'); ?></a></li>
		<li><a  onclick="openCity(event, 'medicalgas')" class="tablinks"><?= get_field('productos_bloque_2_titulo_listado_dos'); ?></a></li>
	</ul>

	<div id="linea" class="tabcontent">
		<ul class="list-page">
			<?= get_field('productos_bloque_2_contenido_uno'); ?>
		</ul>
	</div>

	<div id="medicalgas" class="tabcontent" style="display: none;" >
		<ul class="list-page">
			<?= get_field('productos_bloque_2_contenido_dos'); ?>
		</ul>
	</div>

</div>

<br>

<!-- CONOCE MÁS SOBRE NUESTROS SERVICIOS -->

<?php include('include/nuestros-servicios.php') ?>
<?php include('include/form-contacto.php') ?>
<?php get_footer(); ?>