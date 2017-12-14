<?php
	//PERMITE TENER ACCESO AL ARREGLO DE SECIONES
	session_start();

	if(!$_SESSION['activo'] == 1)
		header("Location: http://127.0.0.1/PruebasPHP/ABCC_MySQL/Proyecto_Escuela/scripts/index.php");
?>

<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<title>Eliminar Registro</title>
	</head>
	<body>

		<h1>Eliminar Alumno</h1>

		<table>
			<tr>
				<th>Numero de Contrrol</th>
				<th>Nombre</th>
				<th>Primer Apeido</th>
				<th>Segundo Apeido</th>
				<th>Edad</th>
				<th>Semestre</th>
				<th>Carrera</th>
			</tr>

			<?php 
				include("../scripts/servidor/conexion.php");
				$conexion = conexion("127.0.0.1","root","","escuela");
				$sql = "SELECT * FROM alumnos";
				$resultado = mysqli_query($conexion, $sql);

				//mostrar los datos de la tabla
				if (mysqli_num_rows($resultado) > 0) {
					while ($fila = mysqli_fetch_assoc($resultado)) {
						printf("<tr><td>" . $fila['Num_Control'] . "</td>" . 
									"<td>" . $fila['Nombre_Alumno'] . "</td>" . 
									"<td>" . $fila['Primer_Ap'] . "</td>" .
									"<td>" . $fila['Segundo_Ap'] . "</td>" .
									"<td>" . $fila['Edad_Alumno'] . "</td>" .
									"<td>" . $fila['Semestre_Alumno'] . "</td>" .
									"<td>" . $fila['Carrera_Alumno'] . "</td>" .
									"<td> <a href='../scripts/servidor/procesar_eliminacion.php?idNC=%s' style = 'color:red'>Eliminar</a> </td>".
									"</tr>", $fila['Num_Control']);
					}
				} else {
					echo "Tabla Vacia";
				}
			?>
		</table>

	</body>
</html>