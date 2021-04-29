<?php require_once('connections/conexion.php'); ?>
<?php
    $query_DatosConsulta = sprintf("SELECT * FROM site_info"); 
    $DatosConsulta = mysqli_query($con, $query_DatosConsulta) or die(mysqli_error($con));
    $row_DatosConsulta = mysqli_fetch_assoc($DatosConsulta);
    $totalRows_DatosConsulta = mysqli_num_rows($DatosConsulta);
?>

<?php
  $query_DatosNosotros = sprintf("SELECT * FROM publications WHERE site = 3 AND status = 1 ORDER BY id_publications ASC");
  $DatosNosotros = mysqli_query($con, $query_DatosNosotros) or die(mysqli_error($con));
  $row_DatosNosotros = mysqli_fetch_assoc($DatosNosotros);
  $totalRows_DatosNosotros = mysqli_num_rows($DatosNosotros);
?>
<!doctype html>
<html>
<head>
<meta charset="iso-8859-1">

<title><?php echo $pageName; ?></title>
<link href="css/style.scss" rel="stylesheet" type="text/css"  media="all" />
<script>
</script>
<?php $menuactive= 3;?>
</head>
<body>
    <div class="wrapp">
        <?php include("inc/head.php"); ?>
        <?php include("inc/about_wrapp.php"); ?>
        <?php include("inc/foot.php"); ?>
    </div>
</body>
</html>