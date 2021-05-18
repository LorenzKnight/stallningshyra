<?php require_once('connections/conexion.php'); ?>
<?php
    $query_DatosConsulta = sprintf("SELECT * FROM site_info"); 
    $DatosConsulta = mysqli_query($con, $query_DatosConsulta) or die(mysqli_error($con));
    $row_DatosConsulta = mysqli_fetch_assoc($DatosConsulta);
    $totalRows_DatosConsulta = mysqli_num_rows($DatosConsulta);
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">

<title><?php echo $pageName; ?></title>
<link href="css/style.scss" rel="stylesheet" type="text/css"  media="all" />
<script>
</script>
<?php $menuactive= 4;?>
</head>
<body>
    <div class="wrapp">
        <?php include("inc/head.php"); ?>
        <?php include("inc/contact_wrapp.php"); ?>
        <?php include("inc/foot.php"); ?>
    </div>
</body>
</html>