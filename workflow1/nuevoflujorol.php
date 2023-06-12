<?php
session_start();

$flujo=$_GET["flujo"];

$usuario=$_SESSION["usuario"];
$rol=$_SESSION["rol"];

$sql="SELECT max(numerotramite)+1 tramite FROM flujousuario";

include "conexion.inc.php";
$resultado=mysqli_query($con, $sql);
$registros=mysqli_fetch_array($resultado);
$tramite=$registros["tramite"];

$today = getdate();

$fecha_ini=$today["year"]."-".$today["mon"]."-".$today["mday"]." ".$today["hours"].":".$today["minutes"];
$fecha_fin="NULL";

$sql ="insert into flujousuario values('".$tramite."','".$flujo."','P1','".$fecha_ini."'";
$sql.=",".$fecha_fin.",'".$usuario."')";

$resultado=mysqli_query($con, $sql);
header("Location: bandejaE.php");
?>