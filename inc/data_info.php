<?php
    $query_DatosInfo = sprintf("SELECT * FROM site_info");
    $DatosInfo = mysqli_query($con, $query_DatosInfo) or die(mysqli_error($con));
    $row_DatosInfo = mysqli_fetch_assoc($DatosInfo);
    $totalRows_DatosInfo = mysqli_num_rows($DatosInfo);
?>
<div class="over_c">
    <div class="over_ct">
        <div class="v_centrado">
            <?php echo $row_DatosInfo['name']; ?>
        </div>
    </div>
    <div class="over_cc">
        <div class="v_centrado">
            <?php echo $row_DatosInfo['resumen']; ?>
        </div>
    </div>
</div>