<?php if($_GET['recibo']): ?>
<div class="form_frame" id="aparecer" style="display:<?php if ($_GET['recibo'] != "") echo "block"; ?>; min-height: 1400px;">
        <div class="recibo">
                <table border="0" cellspacing="0" cellpadding="0">
                    <tr height="40">
                        <td colspan="2" valign="middle" align="left" style="font-size: 20px;">
                            Offert
                        </td>
                        <td colspan="3" valign="middle" align="right" style="padding: 0 0;">
                            <a href="index.php"><img src="img/sys/stallningshyra.svg" width="70%" height="" style="margin:;"></a>
                        </td>
                    </tr>
                    <tr height="40">
                        <td colspan="4" valign="middle" align="left" style="color: #666; font-size: 14px;">
                            <?php echo $row_DatosClient['name'];?> <?php echo $row_DatosClient['surname'];?></br>
                            <?php echo $row_DatosClient['adress'];?></br>
                            <?php echo $row_DatosClient['post'];?> <?php echo $row_DatosClient['city'];?>
                        </td>
                    </tr>
                    <tr height="40">
                        <td colspan="4" valign="middle" align="left" style="color: #666; font-size: 14px;">
                            
                        </td>
                    </tr>
                    <tr height="20">
                        <td colspan="1" width="40%" valign="middle" align="left" style="font-size: 14px; font-weight: 600; border-bottom:1px solid #666;">
                            Ställningsvagn:
                        </td>
                        <td colspan="1" width="8%" valign="middle" align="left" style="font-size: 14px; font-weight: 600; border-bottom:1px solid #666;">
                            -
                        </td>
                        <td colspan="1" width="25%" valign="middle" align="right" style="font-size: 14px; font-weight: 600; border-bottom:1px solid #666;">
                            Vecka(or):
                        </td>
                        <td colspan="1" width="7%" valign="middle" align="left" style="font-size: 14px; font-weight: 600; border-bottom:1px solid #666;">
                            
                        </td>
                        <td colspan="1" width="20%" valign="middle" align="center" style="font-size: 14px; font-weight: 600; border-bottom:1px solid #666;">
                            Pris:
                        </td>
                    </tr>
                    <tr height="20">
                        <td colspan="1" width="40%" valign="middle" align="left" style="color: #666; font-size: 14px;">
                            <?php echo ObtenerNombreProducto($row_DatosProductSeleted['product']);?>
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
                </table>
                <div style="width:100%; height:200px;">
                <table width="100%" border="0" cellspacing="0" cellpadding="0">                    
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
                            <?php echo ObtenerNombreSemana($row_DatosCart2['id_week']); ?>
                        </td>
                        <td colspan="1" width="7%" valign="middle" align="left" style="color: #666; font-size: 14px;">
                            <?php echo ObtenerAnoSemana($row_DatosCart2['id_week']); ?>
                        </td>
                        <td colspan="1" width="20%" valign="middle" align="right" style="color: #666; font-size: 14px;">
                            <?php echo $priceWeek2; ?> SEK
                        </td>
                    </tr>
                    <?php $TotalSinImpuest2 = $TotalSinImpuest2 + $priceWeek2; ?>
                    <?php } while ($row_DatosCart2 = mysqli_fetch_assoc($DatosCart2));
                        }
                        ?>
                </table>
                </div>
                
                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr height="30">
                        <td colspan="1" width="40%" valign="middle" align="left" style="color: #666; font-size: 14px;">
                            
                        </td>
                        <td colspan="1" width="8%" valign="middle" align="left" style="color: #666; font-size: 14px;">
                            
                        </td>
                        <td colspan="1" width="25%" valign="middle" align="right" style="color: #666; font-size: 14px;">
                            Sub-total:
                        </td>
                        <td colspan="1" width="7%" valign="middle" align="left" style="color: #666; font-size: 14px;">
                            
                        </td>
                        <td colspan="1" width="20%" valign="middle" align="right" style="color: #666; font-size: 14px;">
                            <?php echo $TotalSinImpuest2; ?> SEK
                        </td>
                    </tr>
                    <?php
                        $tax = $row_DatosTaxes['percent'];
                        $moms2 = $TotalSinImpuest2 * $tax / 100;
                        $total2 = $moms2 + $TotalSinImpuest2;
                    ?>
                    <tr height="30">
                        <td colspan="1" width="40%" valign="middle" align="left" style="color: #666; font-size: 14px;">
                            
                        </td>
                        <td colspan="1" width="8%" valign="middle" align="left" style="color: #666; font-size: 14px;">
                            
                        </td>
                        <td colspan="1" width="25%" valign="middle" align="right" style="color: #666; font-size: 14px;">
                            Moms:
                        </td>
                        <td colspan="1" width="7%" valign="middle" align="left" style="color: #666; font-size: 14px;">
                            
                        </td>
                        <td colspan="1" width="20%" valign="middle" align="right" style="color: #666; font-size: 14px;">
                            <?php echo $moms2; ?> SEK
                        </td>
                    </tr>
                    <tr height="30">
                        <td colspan="2" valign="middle" align="left" style="font-size: 18px; border-top:1px solid #F00;">
                            Total
                        </td>
                        <td colspan="3" valign="middle" align="right" style="font-size: 18px; border-top:1px solid #F00;">
                            <?php echo $total2; ?> SEK
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
                        Genom att klicka på knappen boka du ställning som är med på offert</br>
                        Vill du bekräfta den här bokning?</br>
                        </br>
                        <input type="submit" class="button_bok" value=" Ja, skicka fakturan" />
                        </td>
                    </tr>
                    <input type="hidden" name="payment" id="payment" value="<?php echo $_GET['recibo']?>"/>
                </form>
                </table>
        </div>
</div>
<?php endif ?>