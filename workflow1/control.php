<?php 
$usuario=$_GET["usuario"];
$password=$_GET["password"];

session_start();

include "conexion.inc.php";
$sql="select count(*) as contador, rol from academico.alumno ";
$sql.="where nombre='$usuario' group by nombre"; 
$resultado=mysqli_query($con, $sql);
$registros=mysqli_fetch_array($resultado);
$contador=$registros["contador"];

if (($contador>0) && ($password=='123456'))
{
	header("Location: bandejaE.php");
	$_SESSION["usuario"]=$usuario;
	$_SESSION["rol"]=$registros["rol"];
}
else
	header("Location: index.php");
?>
