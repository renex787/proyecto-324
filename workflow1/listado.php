<?php 
session_start();
$sql="select * from academico.alumno ";
$sql.="where nombre='".$_SESSION["usuario"]."'"; 
$resultado=mysqli_query($con, $sql);
$registros=mysqli_fetch_array($resultado);
$nombre=$registros["nombre"];
$ci=$registros["ci"];
$matricula=$registros["matricula"];
?>
<h1> Documentos de inscripcion</h1>
<p>
	Debera presentar los siguientes documentos:<br>
	<?php echo "Alumno:".$nombre; ?><br>
	Matricula universitaria 
	<input type="text" name="matricula" value="<?php echo $matricula; ?>"/>
	<br>
    carnet de identidad
	<input type="text" name="ci" value="<?php echo $ci; ?>"/>
	<br>
</p>