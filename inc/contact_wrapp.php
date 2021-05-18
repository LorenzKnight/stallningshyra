<div class="content">
    <div class="cat_banner">
        <img class="img_in_banner" src="img/sys/skiss.jpg" alt="" width="1920" height="1080">
        <div class="content_flayer3" style="margin-top:6%;">
                <h3 style="text-align:center; text-transform: uppercase; letter-spacing: 0.3em; color:#FFF;">Kontakta oss</h3>
                <h3 style="text-align:center; color:#FFF;">____</h3>
        </div>
    </div>
    <div class="contact_content">
        <div class="sidebar">

            <h3 class="product_title" style="text-transform:uppercase;">Nå mig</h3>                       
            <p class="texto_original">Intresserad av att arbeta med mig
            eller beställa mina tjänster? 
            Hör av dig så pratar vi mer!.<br>

            Jag kommer svara så fort jag ser din mail.</p>
            <br>

            <h4 class="product_title" style="text-transform:uppercase;">Kontaktinfo</h4>
            <p class="texto_original">
            <h5 style="text-transform: uppercase;"><?php echo $row_DatosConsulta['name']; ?></h5>
                <?php echo $row_DatosConsulta['telephone']; ?><br>
                <?php echo $row_DatosConsulta['email']; ?>
            </p>
        
        </div> 
        <div class="separador">
            <br><br>	
                <h3 class="product_title">Skicka ditt meddelande</h3>
            <br>
            <form action="MAILTO:<?php echo $row_DatosConsulta['email']; ?>" method="post" enctype="text/plain">
                <form name="contactform" method="post" action="send_form_email.php">
                    <input class="textfc" id="distancia_contact_r" type="text" name="first_name" placeholder="Ditt namn..." maxlength="50"> <input class="textfc" id="distancia_contact_l" type="text" name="email" placeholder="Din mail..." maxlength="80">

                    <textarea class="area_textfc" name="comments" placeholder="Meddelande..." maxlength="2000"  style=""></textarea>
                    </br>
                    <input class="button_small" type="submit" value="Skicka">
                </form>
            </form>           
        </div>
    </div>
</div>