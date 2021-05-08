<?php require_once('../connections/conexion.php');?>
<?php require_once('inc/seguridad.php');?>
<?php $anoActual = date('Y'); ?>
<?php
  $query_DatosWeeks_filter = sprintf("SELECT * FROM weeks ORDER BY id_week DESC"); 
  $DatosWeeks_filter = mysqli_query($con, $query_DatosWeeks_filter) or die(mysqli_error($con));
  $row_DatosWeeks_filter = mysqli_fetch_assoc($DatosWeeks_filter);
  $totalRows_DatosWeeks_filter = mysqli_num_rows($DatosWeeks_filter);
?>
<?php
  if ((isset($_GET["MM_search"])) && ($_GET["MM_search"]=="formsearch"))
  { 
    // BLOQUE BUSCADOR INTELIGENTE NOMBRE
    $porciones = explode(" ", $_GET["search"]);
    $longitud = count($porciones);
    $extramodelo=" week LIKE '%".$_GET["search"] ."%' OR commentary LIKE '%".$_GET["search"] ."%'";
    for($i=0; $i<$longitud; $i++)
    {
      $extramodelo.=" OR week LIKE '%".$porciones[$i] ."%'";
    }
    //FIN BLOQUE BUSCADOR INTELIGENTE NOMBRE
  
    $query_DatosConsulta = "SELECT * FROM weeks WHERE ".$extramodelo." AND year >= $anoActual AND status = 1 ORDER BY id_week ASC";
    //echo $query_DatosConsulta;


    // $query_DatosConsulta = sprintf("SELECT * FROM weeks WHERE name = %s AND status = 1 ORDER BY id_week ASC",
    //                                 GetSQLValueString("%".$_GET["search"]."%", "text"));
  }
  else if ((isset($_GET["MM_search"])) && ($_GET["MM_search"]=="formfilter"))
  {
    $query_DatosConsulta = sprintf("SELECT * FROM weeks WHERE status LIKE %s ORDER BY id_week ASC",
                                    GetSQLValueString("%".$_GET["statuscurse"]."%", "int"));
  }
  else if ((isset($_GET["MM_search"])) && ($_GET["MM_search"]=="formterm"))
  {
    $query_DatosConsulta = sprintf("SELECT * FROM weeks WHERE term LIKE %s ORDER BY id_week ASC",
                                    GetSQLValueString("%".$_GET["term"]."%", "int"));
  }
  else
  {
    $query_DatosConsulta = sprintf("SELECT * FROM weeks WHERE year >= $anoActual ORDER BY id_week ASC");
  }
    $DatosConsulta = mysqli_query($con, $query_DatosConsulta) or die(mysqli_error($con));
    $row_DatosConsulta = mysqli_fetch_assoc($DatosConsulta);
    $totalRows_DatosConsulta = mysqli_num_rows($DatosConsulta);
?>
<!--/////////////////////////////////////////////////BACK-END INSERT/////////////////////////////////////////////////////////-->
<?php
    $currentYear2 = date('Y');
    $nextYear2 = strtotime ('+1 year' , strtotime($currentYear2));
    $nextYear2 = date ('Y',$nextYear2);

    // $nextYear3 = strtotime ('+2 year' , strtotime($currentYear2));
    // $nextYear3 = date ('Y',$nextYear3);
?>
<?php
  $query_DatosInsert = sprintf("SELECT * FROM weeks WHERE year = $nextYear2 ORDER BY year DESC"); 
  $DatosInsert = mysqli_query($con, $query_DatosInsert) or die(mysqli_error($con));
  $row_DatosInsert = mysqli_fetch_assoc($DatosInsert);
  $totalRows_DatosInsert = mysqli_num_rows($DatosInsert);
?>
<?php
$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
} 
if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "forminsertweeks")) {

    if(is_array($_POST['week_no'])) {

        // realizamos el ciclo de los checkbox selccionados
        while(list($key,$weekno) = each($_POST['week_no'])) {
            $week = 'vecka '.$weekno;

            $insertSQL = sprintf("INSERT INTO weeks(week_no, week, year, status)
                                    VALUES (%s, %s, %s, %s)",
                                    GetSQLValueString($weekno, "int"),
                                    GetSQLValueString($week, "text"),
                                    GetSQLValueString($_POST["year"], "int"),
                                    GetSQLValueString($_POST['status'], "int"));

            $Result1 = mysqli_query($con, $insertSQL) or die(mysqli_error($con));

            $insertGoTo = "weeks.php";
            if (isset($_SERVER['QUERY_STRING'])) {
                $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
                $insertGoTo .= $_SERVER['QUERY_STRING'];
            }
            header(sprintf("Location: %s", $insertGoTo));
        }
    }
}
?>

<?php
$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "formrequest")) {
  $year = date("Y");
	$month = date("m");
	$day = date("d");
  $insertSQL = sprintf("INSERT INTO weeks(name, schedule, teacher, category, price, status, user_rank, id_user) 
                        VALUES (%s, %s, %s, %s, %s, %s, %s, %s)",
                        GetSQLValueString($_POST["name"], "text"),                      
                        GetSQLValueString($_POST["schedule"], "text"),
                        GetSQLValueString($_POST["teacher"], "text"),
                        GetSQLValueString($_POST["category"], "int"),
                        GetSQLValueString($_POST["price"], "text"),
                        GetSQLValueString($_POST["status"], "int"),
                        GetSQLValueString($_POST["user_rank"], "int"),
                        GetSQLValueString($_POST["id_user"], "int"));

  
  $Result1 = mysqli_query($con,  $insertSQL) or die(mysqli_error($con));
  
  
  $insertGoTo = "weeks.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
    $insertGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $insertGoTo));
}
?>
<!--/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
<!--/////////////////////////////////////////////////BACK-END EDIT/////////////////////////////////////////////////////////-->
<?php
 $query_DatosEdit = sprintf("SELECT * FROM weeks WHERE id_week=%s", GetSQLValueString($_GET["editc"], "int")); 
 $DatosEdit = mysqli_query($con, $query_DatosEdit) or die(mysqli_error($con));
 $row_DatosEdit = mysqli_fetch_assoc($DatosEdit);
 $totalRows_DatosEdit = mysqli_num_rows($DatosEdit);
?>
<?php
$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}
if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "formeditc")) {
     
     $updateSQL = sprintf("UPDATE weeks SET commentary=%s, price=%s, status=%s WHERE id_week=%s",
                          GetSQLValueString($_POST["commentary"], "text"),
                          GetSQLValueString($_POST["price"], "text"),
                          GetSQLValueString($_POST["status"], "int"),
                          GetSQLValueString($_POST["id_week"], "int"));
		

$Result1 = mysqli_query($con, $updateSQL) or die(mysqli_error($con));

$updateGoTo = "weeks.php";
if (isset($_SERVER['QUERY_STRING'])) {
    $updateGoTo .= (strpos($updateGoTo, '?')) ? "&" : "?";
    $updateGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $updateGoTo));
}
?>
<!--///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
<html>
<head>
<meta charset="iso-8859-1">
<title>ICARO</title>
<link rel="shortcut icon" href="favicon-32x32.png">
<link href="css/style_adm.css" rel="stylesheet" type="text/css"  media="all" />
<script>
    
</script>
</head>
<body style="background-color:<?php echo corps(UserAppearance($_SESSION['std_UserId']));?>;">
    <div class="wrapp" style="background-color:<?php echo corps(UserAppearance($_SESSION['std_UserId']));?>;">
        <?php include("inc/head.php"); ?>
        <div class="container">
          <?php //echo $_SESSION['std_UserId']; ?>
          <div class="title"><h2>weeks</h2></div>
          <?php include("inc/weeks_list.php"); ?>
        </div>
    </div>
</body>
</html>
<?php
mysqli_free_result($DatosConsulta);
?>