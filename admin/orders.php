<?php require_once('../connections/conexion.php');?>
<?php require_once('inc/seguridad.php');?>

<?php
  if ((isset($_GET["MM_search"])) && ($_GET["MM_search"]=="formsearch"))
  { 
    // BLOQUE BUSCADOR INTELIGENTE NOMBRE
    $porciones = explode(" ", $_GET["search"]);
    $longitud = count($porciones);
    $extramodelo=" name LIKE '%".$_GET["search"] ."%' OR surname LIKE '%".$_GET["search"] ."%'";
    for($i=0; $i<$longitud; $i++)
    {
      $extramodelo.=" OR name LIKE '%".$porciones[$i] ."%' OR surname LIKE '%".$porciones[$i] ."%'";
    }
    //FIN BLOQUE BUSCADOR INTELIGENTE NOMBRE

    $query_DatosConsulta = "SELECT * FROM inscriptions WHERE ".$extramodelo." AND status = 1 ORDER BY id_insc DESC";
    //echo $query_DatosConsulta;
  }
  else
  {
    $query_DatosConsulta = sprintf("SELECT * FROM inscriptions ORDER BY id_insc DESC");
  }
    $DatosConsulta = mysqli_query($con, $query_DatosConsulta) or die(mysqli_error($con));
    $row_DatosConsulta = mysqli_fetch_assoc($DatosConsulta);
    $totalRows_DatosConsulta = mysqli_num_rows($DatosConsulta);
?>
<!--/////////////////////////////////////////////////BACK-END INSERT/////////////////////////////////////////////////////////-->
<?php
  $query_DatosTaxes = sprintf("SELECT * FROM taxes WHERE status = 1 ORDER BY id_tax ASC"); 
  $DatosTaxes = mysqli_query($con, $query_DatosTaxes) or die(mysqli_error($con));
  $row_DatosTaxes = mysqli_fetch_assoc($DatosTaxes);
  $totalRows_DatosTaxes = mysqli_num_rows($DatosTaxes);
?>
<?php
$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "formrequest")) {

  if (comprobaremailcliente($_POST["email"])) 
  {
    
  $year = date("Y");
  $month = date("m");
  $day = date("d");
  $insertSQL = sprintf("INSERT INTO clients(date, year, month, day, time, name, surname, email, password, personal_number, telephone, adress, post, city, agree, status, via) 
                        VALUES (NOW(), $year, $month, $day, NOW(), %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)",
                        GetSQLValueString($_POST["name"], "text"),                      
                        GetSQLValueString($_POST["surname"], "text"),
                        GetSQLValueString($_POST["email"], "text"),
                        GetSQLValueString($_POST["password"], "text"),
                        GetSQLValueString($_POST["personal_number"], "text"),
                        GetSQLValueString($_POST["telephone"], "text"),
                        GetSQLValueString($_POST["adress"], "text"),
                        GetSQLValueString($_POST["post"], "int"),
                        GetSQLValueString($_POST["city"], "text"),
                        GetSQLValueString($_POST["agree"], "text"),
                        GetSQLValueString($_POST["status"], "text"),
                        GetSQLValueString($_POST["via"], "int"));

  
  $Result1 = mysqli_query($con,  $insertSQL) or die(mysqli_error($con));
  
  
  $insertGoTo1 = "orders.php?newcompl=1";
  if (isset($_SERVER['QUERY_STRING'])) {
    $insertGoTo1 .= (strpos($insertGoTo1, '?')) ? "&" : "?";
    $insertGoTo1 .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $insertGoTo1));
}

else {

  $query_DatosIdentidad = sprintf("SELECT * FROM clients WHERE email=%s ORDER BY id_client DESC",
                              GetSQLValueString($_POST["email"], "text")); 
  $DatosIdentidad = mysqli_query($con, $query_DatosIdentidad) or die(mysqli_error($con));
  $row_DatosIdentidad = mysqli_fetch_assoc($DatosIdentidad);
  $totalRows_DatosIdentidad = mysqli_num_rows($DatosIdentidad);
  
  $StEmail = $row_DatosIdentidad["id_client"];
  $insertGoTo1 = "orders.php?newcompl=$StEmail";
  header(sprintf("Location: %s", $insertGoTo1));
 }
}
?>

<?php
  $query_DatosInsc = sprintf("SELECT * FROM clients WHERE via=%s ORDER BY id_client DESC",
                              GetSQLValueString($_SESSION['std_UserId'], "int")); 
  $DatosInsc = mysqli_query($con, $query_DatosInsc) or die(mysqli_error($con));
  $row_DatosInsc = mysqli_fetch_assoc($DatosInsc);
  $totalRows_DatosInsc = mysqli_num_rows($DatosInsc);

  $cliente = $row_DatosInsc['id_client'];
?>

<?php
  $query_DatosProduct = sprintf("SELECT * FROM products WHERE status = 1 ORDER BY id_product ASC"); 
  $DatosProduct = mysqli_query($con, $query_DatosProduct) or die(mysqli_error($con));
  $row_DatosProduct = mysqli_fetch_assoc($DatosProduct);
  $totalRows_DatosProduct = mysqli_num_rows($DatosProduct);
?>
<?php
  $query_DatosProductSeleted = sprintf("SELECT * FROM product_selected WHERE id_client = %s AND status = 1 ORDER BY id_selected DESC",
                                        GetSQLValueString($cliente, "int")); 
  $DatosProductSeleted = mysqli_query($con, $query_DatosProductSeleted) or die(mysqli_error($con));
  $row_DatosProductSeleted = mysqli_fetch_assoc($DatosProductSeleted);
  $totalRows_DatosProductSeleted = mysqli_num_rows($DatosProductSeleted);
?>

<?php
$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
} 
if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "formweeks")) {

        // $query_Delete = sprintf("DELETE FROM multi_user_access WHERE id_user=%s", GetSQLValueString($_POST["id_user"], "int"));
        // echo $query_Delete;
        // $Result2 = mysqli_query($con, $query_Delete) or die(mysqli_error($con));


        if($_POST['semana'] != "") {

                if(is_array($_POST['semana'])) {

                    // realizamos el ciclo de los checkbox selccionados
                    while(list($key,$value) = each($_POST['semana'])) {

                        $insertSQL = sprintf("INSERT INTO cart(id_client, id_product, id_week, date)
                                                VALUES (%s, %s, %s, NOW())",
                                                GetSQLValueString($cliente, "int"),
                                                GetSQLValueString($_POST["id_product"], "int"),                   
                                                GetSQLValueString($value, "int"));

                        $Result1 = mysqli_query($con, $insertSQL) or die(mysqli_error($con));


                          $updateSQL = sprintf("UPDATE product_selected SET confirmed = 1 WHERE id_client=%s AND confirmed IS NULL",
                                                GetSQLValueString($cliente, "int"));
                                    
                          $Result2 = mysqli_query($con, $updateSQL) or die(mysqli_error($con));


                        $insertGoTo = "orders.php?recibo=1";
                        if (isset($_SERVER['QUERY_STRING'])) {
                            $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
                            $insertGoTo .= $_SERVER['QUERY_STRING'];
                        }
                        header(sprintf("Location: %s", $insertGoTo));

                    }
                }
        } else {

            $insertGoTo = "orders.php?recibo=1";
            if (isset($_SERVER['QUERY_STRING'])) {
                $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
                $insertGoTo .= $_SERVER['QUERY_STRING'];
            }
            header(sprintf("Location: %s", $insertGoTo));
        }  
}      
?>


<!-- /////////////////////////////////// Consulta para optener la lista de semanas seleccionadas /////////////////////////////////////////// -->
<?php
    // $query_DatosCart = sprintf("SELECT * FROM cart WHERE id_client = %s AND transaction_made = 0 ORDER BY id_counter ASC",
    //                             GetSQLValueString($_SESSION["bkng_UserId"], "int")); 
    // $DatosCart = mysqli_query($con, $query_DatosCart) or die(mysqli_error($con));
    // $row_DatosCart = mysqli_fetch_assoc($DatosCart);
    // $totalRows_DatosCart = mysqli_num_rows($DatosCart);
?>
<?php
    $query_DatosCart2 = sprintf("SELECT * FROM cart WHERE id_client = %s AND transaction_made = 0 ORDER BY id_counter ASC",
                                GetSQLValueString($cliente, "int")); 
    $DatosCart2 = mysqli_query($con, $query_DatosCart2) or die(mysqli_error($con));
    $row_DatosCart2 = mysqli_fetch_assoc($DatosCart2);
    $totalRows_DatosCart2 = mysqli_num_rows($DatosCart2);
?>
<!-- /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

<?php
  // $query_DatosCart2 = sprintf("SELECT * FROM cart WHERE id_client=%s AND transaction_made = 0 ORDER BY id_counter ASC",
  //                             GetSQLValueString($_GET['id'], "int")); 
  // $DatosCart2 = mysqli_query($con, $query_DatosCart2) or die(mysqli_error($con));
  // $row_DatosCart2 = mysqli_fetch_assoc($DatosCart2);
  // $totalRows_DatosCart2 = mysqli_num_rows($DatosCart2);
?>
<!-- /////////////////////////////////// Consulta para optener la lista de cursos seleccionados para el paquete /////////////////////////////////////////// -->
<?php
  // $query_DatosParaPaquete = sprintf("SELECT * FROM cart WHERE id_client = %s AND transaction_made = 0 ORDER BY id_counter ASC",
  //                             GetSQLValueString($row_DatosInsc['id_client'], "int")); 
  // $DatosParaPaquete = mysqli_query($con, $query_DatosParaPaquete) or die(mysqli_error($con));
  // $row_DatosParaPaquete = mysqli_fetch_assoc($DatosParaPaquete);
  // $totalRows_DatosParaPaquete = mysqli_num_rows($DatosParaPaquete);
?>
<?php
  // $query_DatosParaPaquete2 = sprintf("SELECT * FROM cart WHERE id_client = %s AND transaction_made = 0 ORDER BY id_counter ASC",
  //                             GetSQLValueString($_GET['id'], "int")); 
  // $DatosParaPaquete2 = mysqli_query($con, $query_DatosParaPaquete2) or die(mysqli_error($con));
  // $row_DatosParaPaquete2 = mysqli_fetch_assoc($DatosParaPaquete2);
  // $totalRows_DatosParaPaquete2 = mysqli_num_rows($DatosParaPaquete2);
?>
<?php
  // $query_DatosParaPaquete3 = sprintf("SELECT * FROM cart WHERE transaction_made = %s ORDER BY id_counter ASC",
  //                             GetSQLValueString($_GET['editc'], "int")); 
  // $DatosParaPaquete3 = mysqli_query($con, $query_DatosParaPaquete3) or die(mysqli_error($con));
  // $row_DatosParaPaquete3 = mysqli_fetch_assoc($DatosParaPaquete3);
  // $totalRows_DatosParaPaquete3 = mysqli_num_rows($DatosParaPaquete3);
?>
<!--/////////////////////////////////////////////////BACK-END EDIT/////////////////////////////////////////////////////////-->
<?php
  // $query_DatosEdit = sprintf("SELECT * FROM clients WHERE id_client=%s", GetSQLValueString($_GET["editi"], "int")); 
  // $DatosEdit = mysqli_query($con, $query_DatosEdit) or die(mysqli_error($con));
  // $row_DatosEdit = mysqli_fetch_assoc($DatosEdit);
  // $totalRows_DatosEdit = mysqli_num_rows($DatosEdit);
?>
<?php
  // $query_DatosInscEdit = sprintf("SELECT * FROM inscriptions WHERE id_insc=%s",
  //                         GetSQLValueString(seeOnFilter($_GET["editi"]), "int")); 
  // $DatosInscEdit = mysqli_query($con, $query_DatosInscEdit) or die(mysqli_error($con));
  // $row_DatosInscEdit = mysqli_fetch_assoc($DatosInscEdit);
  // $totalRows_DatosInscEdit = mysqli_num_rows($DatosInscEdit);
?>
<?php
// $editFormAction = $_SERVER['PHP_SELF'];
// if (isset($_SERVER['QUERY_STRING'])) {
//   $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
// }
// if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "formediti")) {
     
//      $updateSQL = sprintf("UPDATE students SET name=%s, surname=%s, email=%s, personal_number=%s, telephone=%s, sex=%s, adress=%s, post=%s, city=%s WHERE id_client=%s",
//                           GetSQLValueString($_POST["name"], "text"),
//                           GetSQLValueString($_POST["surname"], "text"),
//                           GetSQLValueString($_POST["email"], "text"),
//                           GetSQLValueString($_POST["personal_number"], "text"),
//                           GetSQLValueString($_POST["telephone"], "text"),
//                           GetSQLValueString($_POST["sex"], "text"),
//                           GetSQLValueString($_POST["adress"], "text"),
//                           GetSQLValueString($_POST["post"], "int"),
//                           GetSQLValueString($_POST["city"], "text"),
//                           GetSQLValueString($_POST["id_client"], "int"));
		

// $Result1 = mysqli_query($con, $updateSQL) or die(mysqli_error($con));

//     if($_POST['commentary'] != "" || $_POST['status'] != "") {

//           $updateSQL = sprintf("UPDATE inscriptions SET status=%s, commentary=%s WHERE id_insc=%s",
//                                 GetSQLValueString($_POST["status"], "int"),
//                                 GetSQLValueString($_POST["commentary"], "text"),
//                                 GetSQLValueString(seeOnFilter($_POST["id_client"]), "int"));

//           $Result1 = mysqli_query($con, $updateSQL) or die(mysqli_error($con));

//           $updateGoTo = "students.php";
//           if (isset($_SERVER['QUERY_STRING'])) {
//               $updateGoTo .= (strpos($updateGoTo, '?')) ? "&" : "?";
//               $updateGoTo .= $_SERVER['QUERY_STRING'];
//             }
//             header(sprintf("Location: %s", $updateGoTo));
//     } else {

//     // $updateGoTo = $_SERVER['HTTP_REFERER'];
//     $updateGoTo = "students.php";
//     if (isset($_SERVER['QUERY_STRING'])) {
//         $updateGoTo .= (strpos($updateGoTo, '?')) ? "&" : "?";
//         $updateGoTo .= $_SERVER['QUERY_STRING'];
//       }
//       header(sprintf("Location: %s", $updateGoTo));
//     }
// }
?>

<?php
  // $query_DatosCartEdit = sprintf("SELECT * FROM cart WHERE course_category=%s AND transaction_made=%s ORDER BY id_counter ASC",
  //                         1,
  //                         GetSQLValueString($_GET["editc"], "int")); 
  // $DatosCartEdit = mysqli_query($con, $query_DatosCartEdit) or die(mysqli_error($con));
  // $row_DatosCartEdit = mysqli_fetch_assoc($DatosCartEdit);
  // $totalRows_DatosCartEdit = mysqli_num_rows($DatosCartEdit);
?>
<?php
  // $query_DatosCartEdit2 = sprintf("SELECT * FROM cart WHERE course_category=%s AND transaction_made=%s ORDER BY id_counter ASC",
  //                         2,
  //                         GetSQLValueString($_GET["editc"], "int")); 
  // $DatosCartEdit2 = mysqli_query($con, $query_DatosCartEdit2) or die(mysqli_error($con));
  // $row_DatosCartEdit2 = mysqli_fetch_assoc($DatosCartEdit2);
  // $totalRows_DatosCartEdit2 = mysqli_num_rows($DatosCartEdit2);
?>
<?php
  // $query_DatosCartEditPackage = sprintf("SELECT * FROM cart WHERE transaction_made=%s ORDER BY id_counter ASC",
  //                               GetSQLValueString($_GET["editc"], "int")); 
  // $DatosCartEditPackage = mysqli_query($con, $query_DatosCartEditPackage) or die(mysqli_error($con));
  // $row_DatosCartEditPackage = mysqli_fetch_assoc($DatosCartEditPackage);
  // $totalRows_DatosCartEditPackage = mysqli_num_rows($DatosCartEditPackage);
?>
<?php
  // $editFormAction = $_SERVER['PHP_SELF'];
  // if (isset($_SERVER['QUERY_STRING'])) {
  //   $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
  // }
  // if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "formeditc")) {
      
  //     $updateSQL = sprintf("UPDATE inscriptions SET package=%s, total=%s WHERE id_insc=%s",
  //                   GetSQLValueString($_POST["package"], "text"),
  //                   GetSQLValueString($_POST["total"], "text"),
  //                   GetSQLValueString($_POST["id_insc"], "int"));
      

  // $Result1 = mysqli_query($con, $updateSQL) or die(mysqli_error($con));

  // $updateGoTo = "students.php";
  // if (isset($_SERVER['QUERY_STRING'])) {
  //     $updateGoTo .= (strpos($updateGoTo, '?')) ? "&" : "?";
  //     $updateGoTo .= $_SERVER['QUERY_STRING'];
  //   }
  //   header(sprintf("Location: %s", $updateGoTo));
  // }
?>
<!--///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
<!--/////////////////////////////////////////////////BACK-END SEE/////////////////////////////////////////////////////////-->
<?php
  $query_DatosImpuesto = sprintf("SELECT * FROM taxes WHERE status = 1 ORDER BY id_tax ASC"); 
  $DatosImpuesto = mysqli_query($con, $query_DatosImpuesto) or die(mysqli_error($con));
  $row_DatosImpuesto = mysqli_fetch_assoc($DatosImpuesto);
  $totalRows_DatosImpuesto = mysqli_num_rows($DatosImpuesto);
?>
<?php
  if($_GET["IDinsc"] == ""){
    $query_DatosSee = sprintf("SELECT * FROM inscriptions WHERE id_insc=%s",
                              GetSQLValueString(seeOnFilter($_GET["see"]), "int"));
  } else {
    $query_DatosSee = sprintf("SELECT * FROM inscriptions WHERE id_insc=%s",
                              GetSQLValueString($_GET["IDinsc"], "int"));
  }
  $DatosSee = mysqli_query($con, $query_DatosSee) or die(mysqli_error($con));
  $row_DatosSee = mysqli_fetch_assoc($DatosSee);
  $totalRows_DatosSee = mysqli_num_rows($DatosSee);
?>
<?php
  if($_GET["IDinsc"] == "") {
  $query_DatosPackage = sprintf("SELECT * FROM cart WHERE id_client=%s AND transaction_made=%s ORDER BY id_product ASC",
                                GetSQLValueString($_GET["see"], "int"),
                                GetSQLValueString(seeOnFilter($_GET["see"]), "int"));
  } else {
  $query_DatosPackage = sprintf("SELECT * FROM cart WHERE id_client=%s AND transaction_made=%s ORDER BY id_product ASC",
                                GetSQLValueString($_GET["see"], "int"),
                                GetSQLValueString($_GET["IDinsc"], "int"));
  }
  $DatosPackage = mysqli_query($con, $query_DatosPackage) or die(mysqli_error($con));
  $row_DatosPackage = mysqli_fetch_assoc($DatosPackage);
  $totalRows_DatosPackage = mysqli_num_rows($DatosPackage);
?>

<?php
  if($_GET["IDinsc"] == "") {
  $query_DatosSemanas = sprintf("SELECT * FROM cart WHERE id_client=%s AND transaction_made=%s AND status = 2 ORDER BY id_counter ASC",
                                GetSQLValueString($_GET["see"], "int"),
                                GetSQLValueString(seeOnFilter($_GET["see"]), "int"));
  } else {
  $query_DatosSemanas = sprintf("SELECT * FROM cart WHERE id_client=%s AND transaction_made=%s AND status = 2 ORDER BY id_counter ASC",
                                GetSQLValueString($_GET["see"], "int"),
                                GetSQLValueString($_GET["IDinsc"], "int"));
  }                            
  $DatosSemanas = mysqli_query($con, $query_DatosSemanas) or die(mysqli_error($con));
  $row_DatosSemanas = mysqli_fetch_assoc($DatosSemanas);
  $totalRows_DatosSemanas = mysqli_num_rows($DatosSemanas);
?>
<!--///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
<?php
  $editFormAction = $_SERVER['PHP_SELF'];
  if (isset($_SERVER['QUERY_STRING'])) {
    $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
  }
  if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "formstatus")) {
      
      $updateSQL = sprintf("UPDATE inscriptions SET status=%s WHERE id_insc=%s",
                    GetSQLValueString($_POST["status"], "int"),
                    GetSQLValueString($_POST["id_insc"], "int"));
      
      $Result1 = mysqli_query($con, $updateSQL) or die(mysqli_error($con));

      $updateSQL = sprintf("UPDATE cart SET status=%s WHERE transaction_made=%s",
                    GetSQLValueString($_POST["status"], "int"),
                    GetSQLValueString($_POST["id_insc"], "int"));
      
      $Result1 = mysqli_query($con, $updateSQL) or die(mysqli_error($con));

      // $updateGoTo = $_SERVER['HTTP_REFERER'];
      $orden = $_POST["id_insc"];
      $updateGoTo = "orders.php?handled=$orden";
      if (isset($_SERVER['QUERY_STRING'])) {
          $updateGoTo .= (strpos($updateGoTo, '?')) ? "&" : "?";
          $updateGoTo .= $_SERVER['QUERY_STRING'];
        }
        header(sprintf("Location: %s", $updateGoTo));
  }
?>
<!--/////////////////////////////////////////////////FILTER LISTS/////////////////////////////////////////////////////////-->
<?php
  $query_DatosComfirmacion = sprintf("SELECT * FROM inscriptions WHERE id_insc = %s ORDER BY id_insc ASC",
                                      GetSQLValueString($_GET['handled'], "int")); 
  $DatosComfirmacion = mysqli_query($con, $query_DatosComfirmacion) or die(mysqli_error($con));
  $row_DatosComfirmacion = mysqli_fetch_assoc($DatosComfirmacion);
  $totalRows_DatosComfirmacion = mysqli_num_rows($DatosComfirmacion);
?>
<!--///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
<?php
// if ((isset($_GET["MM_search"])) && ($_GET["MM_search"]=="formtraer"))
// {
//   $unmail = "joellorenzo.k@gmail.com";
//     $query_DatosTraer = sprintf("SELECT * FROM clients WHERE email LIKE %s ORDER BY id_client DESC",
//                                     GetSQLValueString($unmail, "text"));
//     $DatosTraer = mysqli_query($con, $query_DatosTraer) or die(mysqli_error($con));
//     $row_DatosTraer = mysqli_fetch_assoc($DatosTraer);
//     $totalRows_DatosTraer = mysqli_num_rows($DatosTraer);
// }
?>
<html>
<head>
<meta charset="iso-8859-1">
<title>ICARO</title>
<link rel="shortcut icon" href="favicon-32x32.png">
<link href="css/style_adm.css" rel="stylesheet" type="text/css"  media="all" />
<script>
    function validarForm() {
        form = document.getElementById('formstatus');
        form.submit();
    }
</script>
</head>
<body style="background-color:<?php echo corps(UserAppearance($_SESSION['std_UserId']));?>;">
    <div class="wrapp" style="background-color:<?php echo corps(UserAppearance($_SESSION['std_UserId']));?>;">
        <?php include("inc/head.php"); ?>
        <div class="container">
          <?php //echo $_SESSION['std_UserId']; ?>
          <div class="title"><h2>Orders</h2></div>
          <?php include("inc/orders_list.php"); ?>
        </div>
    </div>
</body>
</html>
<?php
mysqli_free_result($DatosConsulta);
?>
<style>
.theemail {
    width: 680px;
    margin: 0 auto;
    padding: 3% 2%;
    background-color: white;
    box-shadow: 0 .15rem 1.75rem 0 rgba(58,59,69,.15)!important;
}
</style>