<div class="content">
  <!-- <div class="v_centrado">
    <h2 style="text-align:center; margin: 0 0 40px;">Våran vagnar</h2>
  </div> -->
  <div class="bussing">
    <?php if ($row_DatosProducts > 0) { // Show if recordset not empty ?>
    <?php do { ?>
      <div class="cajita" style="padding-bottom:10px;">
        <div class="caja_pic">
            <img src="img/products/<?php echo $row_DatosProducts['foto']; ?> ">
        </div>

        <div class="caja_txt">
                <h3 style="font-size:16px; text-transform: uppercase; margin:0;"><?php echo $row_DatosProducts['title']; ?></h3>
                  <p><?php 
                        $texto= $row_DatosProducts['content'];
                        if (strlen($texto) > 5) {
                          $texto = substr($texto,0,150).'';
                          print '<div class="texto_original">'.$texto.'</div>';
                  ?></p>
                  <?php
                  }
                  ?>

                <a href="reserve.php"><input type="submit" class="button_small" style="padding:8px 30px; float:right;" value="Boka" /></a>
        </div>
      </div>
    <?php } while ($row_DatosProducts = mysqli_fetch_assoc($DatosProducts)); 
    }
    else
    { // Show if recordset is empty ?>
      fins ingen register.
    <?php } ?>
  </div>



  <div class="bussing">
    <?php if ($row_DatosPublication > 0) { // Show if recordset not empty ?>
    <?php do { ?>
      <div class="public_frame">
        <?php if($row_DatosPublication['foto'] != ''){ ?>
        <div class="public_pic" style="background-image: url('img/images/<?php echo $row_DatosPublication['foto']; ?>');">

        </div>
        <?php } ?>
        <div class="public_txt" style="text-align:<?php if($row_DatosPublication['foto'] == '') { ?> center <?php } ?>;">
            <h1><?php echo $row_DatosPublication['title']; ?></h1>

            <?php 
                $texto = $row_DatosPublication['content'];
                if (strlen($texto) > 5) {
                $texto = substr($texto,0,300).'';
                print '<div class="texto_original_p">'.$texto.'</div>';
              ?>
              <?php
              }
              ?>
        </div>
      </div>
    <?php } while ($row_DatosPublication = mysqli_fetch_assoc($DatosPublication)); 
    } ?>
  </div>
  
</div>