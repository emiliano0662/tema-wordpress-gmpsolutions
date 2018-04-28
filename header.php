<?php  get_post_field( 'post_name', get_post() ); ?>
<!DOCTYPE html>
<html lang="en">
<head>

<!-- Basic Page Needs
–––––––––––––––––––––––––––––––––––––––––––––––––– -->
<meta charset="utf-8">
<title>
<?php global $page, $paged;

	wp_title( '|', true, 'right' );

	bloginfo( 'name' );

	$site_description = get_bloginfo( 'description', 'display' );

	if ( $site_description && ( is_home() || is_front_page() ) ) echo " | $site_description";

	if ( $paged >= 2 || $page >= 2 ) echo ' | ' . sprintf( __( 'Page %s', 'nakeme' ), max( $paged, $page ) );
?>
</title>
<meta name="description" content="<?php bloginfo('description' ); ?>">

<!-- Mobile Specific Metas
–––––––––––––––––––––––––––––––––––––––––––––––––– -->
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- RSS
–––––––––––––––––––––––––––––––––––––––––––––––––– -->
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name') ?> - RSS" href="<?php bloginfo('rss2_url') ?>" />
<link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name') ?> - Atom" href="<?php bloginfo('atom_url') ?>" />
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<!-- FONT
–––––––––––––––––––––––––––––––––––––––––––––––––– -->
<link href="//fonts.googleapis.com/css?family=Raleway:400,300,600" rel="stylesheet" type="text/css">

<!-- CSS
–––––––––––––––––––––––––––––––––––––––––––––––––– -->
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url' ); ?>/assets/css/jquery.bxslider.min.css">  
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url' ); ?>/assets/css/flexisel.css">  
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url' ); ?>/assets/css/normalize.css">
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url' ); ?>/assets/css/skeleton.css">
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url' ); ?>/assets/css/style.css">

<!-- Favicon
–––––––––––––––––––––––––––––––––––––––––––––––––– -->
<link rel="icon" type="image/png" href="<?php bloginfo('template_url' ); ?>/assets/images/favicon.png">

</head>
<body>
<section class="top">
	<div class="container">
		<div class="six columns">
			<ul class="social_top">
				<li><a target="new" href="<?=of_get_option('facebook');?>"><img src="<?php bloginfo('template_url' ); ?>/assets/images/icon-facebook.svg" alt=""></a></li>
				<li><a target="new" href="<?=of_get_option('twitter');?>"><img src="<?php bloginfo('template_url' ); ?>/assets/images/icon-twitter.svg" alt=""></a></li>
			</ul>
			
		</div>
		<div class="six columns">
			<ul class="contact_top">
				<li><a href="mailto:<?=of_get_option('email-header-footer');?>"><img src="<?php bloginfo('template_url' ); ?>/assets/images/icon-mail.svg" alt=""> <?=of_get_option('email-header-footer');?></a></li>
				<li><a href="tel:<?=(qtrans_getLanguage()=='es')? of_get_option('telefono-uno') : of_get_option('telefono-dos');?>"><img src="<?php bloginfo('template_url' ); ?>/assets/images/icon-smartphone.svg" alt=""> <?=(qtrans_getLanguage()=='es')? of_get_option('telefono-uno') : of_get_option('telefono-dos');?></a></li>
			</ul>
		</div>
	</div>
</section>

<header>
	<nav class="container">
  <h1 class="menuResponsive"><a href="http://proyectos.suwwweb.com/gmp"><img src="<?php bloginfo('template_url' ); ?>/assets/images/logo.png" alt="GMP"></a></h1>
		<ul class="header__menu">
			<li><a href="/"><?=(qtrans_getLanguage()=='es')?'Inicio':'Home'?></a></li>
			<li><a href="#"><?=(qtrans_getLanguage()=='es')?'Servicios':'Services'?></a>
      <ul>
        <li><a href="servicios-certificaciones"><?=(qtrans_getLanguage()=='es')?'Certificaciones de planta de producción':'Production plant certifications'?></a></li>
        <li><a href="servicios-registro"><?=(qtrans_getLanguage()=='es')?'Registros sanitarios':'Health records'?></a></li>
        <li><a href="servicios-sistema-de-gestion"><?=(qtrans_getLanguage()=='es')?'Auditorias sistemas de gestión':'Management systems audits'?></a></li>
        <li><a href="servicios-agroquimicos"><?=(qtrans_getLanguage()=='es')?'Agroquimicos':'Agrochemicals'?></a></li>
        <li><a href="servicios-patentes"><?=(qtrans_getLanguage()=='es')?'Patentes de invención':'Patents of invention'?></a></li>
      </ul>
    </li>
	<li><a href="almacenamiento"><?=(qtrans_getLanguage()=='es')?'Almacenamiento':'Storing'?></a></li>
	<li class="menuVacio">
      <h1><a href="/"><img src="<?php bloginfo('template_url' ); ?>/assets/images/logo.png" alt="GMP"></a></h1>
    </li>
	<li><a href="productos"><?=(qtrans_getLanguage()=='es')?'Productos':'Products'?></a></li>
	<li><a href="quienes-somos"><?=(qtrans_getLanguage()=='es')?'¿Quiénes somos?':'About Us'?></a></li>
	<li><a href="contactenos"><?=(qtrans_getLanguage()=='es')?'Contáctenos':'Contact Us'?></a></li>
</ul>
  <a href="javascript:menuM();" class="menuM"></a>
  <ul class="idiomas">
    <li>
      <a href="<?= qtranxf_get_url_for_language(get_permalink(),'es'); ?>"><img src="<?php bloginfo('template_url' ); ?>/assets/images/idioma_es.png" alt="">Esp</a>
    </li>
    <li>
      <a href="<?= qtranxf_get_url_for_language(get_permalink(),'en'); ?>"><img src="<?php bloginfo('template_url' ); ?>/assets/images/idioma_en.png" alt="">Eng</a>
    </li>
  </ul>
	</nav>
</header>
