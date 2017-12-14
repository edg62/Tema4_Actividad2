<?php
	include("conexion.php");
	$conexion = conexion("127.0.0.1","root","","escuela");
	$id = $_GET["idNC"];
	$sql = "DELETE FROM alumnos WHERE Num_Control = '".$id."'";

	if (mysqli_query($conexion, $sql)) {
		header("location: ../../paginas_html/eliminar_registros.php");
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
	}
?>