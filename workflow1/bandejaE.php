<?php
session_start();

include "conexion.inc.php";
$sql="select * from flujousuario ";
$sql.="where usuario='".$_SESSION["usuario"]."' "; 
$sql.="and fechafin is null ";
$resultado=mysqli_query($con, $sql);
?>
<table>
	<tr>
	<td>Flujo</td>
	<td>Proceso</td>
	<td>Operacion</td>
	</tr>
	<?php
	while ($registros=mysqli_fetch_array($resultado))
	{
	echo "<tr>";
	echo "<td>".$registros["flujo"]."</td>";
	echo "<td>".$registros["proceso"]."</td>";
	echo "<td>";
	echo "<a href='mflujo.php?flujo=".$registros["flujo"]."&proceso=".$registros["proceso"]."'>";
	echo "Ir</a></td>";
	echo "</tr>";
	}
	?>
</table>
<br>
<a href="nuevoflujo.php">Nuevo</a>