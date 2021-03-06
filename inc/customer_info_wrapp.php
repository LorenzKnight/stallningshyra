<style>
    .condicion_acept {
        width: 40px;
        height: 40px;
        border:1px solid #999;
        margin-right: 10px;
        /* -webkit-appearance: none; */
    }
</style>
<div class="content" style="background-color:#F0F0F0;">
    <div class="over_c" style="background-color:#F0F0F0;">
        <div class="bok_sidebar">
            <?php if($totalRows_DatosProductSeleted > 0): ?>
                <div class="filtro_bok" id="aparecer" style="opacity: 0;">
                    <table class="tabla_formulario" border="0" cellspacing="0" cellpadding="0">
                        <tr height="60">
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
                            <td width="40%" style="font-size:14px; padding:0 10px 0 0;" valign="middle" align="right">
                                <p class="texto_oferta"><?php echo ObtenerNombreSemana($row_DatosCart['id_week']);?></p>
                            </td>
                            <td width="20%" style="font-size:14px;" valign="middle" align="center">
                                <p class="texto_oferta"><?php echo ObtenerAnoSemana($row_DatosCart['id_week']);?></p>
                            </td>
                            <td width="40%" style="font-size:14px; padding:0 20px 0 0;" valign="middle" align="right">
                                <p class="texto_oferta"><?php echo $priceWeek;?> SEK</p>
                            </td>
                        </tr>
                        <?php $TotalSinImpuest = $TotalSinImpuest + $priceWeek; ?> 
                        <?php } while ($row_DatosCart = mysqli_fetch_assoc($DatosCart));
                        }
                        ?>
                        <tr height="30">
                            <td width="60%" colspan="2" style="border-top:1px solid #F00; font-size:14px; padding:0 20px 0 0;" valign="middle" align="right">
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
                                <p class="texto_oferta">- M??ngd rabatt:</p>
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

                        <tr height="20">
                            <td colspan="3" valign="middle" align="center">
                                <!-- <a href="cart_delete.php?productID=<?php echo $row_DatosProductSeleted['product']; ?>" onclick="asegurar_borrado()"><input type="submit" class="button_a_small" value="Ta bort detta" /></a> -->
                            </td>
                        </tr>
                    </table>
                </div>
            <?php endif ?>
        </div>

        <div class="bok_content">
            <div class="formulario_customer">
                <form action="customer_info.php" method="post" name="formrequest" id="formrequest">
                    <table class="tabla_formulario" style="top: 50px; background-color:;" border="0" cellspacing="0" cellpadding="0">
                        <tr height="40">
                            <td colspan="6" valign="middle" align="center" style="font-size: 16px; padding: 30px 0 0 0;">
                            </td>
                        </tr>
                        <tr height="60">
                            <td width="50%" valign="middle" align="left" style="padding: 0 0 0 20px;"><input class="textf" type="text" placeholder="Ditt Namn" name="name" id="name" size="31" required/></td>
                            <td width="50%" valign="middle" align="right" style="padding: 0 20px 0 0;"><input class="textf" type="text" placeholder="Ditt Efternamn" name="surname" id="surname" size="31" required/></td>
                        </tr>
                        <tr height="60">
                            <td colspan="6" valign="middle" align="center"><input class="textf" type="email" placeholder="Din mailadress..." name="email" id="email" size="70" required/></td>
                        </tr>
                        <tr height="60">
                            <td width="50%" valign="middle" align="left" style="padding: 0 0 0 20px;"><input class="textf" type="text" minlength="10" maxlength="10" placeholder="Ditt Personnummer (10 siffror)" name="personal_number" id="personal_number" size="31" required/></td>
                            <td width="50%" valign="middle" align="right" style="padding: 0 20px 0 0;"><input class="textf" type="text" placeholder="Ditt Telefonnummer" name="telephone" id="telephone" size="31" required/></td>
                        </tr>
                        <tr height="60">
                            <td colspan="6" valign="middle" align="center" style="width: 100px; font-size: 14px; color: #999;">
                               
                            </td>
                        </tr>
                        <tr height="60">
                            <td colspan="6" valign="middle" align="center"><input class="textf" type="text" placeholder="Din adress..." name="adress" id="adress" size="70" required/></td>
                        </tr>
                        <tr height="60">
                            <td width="50%" valign="middle" align="left" style="padding: 0 0 0 20px;"><input class="textf" type="text" placeholder="Ditt Postnummer" name="post" id="post" size="31" required/></td>
                            <td width="50%" valign="middle" align="right" style="padding: 0 20px 0 0;"><input class="textf" type="text" placeholder="Din Ort" name="city" id="city" size="31" required/></td>
                        </tr>
                        
                        <tr height="60">
                            <td colspan="6" width="100%" valign="middle" align="center" style="color: #666; font-size: 14px; padding: 0 10px;">
                                <div>
                                    <p class="texto_oferta">L??s villkor <a href="#" onclick="mostrar()">h??r</a><br>
                                    
                                    <input class="condicion_acept" type="checkbox" name="agree" value="yes" required> Jag acepterar villkoren<br>
                                    
                                    S?? h??r beh??ndla vi lagen om <a href="#" onclick="mostrar2()">GDPR</a></p>
                                </div>
                            </td>
                        </tr>
                        <tr height="80">
                            <td colspan="6" valign="middle" align="center" style="color: #666; font-size: 14px;">
                                    <input type="submit" class="button_bok" value="Next" />
                            </td>
                        </tr>
                        <tr height="20">
                        </tr>
                        <input type="hidden" name="status" id="status" value="Active"/>
                        <input type="hidden" name="via" id="via" value="1000"/>
                        <input type="hidden" name="client_no" id="client_no" value="<?php echo $_SESSION['bkng_UserId'];?>-<?php echo rand(100000,900000); ?>"/>
                        <input type="hidden" name="id_client" id="id_client" value="<?php echo $_SESSION['bkng_UserId'];?>"/>
                        <input type="hidden" name="MM_insert" id="MM_insert" value="formrequest" />
                    </table>
                </form>
            </div>
        </div>
    </div>
</div>