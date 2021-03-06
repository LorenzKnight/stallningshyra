<?php include("orders_form.php")?>
<div class="search">
    <div class="<?php echo filters(UserAppearance($_SESSION['std_UserId']));?>">
        <form action="orders.php" method="get" name="formsearch" id="formsearch">
            <input class="textf" placeholder="Search by name or surname..." name="search" id="search" style="min-width:75%;" />
            <button type="submit" class="<?php echo buttonSmall(UserAppearance($_SESSION['std_UserId']));?>">Sök</button>
            <?php //echo $currentYear.'-12-22'; ?> <?php //echo date('Y-m-d'); ?> 
            <input type="hidden" name="MM_search" id="MM_search" value="formsearch" />
        </form>
    </div>

    <div style="width:100px; text-align:center; color:#FFF; text-shadow: 0px 1px 15px rgba(58, 59, 69, 0.63); font-size:14px;">
        <a style="margin: 0;" href="orders.php"><button type="" class="<?php echo buttonSmall(UserAppearance($_SESSION['std_UserId']));?>" value="">Clear</button> </a><br/>
        <?php echo $totalRows_DatosConsulta; ?> order(s)
    </div>
</div>
<div class="<?php echo divWrapp(UserAppearance($_SESSION['std_UserId']));?>">
    <table width="100%" cellspacing="0" class="<?php echo appearanceList(UserAppearance($_SESSION['std_UserId']));?>" style="margin: 20px auto 10px; ">
        <tr height="40">
            <td width="12%" nowrap="nowrap" align="left" style="padding: 0 0 0 20px;">Name</td>
            <td width="15%" nowrap="nowrap" align="left" style="padding: 0 0 0 10px;">Surname</td>
            <td width="10%" nowrap="nowrap" align="left" style="padding: 0 0 0 0;">Obs.</td>
            <td width="14%" nowrap="nowrap" align="center" style="padding: 0 0 0 0;">Telefone</td>
            <td width="19%" nowrap="nowrap" align="center" style="padding: 0 0 0 0;">E-Mail</td>
            <td width="10%" nowrap="nowrap" align="center" style="padding: 0 0 0 0;">Pushcart</td>
            <td width="5%" nowrap="nowrap" align="center" style="padding: 0 0 0 0;">Status</td>
            <td width="10%" nowrap="nowrap" align="center" style="padding: 0 10px 0 0;">-</td>
        </tr>
    </table>

    <?php if ($row_DatosConsulta > 0) { // Show if recordset not empty ?>
    <?php do { ?>
    <table cellspacing="0" class="<?php echo appearanceLine(UserAppearance($_SESSION['std_UserId']));?>" style="margin: 0 auto 15px; <?php //if (statusInsc($row_DatosConsulta['id_client'], $TermAct) != 1) { ?><?php //echo statusColors(statusInsc($row_DatosConsulta['id_client'], $TermAct))?><?php //} ?>">
    <tr height="">
        <td width="12%" nowrap="nowrap" align="left" style="padding: 0 0 0 20px;"><?php echo $row_DatosConsulta['name']; ?></td>
        <td width="15%" nowrap="nowrap" align="left" style="padding: 0 0 0 10px;"><?php echo $row_DatosConsulta['surname']; ?></td>
        <td width="10%" nowrap="nowrap" align="left" style="padding: 0 0 0 0;">
        <p><?php 
            $texto= $row_DatosConsulta['commentary'];
            if (strlen($texto) > 0) {
                $texto = substr($texto,0,15).'...';
                print '<div class="texto_original">'.$texto.'</div>';
        ?></p>
        <?php } ?>
        </td>
        <td width="14%" nowrap="nowrap" align="center" style="padding: 0 0 0 0;"><?php echo ObtenerTelefonoCliente($row_DatosConsulta['id_client']); ?></td>
        <td width="19%" nowrap="nowrap" align="left" style="padding: 0 0 0 0;"><?php echo ObtenerEmailCliente($row_DatosConsulta['id_client']); ?></td>
        <td width="10%" nowrap="nowrap" align="center" style="padding: 0 0 0 0;"><?php echo NombreCarreta(OptenerCarreta($row_DatosConsulta['id_insc'])); ?></td>
        <td width="5%" nowrap="nowrap" align="center" style="padding: 0 0 0 0; color:<?php echo GetStatusColor($row_DatosConsulta['status']); ?>;"><?php echo GetStatus($row_DatosConsulta['status']); ?></td>
        
        <td width="10%" nowrap="nowrap" align="center" style="padding: 0 10px 0 0;">
        <?php if(showPermissions($_SESSION['std_UserId'], "TSYS-P0001") || showPermissions($_SESSION['std_UserId'], "TSYS-P0003") || showPermissions($_SESSION['std_UserId'], "TSYS-P0006") || $_SESSION['std_Nivel'] < 2) : ?>
        <div class="arternative">
            <button class="<?php echo artbtn(UserAppearance($_SESSION['std_UserId']));?>">o o o</button>
            <div class="arternative-content">
                <?php if(showPermissions($_SESSION['std_UserId'], "TSYS-P0001") || $_SESSION['std_Nivel'] < 2) : ?>
                <a href="orders.php?see=<?php echo $row_DatosConsulta['id_client']; ?>&IDinsc=<?php echo $row_DatosConsulta['id_insc']; ?>" class="alt_button">See more</a>
                <?php endif ?>
                <?php if(showPermissions($_SESSION['std_UserId'], "TSYS-P0003") || $_SESSION['std_Nivel'] < 2) : ?>  
                <!-- <a href="students.php?editi=<?php //echo $row_DatosConsulta['id_client']; ?>" class="alt_button">Edit info</a> -->
                <!-- <a href="students.php?editc=<?php //echo $row_DatosConsulta['id_insc']; ?> <?php //if($_GET['course'] !=""){echo ncsnID($row_DatosConsulta['id_client'], $TermAct);} ?>" class="alt_button">Edit course</a> -->
                <?php endif ?>
                <?php if(showPermissions($_SESSION['std_UserId'], "TSYS-P0006") || $_SESSION['std_Nivel'] < 1) : ?>
                <a href="orders.php?deleteID=<?php echo $row_DatosConsulta['id_insc']; ?>" class="alt_button">Delete</a>
                <?php endif ?>
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
<table width="100%" cellspacing="0" class="<?php echo appearanceLine(UserAppearance($_SESSION['std_UserId']));?>" style="margin: 0 auto 15px;">
    <tr height="60">
        <td colspan="10" nowrap="nowrap" align="center" style="padding: 0 0 0 20px;">fins ingen register.</td>
    </tr>
</table>
    <?php } ?>
</div>
<?php if(showPermissions($_SESSION['std_UserId'], "TSYS-P0002") || $_SESSION['std_Nivel'] < 2) : ?>
<a href="orders.php?new=1"><div class="<?php echo flyButton(UserAppearance($_SESSION['std_UserId']));?>">+</div></a>
<?php endif ?>
<?php include("inc/appearance_menu.php")?>