<?php
session_start();

include "conexion.inc.php";
$sql="select * from flujo where proceso='P1' and rol='".$_SESSION["rol"]."'";

$resultado=mysqli_query($con, $sql);
while ($registros=mysqli_fetch_array($resultado))
{
 echo $registros["flujo"]."<a href='nuevoflujorol.php?flujo=".$registros["flujo"]."'>Nuevo</a>";
 echo "<br>";
}
?>