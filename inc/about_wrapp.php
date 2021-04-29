<div class="content">
    <div class="cat_banner">
        <img class="img_in_banner" src="img/sys/webb02.jpg" alt="" width="1920" height="1080">
        <div class="content_flayer3" style="margin-top:6%;">
                <h3 style="text-align:center; text-transform: uppercase; letter-spacing: 0.3em; color:#FFF;">Vilka är vi</h3>
                <h3 style="text-align:center; color:#FFF;">____</h3>
        </div>
    </div>

    <div class="over_c">
        <div class="over_ct">
            <div class="v_centrado">
                Ställningshyra
            </div>
        </div>
        <div class="over_cc">
            <div class="v_centrado">
                is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
            </div>
        </div>
    </div>

    <div class="bussing">
        <?php if ($row_DatosNosotros > 0) { // Show if recordset not empty ?>
        <?php do { ?>
        <div class="cajita">
            <div class="caja_pic">
                <img src="img/images/<?php echo $row_DatosNosotros['foto']; ?> ">
            </div>

            <div class="caja_txt">
                    <h3 style="font-size:16px; text-transform: uppercase; margin:0;"><?php echo $row_DatosNosotros['name']; ?></h3>
                    <p><?php 
                            $texto= $row_DatosNosotros['content'];
                            if (strlen($texto) > 5) {
                            $texto = substr($texto,0,200).'...';
                            print '<div class="texto_original">'.$texto.'</div>';
                    ?></p>
                    <?php
                    }
                    ?>  
            </div>
        </div>
        <?php } while ($row_DatosNosotros = mysqli_fetch_assoc($DatosNosotros)); 
        }
        else
        { // Show if recordset is empty ?>
        fins ingen register.
        <?php } ?>
    </div>

    <div class="bussing" style="display: none;">
        <?php if ($row_DatosNosotros > 0) { // Show if recordset not empty ?>
        <?php do { ?>
            <div class="u_info" id="aparecer">
                <div style="background-image: url('img/images/<?php echo $row_DatosNosotros['image']; ?>');" class="pic_b">
                </div>
            <div class="txt_a">
                <div class="v_centrado">
                <h3 style="text-transform: uppercase; margin-bottom: 0;"><?php echo $row_DatosNosotros['name']; ?></h3>

                        <P><?php 
                            $texto = $row_DatosNosotros['description'];
                            if (strlen($texto) > 5) {
                            $texto = substr($texto,0,300).'...';
                            print '<div class="texto_original">'.$texto.'</div>';
                        ?></p>
                        <?php
                        }
                        ?>
                    <br>
                    <a href="students.php"><input class="button_bok" value="Boka" /></a>
                </div>
            </div>
            </div>
        <?php } while ($row_DatosNosotros = mysqli_fetch_assoc($DatosNosotros)); 
        }
        else
        { // Show if recordset is empty ?>
        fins ingen register.
        <?php } ?>
    </div>
</div>