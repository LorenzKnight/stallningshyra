<?php include("pushcarts_form.php")?>
<script>
    function asegurar_borrado()
    {
        rc = confirm("Är du säkert på att du vill radera den här register?");
        return rc;
    }
</script>
<div class="<?php echo divWrapp(UserAppearance($_SESSION['std_UserId']));?>">
<table width="100%" cellspacing="0" class="<?php echo appearanceList(UserAppearance($_SESSION['std_UserId']));?>" style="margin: 20px auto 10px; ">
    <tr height="40">
        <td width="16.66%" nowrap="nowrap" align="center" style="padding: 0 0 0 20px;">Name</td>
        <td width="16.66%" nowrap="nowrap" align="center" style="padding: 0 0 0 0;">Image</td>
        <td width="16.66%" nowrap="nowrap" align="center" style="padding: 0 0 0 0;">Size</td>
        <td width="16.66%" nowrap="nowrap" align="center" style="padding: 0 0 0 0;">price</td>
        <td width="16.66%" nowrap="nowrap" align="center" style="padding: 0 0 0 0;">Status</td>
        <td width="16.66%" nowrap="nowrap" align="center" style="padding: 0 10px 0 0;">-</td>
    </tr>
</table>
    <?php if ($row_DatosProducts > 0) { // Show if recordset not empty ?>

    <?php do { ?>
<table cellspacing="0" class="<?php echo appearanceLine(UserAppearance($_SESSION['std_UserId']));?>" style="margin: 0 auto 15px;">
    <tr height="100">
        <td width="16.66%" nowrap="nowrap" align="center" style="padding: 0 0 0 20px;"><?php echo $row_DatosProducts['name']; ?></td>
        <td width="16.66%" nowrap="nowrap" align="center" style="padding: 0 0 0 0;">
            <img src='<?php if ($row_DatosProducts['image'] != "") { ?> ../img/products/<?php echo $row_DatosProducts['image']; ?> <?php } else { ?>  ../img/sys/not_img.png <?php } ?>' alt="" id="" style="margin:3px 0;" width="140">
        </td>
        <td width="16.66%" nowrap="nowrap" align="center" style="padding: 0 0 0 0;"><?php echo cartSize($row_DatosProducts['product_type']); ?></td>
        <td width="16.66%" nowrap="nowrap" align="center" style="padding: 0 0 0 0;"><?php echo $row_DatosProducts['price']; ?> SEK</td>
        <td width="16.66%" nowrap="nowrap" align="center" style="padding: 0 0 0 0;"><?php echo statusBinario($row_DatosProducts['status']); ?></td>
        <td width="16.66%" nowrap="nowrap" align="center" style="padding: 0 10px 0 0;">
        <?php if(showPermissions($_SESSION['std_UserId'], "TSYS-P0005") || $_SESSION['std_Nivel'] < 2) : ?>
            <div class="arternative">
                <button class="<?php echo artbtn(UserAppearance($_SESSION['std_UserId']));?>">o o o</button>
                <div class="arternative-content">
                    <a href="pushcarts.php?editp=<?php echo $row_DatosProducts['id_product']; ?>" class="alt_button">Edit Pushcart</a>
                    <?php if(showPermissions($_SESSION['std_UserId'], "TSYS-P0010") || $_SESSION['std_Nivel'] < 1) : ?>
                    <a href="pushcarts.php?deleteID=<?php echo $row_DatosProducts['id_product']; ?>" class="alt_button">Delete</a>
                    <?php endif ?>
                </div>
            </div>
        <?php endif ?>
        </td>
    </tr>
</table>
    <?php } while ($row_DatosProducts = mysqli_fetch_assoc($DatosProducts)); 
    }
    else
    { // Show if recordset is empty ?>
<table width="100%" cellspacing="0" class="<?php echo appearanceLine(UserAppearance($_SESSION['std_UserId']));?>" style="margin: 0 auto 15px; box-shadow: 0 .15rem 2rem 0 rgba(58,59,69,.15)!important;">
    <tr class="line" height="60">
        <td colspan="10" nowrap="nowrap" align="center" style="padding: 0 0 0 20px;">fins ingen register.</td>
    </tr>
</table>
    <?php } ?>
</div>
<?php if(showPermissions($_SESSION['std_UserId'], "TSYS-P0004") || $_SESSION['std_Nivel'] < 2) : ?>
<a href="pushcarts.php?new=1"><div class="<?php echo flyButton(UserAppearance($_SESSION['std_UserId']));?>">+</div></a>
<?php endif ?>
<?php include("inc/appearance_menu.php")?>