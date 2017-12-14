<?php
	include("conexion.php");
	$conexion = conexion("127.0.0.1","root","","escuela");
	$NOM = $_GET[""];
	$sql = "SELECT * FROM alumnos WHERE Nombre_Alumno = '".$NOM."'";

	if (mysqli_query($conexion, $sql)) {
		header("location: ../../paginas_html/buscar_registro.php");
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
	}
?>