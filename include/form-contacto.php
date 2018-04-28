<div class="container">

    <div class="form__contact center">
        <form id="contactoform" class="contacto" method="post">
            <input type="hidden" name="action" value="mailer">
            <input type="hidden" name="module" value="consulta">

            <h3 class="center"><?=(qtrans_getLanguage()=='es')?'CONTÁCTENOS':'CONTACT US'?></h3>

            <div class="row">
                <div class="four columns"><input type="text" name="nombre" class="nombre" placeholder="<?=(qtrans_getLanguage()=='es')?'Nombre completo':'Name'?>"></div>
                <div class="four columns"><input type="text" name="telefono" class="telefono" placeholder="<?=(qtrans_getLanguage()=='es')?'Número de contacto':'Telephone'?>"></div>
                <div class="four columns"><input type="text" name="email" class="email" placeholder="<?=(qtrans_getLanguage()=='es')?'Correo electrónico':'Email'?>"></div>
            </div>

            <div class="row">
                <div class="seven columns">
                    <textarea name="mensaje" id="" cols="35" rows="40" class="mensaje" placeholder="<?=(qtrans_getLanguage()=='es')?'Mensaje':'Message'?>"></textarea>
                    <div class="msg"></div>
                    <input type="submit" value="<?=(qtrans_getLanguage()=='es')?'Enviar':'Send'?>" class="boton_envio">
                </div>
                <div class="five columns">
                    <div class="mapa">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3976.6802901997658!2d-74.06019308523787!3d4.650990396621475!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f9a4160a8e5cd%3A0xd76207a04e68f581!2sCra.+7+%2367-39%2C+Bogot%C3%A1!5e0!3m2!1ses-419!2sco!4v1511969356784" width="300" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>

        <!--
            <div class="width left">
                <textarea name="" id="" cols="35" rows="40">Mensaje</textarea>
                <input type="submit" value="Enviar">
            </div>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3976.7434329027874!2d-74.06506348553522!3d4.639794243475319!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f9a3a4f01383b%3A0xfe4299f758c95674!2sCra.+7+%2353-35%2C+Bogot%C3%A1%2C+Colombia!5e0!3m2!1ses!2sus!4v1502214067227" frameborder="0" style="border:0" allowfullscreen></iframe>
        -->
      
      </form>
    </div>
</div>