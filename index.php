<?php require_once('connections/conexion.php'); ?>

<?php
  $query_DatosProducts = sprintf("SELECT * FROM publications WHERE site = 1 AND status = 1 ORDER BY id_publications ASC LIMIT 3");
  $DatosProducts = mysqli_query($con, $query_DatosProducts) or die(mysqli_error($con));
  $row_DatosProducts = mysqli_fetch_assoc($DatosProducts);
  $totalRows_DatosProducts = mysqli_num_rows($DatosProducts);
?>

<?php
  $query_DatosPublication = sprintf("SELECT * FROM publications WHERE site = 2 AND status = 1 ORDER BY id_publications ASC");
  $DatosPublication = mysqli_query($con, $query_DatosPublication) or die(mysqli_error($con));
  $row_DatosPublication = mysqli_fetch_assoc($DatosPublication);
  $totalRows_DatosPublication = mysqli_num_rows($DatosPublication);
?>
<!doctype html>
<html>
<head>
<meta charset="iso-8859-1">
<meta name="Loops-Dance-studio" content="Loops Dance studio är en dansskola i Göteborg med fokus på Urban Kizomba men med hjärta för fler olika pardanser och dansstilar.">
<meta name="Dans" content="Loops Dance studio är en dansskola i Göteborg med fokus på Urban Kizomba men med hjärta för fler olika pardanser och dansstilar.">
<meta name="Kizomba" content="Loops Dance studio är en dansskola i Göteborg med fokus på Urban Kizomba men med hjärta för fler olika pardanser och dansstilar.">
<meta name="Bachata" content="Loops Dance studio är en dansskola i Göteborg med fokus på Urban Kizomba men med hjärta för fler olika pardanser och dansstilar.">
<meta name="Bachata-Sensual" content="Loops Dance studio är en dansskola i Göteborg med fokus på Urban Kizomba men med hjärta för fler olika pardanser och dansstilar.">
<meta name="Dans-i-Göteborg" content="Loops Dance studio är en dansskola i Göteborg med fokus på Urban Kizomba men med hjärta för fler olika pardanser och dansstilar.">
<meta name="Dance-in-Gothenburg" content="Loops Dance studio is a danceschool in Gothenburg with focus in Urban Kizomba but with heart for several diferent partners dance and dance style.">
<title><?php echo $pageName; ?></title>
<link href="css/style.scss" rel="stylesheet" type="text/css"  media="all" />
<script>
</script>
<?php $menuactive= 1;?>
</head>
<body>
    <div class="wrapp">
        <?php include("inc/head.php"); ?>
        <?php include("inc/banner.php"); ?>
        <?php include("inc/data_info.php"); ?>
        <?php include("inc/wrapp.php"); ?>
        <?php include("inc/ig_wrapp.php"); ?>
        <?php include("inc/foot.php"); ?>
    </div>
</body>
</html>