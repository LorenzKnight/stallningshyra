<?php

if (!isset($_SESSION)) {
  session_start();
}

$hostname_con = "p:localhost";
$database_con = "shdb";
$username_con = "root";
$password_con = "root";
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
  $dominio = "http://localhost:8888";
  $pageName = "Ställningshyra";
?>