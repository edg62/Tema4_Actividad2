<?php
	include("conexion.php");
	$conexion = conexion("127.0.0.1","root","","escuela");
	$nc = $_GET["nc"];
	$nom = $_GET["nom"];
	$ap1 = $_GET["ap1"];
	$ap2 = $_GET["ap2"];
	$ed = $_GET["ed"];
	$sem = $_GET["sem"];
	$car = $_GET["car"];

	$sql = "UPDATE alumnos SET Nombre_Alumno = '".$nom."', Primer_Ap = '".$ap1."', Segundo_Ap = '".$ap2."', Edad_Alumno = ".$ed.", Semestre_Alumno = ".$sem.", Carrera_Alumno = '".$car."' WHERE Num_Control = '".$nc."'";

	if (mysqli_query($conexion, $sql)) {
		header("location: ../../paginas_html/modifcar_registros.php");
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
	}
?>