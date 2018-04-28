<?php /* Template Name: Quienes Somos */ get_header(); ?>

<section class="slide_pages slide_quienes_somos">
	<div class="container">
		<h1><?= get_field('quienes_somos_bloque_1_titulo'); ?></h1>
		<p><?= get_field('quienes_somos_bloque_1_contenido'); ?></p>
		<div class="line_blue"></div>
	</div>
</section>

<div class="container page">

	<div class="center">
		<h2><?= get_field('quienes_somos_bloque_2_titulo'); ?></h2>
		<div class="margin-auto line_blue"></div>
	</div>
	
	<div>
		<div class="eight columns justify">
			<?= get_field('quienes_somos_bloque_2_contenido'); ?>
		</div>

		<div class="four columns">
			<img class="twelve columns" src="<?= get_field('quienes_somos_bloque_2_imagen'); ?>" alt="">
		</div>
	</div>

</div>

<section class="valores">
	<h3 class="center"><?= get_field('quienes_somos_bloque_3_titulo_principal'); ?></h3>
	<div class="container">
		<div class="four columns center white">
			<div class="icono vimg">
				<img src="<?= get_field('quienes_somos_bloque_3_imagen_izquierda'); ?>" alt="">	
			</div>
			<h4><?= get_field('quienes_somos_bloque_3_titulo_izquierda'); ?></h4>
			<div class="line_white"></div>
			<p><?= get_field('quienes_somos_bloque_3_contenido_izquierda'); ?></p>
		</div>

		<div class="four columns center white">
			<div class="icono vimg">
				<img src="<?= get_field('quienes_somos_bloque_3_imagen_centro'); ?>" alt="">
			</div>
			<h4><?= get_field('quienes_somos_bloque_3_titulo_centro'); ?></h4>
			<div class="line_white"></div>
			<p><?= get_field('quienes_somos_bloque_3_contenido_centro'); ?></p>
		</div>
		
		<div class="four columns center white">
			<div class="icono vimg">
				<img src="<?= get_field('quienes_somos_bloque_3_imagen_derecha'); ?>" alt="">
			</div>
			<h4><?= get_field('quienes_somos_bloque_3_titulo_derecha'); ?></h4>
			<div class="line_white"></div>
			<p><?= get_field('quienes_somos_bloque_3_contenido_derecha'); ?></p>
		</div>
	</div>
</section>

<section class="container center mision_vision">
	<div class="six columns">
		<h3><img src="<?= get_field('quienes_somos_bloque_4_imagen_izquierda'); ?>" alt=""> <?= get_field('quienes_somos_bloque_4_titulo_izquierda'); ?></h3>
		<div class="line_blue"></div>
		<p><?= get_field('quienes_somos_bloque_4_contenido_izquierda'); ?></p>
	</div>

	<div class="six columns">
		<h3><img src="<?= get_field('quienes_somos_bloque_4_imagen_derecha'); ?>" alt=""> <?= get_field('quienes_somos_bloque_4_titulo_derecha'); ?></h3>
		<div class="line_blue"></div>
		<p><?= get_field('quienes_somos_bloque_4_contenido_derecha'); ?></p>
	</div>
</section>

<!-- CONOCE MÁS SOBRE NUESTROS SERVICIOS -->

<?php include('include/nuestros-servicios.php') ?>
<?php include('include/form-contacto.php') ?>
<?php get_footer(); ?>