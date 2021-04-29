<?php require_once('connections/conexion.php');?>

<?php
$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}
  $insertSQL = sprintf("INSERT INTO cart(id_client, id_product, date) 
                        VALUES (%s, %s, NOW())",
                        GetSQLValueString($_SESSION['bkng_UserId'], "int"),                  
                        GetSQLValueString($_GET["productID"], "int"));

  
  $Result1 = mysqli_query($con,  $insertSQL) or die(mysqli_error($con));
  
  
  $insertGoTo1 = "reserve.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $insertGoTo1 .= (strpos($insertGoTo1, '?')) ? "&" : "?";
    $insertGoTo1 .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $insertGoTo1));
?>