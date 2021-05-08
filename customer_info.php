<?php require_once('connections/conexion.php'); ?>
<?php
    $query_DatosConsulta = sprintf("SELECT * FROM site_info"); 
    $DatosConsulta = mysqli_query($con, $query_DatosConsulta) or die(mysqli_error($con));
    $row_DatosConsulta = mysqli_fetch_assoc($DatosConsulta);
    $totalRows_DatosConsulta = mysqli_num_rows($DatosConsulta);
?>

<?php
    if($_GET["recibo"] != "") {
        $clienteAct = $_GET["recibo"];
    } else if($_GET["payment"] != "") {
        $clienteAct = $_GET["payment"];
    } else {
        $clienteAct = $_SESSION['bkng_UserId'];
    }
?>
<?php
    $query_DatosProductSeleted = sprintf("SELECT * FROM product_selected WHERE id_client = %s AND confirmed = 1 AND status = 1 ORDER BY id_selected ASC",
                                            GetSQLValueString($clienteAct, "int")); 
    $DatosProductSeleted = mysqli_query($con, $query_DatosProductSeleted) or die(mysqli_error($con));
    $row_DatosProductSeleted = mysqli_fetch_assoc($DatosProductSeleted);
    $totalRows_DatosProductSeleted = mysqli_num_rows($DatosProductSeleted);
?>
<?php
  $query_DatosTaxes = sprintf("SELECT * FROM taxes WHERE status = 1 ORDER BY id_tax ASC"); 
  $DatosTaxes = mysqli_query($con, $query_DatosTaxes) or die(mysqli_error($con));
  $row_DatosTaxes = mysqli_fetch_assoc($DatosTaxes);
  $totalRows_DatosTaxes = mysqli_num_rows($DatosTaxes);
?>
<!-- /////////////////////////////////// Consulta para optener la lista de semanas seleccionadas /////////////////////////////////////////// -->
<?php
    $query_DatosCart = sprintf("SELECT * FROM cart WHERE id_client = %s AND transaction_made = 0 ORDER BY id_counter ASC",
                                GetSQLValueString($clienteAct, "int")); 
    $DatosCart = mysqli_query($con, $query_DatosCart) or die(mysqli_error($con));
    $row_DatosCart = mysqli_fetch_assoc($DatosCart);
    $totalRows_DatosCart = mysqli_num_rows($DatosCart);
?>
<?php
    $query_DatosCart2 = sprintf("SELECT * FROM cart WHERE id_client = %s AND transaction_made = 0 ORDER BY id_counter ASC",
                                GetSQLValueString($clienteAct, "int")); 
    $DatosCart2 = mysqli_query($con, $query_DatosCart2) or die(mysqli_error($con));
    $row_DatosCart2 = mysqli_fetch_assoc($DatosCart2);
    $totalRows_DatosCart2 = mysqli_num_rows($DatosCart2);
?>
<?php
    // $query_DatosCart3 = sprintf("SELECT * FROM cart WHERE id_client = %s AND transaction_made = 0 ORDER BY id_counter ASC",
    //                             GetSQLValueString($clienteAct, "int")); 
    // $DatosCart3 = mysqli_query($con, $query_DatosCart3) or die(mysqli_error($con));
    // $row_DatosCart3 = mysqli_fetch_assoc($DatosCart3);
    // $totalRows_DatosCart3 = mysqli_num_rows($DatosCart3);
?>
<!-- /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
<?php
    $query_DatosClient = sprintf("SELECT * FROM clients WHERE id_client = %s ORDER BY id_client ASC",
                                GetSQLValueString($clienteAct, "int")); 
    $DatosClient = mysqli_query($con, $query_DatosClient) or die(mysqli_error($con));
    $row_DatosClient = mysqli_fetch_assoc($DatosClient);
    $totalRows_DatosClient = mysqli_num_rows($DatosClient);
?>
<?php
    $editFormAction = $_SERVER['PHP_SELF'];
    if (isset($_SERVER['QUERY_STRING'])) {
        $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
    }
    if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "formrequest")) {

        if (comprobaremailcliente($_POST["email"])) {
        
            $updateSQL = sprintf("UPDATE clients SET name=%s, surname=%s, email=%s, personal_number=%s, telephone=%s, adress=%s, post=%s, city=%s, agree=%s, client_no=%s, status=%s, via=%s WHERE id_client=%s",
                            GetSQLValueString($_POST["name"], "text"),
                            GetSQLValueString($_POST["surname"], "text"),
                            GetSQLValueString($_POST["email"], "text"),
                            GetSQLValueString($_POST["personal_number"], "text"),
                            GetSQLValueString($_POST["telephone"], "text"),
                            GetSQLValueString($_POST["adress"], "text"),
                            GetSQLValueString($_POST["post"], "int"),
                            GetSQLValueString($_POST["city"], "text"),
                            GetSQLValueString($_POST["agree"], "text"),
                            GetSQLValueString($_POST["client_no"], "text"),
                            GetSQLValueString($_POST["status"], "text"),
                            GetSQLValueString($_POST["via"], "int"),
                            GetSQLValueString($_POST["id_client"], "int"));
            
            $Result1 = mysqli_query($con, $updateSQL) or die(mysqli_error($con));

            $cliente = $_POST["id_client"];

            $updateGoTo = "customer_info.php?recibo=$cliente";
            if (isset($_SERVER['QUERY_STRING'])) {
                $updateGoTo .= (strpos($updateGoTo, '?')) ? "&" : "?";
                $updateGoTo .= $_SERVER['QUERY_STRING'];
                }
                header(sprintf("Location: %s", $updateGoTo));

        } else {
            $clienteExist = ObtenerIdCliente($_POST["email"]);

            $updateSQL = sprintf("UPDATE product_selected SET id_client=%s WHERE id_client=%s",
                            GetSQLValueString($clienteExist, "int"),
                            GetSQLValueString($_POST["id_client"], "int"));
            
            $Result1 = mysqli_query($con, $updateSQL) or die(mysqli_error($con));

            $updateSQL = sprintf("UPDATE cart SET id_client=%s WHERE id_client=%s",
                            GetSQLValueString($clienteExist, "int"),
                            GetSQLValueString($_POST["id_client"], "int"));
            
            $Result1 = mysqli_query($con, $updateSQL) or die(mysqli_error($con));


            $updateGoTo = "customer_info.php?recibo=$clienteExist";
            if (isset($_SERVER['QUERY_STRING'])) {
                $updateGoTo .= (strpos($updateGoTo, '?')) ? "&" : "?";
                $updateGoTo .= $_SERVER['QUERY_STRING'];
                }
                header(sprintf("Location: %s", $updateGoTo));
        }
    }
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
        <?php include("inc/customer_info_wrapp.php"); ?>
        <?php include("inc/recibo.php"); ?>
        <?php include("inc/done.php"); ?>
        <?php include("inc/foot.php"); ?>
    </div>
</body>
</html>