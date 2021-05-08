<?php require_once('../connections/conexion.php');?>
<?php
 $query_DatosInsc = sprintf("SELECT * FROM clients WHERE via=%s ORDER BY id_client DESC",
                            GetSQLValueString($_GET['newcompl'], "int")); 
 $DatosInsc = mysqli_query($con, $query_DatosInsc) or die(mysqli_error($con));
 $row_DatosInsc = mysqli_fetch_assoc($DatosInsc);
 $totalRows_DatosInsc = mysqli_num_rows($DatosInsc);
?>
<?php
$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}
  $year = date("Y");
  $month = date("m");
  $day = date("d");
  $insertSQL = sprintf("INSERT INTO product_selected(date, year, month, day, time, product, id_client) 
                        VALUES (NOW(), $year, $month, $day, NOW(), %s, %s)",                    
                        GetSQLValueString($_GET["productID"], "int"),
                        GetSQLValueString($_GET['newcompl2'], "int"));

  
  $Result1 = mysqli_query($con,  $insertSQL) or die(mysqli_error($con));
  
  $client = $_GET['newcompl'];
  // $insertGoTo1 = $_SERVER["HTTP_REFERER"];
  $insertGoTo1 = "orders.php?newcompl2=$client";
  if (isset($_SERVER['QUERY_STRING'])) {
    $insertGoTo1 .= (strpos($insertGoTo1, '?')) ? "&" : "?";
    $insertGoTo1 .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $insertGoTo1));
?>