<script>
    function asegurar()
    {
            rc = confirm("Är du säkert på den här ändring?");
            return rc;
    }
</script>
<?php if($_GET["new"]):?>
    <div class="subform_cont1">
        <form action="pushcarts.php" method="post" name="formrequest" id="formrequest">
            <table class="formulario" border="0" cellspacing="0" cellpadding="0" style="width:600px; margin-bottom:0;">
                <tr height="40">
                    <td colspan="3" valign="middle" align="center" style="color: #333; padding: 20px 0 0 0;">
                        <h2>New Pushcart</h2>
                    </td>
                </tr>
                <tr height="50">
                    <td colspan="3" valign="middle" align="center">
                        <input class="textf" type="text" value="" placeholder="Pushcart name..." name="name" id="name" size="76" required/>
                    </td>
                </tr>
                <tr height="100">
                    <td colspan="3" valign="middle" align="center"><textarea class="textf" type="text" placeholder="Description..." name="description" id="description" maxlength="2000" cols="65" rows="8" required></textarea></td>
                </tr>
                <tr height="200">
                    <td colspan="2" valign="middle" align="right">
                        <table border="0" cellspacing="0" cellpadding="0" style="width:93%; background-color:#F0F0F0; border:1px solid #CCC; border-radius:7px; margin:20px 5px 0 0;">
                            <tr>
                                <td valign="middle" align="center">
                                    <script src="../js/scriptupload.js"></script>

                                    <?php 
                                    //***********************BLOQUE INSERCION IMAGEN***********************//
                                    //***********************PARÁMETROS DE IMAGEN**************************//
                                    $nombrecampoimagen="image";
                                    $nombrecampoimagenmostrar="fotopic";
                                    $nombrecarpetadestino="../img/products/"; //carpeta destino con barra al final
                                    $nombrecampofichero="file1";
                                    $nombrecampostatus="status1";
                                    $nombrebarraprogreso="progressBar1";
                                    $maximotamanofichero="0"; //en Bytes, "0" para ilimitado. 1000000 Bytes = 1000Kb = 1Mb
                                    $tiposficheropermitidos="jpg,png"; //  Por ejemplo "jpg,doc,png", separados por comas y poner "0" para permitir todos los tipos
                                    $limiteancho="0"; // En píxels, "0" significa cualquier tamaño permitido
                                    $limitealto="0"; // En píxels, "0" significa cualquier tamaño permitido
                                                                        
                                    $cadenadeparametros="'".$nombrecampoimagen."','".$nombrecampoimagenmostrar."','".$nombrecarpetadestino."','".$nombrecampofichero."','".$nombrecampostatus."','".$nombrebarraprogreso."','".$maximotamanofichero."','".$tiposficheropermitidos."','".$limiteancho."','".$limitealto."'";

                                    //$cadenadeparametros="";                                 
                                    ?>
                                            <input type="hidden" class="textf" size="40" name="<?php echo $nombrecampoimagen;?>" id="<?php echo $nombrecampoimagen;?>">
                                            <br>
                                            <br>
                                            <input type="file" name="<?php echo $nombrecampofichero;?>" id="<?php echo $nombrecampofichero;?>">
                                            
                                            <input class="form-control" type="button" value="Ladda up file" onclick="uploadFile(<?php echo $cadenadeparametros;?>)">
                                            <br>
                                            <progress id="<?php echo $nombrebarraprogreso;?>" value="0" max="80" style="width: 80%;"></progress>
                                            <h5 id="<?php echo $nombrecampostatus;?>"></h5>
                                            <div class="foto_prev">
                                                <img src="" alt="" id="<?php echo $nombrecampoimagenmostrar;?>" height="140" style="margin:0 0 6px;">
                                            </div>
                                    <?php /*?>
                                    //******************FIN BLOQUE INSERCION IMAGEN*************************
                                    <?php */?>
                                </td>
                            </tr>
                        </table>
                    </td>
                    <td colspan="1" valign="middle" align="left">
                        <table border="0" cellspacing="0" cellpadding="0" style="width:88%; background-color:#F0F0F0; border:1px solid #CCC; border-radius:7px; margin:20px 0 0;">
                            <tr height="50">
                                <td width="40%" valign="middle" align="right" style="color:#666; font-size:12px; padding:0 5px 0 0;">
                                    Size:
                                </td>
                                <td width="60%" valign="middle" align="left" style="padding:0 5px 0 0;">
                                    <select class="textf" style="width: 95px; font-size: 14px; color: #999;" name="product_type" id="product_type" required>
                                    <option value="1">Small</option>
                                    <option value="2">Medium</option>
                                    <option value="3">Big</option>
                                    </select>
                                </td>
                            </tr>
                            <tr height="50">
                                <td width="40%" valign="middle" align="right" style="color:#666; font-size:12px; padding:0 5px 0 0;">
                                    Price:
                                </td>
                                <td width="60%" valign="middle" align="left">
                                    <input class="textf" type="text" size="8" name="price" id="price">
                                </td>
                            </tr>
                            <tr height="50">
                                <td width="40%" valign="middle" align="right" style="color:#666; font-size:12px; padding:0 5px 0 0;">
                                    City:
                                </td>
                                <td width="60%" valign="middle" align="left" style="padding:0 5px 0 0;">
                                    <select class="textf" style="width: 95px; font-size: 14px; color: #999;" name="city" id="city" required>
                                    <?php
                                    if ($totalRows_DatosCity > 0) {
                                    do { ?>
                                        <option value="<?php echo $row_DatosCity['id_city']; ?>"><?php echo $row_DatosCity['city_name']; ?></option>
                                    <?php } while ($row_DatosCity = mysqli_fetch_assoc($DatosCity));
                                    }
                                    ?>
                                    </select>
                                </td>
                            </tr>
                            <tr height="50">
                                
                            </tr>
                            <tr height="50">
                                <td width="40%" valign="middle" align="right" style="color:#666; font-size:12px; padding:0 5px 0 0;">
                                    Status:
                                </td>
                                <td width="60%" valign="middle" align="left" style="padding:0 5px 0 0;">
                                    <select class="textf" style="width: 95px; font-size: 14px; color: #999;" name="status" id="status" required>
                                    <option value="1">Aktiv</option>
                                    <option value="0">Inaktiv</option>
                                    </select>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr height="60">
                    <td colspan="3" valign="middle" align="center" style="color: #666; font-size: 14px;">
                        <a href="pushcarts.php"><input class="button_a" style="width: 170px; text-align: center;" value="avbryt" /></a> <input type="submit" class="button" value="Post it!" />
                    </td>
                </tr>
                <tr height="10">
                    <td colspan="3" width="100%" valign="middle" align="center" style="color: #666; font-size: 14px; padding: 0 10px;">
                    </td>
                </tr>
                <input type="hidden" name="MM_insert" id="MM_insert" value="formrequest" />
            </table>
        </form>
    </div>
<?php endif ?>
<?php if($_GET["editp"]):?>
    <div class="subform_cont1">
        <form action="pushcarts.php" method="post" name="formedit" id="formedit">
            <table class="formulario" border="0" cellspacing="0" cellpadding="0" style="width:600px; margin-bottom:0;">
                <tr height="40">
                    <td colspan="3" valign="middle" align="center" style="color: #333; padding: 30px 0 0 0;">
                        <h2>Edit Pushcart</h2>
                    </td>
                </tr>
                <tr height="50">
                    <td colspan="3" valign="middle" align="center">
                        <input class="textf" type="text" value="<?php echo $row_DatosEdit["name"]; ?>" placeholder="Pushcart name..." name="name" id="name" size="76" required/>
                    </td>
                </tr>
                <tr height="100">
                    <td colspan="3" valign="middle" align="center"><textarea class="textf" type="text" placeholder="Content..." name="description" id="description" maxlength="2000" cols="65" rows="8" required><?php echo $row_DatosEdit['description'];?></textarea></td>
                </tr>
                <tr height="200">
                    <td colspan="2" valign="middle" align="right">
                        <table border="0" cellspacing="0" cellpadding="0" style="width:92%; background-color:#F0F0F0; border:1px solid #CCC; border-radius:7px; margin:20px 5px 0 0; ">
                            <tr>
                                <td valign="middle" align="center">

                                    <script src="js/scriptupload.js"></script>
                                    <?php 
                                    //***********************BLOQUE INSERCION IMAGEN***********************//
                                    //***********************PARÁMETROS DE IMAGEN**************************//
                                    $nombrecampoimagen="image";
                                    $nombrecampoimagenmostrar="fotopic";
                                    $nombrecarpetadestino="../img/products/"; //carpeta destino con barra al final
                                    $nombrecampofichero="file1";
                                    $nombrecampostatus="status1";
                                    $nombrebarraprogreso="progressBar1";
                                    $maximotamanofichero="0"; //en Bytes, "0" para ilimitado. 1000000 Bytes = 1000Kb = 1Mb
                                    $tiposficheropermitidos="jpg,png"; //  Por ejemplo "jpg,doc,png", separados por comas y poner "0" para permitir todos los tipos
                                    $limiteancho="0"; // En píxels, "0" significa cualquier tamaño permitido
                                    $limitealto="0"; // En píxels, "0" significa cualquier tamaño permitido
                                                                        
                                    $cadenadeparametros="'".$nombrecampoimagen."','".$nombrecampoimagenmostrar."','".$nombrecarpetadestino."','".$nombrecampofichero."','".$nombrecampostatus."','".$nombrebarraprogreso."','".$maximotamanofichero."','".$tiposficheropermitidos."','".$limiteancho."','".$limitealto."'";

                                    //$cadenadeparametros="";                                 
                                    ?>
                                            <input type="hidden" class="textf" size="40" name="<?php echo $nombrecampoimagen;?>" id="<?php echo $nombrecampoimagen;?>" value="<?php echo $row_DatosEdit['image'];?>">
                                            <br>
                                            <br>
                                            <input type="file" name="<?php echo $nombrecampofichero;?>" id="<?php echo $nombrecampofichero;?>">
                                            
                                            <input class="form-control" type="button" value="Ladda up file" onclick="uploadFile(<?php echo $cadenadeparametros;?>)">
                                            <br>
                                            <progress id="<?php echo $nombrebarraprogreso;?>" value="0" max="80" style="width: 80%;"></progress>
                                            <h5 id="<?php echo $nombrecampostatus;?>"></h5>
                                            <div class="foto_prev">
                                                <img src="<?php echo $nombrecarpetadestino.$row_DatosEdit['image']; ?>" alt="" id="<?php echo $nombrecampoimagenmostrar;?>" height="140" style="margin:0 0 6px;">
                                            </div>
                                    <?php /*?>
                                    
                                    //******************FIN BLOQUE INSERCION IMAGEN*************************
                                    <?php */?>
                                </td>
                            </tr>
                        </table>
                    </td>
                    <td colspan="1" valign="middle" align="left">
                        <table border="0" cellspacing="0" cellpadding="0" style="width:88%; background-color:#F0F0F0; border:1px solid #CCC; border-radius:7px; margin:20px 0 0;">   
                            <tr height="50">
                                <td width="40%" valign="middle" align="right" style="color:#666; font-size:12px; padding:0 5px 0 0;">
                                    Size:
                                </td>
                                <td width="60%" valign="middle" align="left" style="padding:0 5px 0 0;">
                                    <select class="textf" style="width: 95px; font-size: 14px; color: #999;" name="product_type" id="product_type" required>
                                    <option value="1" <?php if ($row_DatosEdit["product_type"]=="1") echo "selected"; ?>>Small</option>
                                    <option value="2" <?php if ($row_DatosEdit["product_type"]=="2") echo "selected"; ?>>Medium</option>
                                    <option value="3" <?php if ($row_DatosEdit["product_type"]=="3") echo "selected"; ?>>Big</option>
                                    </select>
                                </td>
                            </tr>
                            <tr height="50">
                                <td width="40%" valign="middle" align="right" style="color:#666; font-size:12px; padding:0 5px 0 0;">
                                    Price:
                                </td>
                                <td width="60%" valign="middle" align="left">
                                    <input class="textf" type="text" value="<?php echo $row_DatosEdit["price"]; ?>" size="8" name="price" id="price">
                                </td>
                            </tr>
                            <tr height="50">
                                <td width="40%" valign="middle" align="right" style="color:#666; font-size:12px; padding:0 5px 0 0;">
                                    City:
                                </td>
                                <td width="60%" valign="middle" align="left" style="padding:0 5px 0 0;">
                                    <select class="textf" style="width: 95px; font-size: 14px; color: #999;" name="city" id="city" required>
                                    <?php
                                    if ($totalRows_DatosCity > 0) {
                                    do { ?>
                                        <option value="<?php echo $row_DatosCity['id_city']; ?>" <?php if ($row_DatosEdit["city"] == $row_DatosCity['id_city']) echo "selected"; ?>><?php echo $row_DatosCity['city_name']; ?></option>
                                    <?php } while ($row_DatosCity = mysqli_fetch_assoc($DatosCity));
                                    }
                                    ?>
                                    </select>
                                </td>
                            </tr>
                            <tr height="50">
                                
                            </tr>
                            <tr height="50">
                                <td width="40%" valign="middle" align="right" style="color:#666; font-size:12px; padding:0 5px 0 0;">
                                    Status:
                                </td>
                                <td width="60%" valign="middle" align="left" style="padding:0 5px 0 0;">
                                    <select class="textf" style="width: 100px; font-size: 14px; color: #999;" name="status" id="status" required>
                                    <option value="1" <?php if ($row_DatosEdit["status"]=="1") echo "selected"; ?>>Aktiv</option>
                                    <option value="0" <?php if ($row_DatosEdit["status"]=="0") echo "selected"; ?>>Inaktiv</option>
                                    </select>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr height="60">
                    <td colspan="3" valign="middle" align="center" style="color: #666; font-size: 14px;">
                            <a href="pushcarts.php"><input class="button_a" style="width: 170px; text-align: center;" value="avbryt" /></a> <input type="submit" class="button" value="Redigera !" />
                    </td>
                </tr>
                <tr height="10">
                    <td colspan="3" width="100%" valign="middle" align="center" style="color: #666; font-size: 14px; padding: 0 10px;">
                        
                    </td>
                </tr>
                <input type="hidden" name="MM_insert" id="MM_insert" value="formedit" />
                <input type="hidden" name="id_product" id="id_product" value="<?php echo $_GET["editp"];?>"/>
            </table>
        </form>
    </div>
<?php endif ?>

<?php if($_GET["deleteID"]):?>
    <div class="subform_cont1">
        <div class="alert_msn">
            <form action="pushcarts_delete.php" method="post" name="formdelete" id="formdelete">
                <table style="" width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr height="85">
                        <td colspan="2" valign="middle" align="center" style="color: red; font-size: 14px;">
                            <h2>Delete</h2>
                            <label>Are you sure you want delete this Product?</label> 
                        </td>
                    </tr>
                    <tr height="20">
                        <td colspan="2" valign="middle" align="center">
                           
                        </td>
                    </tr>
                    <tr height="85">
                        <td colspan="2" valign="middle" align="center">
                            <input class="button_a" style="width: 140px; text-align: center;" value="avbryt" onclick="history.back()"/> <input type="submit" class="button" style="width: 140px;" value="Ok!" />
                        </td>
                    </tr>
                </table>
                <input type="hidden" name="id" id="id" value="<?php echo $_GET['deleteID'];?>"/>
                <input type="hidden" name="MM_insert" id="MM_insert" value="formdelete" />
            </form>
        </div>
    </div>
<?php endif?>