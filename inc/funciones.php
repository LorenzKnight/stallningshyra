<?php 

if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }
  global $con;
  $theValue = function_exists("mysqli_real_escape_string") ? mysqli_real_escape_string($con, $theValue) : mysqli_escape_string($con,$theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////

// function comprobarUsuarioAdm($idUser)
// {
// 	global $con;
	
// 	$query_ConsultaFuncion = sprintf("SELECT mail FROM users WHERE mail = %s ",
// 		 GetSQLValueString($idUser, "text"));
// 	//echo $query_ConsultaFuncion;
// 	$ConsultaFuncion = mysqli_query($con,  $query_ConsultaFuncion) or die(mysqli_error($con));
// 	$row_ConsultaFuncion = mysqli_fetch_assoc($ConsultaFuncion);
// 	$totalRows_ConsultaFuncion = mysqli_num_rows($ConsultaFuncion);
	
// 	if ($totalRows_ConsultaFuncion !=0) 
// 		return true;
// 	else return false;
	
// 	mysqli_free_result($ConsultaFuncion);
// }

////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////

function comprobaremailunico($email)
{
	global $con;
	
	$query_ConsultaFuncion = sprintf("SELECT mail FROM users WHERE mail = %s ",
		 GetSQLValueString($email, "text"));
	//echo $query_ConsultaFuncion;
	$ConsultaFuncion = mysqli_query($con,  $query_ConsultaFuncion) or die(mysqli_error($con));
	$row_ConsultaFuncion = mysqli_fetch_assoc($ConsultaFuncion);
	$totalRows_ConsultaFuncion = mysqli_num_rows($ConsultaFuncion);
	
	if ($totalRows_ConsultaFuncion==0) 
		return true;
	else return false;
	
	mysqli_free_result($ConsultaFuncion);
}

////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////

function comprobarDiscountCode($discountcode)
{
	global $con;
	
	$query_ConsultaFuncion = sprintf("SELECT code FROM discount WHERE code = %s ",
		 GetSQLValueString($discountcode, "text"));
	//echo $query_ConsultaFuncion;
	$ConsultaFuncion = mysqli_query($con,  $query_ConsultaFuncion) or die(mysqli_error($con));
	$row_ConsultaFuncion = mysqli_fetch_assoc($ConsultaFuncion);
	$totalRows_ConsultaFuncion = mysqli_num_rows($ConsultaFuncion);
	
	if ($totalRows_ConsultaFuncion!=0) 
		return true;
	else return false;
	
	mysqli_free_result($ConsultaFuncion);
}

////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////

function comprobarcodeunico($codeunico)
{
	global $con;
	
	$query_ConsultaFuncion = sprintf("SELECT code FROM adm_discount_list WHERE code = %s ",
		 GetSQLValueString($codeunico, "text"));
	//echo $query_ConsultaFuncion;
	$ConsultaFuncion = mysqli_query($con,  $query_ConsultaFuncion) or die(mysqli_error($con));
	$row_ConsultaFuncion = mysqli_fetch_assoc($ConsultaFuncion);
	$totalRows_ConsultaFuncion = mysqli_num_rows($ConsultaFuncion);
	
	if ($totalRows_ConsultaFuncion==0) 
		return true;
	else return false;
	
	mysqli_free_result($ConsultaFuncion);
}

////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////

function quantiCode($discCode, $cantidadcode)
{
	global $con;
	
	$query_ConsultaFuncion = sprintf("SELECT * FROM discount WHERE code = %s AND quanti > %s ",
			GetSQLValueString($discCode, "text"),
			GetSQLValueString($cantidadcode, "int"));
	//echo $query_ConsultaFuncion;
	$ConsultaFuncion = mysqli_query($con,  $query_ConsultaFuncion) or die(mysqli_error($con));
	$row_ConsultaFuncion = mysqli_fetch_assoc($ConsultaFuncion);
	$totalRows_ConsultaFuncion = mysqli_num_rows($ConsultaFuncion);
	
	if ($totalRows_ConsultaFuncion!=0) 
		return true;
	else return false;
	
	mysqli_free_result($ConsultaFuncion);
}

////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////

function dateConfirm($dCode, $startDate, $stopDate)
{
	global $con;
	
	$query_ConsultaFuncion = sprintf("SELECT * FROM discount WHERE code = %s AND start_date <= %s AND stop_date > %s",
										GetSQLValueString($dCode, "text"),
										GetSQLValueString($startDate, "text"),
										GetSQLValueString($stopDate, "text"));
	//echo $query_ConsultaFuncion;
	$ConsultaFuncion = mysqli_query($con, $query_ConsultaFuncion) or die(mysqli_error($con));
	$row_ConsultaFuncion = mysqli_fetch_assoc($ConsultaFuncion);
	$totalRows_ConsultaFuncion = mysqli_num_rows($ConsultaFuncion);
	
	if ($totalRows_ConsultaFuncion!=0) 
		return true;
	else return false;
	
	mysqli_free_result($ConsultaFuncion);
}

////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////

function confirmCodeTrue($theUser, $termAct)
{
	global $con;
	
	$query_ConsultaFuncion = sprintf("SELECT * FROM cart WHERE id_student = %s AND id_term = %s AND discountcode IS NOT NULL",
			GetSQLValueString($theUser, "int"),
			GetSQLValueString($termAct, "int"));
	//echo $query_ConsultaFuncion;
	$ConsultaFuncion = mysqli_query($con,  $query_ConsultaFuncion) or die(mysqli_error($con));
	$row_ConsultaFuncion = mysqli_fetch_assoc($ConsultaFuncion);
	$totalRows_ConsultaFuncion = mysqli_num_rows($ConsultaFuncion);
	
	if ($totalRows_ConsultaFuncion!=0) 
		return false;
	else return true;
	
	mysqli_free_result($ConsultaFuncion);
}

////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////

function comprobaremailcliente($clienteUnico)
{
	global $con;
	
	$query_ConsultaFuncion = sprintf("SELECT email FROM clients WHERE email = %s ",
		 GetSQLValueString($clienteUnico, "text"));
	//echo $query_ConsultaFuncion;
	$ConsultaFuncion = mysqli_query($con,  $query_ConsultaFuncion) or die(mysqli_error($con));
	$row_ConsultaFuncion = mysqli_fetch_assoc($ConsultaFuncion);
	$totalRows_ConsultaFuncion = mysqli_num_rows($ConsultaFuncion);
	
	if ($totalRows_ConsultaFuncion==0) 
		return true;
	else return false;
	
	mysqli_free_result($ConsultaFuncion);
}

////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////

function ObtenerIDUsuario($Umail)
{
	global $con;
	
	$query_ConsultaFuncion = sprintf("SELECT id_user FROM users WHERE mail = %s ",
		 GetSQLValueString($Umail, "text"));
	//echo $query_ConsultaFuncion;
	$ConsultaFuncion = mysqli_query($con,  $query_ConsultaFuncion) or die(mysqli_error($con));
	$row_ConsultaFuncion = mysqli_fetch_assoc($ConsultaFuncion);
	$totalRows_ConsultaFuncion = mysqli_num_rows($ConsultaFuncion);
	
	return $row_ConsultaFuncion["id_user"];	
	
	mysqli_free_result($ConsultaFuncion);
}

////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////

function ObtenerNombreUsuario($nombre)
{
	global $con;
	
	$query_ConsultaFuncion = sprintf("SELECT name FROM users WHERE id_user = %s ",
		 GetSQLValueString($nombre, "int"));
	//echo $query_ConsultaFuncion;
	$ConsultaFuncion = mysqli_query($con,  $query_ConsultaFuncion) or die(mysqli_error($con));
	$row_ConsultaFuncion = mysqli_fetch_assoc($ConsultaFuncion);
	$totalRows_ConsultaFuncion = mysqli_num_rows($ConsultaFuncion);
	
	return $row_ConsultaFuncion["name"];	
	
	mysqli_free_result($ConsultaFuncion);
}

////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////

function ObtenerApellidoUsuario($apellido)
{
	global $con;
	
	$query_ConsultaFuncion = sprintf("SELECT surname FROM users WHERE id_user = %s ",
		 GetSQLValueString($apellido, "int"));
	//echo $query_ConsultaFuncion;
	$ConsultaFuncion = mysqli_query($con,  $query_ConsultaFuncion) or die(mysqli_error($con));
	$row_ConsultaFuncion = mysqli_fetch_assoc($ConsultaFuncion);
	$totalRows_ConsultaFuncion = mysqli_num_rows($ConsultaFuncion);
	
	return $row_ConsultaFuncion["surname"];	
	
	mysqli_free_result($ConsultaFuncion);
}

////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////

function ObtenerTelefonoUsuario($telefonU)
{
	global $con;
	
	$query_ConsultaFuncion = sprintf("SELECT telefon FROM users WHERE id_user = %s ",
		 GetSQLValueString($telefonU, "int"));
	//echo $query_ConsultaFuncion;
	$ConsultaFuncion = mysqli_query($con,  $query_ConsultaFuncion) or die(mysqli_error($con));
	$row_ConsultaFuncion = mysqli_fetch_assoc($ConsultaFuncion);
	$totalRows_ConsultaFuncion = mysqli_num_rows($ConsultaFuncion);
	
	return $row_ConsultaFuncion["telefon"];	
	
	mysqli_free_result($ConsultaFuncion);
}

////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////

function ObtenerMailUsuario($mailU)
{
	global $con;
	
	$query_ConsultaFuncion = sprintf("SELECT mail FROM users WHERE id_user = %s ",
		 GetSQLValueString($mailU, "int"));
	//echo $query_ConsultaFuncion;
	$ConsultaFuncion = mysqli_query($con,  $query_ConsultaFuncion) or die(mysqli_error($con));
	$row_ConsultaFuncion = mysqli_fetch_assoc($ConsultaFuncion);
	$totalRows_ConsultaFuncion = mysqli_num_rows($ConsultaFuncion);
	
	return $row_ConsultaFuncion["mail"];	
	
	mysqli_free_result($ConsultaFuncion);
}

////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////

function ObtenerPasswordUsuario($passwordU)
{
	global $con;
	
	$query_ConsultaFuncion = sprintf("SELECT password FROM users WHERE id_user = %s ",
		 GetSQLValueString($passwordU, "int"));
	//echo $query_ConsultaFuncion;
	$ConsultaFuncion = mysqli_query($con,  $query_ConsultaFuncion) or die(mysqli_error($con));
	$row_ConsultaFuncion = mysqli_fetch_assoc($ConsultaFuncion);
	$totalRows_ConsultaFuncion = mysqli_num_rows($ConsultaFuncion);
	
	return $row_ConsultaFuncion["password"];	
	
	mysqli_free_result($ConsultaFuncion);
}

////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////

function showPermissions($multiUserID, $permissionID)
{
	global $con;
	
	$query_ConsultaFuncion = sprintf("SELECT * FROM multi_user_access WHERE id_user = %s AND permissions = %s",
									GetSQLValueString($multiUserID, "int"),
									GetSQLValueString($permissionID, "text"));
	//echo $query_ConsultaFuncion;
	$ConsultaFuncion = mysqli_query($con,  $query_ConsultaFuncion) or die(mysqli_error($con));
	$row_ConsultaFuncion = mysqli_fetch_assoc($ConsultaFuncion);
	$totalRows_ConsultaFuncion = mysqli_num_rows($ConsultaFuncion);
	
	if ($totalRows_ConsultaFuncion > 0) 
		return true;
	else return false;
	
	mysqli_free_result($ConsultaFuncion);
}

////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////

function showCousePCode($pCodeID, $pCourseID)
{
	global $con;
	
	$query_ConsultaFuncion = sprintf("SELECT * FROM discount WHERE id_code = %s AND id_course = %s",
									GetSQLValueString($pCodeID, "int"),
									GetSQLValueString($pCourseID, "text"));
	//echo $query_ConsultaFuncion;
	$ConsultaFuncion = mysqli_query($con,  $query_ConsultaFuncion) or die(mysqli_error($con));
	$row_ConsultaFuncion = mysqli_fetch_assoc($ConsultaFuncion);
	$totalRows_ConsultaFuncion = mysqli_num_rows($ConsultaFuncion);
	
	if ($totalRows_ConsultaFuncion > 0) 
		return true;
	else return false;
	
	mysqli_free_result($ConsultaFuncion);
}

////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////

function ObtenerIdCliente($clienteEmail)
{
	global $con;
	
	$query_ConsultaFuncion = sprintf("SELECT id_client FROM clients WHERE email = %s ",
		 GetSQLValueString($clienteEmail, "text"));
	//echo $query_ConsultaFuncion;
	$ConsultaFuncion = mysqli_query($con,  $query_ConsultaFuncion) or die(mysqli_error($con));
	$row_ConsultaFuncion = mysqli_fetch_assoc($ConsultaFuncion);
	$totalRows_ConsultaFuncion = mysqli_num_rows($ConsultaFuncion);
	
	return $row_ConsultaFuncion["id_client"];	
	
	mysqli_free_result($ConsultaFuncion);
}

////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////

function ObtenerNombreParaBuscar($nombresarch)
{
	global $con;
	
	$query_ConsultaFuncion = sprintf("SELECT id_client FROM clients WHERE name = %s ",
		 GetSQLValueString($nombresarch, "text"));
	//echo $query_ConsultaFuncion;
	$ConsultaFuncion = mysqli_query($con,  $query_ConsultaFuncion) or die(mysqli_error($con));
	$row_ConsultaFuncion = mysqli_fetch_assoc($ConsultaFuncion);
	$totalRows_ConsultaFuncion = mysqli_num_rows($ConsultaFuncion);
	
	return $row_ConsultaFuncion["id_client"];	
	
	mysqli_free_result($ConsultaFuncion);
}

////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////

function ObtenerApellidoParaBuscar($apellidosarch)
{
	global $con;
	
	$query_ConsultaFuncion = sprintf("SELECT id_client FROM clients WHERE surname = %s ",
		 GetSQLValueString($apellidosarch, "text"));
	//echo $query_ConsultaFuncion;
	$ConsultaFuncion = mysqli_query($con,  $query_ConsultaFuncion) or die(mysqli_error($con));
	$row_ConsultaFuncion = mysqli_fetch_assoc($ConsultaFuncion);
	$totalRows_ConsultaFuncion = mysqli_num_rows($ConsultaFuncion);
	
	return $row_ConsultaFuncion["id_client"];	
	
	mysqli_free_result($ConsultaFuncion);
}

////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////

function ObtenerAnoUsuario($year)
{
	global $con;
	
	$query_ConsultaFuncion = sprintf("SELECT year FROM users WHERE id_user = %s ",
		 GetSQLValueString($year, "int"));
	//echo $query_ConsultaFuncion;
	$ConsultaFuncion = mysqli_query($con,  $query_ConsultaFuncion) or die(mysqli_error($con));
	$row_ConsultaFuncion = mysqli_fetch_assoc($ConsultaFuncion);
	$totalRows_ConsultaFuncion = mysqli_num_rows($ConsultaFuncion);
	
	return $row_ConsultaFuncion["year"];	
	
	mysqli_free_result($ConsultaFuncion);
}

////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////

function ObtenerCursos($cursos)
{
	global $con;
	
	$query_ConsultaFuncion = sprintf("SELECT * FROM courses WHERE status = 1 ORDER BY id_user ASC");
	
	$ConsultaFuncion = mysqli_query($con,  $query_ConsultaFuncion) or die(mysqli_error($con));
	$row_ConsultaFuncion = mysqli_fetch_assoc($ConsultaFuncion);
	$totalRows_ConsultaFuncion = mysqli_num_rows($ConsultaFuncion);

	?>   
    <?php
	if ($totalRows_ConsultaFuncion > 0) {
		do {
			?> 
		<option value="<?php echo $row_ConsultaFuncion['id_courses']?>"><?php echo $row_ConsultaFuncion['name']?></option>
	<?php
		} while ($row_ConsultaFuncion = mysqli_fetch_assoc($ConsultaFuncion));
	}
		 
	mysqli_free_result($ConsultaFuncion);
}

////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////

function SemanasParaMail($clientSem, $prod)
{
	global $con;
	
	$query_ConsultaFuncion = sprintf("SELECT * FROM cart WHERE id_client=%s AND id_product=%s AND discountcode IS NULL AND transaction_made!=0 ORDER BY id_counter ASC",
										GetSQLValueString($clientSem, "int"),
										GetSQLValueString($prod, "int"));
	$ConsultaFuncion = mysqli_query($con,  $query_ConsultaFuncion) or die(mysqli_error($con));
	$row_ConsultaFuncion = mysqli_fetch_assoc($ConsultaFuncion);
	$totalRows_ConsultaFuncion = mysqli_num_rows($ConsultaFuncion);

	?>
			<div style="width:680px; margin-top:230px; position:absolute;">
	<?php
			if ($totalRows_ConsultaFuncion > 0) { 
				do { 

			$priceWeek2 = ObtenerPrecioSemana($row_ConsultaFuncion['id_week']) + ObtenerPrecioProducto($prod);
			?> 
			
				<table width="100%" border="0" cellspacing="0" cellpadding="0">
					<tr height="20">
						<td colspan="1" width="40%" valign="middle" align="left" style="color: #666; font-size: 14px;">
							
						</td>
						<td colspan="1" width="15%" valign="middle" align="left" style="color: #666; font-size: 14px;">
							
						</td>
						<td colspan="1" width="25%" valign="middle" align="left" style="color: #666; font-size: 14px;">
							<?php echo ObtenerNombreSemana($row_ConsultaFuncion['id_week']); ?>
						</td>
						<td colspan="1" width="20%" valign="middle" align="left" style="color: #666; font-size: 14px;">
							<?php echo $priceWeek2; ?> SEK
						</td>
					</tr>
				</table>
			<?php $TotalSinImpuest2 = $TotalSinImpuest2 + $priceWeek2; ?>
			<?php
				} while ($row_ConsultaFuncion = mysqli_fetch_assoc($ConsultaFuncion));
			}
			?>
			
			</div>
			<?php
		 
	mysqli_free_result($ConsultaFuncion);
}

////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////

// function ObtenerNombreTermin($nombreTermin)
// {
// 	global $con;
	
// 	$query_ConsultaFuncion = sprintf("SELECT term_name FROM term WHERE id_term = %s ",
// 		 								GetSQLValueString($nombreTermin, "int"));
// 	//echo $query_ConsultaFuncion;
// 	$ConsultaFuncion = mysqli_query($con,  $query_ConsultaFuncion) or die(mysqli_error($con));
// 	$row_ConsultaFuncion = mysqli_fetch_assoc($ConsultaFuncion);
// 	$totalRows_ConsultaFuncion = mysqli_num_rows($ConsultaFuncion);
	
// 	return $row_ConsultaFuncion["term_name"];	
	
// 	mysqli_free_result($ConsultaFuncion);
// }

////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////

function ObtenerNombreProducto($nombreProducto)
{
	global $con;
	
	$query_ConsultaFuncion = sprintf("SELECT name FROM products WHERE id_product = %s ",
		 GetSQLValueString($nombreProducto, "int"));
	//echo $query_ConsultaFuncion;
	$ConsultaFuncion = mysqli_query($con,  $query_ConsultaFuncion) or die(mysqli_error($con));
	$row_ConsultaFuncion = mysqli_fetch_assoc($ConsultaFuncion);
	$totalRows_ConsultaFuncion = mysqli_num_rows($ConsultaFuncion);
	
	return $row_ConsultaFuncion["name"];	
	
	mysqli_free_result($ConsultaFuncion);
}

////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////

function ObtenerPrecioProducto($precioProducto)
{
	global $con;
	
	$query_ConsultaFuncion = sprintf("SELECT price FROM products WHERE id_product = %s ",
		 GetSQLValueString($precioProducto, "int"));
	//echo $query_ConsultaFuncion;
	$ConsultaFuncion = mysqli_query($con,  $query_ConsultaFuncion) or die(mysqli_error($con));
	$row_ConsultaFuncion = mysqli_fetch_assoc($ConsultaFuncion);
	$totalRows_ConsultaFuncion = mysqli_num_rows($ConsultaFuncion);
	
	return $row_ConsultaFuncion["price"];	
	
	mysqli_free_result($ConsultaFuncion);
}

////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////

function ObtenerCiudadProducto($ciudadProducto)
{
	global $con;
	
	$query_ConsultaFuncion = sprintf("SELECT city_name FROM cities WHERE id_city = %s ",
		 GetSQLValueString($ciudadProducto, "int"));
	//echo $query_ConsultaFuncion;
	$ConsultaFuncion = mysqli_query($con,  $query_ConsultaFuncion) or die(mysqli_error($con));
	$row_ConsultaFuncion = mysqli_fetch_assoc($ConsultaFuncion);
	$totalRows_ConsultaFuncion = mysqli_num_rows($ConsultaFuncion);
	
	return $row_ConsultaFuncion["city_name"];	
	
	mysqli_free_result($ConsultaFuncion);
}

////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////

function ObtenerNombreSemana($nombreSemana)
{
	global $con;
	
	$query_ConsultaFuncion = sprintf("SELECT week FROM weeks WHERE id_week = %s ",
		 GetSQLValueString($nombreSemana, "int"));
	//echo $query_ConsultaFuncion;
	$ConsultaFuncion = mysqli_query($con,  $query_ConsultaFuncion) or die(mysqli_error($con));
	$row_ConsultaFuncion = mysqli_fetch_assoc($ConsultaFuncion);
	$totalRows_ConsultaFuncion = mysqli_num_rows($ConsultaFuncion);
	
	return $row_ConsultaFuncion["week"];	
	
	mysqli_free_result($ConsultaFuncion);
}

////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////

function ObtenerPrecioSemana($precioSemana)
{
	global $con;
	
	$query_ConsultaFuncion = sprintf("SELECT price FROM weeks WHERE id_week = %s ",
		 GetSQLValueString($precioSemana, "int"));
	//echo $query_ConsultaFuncion;
	$ConsultaFuncion = mysqli_query($con,  $query_ConsultaFuncion) or die(mysqli_error($con));
	$row_ConsultaFuncion = mysqli_fetch_assoc($ConsultaFuncion);
	$totalRows_ConsultaFuncion = mysqli_num_rows($ConsultaFuncion);
	
	return $row_ConsultaFuncion["price"];	
	
	mysqli_free_result($ConsultaFuncion);
}

////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////

function semanasInactiva($idSem)
{
	global $con;
	
	$query_ConsultaFuncion = sprintf("SELECT * FROM weeks WHERE id_week = %s AND status = 0",
										 GetSQLValueString($idSem, "int"));
	// echo $query_ConsultaFuncion;
	$ConsultaFuncion = mysqli_query($con,  $query_ConsultaFuncion) or die(mysqli_error($con));
	$row_ConsultaFuncion = mysqli_fetch_assoc($ConsultaFuncion);
	$totalRows_ConsultaFuncion = mysqli_num_rows($ConsultaFuncion);
	
	if ($totalRows_ConsultaFuncion != 0) 
		return false;
	else return true;
	
	mysqli_free_result($ConsultaFuncion);
}

////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////

function semanasCojidas($idPro, $idWeek)
{
	global $con;
	
	$query_ConsultaFuncion = sprintf("SELECT * FROM cart WHERE id_product = %s AND id_week = %s AND status != 0",
										 GetSQLValueString($idPro, "int"),
										 GetSQLValueString($idWeek, "int"));
	// echo $query_ConsultaFuncion;
	$ConsultaFuncion = mysqli_query($con,  $query_ConsultaFuncion) or die(mysqli_error($con));
	$row_ConsultaFuncion = mysqli_fetch_assoc($ConsultaFuncion);
	$totalRows_ConsultaFuncion = mysqli_num_rows($ConsultaFuncion);
	
	if ($totalRows_ConsultaFuncion != 0) 
		return false;
	else return true;
	
	mysqli_free_result($ConsultaFuncion);
}

////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////

function ObtenerEsquemaCurso($nombreCurso) 
{
	global $con;
	
	$query_ConsultaFuncion = sprintf("SELECT schedule FROM courses WHERE id_course = %s ",
		 GetSQLValueString($nombreCurso, "int"));
	//echo $query_ConsultaFuncion;
	$ConsultaFuncion = mysqli_query($con,  $query_ConsultaFuncion) or die(mysqli_error($con));
	$row_ConsultaFuncion = mysqli_fetch_assoc($ConsultaFuncion);
	$totalRows_ConsultaFuncion = mysqli_num_rows($ConsultaFuncion);
	
	return $row_ConsultaFuncion["schedule"];	
	
	mysqli_free_result($ConsultaFuncion);
}

////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////

function packet2($packet, $currentPacket)
{
	if ($packet >= $currentPacket) return "initial";
	return "none";
}

////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////

function ObtenerCursosSeleccionados($cursosSeleccionado)
{
	global $con;
	
	$query_ConsultaFuncion = sprintf("SELECT * FROM cart WHERE id_student=%s AND transaction_made!=0 ORDER BY id_counter ASC",
			GetSQLValueString($cursosSeleccionado, "int"));
	$ConsultaFuncion = mysqli_query($con,  $query_ConsultaFuncion) or die(mysqli_error($con));
	$row_ConsultaFuncion = mysqli_fetch_assoc($ConsultaFuncion);
	$totalRows_ConsultaFuncion = mysqli_num_rows($ConsultaFuncion);

?>
<?php
	if ($totalRows_ConsultaFuncion > 0) {
	do {
	?> 
			<p style="color:#999;"><?php echo ObtenerNombreCurso($row_ConsultaFuncion['id_course']);?></p>
	<?php
	} while ($row_ConsultaFuncion = mysqli_fetch_assoc($ConsultaFuncion));
	}

	mysqli_free_result($ConsultaFuncion);
}

////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////

// function productosRestantes($idEst, $idCous)
// {
// 	global $con;
	
// 	$query_ConsultaFuncion = sprintf("SELECT * FROM cart WHERE id_student = %s AND id_course = %s AND transaction_made = 0",
// 										 GetSQLValueString($idEst, "int"),
// 										 GetSQLValueString($idCous, "int"));
// 	//echo $query_ConsultaFuncion;
// 	$ConsultaFuncion = mysqli_query($con,  $query_ConsultaFuncion) or die(mysqli_error($con));
// 	$row_ConsultaFuncion = mysqli_fetch_assoc($ConsultaFuncion);
// 	$totalRows_ConsultaFuncion = mysqli_num_rows($ConsultaFuncion);
	
// 	if ($totalRows_ConsultaFuncion==0) 
// 		return true;
// 	else return false;
	
// 	mysqli_free_result($ConsultaFuncion);
// }

////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////

function productosRestantesEdit($idEstE, $idCousE, $tmE)
{
	global $con;
	
	$query_ConsultaFuncion = sprintf("SELECT * FROM cart WHERE id_student = %s AND id_course = %s AND transaction_made = %s",
										 GetSQLValueString($idEstE, "int"),
										 GetSQLValueString($idCousE, "int"),
										 GetSQLValueString($tmE, "int"));
	//echo $query_ConsultaFuncion;
	$ConsultaFuncion = mysqli_query($con,  $query_ConsultaFuncion) or die(mysqli_error($con));
	$row_ConsultaFuncion = mysqli_fetch_assoc($ConsultaFuncion);
	$totalRows_ConsultaFuncion = mysqli_num_rows($ConsultaFuncion);
	
	if ($totalRows_ConsultaFuncion==0) 
		return true;
	else return false;
	
	mysqli_free_result($ConsultaFuncion);
}

////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////

function SendMailHtml($destinatario, $contenido, $asunto)
{
	$mensaje = '<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<title>Documento sin título</title>
</head>

<body>';
	$mensaje.= $contenido;
$mensaje.='</body>
</html>';

	// Para enviar correo HTML, la cabecera Content-type debe definirse
	$cabeceras  = 'MIME-Version: 1.0' . "\n";
	$cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\n";
	// Cabeceras adicionales
	$cabeceras .= 'From: info@stallningshyra.se' . "\n";
	$cabeceras .= 'Bcc: info@stallningshyra.se' . "\n";
	
	// Enviarlo
	mail($destinatario, $asunto, $mensaje, $cabeceras);
	//echo $mensaje;
	
}

////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////

function SendMailHtmlAprovado($destinatario, $contenido, $asunto)
{
	$mensaje = '<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<title>Documento sin título</title>
</head>

<body>
	<div class="theemail">';
	$mensaje.= $contenido;
$mensaje.='</div>
</body>
</html>';

	// Para enviar correo HTML, la cabecera Content-type debe definirse
	$cabeceras  = 'MIME-Version: 1.0' . "\n";
	$cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\n";
	// Cabeceras adicionales
	$cabeceras .= 'From: info@stallningshyra.se' . "\n";
	$cabeceras .= 'Bcc: info@stallningshyra.se' . "\n";
	
	// Enviarlo
	mail($destinatario, $asunto, $mensaje, $cabeceras);
	// echo $mensaje;
	
}

////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////

function ObtenerPrecioPacket($precio)
{
	global $con;
	
	$query_ConsultaFuncion = sprintf("SELECT price FROM package WHERE id_package = %s ",
	GetSQLValueString($precio, "int"));
	//echo $query_ConsultaFuncion;
	$ConsultaFuncion = mysqli_query($con,  $query_ConsultaFuncion) or die(mysqli_error($con));
	$row_ConsultaFuncion = mysqli_fetch_assoc($ConsultaFuncion);
	$totalRows_ConsultaFuncion = mysqli_num_rows($ConsultaFuncion);
	
	return $row_ConsultaFuncion["price"];	
	
	mysqli_free_result($ConsultaFuncion);
}

//DELETE//////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////

function ObtenerPaqueteCursos($idstudiante, $idtransaccion)
{
	global $con;
	
	$query_ConsultaFuncion = sprintf("SELECT * FROM cart WHERE id_student=%s AND transaction_made=%s",
							GetSQLValueString($idstudiante, "int"),
							GetSQLValueString($idtransaccion, "int"));
	//echo $query_ConsultaFuncion;
	$ConsultaFuncion = mysqli_query($con,  $query_ConsultaFuncion) or die(mysqli_error($con));
	$row_ConsultaFuncion = mysqli_fetch_assoc($ConsultaFuncion);
	$totalRows_ConsultaFuncion = mysqli_num_rows($ConsultaFuncion);
	
	return $row_ConsultaFuncion["id_counter"];	
	
	mysqli_free_result($ConsultaFuncion);
}

////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////

function ObtenerNombrePacket($tipo)
{
	global $con;

	$query_ConsultaFuncion = sprintf("SELECT package_name FROM package WHERE id_package = %s ",
	GetSQLValueString($tipo, "int"));
	//echo $query_ConsultaFuncion;
	$ConsultaFuncion = mysqli_query($con,  $query_ConsultaFuncion) or die(mysqli_error($con));
	$row_ConsultaFuncion = mysqli_fetch_assoc($ConsultaFuncion);
	$totalRows_ConsultaFuncion = mysqli_num_rows($ConsultaFuncion);
	
	return $row_ConsultaFuncion["package_name"];	
	
	mysqli_free_result($ConsultaFuncion);
}

////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////

function GetStatus($getStatus)
{
	if ($getStatus == 2) return "Waiting";
	if ($getStatus == 1) return "Approved";
	if ($getStatus == 0) return "Cancelled";
}

////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////

function GetStatusColor($getStatusColor)
{
	if ($getStatusColor == 2) return "orange";
	if ($getStatusColor == 1) return "green";
	if ($getStatusColor == 0) return "red";
}

////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////

function cartSize($cartSize)
{
	if ($cartSize == 1) return "Small";
	if ($cartSize == 2) return "Medium";
	if ($cartSize == 3) return "Big";
}

////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////

function status($status)
{
	global $con;
	
	$query_ConsultaFuncion = sprintf("SELECT status FROM students WHERE id_student = %s ",
		 GetSQLValueString($status, "int"));
	//echo $query_ConsultaFuncion;
	$ConsultaFuncion = mysqli_query($con,  $query_ConsultaFuncion) or die(mysqli_error($con));
	$row_ConsultaFuncion = mysqli_fetch_assoc($ConsultaFuncion);
	$totalRows_ConsultaFuncion = mysqli_num_rows($ConsultaFuncion);
	
	return $row_ConsultaFuncion["status"];	
	
	mysqli_free_result($ConsultaFuncion);
}

////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////

function statusBinario($statusB)
{
	if ($statusB == 1) return "Aktiv";
	else return "Inaktiv";
}

////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////

function statusColors($statusC)
{
	if ($statusC == 0) return "border:2px solid rgb(68, 68, 68); color: #888;"; //inactiv
	//if ($statusC == 1) return ""; //activ
	if ($statusC == 2) return "border:2px solid rgb(245, 160, 3); color: rgb(245, 160, 3);"; //waiting
	if ($statusC == 3) return "border:2px solid rgb(221, 36, 3); color: rgb(221, 36, 3);"; //not paid
	//else return "";
}

////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////

function publicationsSite($site)
{
	if ($site == 1) return "Hem"; 
	if ($site == 2) return "Publication";
	if ($site == 3) return "Om oss";
}

////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////

function rank($rank)
{
	if ($rank == 0) return "Admin *";
	if ($rank == 1) return "Admin"; 
	if ($rank == 2) return "Suport";
	if ($rank == 3) return "Bookings manager";
	if ($rank == 4) return "Volunteer/Contributor";
	if ($rank == 5) return "Guide";
	//Admin * – somebody with access to the site network administration features and all other features. See the Create a Network article.
	//Administrator (slug: ‘administrator’) – somebody who has access to all the administration features within a single site.
	//Editor (slug: ‘editor’) – somebody who can publish and manage posts including the posts of other users.
	//Author  (slug: ‘author’)  – somebody who can publish and manage their own posts.
	//Contributor (slug: ‘contributor’) – somebody who can write and manage their own posts but cannot publish them.
	//Subscriber (slug: ‘subscriber’) – somebody who can only manage their profile.
}

////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////

function month($mes)
{
	if ($mes == 1) return "Jan";
	if ($mes == 2) return "Feb";
	if ($mes == 3) return "Mar";
	if ($mes == 4) return "Apr";
	if ($mes == 5) return "May";
	if ($mes == 6) return "Jun";
	if ($mes == 7) return "Jul";
	if ($mes == 8) return "Aug";
	if ($mes == 9) return "Sept";
	if ($mes == 10) return "Oct";
	if ($mes == 11) return "Nob";
	if ($mes == 12) return "Dec";
}

////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////

function ObtenerNombreCliente($nombreC)
{
	global $con;
	
	$query_ConsultaFuncion = sprintf("SELECT name FROM clients WHERE id_client = %s ",
		 GetSQLValueString($nombreC, "int"));
	//echo $query_ConsultaFuncion;
	$ConsultaFuncion = mysqli_query($con,  $query_ConsultaFuncion) or die(mysqli_error($con));
	$row_ConsultaFuncion = mysqli_fetch_assoc($ConsultaFuncion);
	$totalRows_ConsultaFuncion = mysqli_num_rows($ConsultaFuncion);
	
	return $row_ConsultaFuncion["name"];	
	
	mysqli_free_result($ConsultaFuncion);
}

////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////

function ObtenerApellidoCliente($apellidoC)
{
	global $con;
	
	$query_ConsultaFuncion = sprintf("SELECT surname FROM clients WHERE id_client = %s ",
		 GetSQLValueString($apellidoC, "int"));
	//echo $query_ConsultaFuncion;
	$ConsultaFuncion = mysqli_query($con,  $query_ConsultaFuncion) or die(mysqli_error($con));
	$row_ConsultaFuncion = mysqli_fetch_assoc($ConsultaFuncion);
	$totalRows_ConsultaFuncion = mysqli_num_rows($ConsultaFuncion);
	
	return $row_ConsultaFuncion["surname"];	
	
	mysqli_free_result($ConsultaFuncion);
}

////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////

function ObtenerTelefonoCliente($telefonoC)
{
	global $con;
	
	$query_ConsultaFuncion = sprintf("SELECT telephone FROM clients WHERE id_client = %s ",
		 GetSQLValueString($telefonoC, "int"));
	//echo $query_ConsultaFuncion;
	$ConsultaFuncion = mysqli_query($con,  $query_ConsultaFuncion) or die(mysqli_error($con));
	$row_ConsultaFuncion = mysqli_fetch_assoc($ConsultaFuncion);
	$totalRows_ConsultaFuncion = mysqli_num_rows($ConsultaFuncion);
	
	return $row_ConsultaFuncion["telephone"];	
	
	mysqli_free_result($ConsultaFuncion);
}

////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////

function ObtenerEmailCliente($emailC)
{
	global $con;
	
	$query_ConsultaFuncion = sprintf("SELECT email FROM clients WHERE id_client = %s ",
		 GetSQLValueString($emailC, "int"));
	//echo $query_ConsultaFuncion;
	$ConsultaFuncion = mysqli_query($con,  $query_ConsultaFuncion) or die(mysqli_error($con));
	$row_ConsultaFuncion = mysqli_fetch_assoc($ConsultaFuncion);
	$totalRows_ConsultaFuncion = mysqli_num_rows($ConsultaFuncion);
	
	return $row_ConsultaFuncion["email"];	
	
	mysqli_free_result($ConsultaFuncion);
}

////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////

function ObtenerNumeroPCliente($numeroPC)
{
	global $con;
	
	$query_ConsultaFuncion = sprintf("SELECT personal_number FROM clients WHERE id_client = %s ",
		 GetSQLValueString($numeroPC, "int"));
	//echo $query_ConsultaFuncion;
	$ConsultaFuncion = mysqli_query($con,  $query_ConsultaFuncion) or die(mysqli_error($con));
	$row_ConsultaFuncion = mysqli_fetch_assoc($ConsultaFuncion);
	$totalRows_ConsultaFuncion = mysqli_num_rows($ConsultaFuncion);
	
	return $row_ConsultaFuncion["personal_number"];	
	
	mysqli_free_result($ConsultaFuncion);
}

////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////

function ObtenerAdressCliente($Adress)
{
	global $con;
	
	$query_ConsultaFuncion = sprintf("SELECT adress FROM clients WHERE id_client = %s ",
		 GetSQLValueString($Adress, "int"));
	//echo $query_ConsultaFuncion;
	$ConsultaFuncion = mysqli_query($con,  $query_ConsultaFuncion) or die(mysqli_error($con));
	$row_ConsultaFuncion = mysqli_fetch_assoc($ConsultaFuncion);
	$totalRows_ConsultaFuncion = mysqli_num_rows($ConsultaFuncion);
	
	return $row_ConsultaFuncion["adress"];	
	
	mysqli_free_result($ConsultaFuncion);
}

////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////

function ObtenerPostCiente($Post)
{
	global $con;
	
	$query_ConsultaFuncion = sprintf("SELECT post FROM clients WHERE id_client = %s ",
		 GetSQLValueString($Post, "int"));
	//echo $query_ConsultaFuncion;
	$ConsultaFuncion = mysqli_query($con,  $query_ConsultaFuncion) or die(mysqli_error($con));
	$row_ConsultaFuncion = mysqli_fetch_assoc($ConsultaFuncion);
	$totalRows_ConsultaFuncion = mysqli_num_rows($ConsultaFuncion);
	
	return $row_ConsultaFuncion["post"];	
	
	mysqli_free_result($ConsultaFuncion);
}

////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////

function ObtenerCityCliente($City)
{
	global $con;
	
	$query_ConsultaFuncion = sprintf("SELECT city FROM clients WHERE id_client = %s ",
		 GetSQLValueString($City, "int"));
	//echo $query_ConsultaFuncion;
	$ConsultaFuncion = mysqli_query($con,  $query_ConsultaFuncion) or die(mysqli_error($con));
	$row_ConsultaFuncion = mysqli_fetch_assoc($ConsultaFuncion);
	$totalRows_ConsultaFuncion = mysqli_num_rows($ConsultaFuncion);
	
	return $row_ConsultaFuncion["city"];	
	
	mysqli_free_result($ConsultaFuncion);
}

////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////

// function sexfilter($sexF)
// {
// 	global $con;
	
// 	$query_ConsultaFuncion = sprintf("SELECT * FROM students WHERE id_student = %s and sex='Kvinna' ",
// 		 GetSQLValueString($sexF, "int"));
// 	//echo $query_ConsultaFuncion;
// 	$ConsultaFuncion = mysqli_query($con,  $query_ConsultaFuncion) or die(mysqli_error($con));
// 	$row_ConsultaFuncion = mysqli_fetch_assoc($ConsultaFuncion);
// 	$totalRows_ConsultaFuncion = mysqli_num_rows($ConsultaFuncion);
	
// 	return $row_ConsultaFuncion["sex"];	
	
// 	mysqli_free_result($ConsultaFuncion);
// }

////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////

function statusS($statusS)
{
	global $con;
	
	$query_ConsultaFuncion = sprintf("SELECT status FROM students WHERE id_student = %s ",
		 GetSQLValueString($statusS, "int"));
	//echo $query_ConsultaFuncion;
	$ConsultaFuncion = mysqli_query($con,  $query_ConsultaFuncion) or die(mysqli_error($con));
	$row_ConsultaFuncion = mysqli_fetch_assoc($ConsultaFuncion);
	$totalRows_ConsultaFuncion = mysqli_num_rows($ConsultaFuncion);
	
	return $row_ConsultaFuncion["status"];	
	
	mysqli_free_result($ConsultaFuncion);
}

////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////

function OptenerCarreta($carroCliente)
{
	global $con;
	
	$query_ConsultaFuncion = sprintf("SELECT * FROM product_selected WHERE confirmed = %s ",
		 GetSQLValueString($carroCliente, "int"));
	//echo $query_ConsultaFuncion;
	$ConsultaFuncion = mysqli_query($con,  $query_ConsultaFuncion) or die(mysqli_error($con));
	$row_ConsultaFuncion = mysqli_fetch_assoc($ConsultaFuncion);
	$totalRows_ConsultaFuncion = mysqli_num_rows($ConsultaFuncion);

	return $row_ConsultaFuncion["product"];
	
	mysqli_free_result($ConsultaFuncion);
}

////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////

function NombreCarreta($carroNombre)
{
	global $con;
	
	$query_ConsultaFuncion = sprintf("SELECT * FROM products WHERE id_product = %s",
		 GetSQLValueString($carroNombre, "int"));
	//echo $query_ConsultaFuncion;
	$ConsultaFuncion = mysqli_query($con,  $query_ConsultaFuncion) or die(mysqli_error($con));
	$row_ConsultaFuncion = mysqli_fetch_assoc($ConsultaFuncion);
	$totalRows_ConsultaFuncion = mysqli_num_rows($ConsultaFuncion);

	return $row_ConsultaFuncion["name"];
	
	mysqli_free_result($ConsultaFuncion);
}

////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////

function Mesabreviado($varmesabrev)
{
	if ($varmesabrev == 1) return "JAN";
	if ($varmesabrev == 2) return "FEB";
	if ($varmesabrev == 3) return "MAR";
	if ($varmesabrev == 4) return "APR";
	if ($varmesabrev == 5) return "MAJ";
	if ($varmesabrev == 6) return "JUN";
	if ($varmesabrev == 7) return "JUL";
	if ($varmesabrev == 8) return "AUG";
	if ($varmesabrev == 9) return "SEP";
	if ($varmesabrev == 10) return "OCT";
	if ($varmesabrev == 11) return "NOV";
	if ($varmesabrev == 12) return "DEC";
}

////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////

function NombreCurso($varcurso)
{
	if ($varcurso == 1) return "Nybörjare";
	if ($varcurso == 2) return "Steg 2";
	if ($varcurso == 3) return "Steg 3";
	if ($varcurso == 4) return "Steg 4";
	if ($varcurso == 5) return "Open level";
	if ($varcurso == 6) return "";
	if ($varcurso == 7) return "Private class";
	if ($varcurso == 8) return "Nybörjare/Open level";
}

////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////

function NombreCursoColor($varcursocolor)
{
	if ($varcursocolor == 1) return "#97d1f7";
	if ($varcursocolor == 2) return "#2a86d1";
	if ($varcursocolor == 3) return "rgb(250, 211, 103)";
	if ($varcursocolor == 4) return "rgb(253, 173, 0)";
	if ($varcursocolor == 5) return "rgb(240, 121, 100)";
	if ($varcursocolor == 6) return "rgb(160, 72, 57)";
	if ($varcursocolor == 7) return "linear-gradient(to right, #999, #CCC, #999)";
}

////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////

function ConfirmacionPago($Paid, $now)
{
	global $con;
		$updateSQL = sprintf("UPDATE inscriptions SET done=%s WHERE id_student=%s AND date=%s",
			$Paid,
			$_SESSION["ydl_UserId"],
			$now);
  
  $Result1 = mysqli_query($con, $updateSQL) or die(mysqli_error($con));
	}

////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////

function TerminStop($stop, $datenow)
{
	global $con;
		$updateSQL = sprintf("UPDATE term SET status=%s WHERE status=1 AND term_stop<%s",
			$stop,
			$datenow);
  
  $Result1 = mysqli_query($con, $updateSQL) or die(mysqli_error($con));
}

////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////

function studentInactiv($stopactiv, $datenow2)
{
	global $con;
		$updateSQL = sprintf("UPDATE inscriptions SET status=%s WHERE status=1 AND term_stop<%s",
			$stopactiv,
			$datenow2);
  
  $Result1 = mysqli_query($con, $updateSQL) or die(mysqli_error($con));
	}

////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////

function categorianivel($padre)
{
	global $con;
	
	$query_ConsultaFuncion = sprintf("SELECT * FROM pages WHERE name!='' AND padre = %s",
	GetSQLValueString($padre, "int"));
	
	$ConsultaFuncion = mysqli_query($con, $query_ConsultaFuncion) or die(mysqli_error($con));
	$row_ConsultaFuncion = mysqli_fetch_assoc($ConsultaFuncion);
	$totalRows_ConsultaFuncion = mysqli_num_rows($ConsultaFuncion);

	if ($totalRows_ConsultaFuncion > 0) {
		do {
			?> 
		<div class="sub_cat">
			<ul>
				<li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row_ConsultaFuncion['name']?></li>
			</ul>
		</div>
	<?php
		} while ($row_ConsultaFuncion = mysqli_fetch_assoc($ConsultaFuncion));
	}
		 
	mysqli_free_result($ConsultaFuncion);
}

////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////

function divelement($padre2)
{
	global $con;
	
	$query_ConsultaFuncion = sprintf("SELECT * FROM pages WHERE padre2 = %s",
	GetSQLValueString($padre2, "int"));
	
	$ConsultaFuncion = mysqli_query($con, $query_ConsultaFuncion) or die(mysqli_error($con));
	$row_ConsultaFuncion = mysqli_fetch_assoc($ConsultaFuncion);
	$totalRows_ConsultaFuncion = mysqli_num_rows($ConsultaFuncion);

	$rwidth = $row_ConsultaFuncion['width']-$row_ConsultaFuncion['mleft']-$row_ConsultaFuncion['mright'];
	
		if ($totalRows_ConsultaFuncion > 0) {
		do {
		?>
		<?php
		$rwidth = $row_ConsultaFuncion['width']-$row_ConsultaFuncion['mleft']-$row_ConsultaFuncion['mright'];
		$rheight = $row_ConsultaFuncion['height']-$row_ConsultaFuncion['mtop']-$row_ConsultaFuncion['mbottom'];
		?>
		<div style="width:<?php echo $rwidth; ?>%; height:<?php echo $rheight; ?>px; box-shadow:<?php echo $row_ConsultaFuncion['shadow']; ?>; background:<?php echo $row_ConsultaFuncion['background']; ?>; <?php echo $row_ConsultaFuncion['border']; ?>:<?php echo $row_ConsultaFuncion['borderpx']; ?>px solid <?php echo $row_ConsultaFuncion['border_color']; ?>; border-radius:<?php echo $row_ConsultaFuncion['radius']; ?>px; margin:0.5% 0; margin-top:<?php echo $row_ConsultaFuncion['mtop']; ?>px; margin-right:<?php echo $row_ConsultaFuncion['mright']; ?>%; margin-bottom:<?php echo $row_ConsultaFuncion['mbottom']; ?>px; margin-left:<?php echo $row_ConsultaFuncion['mleft']; ?>%; float:left; overflow:hidden;">
			<div class="arternative" style="margin:0 5px 1px;">
				<button class="ele2btn">o o o</button>
				<div class="arternative-content">
					<a href="element_add.php?ele2id=<?php echo $row_ConsultaFuncion['id_page']; ?>" class="alt_button">Add Element</a>
					<a href="page_edit.php?bdivid=<?php echo $row_DatosPage['id_page']; ?>" class="alt_button">Edit Div</a>
					<a href="page_delete.php?DeleteEDivID=<?php echo $row_DatosPage['id_page']; ?>" class="alt_button">Delete</a>
				</div>
			</div>
			<div style="width:99%; height:100px; background-color:green; margin:0 auto; 1.5px">
			</div>
			<?php echo $rwidth; ?>
		</div>
		<?php
		} while ($row_ConsultaFuncion = mysqli_fetch_assoc($ConsultaFuncion));
	}
		 
	mysqli_free_result($ConsultaFuncion);
}

////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////


function comprobarpromocode($promocode)
{
	global $con;
	
	$query_ConsultaFuncion = sprintf("SELECT code FROM discount WHERE code = %s ",
		 GetSQLValueString($promocode, "text"));
	//echo $query_ConsultaFuncion;
	$ConsultaFuncion = mysqli_query($con,  $query_ConsultaFuncion) or die(mysqli_error($con));
	$row_ConsultaFuncion = mysqli_fetch_assoc($ConsultaFuncion);
	$totalRows_ConsultaFuncion = mysqli_num_rows($ConsultaFuncion);
	
	if ($totalRows_ConsultaFuncion!=0) 
		return true;
	else return false;
	
	mysqli_free_result($ConsultaFuncion);
}

////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////

function ObtenerPDescuento($Pdescuento)
{
	global $con;
	
	$query_ConsultaFuncion = sprintf("SELECT percent FROM pack_discount WHERE valor = %s ",
		 GetSQLValueString($Pdescuento, "int"));
	//echo $query_ConsultaFuncion;
	$ConsultaFuncion = mysqli_query($con,  $query_ConsultaFuncion) or die(mysqli_error($con));
	$row_ConsultaFuncion = mysqli_fetch_assoc($ConsultaFuncion);
	$totalRows_ConsultaFuncion = mysqli_num_rows($ConsultaFuncion);
	
	return $row_ConsultaFuncion["percent"];	
	
	mysqli_free_result($ConsultaFuncion);
}

////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////

function getPorDiscount($porDiscount, $courseDisc)
{
	global $con;
	
	$query_ConsultaFuncion = sprintf("SELECT * FROM discount WHERE code = %s AND id_course = %s",
									   GetSQLValueString($porDiscount, "text"),
									   GetSQLValueString($courseDisc, "int"));
	//echo $query_ConsultaFuncion;
	$ConsultaFuncion = mysqli_query($con,  $query_ConsultaFuncion) or die(mysqli_error($con));
	$row_ConsultaFuncion = mysqli_fetch_assoc($ConsultaFuncion);
	$totalRows_ConsultaFuncion = mysqli_num_rows($ConsultaFuncion);
	
	return $row_ConsultaFuncion["percent"];	
	
	mysqli_free_result($ConsultaFuncion);
}

////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////

function getMonDiscount($codDiscount, $courseDescontado)
{
	global $con;
	
	$query_ConsultaFuncion = sprintf("SELECT * FROM discount WHERE code = %s AND id_course = %s",
									   GetSQLValueString($codDiscount, "text"),
									   GetSQLValueString($courseDescontado, "int"));
	//echo $query_ConsultaFuncion;
	$ConsultaFuncion = mysqli_query($con,  $query_ConsultaFuncion) or die(mysqli_error($con));
	$row_ConsultaFuncion = mysqli_fetch_assoc($ConsultaFuncion);
	$totalRows_ConsultaFuncion = mysqli_num_rows($ConsultaFuncion);
	
	return $row_ConsultaFuncion["money"];	
	
	mysqli_free_result($ConsultaFuncion);
}

////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////

function ObtenerDisc($userSec, $periodA)
{
	global $con;
	
	$query_ConsultaFuncion = sprintf("SELECT discountcode FROM cart WHERE id_student = %s AND id_term = %s",
										 GetSQLValueString($userSec, "int"),
										 GetSQLValueString($periodA, "int"));
	//echo $query_ConsultaFuncion;
	$ConsultaFuncion = mysqli_query($con,  $query_ConsultaFuncion) or die(mysqli_error($con));
	$row_ConsultaFuncion = mysqli_fetch_assoc($ConsultaFuncion);
	$totalRows_ConsultaFuncion = mysqli_num_rows($ConsultaFuncion);
	
	return $row_ConsultaFuncion["discountcode"];	
	
	mysqli_free_result($ConsultaFuncion);
}

////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////

function ordenRegistrada($fechaActual, $clientActiv)
{
	global $con;
	
	$query_ConsultaFuncion = sprintf("SELECT * FROM inscriptions WHERE date = %s AND id_client = %s AND status = 2 ORDER BY id_insc ASC ",
		GetSQLValueString($fechaActual, "text"),
		GetSQLValueString($clientActiv, "int"));
	//echo $query_ConsultaFuncion;
	$ConsultaFuncion = mysqli_query($con,  $query_ConsultaFuncion) or die(mysqli_error($con));
	$row_ConsultaFuncion = mysqli_fetch_assoc($ConsultaFuncion);
	$totalRows_ConsultaFuncion = mysqli_num_rows($ConsultaFuncion);
	
	if ($totalRows_ConsultaFuncion!=0) 
		return false;
	else return true;	
	
	mysqli_free_result($ConsultaFuncion);
}

////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////

function ActualizacionProductSelectWeb($idInsc, $cliente, $dayinsc, $monthinsc, $yearinsc)
{
	global $con;
		$updateSQL = sprintf("UPDATE product_selected SET confirmed=%s WHERE id_client=%s AND day=%s AND month=%s AND year=%s AND confirmed= 1",
			$idInsc,
			$cliente,
			$dayinsc, 
			$monthinsc, 
			$yearinsc);
  
  $Result1 = mysqli_query($con, $updateSQL) or die(mysqli_error($con));
}

////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////

function ActualizacionCarrito($Inscription, $cliente)
{
	global $con;
		$updateSQL = sprintf("UPDATE cart SET transaction_made=%s WHERE id_client=%s AND transaction_made= 0",
			$Inscription,
			$cliente);
  
  $Result1 = mysqli_query($con, $updateSQL) or die(mysqli_error($con));
}

////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////

function ConfirmationPago($ano, $mes, $dia, $cliente, $product, $status, $payment, $TotalSinImpuest, $total)
{
	global $con;
	
	$insertSQL = sprintf("INSERT INTO inscriptions (date, year, month, day, time, id_client, name, surname, id_product, status, payment, subtotal, total) 
									VALUES (NOW(), %s, %s, %s, NOW(), %s, %s, %s, %s, %s, %s, %s, %s)",
									 GetSQLValueString($ano, "text"),
									 GetSQLValueString($mes, "text"),
									 GetSQLValueString($dia, "text"),
									 GetSQLValueString($cliente, "int"),
									 GetSQLValueString(ObtenerNombreCliente($cliente), "text"),
									 GetSQLValueString(ObtenerApellidoCliente($cliente), "text"),
									 GetSQLValueString($product, "int"),
									 GetSQLValueString($status, "int"),
									 GetSQLValueString($payment, "int"),
									 GetSQLValueString($TotalSinImpuest, "text"),
									 GetSQLValueString($total, "text"));
	//echo $insertSQL;
	$Result1 = mysqli_query($con, $insertSQL) or die(mysqli_error($con));
	$ultimacompra = mysqli_insert_id($con);
	ActualizacionCarrito($ultimacompra, $cliente);
	ActualizacionProductSelectWeb($ultimacompra, $cliente, $dia, $mes, $ano);
	
}

////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////

function ActualizacionProductSelect($idInsc, $clientadmin2, $dayinsc, $monthinsc, $yearinsc)
{
	global $con;
		$updateSQL = sprintf("UPDATE product_selected SET confirmed=%s WHERE id_client=%s AND day=%s AND month=%s AND year=%s AND confirmed= 1",
			$idInsc,
			$clientadmin2,
			$dayinsc, 
			$monthinsc, 
			$yearinsc);
  
  $Result1 = mysqli_query($con, $updateSQL) or die(mysqli_error($con));
}

////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////

function ActualizacionCarrito2($Inscription2, $clientadmin)
{
	global $con;
		$updateSQL = sprintf("UPDATE cart SET transaction_made=%s WHERE id_client=%s AND transaction_made= 0",
			$Inscription2,
			$clientadmin);
  
  $Result1 = mysqli_query($con, $updateSQL) or die(mysqli_error($con));
}

////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////

function ConfirmationDone($ano, $mes, $dia, $cliente, $product, $status, $payment, $TotalSinImpuest, $total)
{
	global $con;
	
	$insertSQL = sprintf("INSERT INTO inscriptions (date, year, month, day, time, id_client, name, surname, id_product, status, payment, subtotal, total) 
									VALUES (NOW(), %s, %s, %s, NOW(), %s, %s, %s, %s, %s, %s, %s, %s)",
									 GetSQLValueString($ano, "text"),
									 GetSQLValueString($mes, "text"),
									 GetSQLValueString($dia, "text"),
									 GetSQLValueString($cliente, "int"),
									 GetSQLValueString(ObtenerNombreCliente($cliente), "text"),
									 GetSQLValueString(ObtenerApellidoCliente($cliente), "text"),
									 GetSQLValueString($product, "int"),
									 GetSQLValueString($status, "int"),
									 GetSQLValueString($payment, "int"),
									 GetSQLValueString($TotalSinImpuest, "text"),
									 GetSQLValueString($total, "text"));
	//echo $insertSQL;
	$Result1 = mysqli_query($con, $insertSQL) or die(mysqli_error($con));
	$ultimacompra = mysqli_insert_id($con);
	ActualizacionCarrito2($ultimacompra, $cliente);
	ActualizacionProductSelect($ultimacompra, $cliente, $dia, $mes, $ano);
	
}

////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////

function ObtenerTransaccion($trans)
{
	global $con;
	
	$query_ConsultaFuncion = sprintf("SELECT * FROM cart WHERE id_student = %s ",
		 GetSQLValueString($trans, "int"));
	//echo $query_ConsultaFuncion;
	$ConsultaFuncion = mysqli_query($con,  $query_ConsultaFuncion) or die(mysqli_error($con));
	$row_ConsultaFuncion = mysqli_fetch_assoc($ConsultaFuncion);
	$totalRows_ConsultaFuncion = mysqli_num_rows($ConsultaFuncion);
	
	return $row_ConsultaFuncion["transaction_made"];	
	
	mysqli_free_result($ConsultaFuncion);
}

////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////

function ObtenerIDstudentDesdeTransaccion($transE)
{
	global $con;
	
	$query_ConsultaFuncion = sprintf("SELECT * FROM inscriptions WHERE id_insc = %s",
		 GetSQLValueString($transE, "int"));
	//echo $query_ConsultaFuncion;
	$ConsultaFuncion = mysqli_query($con,  $query_ConsultaFuncion) or die(mysqli_error($con));
	$row_ConsultaFuncion = mysqli_fetch_assoc($ConsultaFuncion);
	$totalRows_ConsultaFuncion = mysqli_num_rows($ConsultaFuncion);
	
	return $row_ConsultaFuncion["id_student"];	
	
	mysqli_free_result($ConsultaFuncion);
}

////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////

function seeOnFilter($seeFilter)
{
	global $con;
	
	$query_ConsultaFuncion = sprintf("SELECT * FROM inscriptions WHERE id_client = %s",
		 GetSQLValueString($seeFilter, "int"));
	//echo $query_ConsultaFuncion;
	$ConsultaFuncion = mysqli_query($con,  $query_ConsultaFuncion) or die(mysqli_error($con));
	$row_ConsultaFuncion = mysqli_fetch_assoc($ConsultaFuncion);
	$totalRows_ConsultaFuncion = mysqli_num_rows($ConsultaFuncion);
	
	return $row_ConsultaFuncion["id_insc"];	
	
	mysqli_free_result($ConsultaFuncion);
}

////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////

function inscTotal($inscTotal)
{
	global $con;
	
	$query_ConsultaFuncion = sprintf("SELECT * FROM inscriptions WHERE id_insc = %s",
		 GetSQLValueString($inscTotal, "int"));
	//echo $query_ConsultaFuncion;
	$ConsultaFuncion = mysqli_query($con,  $query_ConsultaFuncion) or die(mysqli_error($con));
	$row_ConsultaFuncion = mysqli_fetch_assoc($ConsultaFuncion);
	$totalRows_ConsultaFuncion = mysqli_num_rows($ConsultaFuncion);
	
	return $row_ConsultaFuncion["total"];	
	
	mysqli_free_result($ConsultaFuncion);
}

////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////

function statusInsc($statusInsc, $termSt)
{
	global $con;
	
	$query_ConsultaFuncion = sprintf("SELECT * FROM inscriptions WHERE id_student = %s AND term = %s",
										GetSQLValueString($statusInsc, "int"),
										GetSQLValueString($termSt, "int"));
	//echo $query_ConsultaFuncion;
	$ConsultaFuncion = mysqli_query($con,  $query_ConsultaFuncion) or die(mysqli_error($con));
	$row_ConsultaFuncion = mysqli_fetch_assoc($ConsultaFuncion);
	$totalRows_ConsultaFuncion = mysqli_num_rows($ConsultaFuncion);
	
	return $row_ConsultaFuncion["status"];	
	
	mysqli_free_result($ConsultaFuncion);
}

////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////

function obtenerTerminActivo($terminActiv, $termStatus)
{
	global $con;
	
	$query_ConsultaFuncion = sprintf("SELECT * FROM term WHERE term_stop = %s AND status = %s ORDER BY id_term DESC ",
		 GetSQLValueString($terminActiv, "text"),
		 GetSQLValueString($termStatus, "int"));
	//echo $query_ConsultaFuncion;
	$ConsultaFuncion = mysqli_query($con,  $query_ConsultaFuncion) or die(mysqli_error($con));
	$row_ConsultaFuncion = mysqli_fetch_assoc($ConsultaFuncion);
	$totalRows_ConsultaFuncion = mysqli_num_rows($ConsultaFuncion);
	
	if ($totalRows_ConsultaFuncion!=0) 
		return true;
	else return false;	
	
	mysqli_free_result($ConsultaFuncion);
}

////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////

function terminCaducado($statusTerm)
{
	global $con;
	
	$query_ConsultaFuncion = sprintf("SELECT * FROM term WHERE status = %s ORDER BY id_term ASC ",
		 GetSQLValueString($statusTerm, "int"));
	//echo $query_ConsultaFuncion;
	$ConsultaFuncion = mysqli_query($con,  $query_ConsultaFuncion) or die(mysqli_error($con));
	$row_ConsultaFuncion = mysqli_fetch_assoc($ConsultaFuncion);
	$totalRows_ConsultaFuncion = mysqli_num_rows($ConsultaFuncion);
	
	if ($totalRows_ConsultaFuncion!=0) 
		return false;
	else return true;	
	
	mysqli_free_result($ConsultaFuncion);
}

////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////

// function ncsnID($studID, $ncsn)
// {
// 	global $con;
	
// 	$query_ConsultaFuncion = sprintf("SELECT * FROM cart WHERE id_student=%s AND id_term=%s",
// 										 GetSQLValueString($studID, "int"),
// 										 GetSQLValueString($ncsn, "int"));
// 	//echo $query_ConsultaFuncion;
// 	$ConsultaFuncion = mysqli_query($con,  $query_ConsultaFuncion) or die(mysqli_error($con));
// 	$row_ConsultaFuncion = mysqli_fetch_assoc($ConsultaFuncion);
// 	$totalRows_ConsultaFuncion = mysqli_num_rows($ConsultaFuncion);
	
// 	return $row_ConsultaFuncion["transaction_made"];	
	
// 	mysqli_free_result($ConsultaFuncion);
// }

////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////

function discID($discID)
{
	global $con;
	
	$query_ConsultaFuncion = sprintf("SELECT id_adm_disc FROM adm_discount_list WHERE code=%s",
										 GetSQLValueString($discID, "text"));
	//echo $query_ConsultaFuncion;
	$ConsultaFuncion = mysqli_query($con,  $query_ConsultaFuncion) or die(mysqli_error($con));
	$row_ConsultaFuncion = mysqli_fetch_assoc($ConsultaFuncion);
	$totalRows_ConsultaFuncion = mysqli_num_rows($ConsultaFuncion);
	
	return $row_ConsultaFuncion["id_adm_disc"];	
	
	mysqli_free_result($ConsultaFuncion);
}

////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////

function discPerc($discPe)
{
	global $con;
	
	$query_ConsultaFuncion = sprintf("SELECT percent FROM adm_discount_list WHERE code=%s",
										 GetSQLValueString($discPe, "text"));
	//echo $query_ConsultaFuncion;
	$ConsultaFuncion = mysqli_query($con,  $query_ConsultaFuncion) or die(mysqli_error($con));
	$row_ConsultaFuncion = mysqli_fetch_assoc($ConsultaFuncion);
	$totalRows_ConsultaFuncion = mysqli_num_rows($ConsultaFuncion);
	
	return $row_ConsultaFuncion["percent"];	
	
	mysqli_free_result($ConsultaFuncion);
}

////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////

function discMoney($discMo)
{
	global $con;
	
	$query_ConsultaFuncion = sprintf("SELECT money FROM adm_discount_list WHERE code=%s",
										 GetSQLValueString($discMo, "text"));
	//echo $query_ConsultaFuncion;
	$ConsultaFuncion = mysqli_query($con,  $query_ConsultaFuncion) or die(mysqli_error($con));
	$row_ConsultaFuncion = mysqli_fetch_assoc($ConsultaFuncion);
	$totalRows_ConsultaFuncion = mysqli_num_rows($ConsultaFuncion);
	
	return $row_ConsultaFuncion["money"];	
	
	mysqli_free_result($ConsultaFuncion);
}

////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////

function discQuan($discQ)
{
	global $con;
	
	$query_ConsultaFuncion = sprintf("SELECT quanti FROM adm_discount_list WHERE code=%s",
										 GetSQLValueString($discQ, "text"));
	//echo $query_ConsultaFuncion;
	$ConsultaFuncion = mysqli_query($con,  $query_ConsultaFuncion) or die(mysqli_error($con));
	$row_ConsultaFuncion = mysqli_fetch_assoc($ConsultaFuncion);
	$totalRows_ConsultaFuncion = mysqli_num_rows($ConsultaFuncion);
	
	return $row_ConsultaFuncion["quanti"];	
	
	mysqli_free_result($ConsultaFuncion);
}

////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////

function discStartd($discStd)
{
	global $con;
	
	$query_ConsultaFuncion = sprintf("SELECT start_date FROM adm_discount_list WHERE code=%s",
										 GetSQLValueString($discStd, "text"));
	//echo $query_ConsultaFuncion;
	$ConsultaFuncion = mysqli_query($con,  $query_ConsultaFuncion) or die(mysqli_error($con));
	$row_ConsultaFuncion = mysqli_fetch_assoc($ConsultaFuncion);
	$totalRows_ConsultaFuncion = mysqli_num_rows($ConsultaFuncion);
	
	return $row_ConsultaFuncion["start_date"];	
	
	mysqli_free_result($ConsultaFuncion);
}

////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////

function discStopd($discSpd)
{
	global $con;
	
	$query_ConsultaFuncion = sprintf("SELECT stop_date FROM adm_discount_list WHERE code=%s",
										 GetSQLValueString($discSpd, "text"));
	//echo $query_ConsultaFuncion;
	$ConsultaFuncion = mysqli_query($con,  $query_ConsultaFuncion) or die(mysqli_error($con));
	$row_ConsultaFuncion = mysqli_fetch_assoc($ConsultaFuncion);
	$totalRows_ConsultaFuncion = mysqli_num_rows($ConsultaFuncion);
	
	return $row_ConsultaFuncion["stop_date"];	
	
	mysqli_free_result($ConsultaFuncion);
}

////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////

function codeUses($codeUses)
{
	global $con;
	
	$query_ConsultaFuncion = sprintf("SELECT * FROM cart WHERE discountcode = %s",
										 GetSQLValueString($codeUses, "text"));
	//echo $query_ConsultaFuncion;
	$ConsultaFuncion = mysqli_query($con,  $query_ConsultaFuncion) or die(mysqli_error($con));
	$row_ConsultaFuncion = mysqli_fetch_assoc($ConsultaFuncion);
	$totalRows_ConsultaFuncion = mysqli_num_rows($ConsultaFuncion);
	
	return $totalRows_ConsultaFuncion ;
	
	mysqli_free_result($ConsultaFuncion);
}

////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////

function UserAppearance($UserIDappearance)
{
	global $con;
	
	$query_ConsultaFuncion = sprintf("SELECT * FROM users WHERE id_user = %s",
										 GetSQLValueString($UserIDappearance, "int"));
	//echo $query_ConsultaFuncion;
	$ConsultaFuncion = mysqli_query($con,  $query_ConsultaFuncion) or die(mysqli_error($con));
	$row_ConsultaFuncion = mysqli_fetch_assoc($ConsultaFuncion);
	$totalRows_ConsultaFuncion = mysqli_num_rows($ConsultaFuncion);
	
	return $row_ConsultaFuncion["appearance"];
	
	mysqli_free_result($ConsultaFuncion);
}

////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////

function headAppear($headAppear)
{
	global $con;
	
	$query_ConsultaFuncion = sprintf("SELECT * FROM appearance WHERE id_appearance = %s",
										 GetSQLValueString($headAppear, "int"));
	//echo $query_ConsultaFuncion;
	$ConsultaFuncion = mysqli_query($con,  $query_ConsultaFuncion) or die(mysqli_error($con));
	$row_ConsultaFuncion = mysqli_fetch_assoc($ConsultaFuncion);
	$totalRows_ConsultaFuncion = mysqli_num_rows($ConsultaFuncion);
	
	return $row_ConsultaFuncion["head"];
	
	mysqli_free_result($ConsultaFuncion);
}

////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////

function corps($corps)
{
	global $con;
	
	$query_ConsultaFuncion = sprintf("SELECT * FROM appearance WHERE id_appearance = %s",
										 GetSQLValueString($corps, "int"));
	//echo $query_ConsultaFuncion;
	$ConsultaFuncion = mysqli_query($con,  $query_ConsultaFuncion) or die(mysqli_error($con));
	$row_ConsultaFuncion = mysqli_fetch_assoc($ConsultaFuncion);
	$totalRows_ConsultaFuncion = mysqli_num_rows($ConsultaFuncion);
	
	return $row_ConsultaFuncion["corps_color"];
	
	mysqli_free_result($ConsultaFuncion);
}

////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////

function dashdiv($dashdiv)
{
	global $con;
	
	$query_ConsultaFuncion = sprintf("SELECT * FROM appearance WHERE id_appearance = %s",
										 GetSQLValueString($dashdiv, "int"));
	//echo $query_ConsultaFuncion;
	$ConsultaFuncion = mysqli_query($con,  $query_ConsultaFuncion) or die(mysqli_error($con));
	$row_ConsultaFuncion = mysqli_fetch_assoc($ConsultaFuncion);
	$totalRows_ConsultaFuncion = mysqli_num_rows($ConsultaFuncion);
	
	return $row_ConsultaFuncion["dash_div"];
	
	mysqli_free_result($ConsultaFuncion);
}

////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////

function dashtable($dashtable)
{
	global $con;
	
	$query_ConsultaFuncion = sprintf("SELECT * FROM appearance WHERE id_appearance = %s",
										 GetSQLValueString($dashtable, "int"));
	//echo $query_ConsultaFuncion;
	$ConsultaFuncion = mysqli_query($con,  $query_ConsultaFuncion) or die(mysqli_error($con));
	$row_ConsultaFuncion = mysqli_fetch_assoc($ConsultaFuncion);
	$totalRows_ConsultaFuncion = mysqli_num_rows($ConsultaFuncion);
	
	return $row_ConsultaFuncion["dash_table"];
	
	mysqli_free_result($ConsultaFuncion);
}

////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////

function filters($filter)
{
	global $con;
	
	$query_ConsultaFuncion = sprintf("SELECT * FROM appearance WHERE id_appearance = %s",
										 GetSQLValueString($filter, "int"));
	//echo $query_ConsultaFuncion;
	$ConsultaFuncion = mysqli_query($con,  $query_ConsultaFuncion) or die(mysqli_error($con));
	$row_ConsultaFuncion = mysqli_fetch_assoc($ConsultaFuncion);
	$totalRows_ConsultaFuncion = mysqli_num_rows($ConsultaFuncion);
	
	return $row_ConsultaFuncion["filters"];
	
	mysqli_free_result($ConsultaFuncion);
}

////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////

function divWrapp($divWrapp)
{
	global $con;
	
	$query_ConsultaFuncion = sprintf("SELECT * FROM appearance WHERE id_appearance = %s",
										 GetSQLValueString($divWrapp, "int"));
	//echo $query_ConsultaFuncion;
	$ConsultaFuncion = mysqli_query($con,  $query_ConsultaFuncion) or die(mysqli_error($con));
	$row_ConsultaFuncion = mysqli_fetch_assoc($ConsultaFuncion);
	$totalRows_ConsultaFuncion = mysqli_num_rows($ConsultaFuncion);
	
	return $row_ConsultaFuncion["wrapp"];
	
	mysqli_free_result($ConsultaFuncion);
}

////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////

function appearanceList($appearanceList)
{
	global $con;
	
	$query_ConsultaFuncion = sprintf("SELECT * FROM appearance WHERE id_appearance = %s",
										 GetSQLValueString($appearanceList, "int"));
	//echo $query_ConsultaFuncion;
	$ConsultaFuncion = mysqli_query($con,  $query_ConsultaFuncion) or die(mysqli_error($con));
	$row_ConsultaFuncion = mysqli_fetch_assoc($ConsultaFuncion);
	$totalRows_ConsultaFuncion = mysqli_num_rows($ConsultaFuncion);
	
	return $row_ConsultaFuncion["list"];
	
	mysqli_free_result($ConsultaFuncion);
}

////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////

function appearanceLine($appearanceLine)
{
	global $con;
	
	$query_ConsultaFuncion = sprintf("SELECT * FROM appearance WHERE id_appearance = %s",
										 GetSQLValueString($appearanceLine, "int"));
	//echo $query_ConsultaFuncion;
	$ConsultaFuncion = mysqli_query($con,  $query_ConsultaFuncion) or die(mysqli_error($con));
	$row_ConsultaFuncion = mysqli_fetch_assoc($ConsultaFuncion);
	$totalRows_ConsultaFuncion = mysqli_num_rows($ConsultaFuncion);
	
	return $row_ConsultaFuncion["line"];
	
	mysqli_free_result($ConsultaFuncion);
}

////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////

function buttonSmall($buttonSmall)
{
	global $con;
	
	$query_ConsultaFuncion = sprintf("SELECT * FROM appearance WHERE id_appearance = %s",
										 GetSQLValueString($buttonSmall, "int"));
	//echo $query_ConsultaFuncion;
	$ConsultaFuncion = mysqli_query($con,  $query_ConsultaFuncion) or die(mysqli_error($con));
	$row_ConsultaFuncion = mysqli_fetch_assoc($ConsultaFuncion);
	$totalRows_ConsultaFuncion = mysqli_num_rows($ConsultaFuncion);
	
	return $row_ConsultaFuncion["button_small"];
	
	mysqli_free_result($ConsultaFuncion);
}

////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////

function artbtn($artbtn)
{
	global $con;
	
	$query_ConsultaFuncion = sprintf("SELECT * FROM appearance WHERE id_appearance = %s",
										 GetSQLValueString($artbtn, "int"));
	//echo $query_ConsultaFuncion;
	$ConsultaFuncion = mysqli_query($con,  $query_ConsultaFuncion) or die(mysqli_error($con));
	$row_ConsultaFuncion = mysqli_fetch_assoc($ConsultaFuncion);
	$totalRows_ConsultaFuncion = mysqli_num_rows($ConsultaFuncion);
	
	return $row_ConsultaFuncion["artbtn"];
	
	mysqli_free_result($ConsultaFuncion);
}

////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////

function flyButton($flyButton)
{
	global $con;
	
	$query_ConsultaFuncion = sprintf("SELECT * FROM appearance WHERE id_appearance = %s",
										 GetSQLValueString($flyButton, "int"));
	//echo $query_ConsultaFuncion;
	$ConsultaFuncion = mysqli_query($con,  $query_ConsultaFuncion) or die(mysqli_error($con));
	$row_ConsultaFuncion = mysqli_fetch_assoc($ConsultaFuncion);
	$totalRows_ConsultaFuncion = mysqli_num_rows($ConsultaFuncion);
	
	return $row_ConsultaFuncion["fly_button"];
	
	mysqli_free_result($ConsultaFuncion);
}

////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////

function myAppearance($myAppearance)
{
	global $con;
	
	$query_ConsultaFuncion = sprintf("SELECT * FROM users WHERE id_user = %s",
										 GetSQLValueString($myAppearance, "int"));
	//echo $query_ConsultaFuncion;
	$ConsultaFuncion = mysqli_query($con,  $query_ConsultaFuncion) or die(mysqli_error($con));
	$row_ConsultaFuncion = mysqli_fetch_assoc($ConsultaFuncion);
	$totalRows_ConsultaFuncion = mysqli_num_rows($ConsultaFuncion);
	
	return $row_ConsultaFuncion["appearance"];
	
	mysqli_free_result($ConsultaFuncion);
}
?>






<style>
	.sub_cat {
		text-align: left;
		font-size: 14px;
	}
	.sub_cat ul {
		width: 100%;
		margin: 0;
		padding: 0;
	}
	.sub_cat ul li {
		background-color: #CCC;
		padding: 20px;
		color: #666;
	}
	.sub_cat ul li:hover {
		background-color: #0F1E41;
		color: #FFF;
	}
</style>