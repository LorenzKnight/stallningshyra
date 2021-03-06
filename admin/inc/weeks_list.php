<script>
    function asegurar_borrado()
    {
        rc = confirm("Är du säkert på att du vill radera den här register?");
        return rc;
    }
</script>
<?php include("weeks_form.php")?>
<div class="search">
    <div class="<?php echo filters(UserAppearance($_SESSION['std_UserId']));?>">
        <form action="weeks.php" method="get" name="formsearch" id="formsearch">
            <input class="textf" placeholder="Name or Commentary..." name="search" id="search" style="min-width:75%;"/>
            <button type="submit" class="<?php echo buttonSmall(UserAppearance($_SESSION['std_UserId']));?>">Search</button>
            <input type="hidden" name="MM_search" id="MM_search" value="formsearch" />
        </form>
    </div>
    <div style="display:none;" class="<?php echo filters(UserAppearance($_SESSION['std_UserId']));?>">
        <form action="weeks.php" method="get" name="formfilter" id="formfilter">
            Status : 
            <select class="textf" style="font-size: 14px; color: #999;" name="statuscurse" id="statuscurse">
                <option value="1" <?php if ($_GET['statuscurse'] == 1) echo "selected"; ?>>Activ</option>
                <option value="0" <?php if ($_GET['statuscurse'] == 0) echo "selected"; ?>>Inactiv</option>
            </select>
            <button type="submit" class="<?php echo buttonSmall(UserAppearance($_SESSION['std_UserId']));?>">Ok</button>
            <input type="hidden" name="MM_search" id="MM_search" value="formfilter" />
        </form>
    </div>
    <div style="display:none;" class="<?php echo filters(UserAppearance($_SESSION['std_UserId']));?>">
        <form action="weeks.php" method="get" name="formterm" id="formterm">
            Periods : 
            <select class="textf" style="font-size: 14px; color: #999;" name="term" id="term">
                <?php
                if ($totalRows_DatosTerm_filter > 0) {
                do { ?>
                    <option value="<?php echo $row_DatosTerm_filter['id_term'];?>" <?php if ($_GET['term'] == $row_DatosTerm_filter['id_term']) echo "selected"; ?>><?php echo $row_DatosTerm_filter['term_name'];?></option>
                <?php } while ($row_DatosTerm_filter = mysqli_fetch_assoc($DatosTerm_filter));
                }
                ?>
            </select>
            <button type="submit" class="<?php echo buttonSmall(UserAppearance($_SESSION['std_UserId']));?>">Ok</button>
            <input type="hidden" name="MM_search" id="MM_search" value="formterm" />
        </form>
    </div>
    <div style="width:100px; text-align:center; color:#FFF; text-shadow: 0px 1px 15px rgba(58, 59, 69, 0.63); font-size:14px;">
        <a style="margin: 0;" href="weeks.php"><button type="" class="<?php echo buttonSmall(UserAppearance($_SESSION['std_UserId']));?>" value="">Clean</button> </a><br/>
        <?php echo $totalRows_DatosConsulta; ?> week(s)
    </div>
</div>
<div class="<?php echo divWrapp(UserAppearance($_SESSION['std_UserId']));?>">
<table width="100%" cellspacing="0" class="<?php echo appearanceList(UserAppearance($_SESSION['std_UserId']));?>" style="margin: 20px auto 10px; ">
    <tr height="40">
        <td width="20%" nowrap="nowrap" align="left" style="padding: 0 0 0 20px;">Name</td>
        <td width="17%" nowrap="nowrap" align="left" style="padding: 0 0 0 0;">Year</td>
        <td width="20%" nowrap="nowrap" align="left" style="padding: 0 0 0 0px;">Commentary</td>
        <td width="15%" nowrap="nowrap" align="center" style="padding: 0 0 0 0;">Extra price</td>
        <td width="12%" nowrap="nowrap" align="center" style="padding: 0 0 0 0;">Status</td>
        <td width="16%" nowrap="nowrap" align="center" style="padding: 0 10px 0 0;">-</td>
    </tr>
</table>

    <?php if ($row_DatosConsulta > 0) { // Show if recordset not empty ?>

    <?php do { ?>
<table cellspacing="0" class="<?php echo appearanceLine(UserAppearance($_SESSION['std_UserId']));?>" style="margin: 0 auto 15px;">
    <tr height="">
        <td width="20%" nowrap="nowrap" align="left" style="padding: 0 0 0 20px;"><?php echo $row_DatosConsulta['week']; ?></td>
        <td width="17%" nowrap="nowrap" align="left" style="padding: 0 0 0 0;"><?php echo $row_DatosConsulta['year']; ?></td>
        <td width="20%" nowrap="nowrap" align="left" style="padding: 0 0 0 0;">
            <p><?php 
                $texto= $row_DatosConsulta['commentary'];
                if (strlen($texto) > 0) {
                    $texto = substr($texto,0,100).'...';
                    print '<div class="texto_original">'.$texto.'</div>';
            ?></p>
            <?php } ?>
        </td>
        <td width="15%" nowrap="nowrap" align="center" style="padding: 0 0 0 0;"><?php echo $row_DatosConsulta['price']; ?> <?php if ($row_DatosConsulta['price'] != '') { ?>SEK Extra<?php } ?></td>
        <td width="12%" nowrap="nowrap" align="center" style="color:<?php if($row_DatosConsulta['status'] == 1) { ?> green <?php } else { ?> red <?php } ?>; padding: 0 0 0 0;"><?php echo statusBinario($row_DatosConsulta['status']); ?></td>
        <td width="16%" nowrap="nowrap" align="center" style="padding: 0 10px 0 0;">
        <?php if(showPermissions($_SESSION['std_UserId'], "TSYS-P0007") || $_SESSION['std_Nivel'] < 2) : ?>
            <div class="arternative">
                <button class="<?php echo artbtn(UserAppearance($_SESSION['std_UserId']));?>">o o o</button>
                <div class="arternative-content">
                    <a href="weeks.php?editc=<?php echo $row_DatosConsulta['id_week']; ?>" class="alt_button">Edit week</a>
                    <!-- <a href="course_delete.php?id=<?php echo $row_DatosConsulta['id_week']; ?>" class="alt_button" onclick="javascript:return asegurar_borrado ();">Delete</a> -->
                </div>
            </div>
        <?php endif ?>
        </td>
    </tr>
</table>
    <?php } while ($row_DatosConsulta = mysqli_fetch_assoc($DatosConsulta)); 
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
<?php if(showPermissions($_SESSION['std_UserId'], "TSYS-P0006") || $_SESSION['std_Nivel'] < 2) : ?>
<!-- <a href="weeks.php?new=1"><div class="<?php echo flyButton(UserAppearance($_SESSION['std_UserId']));?>">+</div></a> -->
<?php endif ?>
<?php include("inc/appearance_menu.php")?>