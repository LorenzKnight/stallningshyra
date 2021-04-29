<div class="content" style="background-color:#F0F0F0;">
    <div class="over_c" style="background-color:#F0F0F0;">
        <div class="bok_sidebar">
            <?php if($totalRows_DatosProductSeleted > 0): ?>
                <div class="filtro_bok" id="aparecer" style="opacity: 0;">
                    <table class="tabla_formulario" border="0" cellspacing="0" cellpadding="0">
                        <tr height="60">
                            <td colspan="3" valign="middle" align="center">
                                <?php echo ObtenerNombreProducto($row_DatosProductSeleted['product']);?>
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
                                <?php echo ObtenerNombreSemana($row_DatosCart['id_week']);?>
                            </td>
                            <td width="40%" style="font-size:14px;" valign="middle" align="right">
                                <?php echo $priceWeek;?> SEK
                            </td>
                            <td width="20%" valign="middle" align="center">
                                
                            </td>
                        </tr>
                        <?php $TotalSinImpuest = $TotalSinImpuest + $priceWeek; ?> 
                        <?php } while ($row_DatosCart = mysqli_fetch_assoc($DatosCart));
                        }
                        ?>
                        <tr height="30">
                            <td width="40%" style="border-top:1px solid #F00; font-size:14px; padding:0 10px 0 0;" valign="middle" align="right">
                                sub-total:
                            </td>
                            <td width="40%" style="border-top:1px solid #F00; font-size:14px;" valign="middle" align="right">
                                <?php echo $TotalSinImpuest; ?> SEK
                            </td>
                            <td width="20%" style="border-top:1px solid #F00;" valign="middle" align="center">
                            </td>
                        </tr>
                            <?php
                                $moms = $TotalSinImpuest * 0.25;
                                $total = $moms + $TotalSinImpuest;
                            ?>
                        <tr height="30">
                            <td width="40%" style="padding:0 10px 0 0; font-size:14px;" valign="middle" align="right">
                                Moms:
                            </td>
                            <td width="40%" style="font-size:14px;" valign="middle" align="right">
                                <?php echo $moms; ?> SEK
                            </td>
                            <td width="20%" valign="middle" align="center">
                            </td>
                        </tr>
                        <tr height="30">
                            <td width="40%" style="border-top:1px solid #F00; font-size:14px; font-weight: 600; padding:0 10px 0 0;" valign="middle" align="right">
                                Total:
                            </td>
                            <td width="40%" style="border-top:1px solid #F00; font-size:14px; font-weight: 600;" valign="middle" align="right">
                                <?php echo $total ?> SEK
                            </td>
                            <td width="20%" style="border-top:1px solid #F00;" valign="middle" align="center">
                            </td>
                        </tr>

                        <tr height="20">
                            <td colspan="3" valign="middle" align="center">
                                <!-- <a href="cart_delete.php?productID=<?php echo $row_DatosProductSeleted['product'];?>" onclick="asegurar_borrado()"><input type="submit" class="button_a_small" value="Ta bort detta" /></a> -->
                            </td>
                        </tr>
                    </table>
                </div>
            <?php endif ?>
        </div>

        <div class="bok_content">
            <div class="formulario_customer">
                <form action="customer_info.php" method="post" name="formrequest" id="formrequest">
                    <table class="tabla_formulario" style="top: 50px;" border="0" cellspacing="0" cellpadding="0">
                        <tr height="40">
                            <td colspan="6" valign="middle" align="center" style="font-size: 16px; padding: 30px 0 0 0;">
                            </td>
                        </tr>
                        <tr height="60">
                            <td width="50%" valign="middle" align="right" style="padding: 0 20px;"><input class="textf" type="text" placeholder="Ditt Namn" name="name" id="name" size="31" required/></td>
                            <td width="50%" valign="middle" align="left" style="padding: 0 20px;"><input class="textf" type="text" placeholder="Ditt Efternamn" name="surname" id="surname" size="31" required/></td>
                        </tr>
                        <tr height="60">
                            <td colspan="6" valign="middle" align="center"><input class="textf" type="email" placeholder="Din mailadress..." name="email" id="email" size="70" required/></td>
                        </tr>
                        <tr height="60">
                            <td width="50%" valign="middle" align="right" style="padding: 0 20px;"><input class="textf" type="text" minlength="10" maxlength="10" placeholder="Ditt Personnummer (10 siffror)" name="personal_number" id="personal_number" size="31" required/></td>
                            <td width="50%" valign="middle" align="left" style="padding: 0 20px;"><input class="textf" type="text" placeholder="Ditt Telefonnummer" name="telephone" id="telephone" size="31" required/></td>
                        </tr>
                        <tr height="60">
                            <td colspan="6" valign="middle" align="center" style="width: 100px; font-size: 14px; color: #999;">
                               
                            </td>
                        </tr>
                        <tr height="60">
                            <td colspan="6" valign="middle" align="center"><input class="textf" type="text" placeholder="Din adress..." name="adress" id="adress" size="70" required/></td>
                        </tr>
                        <tr height="60">
                            <td width="50%" valign="middle" align="right" style="padding: 0 20px;"><input class="textf" type="text" placeholder="Ditt Postnummer" name="post" id="post" size="31" required/></td>
                            <td width="50%" valign="middle" align="left" style="padding: 0 20px;"><input class="textf" type="text" placeholder="Din Ort" name="city" id="city" size="31" required/></td>
                        </tr>
                        <tr height="60">
                            <td colspan="6" width="100%" valign="middle" align="center" style="color: #666; font-size: 14px; padding: 0 10px;">
                                <div>
                                    Läs villkor <a href="#" onclick="mostrar()">här</a><br>
                                    <input class="class1_content" type="checkbox" name="agree" value="yes" required> Jag acepterar villkoren<br>
                                    <br>
                                    Så här behändla vi lagen om <a href="#" onclick="mostrar2()">GDPR</a>
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
                        <input type="hidden" name="id_client" id="id_client" value="<?php echo $_SESSION['bkng_UserId']?>"/>
                        <input type="hidden" name="MM_insert" id="MM_insert" value="formrequest" />
                    </table>
                </form>
            </div>
        </div>
    </div>
</div>