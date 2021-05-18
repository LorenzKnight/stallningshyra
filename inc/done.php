<style>
    @media only screen and (min-width: 320px) and (-webkit-device-pixel-ratio : 2) {
        .div_done {
            width: 85%;
            /* height: 800px; */
            overflow: auto;
            background-color: #FFF;
            font-size: 16px;
            text-align: center;
            margin: 100px auto 0;
            padding: 100px 5% 100px;
        }
    }

    @media only screen and (device-width : 375px) and (device-height : 812px) and (-webkit-device-pixel-ratio : 3) { 
        .div_done {
            width: 85%;
            /* height: 800px; */
            overflow: auto;
            background-color: #FFF;
            font-size: 16px;
            text-align: center;
            margin: 100px auto 0;
            padding: 100px 5% 100px;
        }
    }

    @media (min-width: 768px) { 
        .div_done {
            width: 85%;
            /* height: 800px; */
            overflow: auto;
            background-color: #FFF;
            font-size: 16px;
            text-align: center;
            margin: 100px auto 0;
            padding: 100px 5% 100px;
        }
    }

    @media (min-width: 1024px) {
        .div_done {
            width: 500px;
            /* height: 800px; */
            overflow: auto;
            background-color: #FFF;
            font-size: 16px;
            text-align: center;
            margin: 100px auto 0;
            padding: 50px 5%;
        }
    }
</style>
<?php if($_GET['payment'] != ""): ?>
    <?php
        // if ($totalRows_DatosCart > 0) {
        //     do { 
        //         $priceWeek = ObtenerPrecioSemana($row_DatosCart['id_week']) + ObtenerPrecioProducto($row_DatosProductSeleted['product']);
        //         $TotalSinImpuest = $TotalSinImpuest + $priceWeek; 
        //     } while ($row_DatosCart = mysqli_fetch_assoc($DatosCart));
        // }
        // $resprosent = ObtenerPDescuento($totalRows_DatosCart);
        // $preciorebaja = $TotalSinImpuest / 100 * $resprosent;

        // $subTotal = $TotalSinImpuest - $preciorebaja;

        // $tax = $row_DatosTaxes['percent'];
        // $moms = $subTotal * $tax / 100;
        // $total = $moms + $subTotal;
    
        
        
        
        
        // $payment = $_GET['payment'];
        
        
    ?>
    <?php 
                $nombre = $row_DatosClient['name'];
                $apellido = $row_DatosClient['surname'];
                $direccion = $row_DatosClient['adress'];
                $post = $row_DatosClient['post'];
                $ciudad = $row_DatosClient['city'];
                $email = $row_DatosClient['email'];
                $clientNo = $row_DatosClient['client_no'];
                $cliente = $_GET['payment'];
                $producto = ObtenerNombreProducto($row_DatosProductSeleted['product']);
                $product_id = $row_DatosProductSeleted['product'];
                $orderno = $_GET['payment'].rand(100000000,900000000);
                
                $status = 2;
                $payment = 1;

                $fecha_actual = $row_DatosCart2['date'];
                //sumo 1 semana
                $fechaPago = date("Y-m-d",strtotime($fecha_actual."+ 1 week"));
            ?>
            <?php
                if ($totalRows_DatosCart2 > 0) {
                do { 
                        $priceWeek2 = ObtenerPrecioSemana($row_DatosCart2['id_week']) + ObtenerPrecioProducto($row_DatosProductSeleted['product']);
                        $TotalSinImpuest2 = $TotalSinImpuest2 + $priceWeek2; 
                    } while ($row_DatosCart2 = mysqli_fetch_assoc($DatosCart2));
                }
                $resprosent2 = ObtenerPDescuento($totalRows_DatosCart2);
                $preciorebaja2 = $TotalSinImpuest2 / 100 * $resprosent2;

                $subTotal2 = $TotalSinImpuest2 - $preciorebaja2;

                $tax2 = $row_DatosTaxes['percent'];
                $moms2 = $subTotal2 * $tax2 / 100;
                $total2 = $moms2 + $subTotal2;
            ?>
            <?php if(ordenRegistrada(date('Y-m-d'), $cliente)) { ?>
                <?php ConfirmationPago(date('Y'), date('m'), date('d'), $cliente, $product_id, $orderno, $status, $payment, $TotalSinImpuest2, $preciorebaja2, $total2); ?>
            <?php } ?>

    <div class="form_frame" id="aparecer" style="display:<?php if ($_GET['payment'] != "") echo "block"; ?>; min-height: 1400px; position:absolute;">
    
        <div class="div_done">
            <h3 class="texto_original">Tack för din bokning <?php echo $row_DatosClient['name'];?> <?php echo $row_DatosClient['surname'];?></h3>
            <p class="texto_oferta">Du kommer få ett mail med din faktura,</br>
            Så fort du genomför betalning då kommer du få en bekreftelse</br>
            där det stå en order nummer för att hämta den vagn du har bokat.</br>
            </br>
            Mailet kan ta några minuter innan den kommer fram</br>
            Ser du inte våran mail då är det möjligt att den har hamnat i din skräp post,</br>
            då är det bara att kika där.</p>
            
            </br>
            </br>
            </br>
            <a href="inc/logout.php"><input type="submit" class="button_bok" value="Ok" /></a>
        </div>
        
        <div class="theemail">
            <?php //echo $_SESSION['bkng_UserId']; ?>
            <?php
                $semanas = SemanasParaMail($row_DatosClient['id_client'], $row_DatosProductSeleted['product']);
            ?>
            <?php
            $contenido='
            <table width="100%" border="0" cellspacing="0" cellpadding="0" style="">
                <tr height="40">
                    <td colspan="2" valign="middle" align="left" style="font-size: 20px;">
                        Faktura
                    </td>
                    <td colspan="3" valign="middle" align="right" style="padding: 0 0;">
                        <img src="';$contenido.=$dominio;$contenido.='/img/sys/stallningshyra.svg" width="60%" height="" style="margin:;">
                    </td>
                </tr>
                <tr height="40">
                    <td colspan="4" valign="middle" align="left" style="color: #666; font-size: 14px;">';
            $contenido.=$nombre; $contenido.='&nbsp;'; $contenido.=$apellido; 
            $contenido.='<br>';
            $contenido.=$direccion; 
            $contenido.='<br>';
            $contenido.=$post; $contenido.='&nbsp;'; $contenido.=$ciudad; 
            $contenido.='<br>';
            $contenido.='
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
                    <td colspan="1" width="40%" valign="middle" align="left" style="color: #666; font-size: 14px;">';
                        $contenido.=$producto; 
       $contenido.='</td>
                    <td colspan="1" width="8%" valign="middle" align="left" style="color: #666; font-size: 14px;">
                        
                    </td>
                    <td colspan="1" width="25%" valign="middle" align="left" style="color: #666; font-size: 14px;">
                        
                    </td>
                    <td colspan="1" width="7%" valign="middle" align="center" style="color: #666; font-size: 14px;">
                        
                    </td>
                    <td colspan="1" width="20%" valign="middle" align="left" style="color: #666; font-size: 14px;">
                        
                    </td>
                </tr>
            </table>
            <div style="width:100%; height:300px;">';
            $contenido.=$semanas;
$contenido.='</div>
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
                    <td colspan="1" width="20%" valign="middle" align="right" style="color: #666; font-size: 14px;">';
            $contenido.=$TotalSinImpuest2; $contenido.=' SEK
                    </td>
                </tr>
                <tr height="30">
                    <td colspan="1" width="40%" valign="middle" align="left" style="color: #666; font-size: 14px;">
                        
                    </td>
                    <td colspan="1" width="8%" valign="middle" align="left" style="color: #666; font-size: 14px;">
                        
                    </td>
                    <td colspan="1" width="25%" valign="middle" align="right" style="color: #666; font-size: 14px;">
                        Mängd rabatt:
                    </td>
                    <td colspan="1" width="7%" valign="middle" align="left" style="color: #666; font-size: 14px;">
                        
                    </td>
                    <td colspan="1" width="20%" valign="middle" align="right" style="color: #666; font-size: 14px;">
                    - '; $contenido.=$preciorebaja2; $contenido.=' SEK
                    </td>
                </tr>
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
                    + '; $contenido.=$moms2; $contenido.=' SEK
                    </td>
                </tr>
                <tr height="30">
                    <td colspan="2" valign="middle" align="left" style="font-size: 18px; border-top:1px solid #F00;">
                        Total
                    </td>
                    <td colspan="3" valign="middle" align="right" style="font-size: 18px; border-top:1px solid #F00;">';
            $contenido.=$total2; $contenido.=' SEK
                    </td>
                </tr>
                <tr height="50">
                    <td colspan="5" valign="middle" align="center" style="font-size: 12px;">
                    
                    </td>
                </tr>
            </table>
            <div style="width:100%; border:1px solid #666; border-radius:7px;">
            <table width="98%" border="0" cellspacing="0" cellpadding="0" style="margin:0 auto;">
                <tr height="30">
                    <td colspan="1" width="40%" valign="middle" align="left" style="font-size: 12px; font-weight: 600;">
                        
                    </td>
                    <td colspan="1" width="15%" valign="middle" align="left" style="font-size: 12px; font-weight: 600;">
                        
                    </td>
                    <td colspan="1" width="25%" valign="middle" align="right" style="font-size: 12px; font-weight: 600; padding-right:30px;">
                        Referensnr:
                    </td>
                    <td colspan="1" width="20%" valign="middle" align="left" style="font-size: 12px; font-weight: 600;">';
            $contenido.=$orderno; $contenido.=' (OCR)
                </td>
                </tr>
                <tr height="30">
                    <td colspan="1" width="40%" valign="middle" align="left" style="font-size: 12px; font-weight: 600;">';
                        $contenido.=' Kundnr: '; $contenido.=$clientNo; $contenido.='<br>';
       $contenido.='</td>
                    <td colspan="1" width="15%" valign="middle" align="left" style="font-size: 12px; font-weight: 600;">
                        
                    </td>
                    <td colspan="1" width="25%" valign="middle" align="right" style="font-size: 12px; font-weight: 600; padding-right:30px;">
                        Att betala:
                    </td>
                    <td colspan="1" width="20%" valign="middle" align="left" style="font-size: 12px; font-weight: 600;">';
            $contenido.=$total2; $contenido.=' SEK
                    </td>
                </tr>
                <tr height="30">
                    <td colspan="1" width="40%" valign="middle" align="left" style="font-size: 12px; font-weight: 600;">';
                        $contenido.=$nombre; $contenido.='&nbsp;'; $contenido.=$apellido; $contenido.='</td>';
       $contenido.='</td>
                    <td colspan="1" width="15%" valign="middle" align="left" style="font-size: 12px; font-weight: 600;">
                        
                    </td>
                    <td colspan="1" width="25%" valign="middle" align="right" style="font-size: 12px; font-weight: 600; padding-right:30px;">
                        Oss tillhanda senast:
                    </td>
                    <td colspan="1" width="20%" valign="middle" align="left" style="font-size: 12px; font-weight: 600;">';
                    $contenido.=$fechaPago;
        $contenido.='</td>
                </tr>
                <tr height="40">
                    <td colspan="1" width="40%" valign="middle" align="left" style="font-size: 12px; font-weight: 600;">
                        
                    </td>
                    <td colspan="1" width="15%" valign="middle" align="left" style="font-size: 12px; font-weight: 600;">
                        
                    </td>
                    <td colspan="1" width="25%" valign="middle" align="left" style="font-size: 12px; font-weight: 600; border-left:1px solid #666; border-top:1px solid #666; padding-left:10px;">
                        <p style="font-size:9px; padding:0; margin:0;">till bankgironr</p>
                        <p style="padding:0; margin:0;">1234-5678</p>
                    </td>
                    <td colspan="1" width="20%" valign="middle" align="left" style="font-size: 12px; font-weight: 600; border-top:1px solid #666;">
                        <p style="font-size:9px; padding:0; margin:0;">Batalningsmottagare</p>
                        <p style="padding:0; margin:0;">Ställningshyra AB</p>
                    </td>
                </tr>
            </table>
            </div>
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr height="40">
                    <td colspan="4" valign="middle" align="center" style="font-size: 12px;">
                        
                    </td>
                </tr>
                <tr>
                    <td colspan="4" valign="middle" align="center" style="font-size: 12px;">
                        <p style="font-size:12px; color:#666;">Har du mer frågor så kan du kontakta oss på <a style="font-size:14px;" href="mailto:info@stallningshyra.se">info@stallningshyra.se</a> </p>
                    </td>
                </tr>
            </table>';
            
            $asunto ='Faktura på din bokning Ställningshyra';
            SendMailHtml($email, $contenido, $asunto);
            ?>
        </div>
    </div>
    <style>
    .theemail {
        width: 680px;
        margin: 0 auto;
        padding: 3% 2%;
        background-color: white;
        box-shadow: 0 .15rem 1.75rem 0 rgba(58,59,69,.15)!important;
    }
    </style>
<?php endif ?>