<?php include("publications_form.php")?>
<?php include("publications_form2.php")?>
<div class="<?php echo divWrapp(UserAppearance($_SESSION['std_UserId']));?>">
    <table width="100%" cellspacing="0" class="<?php echo appearanceList(UserAppearance($_SESSION['std_UserId']));?>" style="margin: 20px auto 10px; ">
        <tr height="40">
            <td width="12%" nowrap="nowrap" align="left" style="padding: 0 0 0 20px;">Date</Title></td>
            <td width="15%" nowrap="nowrap" align="center" style="padding: 0 0 0 10px;">Foto</td>
            <td width="12%" nowrap="nowrap" align="center" style="padding: 0 0 0 0;">Title</td>
            <td width="30%" nowrap="nowrap" align="center" style="padding: 0 0 0 0;">Content</td>
            <td width="8%" nowrap="nowrap" align="center" style="padding: 0 0 0 0;">Site</td>
            <td width="8%" nowrap="nowrap" align="center" style="padding: 0 0 0 0;">Status</td>
            <td width="10%" nowrap="nowrap" align="center" style="padding: 0 10px 0 0;">-</td>
        </tr>
    </table>

    <?php if ($row_DatosPub1 > 0) { // Show if recordset not empty ?>
    <?php do { ?>
<table width="100%" cellspacing="0" class="<?php echo appearanceLine(UserAppearance($_SESSION['std_UserId']));?>" style="margin: 0 auto 15px;">    
    <tr height="100">
        <td width="12%" nowrap="nowrap" align="left" style="padding: 0 0 0 20px;"><?php echo $row_DatosPub1['date']; ?></td>
        <td width="15%" nowrap="nowrap" align="center" style="padding: 0 0 0 10px;">
            <img src='<?php if ($row_DatosPub1['foto'] != "") { ?> ../img/images/<?php echo $row_DatosPub1['foto']; ?> <?php } else { ?>  ../img/sys/not_img.png <?php } ?>' alt="" id="" style="margin:3px 0;" width="140">
        </td>
        <td width="12%" nowrap="nowrap" align="center" style="padding: 0 0 0 0;"><?php echo $row_DatosPub1['title']; ?></td>
        <td width="30%" nowrap="nowrap" align="center" style="padding: 0 0 0 0;">
            <p><?php 
                $texto= $row_DatosPub1['content'];
                if (strlen($texto) > 0) {
                    $texto = substr($texto,0,50).'...';
                    print '<div class="texto_original">'.$texto.'</div>';
            ?></p>
            <?php } ?>
        </td>
        <td width="8%" nowrap="nowrap" align="center" style="padding: 0 0 0 0;"><?php echo publicationsSite($row_DatosPub1['site']); ?></td>
        <!-- <td width="8%" nowrap="nowrap" align="center" style="padding: 0 0 0 0;"><?php //echo $row_DatosPub1['position']; ?></td> -->
        <td width="8%" nowrap="nowrap" align="center" style="padding: 0 0 0 0;"><?php echo statusBinario($row_DatosPub1['status']); ?></td>
        <td width="10%" nowrap="nowrap" align="center" style="padding: 0 10px 0 0;">
        <?php if(showPermissions($_SESSION['std_UserId'], "TSYS-P0013") || $_SESSION['std_Nivel'] < 2) : ?>
            <div class="arternative">
                <button class="<?php echo artbtn(UserAppearance($_SESSION['std_UserId']));?>">o o o</button>
                <div class="arternative-content">
                    <a href="publications.php?edit=<?php echo $row_DatosPub1['id_publications']; ?>" class="alt_button">Edit info</a>
                    <a href="publications.php?deleteID=<?php echo $row_DatosPub1['id_publications']; ?>" class="alt_button">Delete</a>
                </div>
            </div>
        <?php endif ?>
        </td>
    </tr>
</table>
    <?php } while ($row_DatosPub1 = mysqli_fetch_assoc($DatosPub1)); 
    }
    else
    { // Show if recordset is empty ?>
<table width="100%" cellspacing="0" class="<?php echo appearanceLine(UserAppearance($_SESSION['std_UserId']));?>" style="margin: 0 auto 15px;">
    <tr height="">
        <td colspan="10" nowrap="nowrap" align="center" style="padding: 0 0 0 20px;">fins ingen register.</td>
    </tr>
</table>
    <?php } ?>
</div>

<?php if(showPermissions($_SESSION['std_UserId'], "TSYS-P0013") || $_SESSION['std_Nivel'] < 2) : ?>
<div onclick="location='publications.php?new=1'" class="<?php echo flyButton(UserAppearance($_SESSION['std_UserId']));?>">+</div>
<?php endif ?>
<?php include("inc/appearance_menu.php")?>