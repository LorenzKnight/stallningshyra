<?php require_once('../connections/conexion.php');?>
<?php require_once('inc/seguridad.php');?>
<?php
if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"]=="formdelete"))
{ 
  $query_DatosDeleteImg = sprintf("SELECT * FROM publications WHERE id_publications=%s", 
                                    GetSQLValueString($_POST["id"], "int"));
  $DatosDeleteImg = mysqli_query($con, $query_DatosDeleteImg) or die(mysqli_error($con));
  $row_DatosDeleteImg = mysqli_fetch_assoc($DatosDeleteImg);
  $totalRows_DatosDeleteImg = mysqli_num_rows($DatosDeleteImg);


  unlink('../img/images/'.$row_DatosDeleteImg['foto']);


  $query_Delete = sprintf("DELETE FROM publications WHERE id_publications=%s", GetSQLValueString($_POST["id"], "int"));
  echo $query_Delete;
  $Result1 = mysqli_query($con, $query_Delete) or die(mysqli_error());

    $insertGoTo = "publications.php";
    header(sprintf("Location: %s", $insertGoTo));
    mysqli_free_result($Result1);
}
?>