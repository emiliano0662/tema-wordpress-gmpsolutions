<?php /* Template Name: Inicio */ get_header(); ?>

<section class="slider">

    <div class="slide">
      <ul class="bxslider ">
        <?php $data_post = new WP_Query(array('post_type'=>'post','post_status'=>'publish','posts_per_page'=>-1,'cat'=>2,'orderby'=>'meta_value banner_home_orden','order'=>'ASC'));

          if ($data_post->have_posts()):
            
            while ($data_post->have_posts()): $data_post->the_post(); ?>

              <li>
                <div class="box " style="background-image: url('<?= get_field('banner_home_imagen'); ?>');">
                  <div class="container">
                    <div class="five columns caption-banner">
                      <p><?= get_field('banner_home_titulo'); ?></p>
                      <br>
                      <a class="button button-primary ico" href="<?= get_field('banner_home_link'); ?>"><?=(qtrans_getLanguage()=='es')?'Ver más':'See more'?> <span class="ico"><img src="<?php bloginfo('template_url' ); ?>/assets/images/search.svg" alt=""></span></a>
                    </div>
                  </div>                
                </div>  
              </li>

            <?php endwhile;
          
          endif;
          
          wp_reset_postdata(); ?>
      </ul>
    </div>

</section>
<section class="ten columns offset-by-one index__carrusel">
    <div class="">
      <ul id="carrusel1" class="carrusel1">
        <?php $data_post = new WP_Query(array('post_type'=>'post','post_status'=>'publish','posts_per_page'=>-1,'cat'=>3,'orderby'=>'meta_value carrusel_home_orden','order'=>'ASC'));

          if ($data_post->have_posts()):

            $count_post = 1;
            
            while ($data_post->have_posts()): $data_post->the_post(); ?>

              <li <?= ($count_post==1)? '' : 'class="bckAzul"' ?>>
                <div class="bwWrapper">
                  <h2><span><?= get_field('carrusel_home_titulo'); ?></span></h2>
                  <div class="<?= ($count_post==1)? 'line_blue' : 'line_white' ?>"></div>
                  <?= get_field('carrusel_home_contenido'); ?>
                  <a class="button button-primary" href="<?= get_field('carrusel_home_link'); ?>"><?=(qtrans_getLanguage()=='es')?'Ver más':'See more'?></a>            
                </div>
              </li>

              <?php $count_post++;

              if ($count_post==3) $count_post = 1;

            endwhile;
          
          endif;

        wp_reset_postdata(); ?>
      </ul>
    </div>
</section>
<!-- GMP SOLUTIONS -->



<section class="container index__gmp_solutions">
  <section class="seven columns middle">
    <h1><?= get_field('incio_bloque_1_titulo'); ?></h1>
    <div class="line_blue"></div>
    <p><?= get_field('incio_bloque_1_contenido'); ?></p>
    <br>
    <a class="button button-primary ico" href="<?= get_field('incio_bloque_1_link'); ?>"><?=(qtrans_getLanguage()=='es')?'Ver más':'See more'?> <span class="ico"><img src="<?php bloginfo('template_url' ); ?>/assets/images/search.svg" alt=""></span></a>
  </section>

  <section class="five columns middle">
    <img class="twelve columns" src="<?= get_field('incio_bloque_1_imagen'); ?>" alt="">
  </section>
</section>


<!-- QUIERES SABER MAS -->

<?php include('include/quieres-conocer.php') ?>


<!-- NUESTROS PRODUCTOS -->

<section class="container nuestros__productos">
  <section class="four columns">
    <img class="twelve columns nuestros__productos_left" src="<?php bloginfo('template_url' ); ?>/assets/images/imagen2.jpg" alt="">
  </section>

  <section class="seven columns">
    <h1><?= get_field('incio_bloque_3_titulo'); ?></h1>
    <div class="line_blue"></div>
    <br><br>
    <p><?= get_field('incio_bloque_3_contenido'); ?></p>
    <br><br>
    <div class="left">
      <div class="six columns">
        <h3><img src="<?php bloginfo('template_url' ); ?>/assets/images/icon-logo.png" width="16px" alt=""> <?= get_field('incio_bloque_3_titulo_listado_uno'); ?></h3>
        <ul class="nuestros__productos left">
          <?= get_field('incio_bloque_3_contenido_listado_uno'); ?>
        </ul>
      </div>

      <div class="six columns">
        <h3><img src="<?php bloginfo('template_url' ); ?>/assets/images/icon-logo.png" width="16px" alt=""> <?= get_field('incio_bloque_3_titulo_listado_dos'); ?></h3>
        <ul class="nuestros__productos left">
          <?= get_field('incio_bloque_3_contenido_listado_dos'); ?>
        </ul>
      </div>
    </div>
  </section>
</section>

<!-- CONOCE MÁS SOBRE NUESTROS SERVICIOS -->

<?php include('include/nuestros-servicios.php') ?>

<!-- CONTÁCTENOS FOOTER -->
<section class="contactenos__footer_page cover">
  <div class="container">

    <div class="ten columns offset-by-two form__contact_page">
      <form id="contactoform" class="contacto" method="post">
        <input type="hidden" name="action" value="mailer">
        <input type="hidden" name="module" value="consulta">
        <h3 class="center"><?=(qtrans_getLanguage()=='es')?'CONTÁCTENOS':'CONTACT US'?></h3>
        <div class="row">
          <div class="four columns"><input type="text" name="nombre" class="nombre"  placeholder="<?=(qtrans_getLanguage()=='es')?'Nombre completo':'Full name'?>"></div>
          <div class="four columns"><input type="text" name="telefono" class="telefono"  placeholder="<?=(qtrans_getLanguage()=='es')?'Número de contacto':'Contact number'?>"></div>
          <div class="four columns"><input type="text" name="email" class="email"  placeholder="<?=(qtrans_getLanguage()=='es')?'Correo electrónico':'Email'?>"></div>
        </div>
        <div class="row">
          <div class="eight columns">
            <textarea name="mensaje" id="" class="mensaje" cols="35" rows="40" placeholder="<?=(qtrans_getLanguage()=='es')?'Mensaje':'Message'?>"></textarea>
            <div class="msg"></div>
            <input type="submit" value="<?=(qtrans_getLanguage()=='es')?'Enviar':'Submit'?>" class="boton_envio">
          </div>
          <div class="four columns">
            <div class="mapa">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3976.6802901997658!2d-74.06019308523787!3d4.650990396621475!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f9a4160a8e5cd%3A0xd76207a04e68f581!2sCra.+7+%2367-39%2C+Bogot%C3%A1!5e0!3m2!1ses-419!2sco!4v1511969356784" width="300" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
          </div>
        </div>
        <div class="width">
          
        </div>
      </form>
    </div>
  </div>
</section>

<?php get_footer(); ?>