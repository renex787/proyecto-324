<?php
/*
http://localhost/work/mflujo.php?flujo=F1&proceso=P1
*/
include "conexion.inc.php";

$flujo=$_GET["flujo"];
$proceso=$_GET["proceso"];

$pantalla=$_GET["pantalla"];
include "update.".$pantalla.".php";

if (isset($_GET["Anterior"]))
{
$sql="SELECT * FROM flujo ";
$sql.="WHERE flujo='$flujo' and procesosiguiente='$proceso'";
$resultado=mysqli_query($con, $sql);
$registros=mysqli_fetch_array($resultado);
$procesoSiguiente=$registros["proceso"];
}
if (isset($_GET["Siguiente"]))
{
$sql="SELECT * FROM flujo ";
$sql.="WHERE flujo='$flujo' and proceso='$proceso'";
$resultado=mysqli_query($con, $sql);
$registros=mysqli_fetch_array($resultado);
$procesoSiguiente=$registros["procesosiguiente"];
}
header("Location: mflujo.php?flujo=$flujo&proceso=$procesoSiguiente");

?>