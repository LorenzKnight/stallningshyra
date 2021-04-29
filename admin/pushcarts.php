<?php require_once('../connections/conexion.php');?>
<?php require_once('inc/seguridad.php');?>
<?php
  $variable_Consulta = "0";
  if (isset($VARIABLE)) {
    $variable_Consulta = $VARIABLE;
  }
  $query_DatosProducts = sprintf("SELECT * FROM products ORDER BY id_product DESC");
  $DatosProducts = mysqli_query($con, $query_DatosProducts) or die(mysqli_error($con));
  $row_DatosProducts = mysqli_fetch_assoc($DatosProducts);
  $totalRows_DatosProducts = mysqli_num_rows($DatosProducts);
?>
<?php
  $query_DatosCity = sprintf("SELECT * FROM cities WHERE status = 1 ORDER BY city_name ASC");
  $DatosCity = mysqli_query($con, $query_DatosCity) or die(mysqli_error($con));
  $row_DatosCity = mysqli_fetch_assoc($DatosCity);
  $totalRows_DatosCity = mysqli_num_rows($DatosCity);
?>
<!--/////////////////////////////////////////////////BACK-END INSERT/////////////////////////////////////////////////////////-->

<?php
$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "formrequest")) {
  
  $insertSQL = sprintf("INSERT INTO products(name, description, image, product_type, price, city, status) 
                        VALUES (%s, %s, %s, %s, %s, %s, %s)",
                        GetSQLValueString($_POST["name"], "text"),                      
                        GetSQLValueString($_POST["description"], "text"),
                        GetSQLValueString($_POST["image"], "text"),
                        GetSQLValueString($_POST["product_type"], "int"),
                        GetSQLValueString($_POST["price"], "text"),
                        GetSQLValueString($_POST["city"], "int"),
                        GetSQLValueString($_POST["status"], "int"));

  
  $Result1 = mysqli_query($con,  $insertSQL) or die(mysqli_error($con));
  
  
  $insertGoTo = "pushcarts.php";
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
 $query_DatosEdit = sprintf("SELECT * FROM products WHERE id_product=%s", GetSQLValueString($_GET["editp"], "int")); 
 $DatosEdit = mysqli_query($con, $query_DatosEdit) or die(mysqli_error($con));
 $row_DatosEdit = mysqli_fetch_assoc($DatosEdit);
 $totalRows_DatosEdit = mysqli_num_rows($DatosEdit);
?>
<?php
$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "formedit")) {
     
  $updateSQL = sprintf("UPDATE products SET name=%s, description=%s, image=%s, product_type=%s, price=%s, city=%s, status=%s WHERE id_product=%s",
                        GetSQLValueString($_POST["name"], "text"),                      
                        GetSQLValueString($_POST["description"], "text"),
                        GetSQLValueString($_POST["image"], "text"),
                        GetSQLValueString($_POST["product_type"], "int"),
                        GetSQLValueString($_POST["price"], "text"),
                        GetSQLValueString($_POST["city"], "int"),
                        GetSQLValueString($_POST["status"], "int"),
                        GetSQLValueString($_POST["id_product"], "int"));
		

$Result1 = mysqli_query($con, $updateSQL) or die(mysqli_error($con));

  // $updateGoTo = $_SERVER['HTTP_REFERER'];
  $updateGoTo = "pushcarts.php";
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
<link rel="stylesheet" type="text/css" href="simple_calendar/tcal.css" />
<script type="text/javascript" src="simple_calendar/tcal.js"></script> 
<style>
    
</style>
</head>
<body style="background-color:<?php echo corps(UserAppearance($_SESSION['std_UserId']));?>;">
    <div class="wrapp" style="background-color:<?php echo corps(UserAppearance($_SESSION['std_UserId']));?>;">
        <?php include("inc/head.php"); ?>
        <div class="container">
          <?php //echo $_SESSION['std_UserId']; ?>
          <div class="title"><h2>Pushcarts</h2></div> 
          <?php include("inc/pushcarts_list.php"); ?>
        </div>
    </div>
</body>
</html>
<?php
mysqli_free_result($DatosProducts);
?>