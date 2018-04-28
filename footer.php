<?php  get_post_field( 'post_name', get_post() ); ?>

<!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
<footer class="center">
	
	<div class="container left">
		<div class="four columns">
			<a href="<?= get_home_url(); ?>"><img width="200" src="<?php bloginfo('template_url' ); ?>/assets/images/logo-footer.png" alt=""></a>
		</div>

		<div class="four columns contact_footer">
			<h3><?=(qtrans_getLanguage()=='es')?'VISITANOS':'VISIT OUR'?></h3>
			<p><img src="<?= bloginfo('template_url' ); ?>/assets/images/icon-location.svg" alt=""> <?=of_get_option('direccion');?></p>
		</div>

		<div class="four columns">
			<h3><?=(qtrans_getLanguage()=='es')?'CONTÁCTANOS':'CONTACT US'?></h3>

			<ul class="contact_footer">
				<li><img src="<?= bloginfo('template_url' ); ?>/assets/images/icon-mail.svg" alt=""><a href="mailto:<?=of_get_option('email-header-footer');?>"> &nbsp;<?=of_get_option('email-header-footer');?></a></li>
				<li><img src="<?= bloginfo('template_url' ); ?>/assets/images/icon-telephone.svg" alt=""><a href="tel:<?=of_get_option('telefono-uno');?>"> &nbsp;<?=of_get_option('telefono-uno');?> </a></li><br>
				<li><img src="<?= bloginfo('template_url' ); ?>/assets/images/icon-smartphone.svg" alt=""><a href="tel:<?=of_get_option('telefono-dos');?>"> &nbsp;<?=of_get_option('telefono-dos');?></a></li>
			</ul>
		</div>
	</div>

	<ul class="nav_footer">
		<li><a href="<?= get_home_url(); ?>"><?=(qtrans_getLanguage()=='es')?'INICIO':'HOME'?></a></li>
		<li><a href="<?= get_site_url(); ?>/servicios-certificaciones"><?=(qtrans_getLanguage()=='es')?'SERVICIOS':'SERVICES'?></a></li>
		<li><a href="<?= get_site_url(); ?>/almacenamiento"><?=(qtrans_getLanguage()=='es')?'ALMACENAMIENTO':'STORING'?></a></li>
		<li><a href="<?= get_site_url(); ?>/productos"><?=(qtrans_getLanguage()=='es')?'PRODUCTOS':'PRODUCTS'?></a></li>
		<li><a href="<?= get_site_url(); ?>/quienes-somos"><?=(qtrans_getLanguage()=='es')?'¿QUIÉNES SOMOS?':'ABOUT US'?></a></li>
		<li><a href="<?= get_site_url(); ?>/contactenos"><?=(qtrans_getLanguage()=='es')?'CONTÁCTENOS':'CONTACT US'?></a></li>
	</ul>

	<ul class="nav_footer_social">
		<li><a target="new" href="<?=of_get_option('facebook');?>"><img src="<?= bloginfo('template_url' ); ?>/assets/images/icon-facebook.svg" alt=""></a></li>
		<li><a target="new" href="<?=of_get_option('twitter');?>"><img src="<?= bloginfo('template_url' ); ?>/assets/images/icon-twitter.svg" alt=""></a></li>
	</ul>
	
</footer>

<section class="center copyright">
	<p><?=(qtrans_getLanguage()=='es')?'Hecho por ':'Made by'?> <a target="_blank" href="https://suwwweb.com">suWWWeb</a> - <?=(qtrans_getLanguage()=='es')?'Páginas web':'Websites'?></p>
</section>

<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
<script src="<?= bloginfo('template_url' ); ?>/assets/js/jquery.bxslider.min.js"></script>
<script src="<?= bloginfo('template_url' ); ?>/assets/js/jquery.flexisel.js"></script>
<script src="<?= bloginfo('template_url' ); ?>/assets/js/site.js"></script>
<script type="text/javascript">
$(document).ready(function() {

    $(".boton_envio").click(function() {

        var nombre = $(".nombre").val();
            email = $(".email").val();
            validacion_email = /^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/;
            telefono = $(".telefono").val();
            mensaje = $(".mensaje").val();

        if (nombre == "") {
            $(".nombre").focus();
            return false;
        }else if(telefono == ""){
            $(".telefono").focus();
            return false;
        }else if(email == "" || !validacion_email.test(email)){
            $(".email").focus();    
            return false;
        }else if(mensaje == ""){
            $(".mensaje").focus();
            return false;
        }else{

            $('.ajaxgif').removeClass('hide');

            //var datos = 'nombre='+ nombre + '&correo=' + email + '&telefono=' + telefono + '&mensaje=' + mensaje;
            var datos = $('#contactoform').serializeArray();

            $.ajax({
                type: "POST",
                url: "<?php echo site_url(); ?>/wp-admin/admin-ajax.php",
                data: datos,
                success: function() {

                    $("#contactoform").each(function(){ this.reset(); });

                    $('.ajaxgif').hide();
                    $('.msg').text('<?=(qtrans_getLanguage()=='es')?'Mensaje enviado!':'Message sent!'?>').addClass('msg_ok').animate({ 'right' : '130px' }, 300);  
                },
                error: function() {

                    $('.ajaxgif').hide();
                    $('.msg').text('<?=(qtrans_getLanguage()=='es')?'Hubo un error!':'There was a mistake!'?>').addClass('msg_error').animate({ 'right' : '130px' }, 300);                 
                }
            });

            return false;
        }

    });

});
</script>
<?php wp_footer(); ?>
</body>
</html>