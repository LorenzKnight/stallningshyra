<script>
    function asegurar()
    {
            rc = confirm("Är du säkert på den här ändring?");
            return rc;
    }
</script>
<?php if($_GET["insertweeks"]): ?>
    <div class="subform_cont1">
        <div class="formulario_user" style="width: 400px; padding: 10px;">
            <form action="weeks.php" method="post" name="forminsertweeks" id="forminsertweeks">
                <table style="background-color:;" width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr height="30">
                        <td colspan="2" valign="middle" align="center" style="color: #333; padding: 30px 0 0 0;">
                            <img src="../img/sys/alert.png" width="100px">
                        </td>
                    <tr>
                    <tr height="30"> 
                        <td colspan="2" valign="middle" align="center" style="color: #333; padding: 30px 0 0 0;">
                            <?php
                                $ultimoAno = $row_DatosInsert['year'];
                                $currentYear = date('Y');
                                if ($ultimoAno == $currentYear) {
                                    $nextYear = strtotime ('+1 year' , strtotime($currentYear));
                                    $nextYear = date ('Y',$nextYear);
                                } else {
                                    $nextYear = strtotime ('+2 year' , strtotime($currentYear));
                                    $nextYear = date ('Y',$nextYear);
                                }
                            ?>
                            <?php
                                for ($i = 1; $i <= 52; $i++) {
                                echo "<input type='hidden' id='week_no' name='week_no[]' value='$i'/>";
                                }
                            ?>
                            <h3>Time to plan <?php echo $nextYear; ?></h3>
                            <P>Edit the weeks from <?php echo $nextYear; ?> you want to deactivate<br>
                               or add an extra price</p>
                        </td>
                    </tr>
                
                    <tr height="30"> 
                        <td colspan="2" valign="middle" align="center" style="color: #333; padding: 30px 0 0 0;">
                            <input type="submit" class="button" value="ok" />
                        </td>
                    </tr>
                    <input type="hidden" name="year" id="year" value="<?php echo $nextYear; ?>"/>
                    <input type="hidden" name="status" id="status" value="1"/>
                    <input type="hidden" name="MM_insert" id="MM_insert" value="forminsertweeks"/>
                </table>
            </form>
        </div>
    </div>
<?php endif ?>

<?php if($_GET["updateweeks"]):?>
    <div class="subform_cont1">
        <div class="formulario_user" style="width: 600px; padding: 10px 10px 0; margin-bottom:0;">
            <form action="weeks.php" method="post" name="forminsertweeks" id="forminsertweeks">
                <table style="background-color:;" width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr height="60">
                        <td colspan="2" valign="middle" align="center" style="color: #333;">
                            <img src="../img/sys/alert.png" width="50px">
                            <h3>Time to plan another year</h3>
                        </td>
                    </tr>
                    <tr height="60">
                        <td colspan="2" valign="middle" align="center">
                            <div class="" style="width:98%; height:350px; background-color:#F0F0F0; border:1px solid #CCC; overflow:auto;">
                                <?php
                                    $ultimoAno = $row_DatosInsert['year'];
                                    $currentYear = date('Y');
                                    if ($ultimoAno == $currentYear) {
                                        $nextYear = strtotime ('+1 year' , strtotime($currentYear));
                                        $nextYear = date ('Y',$nextYear);
                                    } else {
                                        $nextYear = strtotime ('+2 year' , strtotime($currentYear));
                                        $nextYear = date ('Y',$nextYear);
                                    }
                                ?>
                                <?php
                                    for ($i = 1; $i <= 5; $i++) {
                                    echo "<table width='100%' border='0' cellspacing='0' cellpadding='0'>
                                        <input type='hidden' id='week_no' name='week_no[]' value='$i'/>
                                        <tr height='40'>
                                            <td width='15%' style='color:#666; font-size:14px;' valign='middle' align='center'>
                                                <p>vecka $i</p>
                                                <input class='textf' style='text-align:center;' type='hidden' id='week' name='week[]' value='vecka $i'/>
                                            </td>
                                            <td width='15%' style='color:#666; font-size:14px;' valign='middle' align='center'>
                                                <p>$nextYear</p>
                                            </td>
                                            <td width='45%' valign='middle' align='center'>
                                                <input class='textf' type='text' name='commentary' id='commentary' value='' size='38'/>
                                            </td>
                                            <td width='15%' valign='middle' align='center'>
                                                <input class='textf' type='text' name='price' id='price' value='' size='8'/>
                                            </td>
                                            <td width='10%' valign='middle' align='center'>
                                                <div class='theme-switcher-wrapper'>
                                                    
                                                    <label class='switch' for='status$i'>
                                                        <input type='checkbox' id='status$i' name='status$i.[]' value='1' checked>
                                                        <span class='slider round'></span>
                                                    </label>
                                                    
                                                </div>
                                            </td>
                                        </tr>
                                    </table>";
                                    }
                                ?>
                            </div>
                        </td>
                    </tr>
                    <tr height="80">
                        <td colspan="2" valign="middle" align="center" style="color: #666; font-size: 14px;">
                            <input type="submit" class="button" value="Lägg till" />
                        </td>
                    </tr>
                    <input type="hidden" name="year" id="year" value="<?php echo $nextYear; ?>"/>
                    <input type="hidden" name="MM_insert" id="MM_insert" value="forminsertweeks" />
                </table>
            </form>
        </div>
    </div>
<?php endif ?>

<?php if($_GET["editc"]):?>
    <div class="subform_cont1">
        <form action="weeks.php" method="post" name="formeditc" id="formeditc">
            <table class="formulario_user" border="0" cellspacing="0" cellpadding="0">
                <tr height="60">
                    <td colspan="2" valign="middle" align="center" style="color: #333; padding: 30px 0 0 0;">
                        <h2>Edit Week</h2>
                    </td>
                </tr>
                <tr height="60">
                    <td colspan="2" valign="middle" align="center" style="color:#999; font-size:20px;"><?php echo $row_DatosEdit['week'];?></td>
                </tr>
                <tr height="100">
                    <td colspan="3" valign="middle" align="center"><textarea class="textf" type="text" placeholder="Commentary..." name="commentary" id="commentary" maxlength="2000" cols="40" rows="8" required><?php echo $row_DatosEdit['commentary'];?></textarea></td>
                </tr>
                <tr height="60">
                    <td colspan="2" valign="middle" align="center"><input class="textf" type="text" value="<?php echo $row_DatosEdit['price'];?>" placeholder="Priset" name="price" id="price" size="18"/></td>
                </tr>
                <tr height="60">
                    <td colspan="2" valign="middle" align="center" style="padding: 0 10px; color: #999; font-size: 14px;">
                        Status: 
                        <select class="textf" style="width: 100px; font-size: 14px; color: #999;" name="status" id="status">
                        <option value="1" <?php if ($row_DatosEdit['status'] == 1) echo "selected"; ?>>Aktiv</option>
                        <option value="0" <?php if ($row_DatosEdit['status'] == 0) echo "selected"; ?>>Inaktiv</option>
                        </select>
                    </td>
                </tr>
                <tr height="80">
                    <td colspan="2" valign="middle" align="center" style="color: #666; font-size: 14px;">
                            <a href="weeks.php"><input class="button_a" style="width: 170px; text-align: center;" value="Cancel" /></a> <input type="submit" class="button" value="Update" onclick="javascript:return asegurar ();"/>
                    </td>
                </tr>
                <tr height="30">
                    <td colspan="2" width="100%" valign="middle" align="center" style="color: #666; font-size: 14px; padding: 0 10px;">
                        
                    </td>
                </tr>
                <input type="hidden" name="id_week" id="id_week" value="<?php echo $_GET['editc'];?>"/>
                <input type="hidden" name="MM_insert" id="MM_insert" value="formeditc" />
            </table>
        </form>
    </div>
<?php endif ?>