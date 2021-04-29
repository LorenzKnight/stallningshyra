<?php require_once('connections/conexion.php');?>

<?php if($_GET['productID']): ?> 
<?php
  $query_Delete = sprintf("DELETE FROM cart WHERE id_product=%s AND id_client=%s", 
                            GetSQLValueString($_GET["productID"], "int"),
                            GetSQLValueString($_SESSION['bkng_UserId'], "int"));
  // echo $query_Delete;
  $Result1 = mysqli_query($con, $query_Delete) or die(mysqli_error());

  $query_Delete = sprintf("DELETE FROM product_selected WHERE product=%s AND id_client=%s", 
                            GetSQLValueString($_GET["productID"], "int"),
                            GetSQLValueString($_SESSION['bkng_UserId'], "int"));
  // echo $query_Delete;
  $Result1 = mysqli_query($con, $query_Delete) or die(mysqli_error());

    $insertGoTo = "reserve.php";
    header(sprintf("Location: %s", $insertGoTo));
    mysqli_free_result($Result1);
?>
<?php endif ?>



<?php if($_GET['carrieOff']): ?>
<?php
  $query_Delete = sprintf("DELETE FROM product_selected WHERE product=%s AND id_client=%s", 
                            GetSQLValueString($_GET["carrieOff"], "int"),
                            GetSQLValueString($_SESSION['bkng_UserId'], "int"));
  // echo $query_Delete;
  $Result1 = mysqli_query($con, $query_Delete) or die(mysqli_error());

    $insertGoTo = "reserve.php";
    header(sprintf("Location: %s", $insertGoTo));
    mysqli_free_result($Result1);
?>
<?php endif ?>