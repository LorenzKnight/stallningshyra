<style>
@media only screen and (min-width: 320px) and (-webkit-device-pixel-ratio : 2) { 
    .recibo {
		width: 95%;
		/* height: 630px; */
        background-color: #FFF;
		margin: 30px auto 0;
		padding: 20px 1% 30px;
        /* border-radius: 7px; */

        -webkit-box-shadow: 0px 3px 22px -12px rgba(138,136,138,1);
		-moz-box-shadow: 0px 3px 22px -12px rgba(138,136,138,1);
		box-shadow: 0px 3px 22px -12px rgba(138,136,138,1);
	}
    .recibo_week {
        width:90%;
        height:200px;
    }
}
@media only screen and (device-width : 375px) and (device-height : 812px) and (-webkit-device-pixel-ratio : 3) { 
    .recibo {
		width: 95%;
		/* height: 630px; */
        background-color: #FFF;
		margin: 30px auto 0;
		padding: 20px 1% 30px;
        /* border-radius: 7px; */

        -webkit-box-shadow: 0px 3px 22px -12px rgba(138,136,138,1);
		-moz-box-shadow: 0px 3px 22px -12px rgba(138,136,138,1);
		box-shadow: 0px 3px 22px -12px rgba(138,136,138,1);
	}
    .recibo_week {
        width:90%;
        height:200px;
    }
}

@media (min-width: 768px) {
    .recibo {
		width: 95%;
		/* height: 630px; */
        background-color: #FFF;
		margin: 30px auto 0;
		padding: 20px 1% 30px;
        /* border-radius: 7px; */

        -webkit-box-shadow: 0px 3px 22px -12px rgba(138,136,138,1);
		-moz-box-shadow: 0px 3px 22px -12px rgba(138,136,138,1);
		box-shadow: 0px 3px 22px -12px rgba(138,136,138,1);
	}
    .recibo_week {
        width:90%;
        height:200px;
    }
}

@media (min-width: 1024px) {
    .recibo {
		width: 450px;
		/* height: 630px; */
        background-color: #FFF;
		margin: 30px auto 0;
		padding: 20px 5%;
        /* border-radius: 7px; */

        -webkit-box-shadow: 0px 3px 22px -12px rgba(138,136,138,1);
		-moz-box-shadow: 0px 3px 22px -12px rgba(138,136,138,1);
		box-shadow: 0px 3px 22px -12px rgba(138,136,138,1);
	}
    .recibo_week {
        width:100%;
        height:200px;
        background-color:red;
    }
}
</style>
<?php if($_GET['recibo']): ?>
<div class="form_frame" id="aparecer" style="display:<?php if ($_GET['recibo'] != "") echo "block"; ?>; min-height: 1400px; position: absolute;">
        <div class="recibo">
                <table border="0" cellspacing="0" cellpadding="0">
                    <tr height="40">
                        <td colspan="2" valign="middle" align="left" style="font-size: 20px;">
                            <h4 class="texto_original_title">Offert</h4>
                        </td>
                        <td colspan="3" valign="middle" align="right" style="padding: 0 0;">
                            <a href="index.php"><img src="img/sys/stallningshyra.svg" width="70%" height="" style="margin:;"></a>
                        </td>
                    </tr>
                    <tr height="40">
                        <td colspan="4" valign="middle" align="left" style="color: #666;">
                            <p class="texto_oferta"><?php echo $row_DatosClient['name'];?> <?php echo $row_DatosClient['surname'];?></br>
                            <?php echo $row_DatosClient['adress'];?></br>
                            <?php echo $row_DatosClient['post'];?> <?php echo $row_DatosClient['city'];?></p>
                        </td>
                    </tr>
                    <tr height="40">
                        <td colspan="4" valign="middle" align="left" style="color: #666; font-size: 14px;">
                            
                        </td>
                    </tr>
                    <tr height="20">
                        <td colspan="1" width="40%" valign="middle" align="left" style="font-weight: 600; border-bottom:1px solid #666;">
                            <p class="texto_oferta">Ställningsvagn:</p>
                        </td>
                        <td colspan="1" width="8%" valign="middle" align="left" style="font-weight: 600; border-bottom:1px solid #666;">
                            <p class="texto_oferta">-</p>
                        </td>
                        <td colspan="1" width="25%" valign="middle" align="right" style="font-weight: 600; border-bottom:1px solid #666;">
                            <p class="texto_oferta">Vecka(or):</p>
                        </td>
                        <td colspan="1" width="7%" valign="middle" align="left" style="font-weight: 600; border-bottom:1px solid #666;">
                            
                        </td>
                        <td colspan="1" width="20%" valign="middle" align="center" style="font-weight: 600; border-bottom:1px solid #666;">
                            <p class="texto_oferta">Pris:</p>
                        </td>
                    </tr>
                    <tr height="20">
                        <td colspan="1" width="40%" valign="middle" align="left" style="color: #666; font-size: 14px;">
                            <p class="texto_oferta"><?php echo ObtenerNombreProducto($row_DatosProductSeleted['product']);?></p>
                        </td>
                        <td colspan="1" width="8%" valign="middle" align="left" style="color: #666; font-size: 14px;">
                            
                        </td>
                        <td colspan="1" width="25%" valign="middle" align="left" style="color: #666; font-size: 14px;">
                           
                        </td>
                        <td colspan="1" width="7%" valign="middle" align="center" style="color: #666; font-size: 14px;">
                            
                        </td>
                        <td colspan="1" width="20%" valign="middle" align="right" style="color: #666; font-size: 14px;">
                            
                        </td>
                    </tr>
                               
                    

                    <?php
                        if ($totalRows_DatosCart2 > 0) {
                        do { ?>
                            <?php
                                $priceWeek2 = ObtenerPrecioSemana($row_DatosCart2['id_week']) + ObtenerPrecioProducto($row_DatosProductSeleted['product']);
                            ?>
                    <tr height="20">
                        <td colspan="1" width="40%" valign="middle" align="left" style="color: #666; font-size: 14px;">
                            
                        </td>
                        <td colspan="1" width="8%" valign="middle" align="left" style="color: #666; font-size: 14px;">
                            
                        </td>
                        <td colspan="1" width="25%" valign="middle" align="right" style="color: #666; font-size: 14px; padding-right:15px;">
                            <p class="texto_recibo"><?php echo ObtenerNombreSemana($row_DatosCart2['id_week']); ?></p>
                        </td>
                        <td colspan="1" width="7%" valign="middle" align="left" style="color: #666; font-size: 14px;">
                            <p class="texto_recibo"><?php echo ObtenerAnoSemana($row_DatosCart2['id_week']); ?></p>
                        </td>
                        <td colspan="1" width="20%" valign="middle" align="right" style="color: #666; font-size: 14px;">
                            <p class="texto_recibo"><?php echo $priceWeek2; ?> SEK</p>
                        </td>
                    </tr>
                    <?php $TotalSinImpuest2 = $TotalSinImpuest2 + $priceWeek2; ?>
                    <?php } while ($row_DatosCart2 = mysqli_fetch_assoc($DatosCart2));
                        }
                        ?>
                    <tr height="200">
                        <td colspan="5" valign="middle" align="left" style="color: #666; font-size: 14px;">
                            
                        </td>
                    </tr>
                

                    <tr height="30">
                        <td colspan="1" width="40%" valign="middle" align="left" style="color: #666; font-size: 14px;">
                            
                        </td>
                        <td colspan="1" width="8%" valign="middle" align="left" style="color: #666; font-size: 14px;">
                            
                        </td>
                        <td colspan="1" width="25%" valign="middle" align="right" style="color: #666;">
                            <p class="texto_recibo">Sub-total:</p>
                        </td>
                        <td colspan="1" width="7%" valign="middle" align="left" style="color: #666; font-size: 14px;">
                            
                        </td>
                        <td colspan="1" width="20%" valign="middle" align="right" style="color: #666;">
                            <p class="texto_recibo"><?php echo $TotalSinImpuest2; ?> SEK</p>
                        </td>
                    </tr>
                    <?php
                        $resprosent = ObtenerPDescuento($totalRows_DatosCart);
                        $preciorebaja = $TotalSinImpuest / 100 * $resprosent;

                        $subTotal = $TotalSinImpuest - $preciorebaja;

                        $tax = $row_DatosTaxes['percent'];
                        $moms2 = $subTotal * $tax / 100;
                        $total2 = $moms2 + $subTotal;
                    ?>
                    <tr height="30">
                        <td colspan="1" width="40%" valign="middle" align="left" style="color: #666; font-size: 14px;">
                            
                        </td>
                        <td colspan="1" width="8%" valign="middle" align="left" style="color: #666; font-size: 14px;">
                            
                        </td>
                        <td colspan="1" width="25%" valign="middle" align="right" style="color: #666; font-size: 14px;">
                            <p class="texto_recibo">Mängd rabatt:</p>
                        </td>
                        <td colspan="1" width="7%" valign="middle" align="left" style="color: #666; font-size: 14px;">
                            
                        </td>
                        <td colspan="1" width="20%" valign="middle" align="right" style="color: #666; font-size: 14px;">
                            <p class="texto_recibo">- <?php echo $preciorebaja; ?> SEK</p>
                        </td>
                    </tr>
                    <tr height="30">
                        <td colspan="1" width="40%" valign="middle" align="left" style="color: #666; font-size: 14px;">
                            
                        </td>
                        <td colspan="1" width="8%" valign="middle" align="left" style="color: #666; font-size: 14px;">
                            
                        </td>
                        <td colspan="1" width="25%" valign="middle" align="right" style="color: #666; font-size: 14px;">
                            <p class="texto_recibo">Moms:</p>
                        </td>
                        <td colspan="1" width="7%" valign="middle" align="left" style="color: #666; font-size: 14px;">
                            
                        </td>
                        <td colspan="1" width="20%" valign="middle" align="right" style="color: #666; font-size: 14px;">
                            <p class="texto_recibo">+ <?php echo $moms2; ?> SEK</p>
                        </td>
                    </tr>
                    <tr height="30">
                        <td colspan="2" valign="middle" align="left" style="font-size: 18px; border-top:1px solid #F00;">
                            <p class="texto_oferta">Total</p>
                        </td>
                        <td colspan="3" valign="middle" align="right" style="font-size: 18px; border-top:1px solid #F00;">
                            <p class="texto_oferta"><?php echo $total2; ?> SEK</p>
                        </td>
                    </tr>
                    <tr height="30">
                        <td colspan="5" valign="middle" align="center" style="font-size: 12px;">
                        
                        </td>
                    </tr>
                </table>
                <table width="100%" border="0" cellspacing="0" cellpadding="0" style="margin:0 auto;">
                <form class="form" action="customer_info.php" method="get">
                    <tr height="80">
                        <td colspan="4" valign="middle" align="center" style="font-size: 12px;">
                            <p class="texto_oferta">Genom att klicka på knappen</br>
                            boka du ställning som är med på offert</br>
                            Vill du bekräfta den här bokning?</br></p>
                        </br>
                        <input type="submit" class="button_bok" value="Ok" />
                        </td>
                    </tr>
                    <input type="hidden" name="payment" id="payment" value="<?php echo $_GET['recibo']?>"/>
                </form>
                </table>
        </div>
</div>
<?php endif ?>