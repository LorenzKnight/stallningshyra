<script>
    function asegurar()
    {
            rc = confirm("Är du säkert på den här ändring?");
            return rc;
    }
</script>
<?php if($_GET["updateweeks"]):?>
    <div class="subform_cont1">
        <div class="formulario_user" style="width: 600px; padding: 10px;">
            <form action="courses.php" method="post" name="formrequest" id="formrequest">
                <table style="background-color:red;" width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr height="60">
                        <td colspan="2" valign="middle" align="center" style="color: #333; padding: 30px 0 0 0;">
                            <h2>Ny Kurs</h2>
                        </td>
                    </tr>
                    <tr height="60">
                        <td colspan="2" valign="middle" align="center">
                            <div class="" style="width:100%; height:400px; background-color:orange;">
                            </div>
                        </td>
                    </tr>
                    <tr height="80">
                        <td colspan="2" valign="middle" align="center" style="color: #666; font-size: 14px;">
                                <a href="weeks.php"><input class="button_a" style="width: 170px; text-align: center;" value="avbryt" /></a> <input type="submit" class="button" value="Lägg till" />
                        </td>
                    </tr>
                    <tr height="30">
                        <td colspan="2" width="100%" valign="middle" align="center" style="color: #666; font-size: 14px; padding: 0 10px;">
                            
                        </td>
                    </tr>
                    <input type="hidden" name="user_rank" id="user_rank" value="<?php echo $_SESSION['std_Nivel'];?>"/>
                    <input type="hidden" name="id_user" id="id_user" value="<?php echo $_SESSION['std_UserId'];?>"/>
                    <input type="hidden" name="MM_insert" id="MM_insert" value="formrequest" />
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