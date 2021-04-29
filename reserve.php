<?php require_once('connections/conexion.php'); ?>
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
    $insertSQL = sprintf("INSERT INTO clients(date, year, month, day, time, email, password, via) 
                          VALUES (NOW(), $year, $month, $day, NOW(), %s, %s, %s)",
                          GetSQLValueString($_POST["email"], "text"),
                          GetSQLValueString($_POST["password"], "text"),
                          GetSQLValueString($_POST["via"], "int"));

    
    $Result1 = mysqli_query($con,  $insertSQL) or die(mysqli_error($con));
    
    
    $insertGoTo1 = "reserve.php?idConf=1";
    if (isset($_SERVER['QUERY_STRING'])) {
      $insertGoTo1 .= (strpos($insertGoTo1, '?')) ? "&" : "?";
      $insertGoTo1 .= $_SERVER['QUERY_STRING'];
    }
    header(sprintf("Location: %s", $insertGoTo1));

  }
  else if (!isset($_SESSION)) {
    session_start();
  }

  $loginFormAction = $_SERVER['PHP_SELF'];
  if (isset($_GET['accesscheck'])) {
    $_SESSION['PrevUrl'] = $_GET['accesscheck'];
  }

  function mysqli_result($res, $row, $field=0) { 
      $res->data_seek($row); 
      $datarow = $res->fetch_array(); 
      return $datarow[$field]; 
  }

  if (isset($_POST['email'])) {
    $loginUsername=$_POST['email'];
    //ATENCIÓN USAMOS MD5 para guardar la contraseña.
    $password=$_POST['password'];
    $MM_fldUserAuthorization = "rank";
    $MM_redirectLoginSuccess = "reserve.php?idCompl=1";
    $MM_redirectLoginFailed = "error.php?error=3";
    $MM_redirecttoReferrer = false;
    
      
    $LoginRS__query=sprintf("SELECT id_client, email, password, rank FROM clients WHERE email=%s AND password=%s",
    GetSQLValueString($loginUsername, "text"),
    GetSQLValueString($password, "text")); 
    
    $LoginRS = mysqli_query($con,  $LoginRS__query) or die(mysqli_error($con));
    $loginFoundUser = mysqli_num_rows($LoginRS);
    if ($loginFoundUser) {
      
      $loginStrGroup  = mysqli_result($LoginRS,0,'rank');
      
    if (PHP_VERSION >= 5.1) {session_regenerate_id(true);} else {session_regenerate_id();}
      //declare two session variables and assign them
      $_SESSION['MM_Username'] = $loginUsername;
      $_SESSION['MM_UserGroup'] = $loginStrGroup;	 
      $_SESSION['bkng_UserId'] = mysqli_result($LoginRS,0,'id_client');
      $_SESSION['bkng_Mail'] = mysqli_result($LoginRS,0,'email');
      $_SESSION['bkng_Nivel'] = mysqli_result($LoginRS,0,'rank');
    //ContabilizarAcceso($_SESSION['vpt_UserId']);
    
    /* DESCOMENTAR SOLO SI SE USA EL CHECK DE RECORDAR CONTRASEÑA, HABRÁ QUE USAR LA FUNCIÓN generar_cookie()
    if ((isset($_POST["CAMPORECUERDA"])) && ($_POST["CAMPORECUERDA"]=="1"))
    generar_cookie($_SESSION['NOMBREWEB_UserId']);
    */	     

      if (isset($_SESSION['PrevUrl']) && false) {
        $MM_redirectLoginSuccess = $_SESSION['PrevUrl'];	
      }
      header("Location: " . $MM_redirectLoginSuccess );
    }
    else {
      header("Location: ". $MM_redirectLoginFailed );
    }
  }
  }
?>

<?php
    $query_DatosCities = sprintf("SELECT * FROM cities WHERE status = 1 ORDER BY city_name ASC"); 
    $DatosCities = mysqli_query($con, $query_DatosCities) or die(mysqli_error($con));
    $row_DatosCities = mysqli_fetch_assoc($DatosCities);
    $totalRows_DatosCities = mysqli_num_rows($DatosCities);
?>
<!--/////////////////////////////////////////////////////SRCH/////////////////////////////////////////////////////////////-->
<?php
    if ((isset($_GET["MM_search"])) && ($_GET["MM_search"]=="formsearch")) {   
      if($_GET["city"] != "" && $_GET["product_type"] == ""){
        $query_DatosConsulta = sprintf("SELECT * FROM products WHERE city = %s AND status = 1 ORDER BY id_product ASC",
                                        GetSQLValueString($_GET["city"], "int"));
      } else if ($_GET["product_type"] != "" && $_GET["city"] == "") {
        $query_DatosConsulta = sprintf("SELECT * FROM products WHERE product_type = %s AND status = 1 ORDER BY id_product ASC",
                                        GetSQLValueString($_GET["product_type"], "int"));
      } else if ($_GET["city"] == "" && $_GET["product_type"] == "") {
        $query_DatosConsulta = sprintf("SELECT * FROM products WHERE status = 1 ORDER BY id_product ASC");
      } else if ($_GET["city"] != "" && $_GET["product_type"] != "") {
        $query_DatosConsulta = sprintf("SELECT * FROM products WHERE product_type = %s AND city = %s AND status = 1 ORDER BY id_product ASC",
                                        GetSQLValueString($_GET["product_type"], "int"),
                                        GetSQLValueString($_GET["city"], "int"));
      }
    } else {
      $query_DatosConsulta = sprintf("SELECT * FROM products WHERE status = 1 ORDER BY id_product ASC");
    }
      $DatosConsulta = mysqli_query($con, $query_DatosConsulta) or die(mysqli_error($con));
      $row_DatosConsulta = mysqli_fetch_assoc($DatosConsulta);
      $totalRows_DatosConsulta = mysqli_num_rows($DatosConsulta);
?>
<!--//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
<?php
  $query_DatosProductSeleted = sprintf("SELECT * FROM product_selected WHERE id_client = %s AND status = 1 ORDER BY id_selected ASC",
                                        GetSQLValueString($_SESSION['bkng_UserId'], "int")); 
  $DatosProductSeleted = mysqli_query($con, $query_DatosProductSeleted) or die(mysqli_error($con));
  $row_DatosProductSeleted = mysqli_fetch_assoc($DatosProductSeleted);
  $totalRows_DatosProductSeleted = mysqli_num_rows($DatosProductSeleted);
?>
<!-- /////////////////////////////////// codigo para insertar los cursos del usuario recien registrado /////////////////////////////////////////// -->
<?php
  $editFormAction = $_SERVER['PHP_SELF'];
  if (isset($_SERVER['QUERY_STRING'])) {
    $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
  }

  if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "formproduct")) {
    $year = date("Y");
    $month = date("m");
    $day = date("d");
    $insertSQL = sprintf("INSERT INTO product_selected(date, year, month, day, time, product, id_client) 
                          VALUES (NOW(), $year, $month, $day, NOW(), %s, %s)",
                          GetSQLValueString($_POST["product"], "int"),                      
                          GetSQLValueString($_POST["id_client"], "int"));

    
    $Result1 = mysqli_query($con,  $insertSQL) or die(mysqli_error($con));
    
    
    $insertGoTo = "reserve.php";
    if (isset($_SERVER['QUERY_STRING'])) {
      $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
      $insertGoTo .= $_SERVER['QUERY_STRING'];
    }
    header(sprintf("Location: %s", $insertGoTo));
  }
?>
<!-- /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
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
                                                GetSQLValueString($_POST["id_client"], "int"),
                                                GetSQLValueString($_POST["id_product"], "int"),                   
                                                GetSQLValueString($value, "int"));

                        $Result1 = mysqli_query($con, $insertSQL) or die(mysqli_error($con));


                          // $updateSQL = sprintf("UPDATE product_selected SET confirmed = 1");
                          $updateSQL = sprintf("UPDATE product_selected SET confirmed = 1 WHERE id_client=%s AND confirmed IS NULL",
                                                GetSQLValueString($_POST["id_client"], "int"));
                                    
                          $Result2 = mysqli_query($con, $updateSQL) or die(mysqli_error($con));


                        $insertGoTo = "reserve.php";
                        if (isset($_SERVER['QUERY_STRING'])) {
                            $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
                            $insertGoTo .= $_SERVER['QUERY_STRING'];
                        }
                        header(sprintf("Location: %s", $insertGoTo));

                    }
                }
        } else {

            $insertGoTo = "reserve.php";
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
  $query_DatosCart = sprintf("SELECT * FROM cart WHERE id_client = %s AND transaction_made = 0 ORDER BY id_counter ASC",
                              GetSQLValueString($_SESSION["bkng_UserId"], "int")); 
  $DatosCart = mysqli_query($con, $query_DatosCart) or die(mysqli_error($con));
  $row_DatosCart = mysqli_fetch_assoc($DatosCart);
  $totalRows_DatosCart = mysqli_num_rows($DatosCart);
?>
<!-- /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

<!doctype html>
<html>
<head>
<meta charset="iso-8859-1">

<title><?php echo $pageName; ?></title>
<link href="css/style.scss" rel="stylesheet" type="text/css"  media="all" />
<script>
    function validarForm()
        {
            form = document.getElementById('formsearch');
            form.submit();
        }
</script>
<script>
    function asegurar_borrado()
    {
            rc = confirm("Är du säkert på att du vill rensa din kundvagn?");
            return rc;
    }
</script>
<script>
  function mostrar() {
    event.stopPropagation()
    document.getElementById("popup").style.display="block";
    }
    function ocurtar() {
    event.stopPropagation()
    document.getElementById("popup").style.display="none";
    }
</script>
<?php $menuactive= 2;?>
</head>
<body>
    <div class="wrapp">
        <?php include("inc/head.php"); ?>
        <?php include("inc/reserve_wrapp.php"); ?>
        <?php include("inc/week_calender.php"); ?>
        <?php include("inc/foot.php"); ?>
    </div>
</body>
</html>