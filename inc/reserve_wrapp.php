<div class="content" style="background-color:#F0F0F0;">
    <div class="over_c" style="background-color:#F0F0F0;">
        <?php //if($_GET["id"]):?>
        <div class="bok_sidebar">
            <div class="filtro_bok">
                <form action="reserve.php" method="get" name="formsearch" id="formsearch">
                    <table class="tabla_formulario" border="0" cellspacing="0" cellpadding="0">
                        <tr height="60">
                            <td colspan="2" valign="middle" align="center">
                                <h4 class="texto_original_title">Hitta vagnar här</h4>
                            </td>
                        </tr>
                        <tr>
                            <td width="30%" valign="middle" align="right" style="font-size: 14px; color: #666;">
                                <p class="texto_original">Stad:</P>
                            </td>
                            <td width="70%" valign="middle" align="center">
                                <select class="filter_dropdown" name="city" id="city" onchange="validarForm();">
                                <option value="" selected>All</option>
                                <?php
                                if ($totalRows_DatosCities > 0) {
                                do { ?>
                                    <option value="<?php echo $row_DatosCities['id_city'];?>" <?php if ($_GET['city'] == $row_DatosCities['id_city']) echo "selected"; ?>><?php echo $row_DatosCities['city_name'];?></option>
                                <?php } while ($row_DatosCities = mysqli_fetch_assoc($DatosCities));
                                }
                                ?>
                                </select>
                            </td>
                        </tr>
                        <tr height="60">
                            <td width="" valign="middle" align="right" style="font-size: 14px; color: #666;">
                                <p class="texto_original">Storlek:</p>
                            </td>
                            <td width="" valign="middle" align="center">
                                <select class="filter_dropdown" name="product_type" id="product_type" onchange="validarForm();">
                                    <option value="" selected>All</option>
                                    <!-- <option value="0" <?php //if ($_GET['product_type'] == 0) echo "selected"; ?>>Alla</option> -->
                                    <option value="1" <?php if ($_GET['product_type'] == 1) echo "selected"; ?>>Små</option>
                                    <option value="2" <?php if ($_GET['product_type'] == 2) echo "selected"; ?>>Mellan</option>
                                    <option value="3" <?php if ($_GET['product_type'] == 3) echo "selected"; ?>>Stor</option>
                                </select>
                            </td>
                        </tr>
                    </table>
                    <input type="hidden" name="MM_search" id="MM_search" value="formsearch" />
                </form>
            </div>

            <?php if($totalRows_DatosProductSeleted > 0): ?>
                <div class="filtro_bok" id="aparecer" style="opacity: 0;">
                    <table class="tabla_formulario" border="0" cellspacing="0" cellpadding="0">
                        <tr height="70">
                            <td colspan="3" valign="middle" align="center">
                                <p class="texto_original_title"><?php echo ObtenerNombreProducto($row_DatosProductSeleted['product']);?></p>
                            </td>
                        </tr>
                        <?php
                        if ($totalRows_DatosCart > 0) {
                        do { ?>
                            <?php
                                $priceWeek = ObtenerPrecioSemana($row_DatosCart['id_week']) + ObtenerPrecioProducto($row_DatosProductSeleted['product']);
                            ?>
                        <tr height="25">
                            <td width="40%" style="padding:0 10px 0 0;" valign="middle" align="right">
                                <p class="texto_oferta"><?php echo ObtenerNombreSemana($row_DatosCart['id_week']);?></p>
                            </td>
                            <td width="20%" style="" valign="middle" align="center">
                                <p class="texto_oferta"><?php echo ObtenerAnoSemana($row_DatosCart['id_week']);?></p>
                            </td>
                            <td width="40%" style="padding:0 20px 0 0;" valign="middle" align="right">
                                <p class="texto_oferta"><?php echo $priceWeek;?> SEK</p>
                            </td>
                        </tr>
                        <?php $TotalSinImpuest = $TotalSinImpuest + $priceWeek; ?>
                        <?php } while ($row_DatosCart = mysqli_fetch_assoc($DatosCart));
                        }
                        ?>
                        <tr height="30">
                            <td width="60%" colspan="2" style="border-top:1px solid #F00; padding:0 20px 0 0;" valign="middle" align="right">
                                <p class="texto_oferta">sub-total:</p>
                            </td>
                            
                            <td width="40%" style="border-top:1px solid #F00; font-size:14px; padding:0 20px 0 0;" valign="middle" align="right">
                                <p class="texto_oferta"><?php echo $TotalSinImpuest; ?> SEK</p>
                            </td>
                        </tr>
                            <?php
                                $resprosent = ObtenerPDescuento($totalRows_DatosCart);
                                $preciorebaja = $TotalSinImpuest / 100 * $resprosent;

                                $subTotal = $TotalSinImpuest - $preciorebaja;

                                $moms = $subTotal * 0.25;
                                $total = $moms + $subTotal;
                            ?>
                        <?php if ($totalRows_DatosCart > 1) {?>
                        <tr height="30">
                            <td width="60%" colspan="2" style="padding:0 20px 0 0; font-size:14px;" valign="middle" align="right">
                                <p class="texto_oferta">- Mängd rabatt:</p>
                            </td>
                            <td width="40%" style="font-size:14px; padding:0 20px 0 0;" valign="middle" align="right">
                                <p class="texto_oferta"><?php echo $preciorebaja; ?> SEK</p>
                            </td>
                        </tr>
                        <?php } ?>
                        <tr height="30">
                            <td width="60%" colspan="2" style="padding:0 20px 0 0; font-size:14px;" valign="middle" align="right">
                                <p class="texto_oferta">+ Moms:</p>
                            </td>
                            <td width="40%" style="font-size:14px; padding:0 20px 0 0;" valign="middle" align="right">
                                <p class="texto_oferta"><?php echo $moms; ?> SEK</p>
                            </td>
                        </tr>
                        <tr height="30">
                            <td width="60%" colspan="2" style="border-top:1px solid #F00; font-size:14px; font-weight: 600; padding:0 20px 0 0;" valign="middle" align="right">
                                <p class="texto_oferta">Total:</p>
                            </td>
                            <td width="40%" style="border-top:1px solid #F00; font-size:14px; padding:0 20px 0 0; font-weight: 600;" valign="middle" align="right">
                                <p class="texto_oferta"><?php echo $total ?> SEK</p>
                            </td>
                        </tr>
                        <tr height="60">
                            <td colspan="3" style="border-top:1px solid #F00;" valign="middle" align="center">
                                <a href="cart_delete.php?productID=<?php echo $row_DatosProductSeleted['product'];?>" onclick="asegurar_borrado()"> <input type="submit" class="button_a_small" value="Ta bort detta" /></a> <a href="customer_info.php"><input type="submit" class="button_small" value="Gå vidare" /></a>
                            </td>
                        </tr>
                    </table>
                </div>
            <?php endif ?>
        </div>

        <div class="bok_content">
            <?php
            if ($totalRows_DatosConsulta > 0) {
            do { ?>
            <div class="u_info" id="aparecer">
                <div style="background-image: url('img/images/<?php echo $row_DatosConsulta['image']; ?>');" class="pic_b">
                </div>
                <div class="txt_b">
                    <table style="width:100%; background-color:;" border="0" cellspacing="0" cellpadding="0">
                        <tr height="60">
                            <td>
                                <h3 class="product_title_small"><?php echo $row_DatosConsulta['name']; ?> -
                                <span class="span_producto"><?php echo ObtenerCiudadProducto($row_DatosConsulta['city']); ?></span>
                                </h3>
                            </td>
                        </tr>
                        <tr height="30">
                            <td valign="top" align="left">
                                <P><?php 
                                    $texto = $row_DatosConsulta['description'];
                                    if (strlen($texto) > 5) {
                                        $texto = substr($texto,0,300).'...';
                                    print '<div class="texto_original_small">'.$texto.'</div>';
                                ?></p>
                                <?php
                                }
                                ?>
                            </td>
                        <tr height="30">
                            <td valign="middle" align="center">
                                <?php if($totalRows_DatosProductSeleted == 0) {?>
                                <form action="reserve.php" method="post" name="formproduct" id="formproduct">
                        
                                    <input type="submit" class="button_bok" value="boka denna" />
                                        
                                    <input type="hidden"  name="product" id="product" value="<?php echo $row_DatosConsulta['id_product'];?>"/>
                                    <input type="hidden" name="id_client" id="id_client" value="<?php echo $_SESSION['bkng_UserId']; ?>"/>
                                    <input type="hidden" name="MM_insert" id="MM_insert" value="formproduct" />
                                </form>
                                <?php } ?>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
            <?php } while ($row_DatosConsulta = mysqli_fetch_assoc($DatosConsulta));
            } else { ?>
                <P style="text-align:center;">no pushcart was found in this search</p>
            <?php } ?>
        </div>
        <?php //endif ?>
    </div>
</div>