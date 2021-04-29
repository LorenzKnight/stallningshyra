<?php require_once('../connections/conexion.php');?>
<?php require_once('inc/seguridad.php');?>
<?php
if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"]=="formdelete"))
{ 
  $query_Delete = sprintf("DELETE FROM product_selected WHERE confirmed=%s", 
                            GetSQLValueString($_POST["id"], "int"));
  echo $query_Delete;
  $Result1 = mysqli_query($con, $query_Delete) or die(mysqli_error());


  $query_Delete = sprintf("DELETE FROM cart WHERE transaction_made=%s", 
                            GetSQLValueString($_POST["id"], "int"));
  echo $query_Delete;
  $Result1 = mysqli_query($con, $query_Delete) or die(mysqli_error());


  $query_Delete = sprintf("DELETE FROM inscriptions WHERE id_insc=%s", 
                            GetSQLValueString($_POST["id"], "int"));
  echo $query_Delete;
  $Result1 = mysqli_query($con, $query_Delete) or die(mysqli_error());

  $insertGoTo = "orders.php";
  header(sprintf("Location: %s", $insertGoTo));
  mysqli_free_result($Result1);
}
?>