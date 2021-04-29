<div class="head">
    <div class="logo">
        <a href="index.php"><img src="img/sys/stallningshyra.svg" width="" height="100%" style="margin: 0 auto;"></a>
    </div>
    <div id="menu">
        <ul>
            <li><a href="contact.php" <?php if ($menuactive == 4) { ?> class="active" <?php }?>>kontakt</a></li>
            <li><a href="about.php" <?php if ($menuactive == 3) { ?> class="active" <?php }?>>om oss</a></li>
            <li><a href="index.php" <?php if ($menuactive == 1) { ?> class="active" <?php }?>>Hem</a></li>
            <!-- <li><?php //echo $_SESSION["bkng_UserId"]; ?></li> -->
        <ul>
    </div>

    <div class="config_m">
        <ul>
            <li>
                <a href="#"><img class="photo" src="img/sys/mini_menu.png" alt="" height="120px" style="margin-right:30px;"></a>
                <div class="dropdown-config-content">
                    <ul>
                        <li><a href="index.php">Hem</a></li>
                        <li><a style="border-top: 1px solid #333;" href="reserve.php">Boka</a></li>
                        <li><a style="border-top: 1px solid #333;" href="about.php" >Om oss</a></li>
                        <li><a style="border-top: 1px solid #333;" href="contact.php" >Kontakt</a></li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>
</div>