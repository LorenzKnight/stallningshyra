<?php
    $query_DatosSite = sprintf("SELECT * FROM site_info"); 
    $DatosSite = mysqli_query($con, $query_DatosSite) or die(mysqli_error($con));
    $row_DatosSite = mysqli_fetch_assoc($DatosSite);
    $totalRows_DatosSite = mysqli_num_rows($DatosSite);
?>
<div class="foot">
    <div class="foot_case">
        <div class="social">
            <div class="icon_box">

                <div class="icon" style="display: <?php if($row_DatosSite['facebook'] != "") { echo "block"; } else { echo "none"; } ?>;">
                    <a href="<?php echo $row_DatosSite['facebook']; ?>" target="_blank"><img src="img/sys/fb.svg" class="social_icon"></a>
                </div>

                <div class="icon" style="display: <?php if($row_DatosSite['instagram'] != "") { echo "block"; } else { echo "none"; } ?>;">
                    <a href="<?php echo $row_DatosSite['instagram']; ?>" target="_blank"><img src="img/sys/ig.svg" class="social_icon"></a>
                </div>
                
                <div class="icon" style="display: <?php if($row_DatosSite['youtube'] != "") { echo "block"; } else { echo "none"; } ?>;">
                    <a href="<?php echo $row_DatosSite['youtube']; ?>" target="_blank"><img src="img/sys/yt.svg" class="social_icon"></a>
                </div>
                
            </div>
        </div>
        <div class="adress">
            <div class="adress_text">
                <h4 style="color:#FFF; text-transform: uppercase;"><?php echo $row_DatosSite['name']; ?></h4>

                <p><?php echo $row_DatosSite['adress']; ?>,<br>
                <?php echo $row_DatosSite['post']; ?> <?php echo $row_DatosSite['city']; ?><br>
                <br>
                <?php echo $row_DatosSite['email']; ?></p>
            </div>
        </div>
        <div class="map">
                <a href="index.php"><img src="img/sys/stallningshyra.svg" width="" height="40%" style="margin: 15% 0 25% 20px;"></a>
        </div>
    </div>
</div>
<div class="site_bottom">
    <p>All Rights Reserved <?php echo date("Y"); ?></p>
</div>