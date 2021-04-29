<?php

if (!isset($_SESSION)) {
  session_start();
}

$hostname_con = "p:10.209.2.10 ";
$database_con = "236080-shdb";
$username_con = "236080_dt62133";
$password_con = "Bohe03++";
$con = mysqli_connect($hostname_con, $username_con, $password_con, $database_con);
mysqli_set_charset($con, 'utf8');

if (is_file("inc/funciones.php")) 
include("inc/funciones.php"); 
else
{
	include("../inc/funciones.php");
}
?>
<!-- CAMBIAR EL VALOR DE ESTA VARIABLE PARA QUE LOS LINK FUNCIONEN -->
<?php
  $dominio = "http://www.lorenzknight.se/stallningshyra";
  $pageName = "Ställningshyra";
?>