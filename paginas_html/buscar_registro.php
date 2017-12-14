<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<title>Eliminar Registro</title>
	</head>
	<body>

		<h1>Eliminar Alumno</h1>
		
		<label>Nombre: </label><input type="text" name="cajaNombre" id="cajaNombre"><br><br>
		
		<form action="../scripts/servidor/procesar_busqueda.php?">

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
							print("<tr><td>" . $fila['Num_Control'] . "</td>" . 
										"<td>" . $fila['Nombre_Alumno'] . "</td>" . 
										"<td>" . $fila['Primer_Ap'] . "</td>" .
										"<td>" . $fila['Segundo_Ap'] . "</td>" .
										"<td>" . $fila['Edad_Alumno'] . "</td>" .
										"<td>" . $fila['Semestre_Alumno'] . "</td>" .
										"<td>" . $fila['Carrera_Alumno'] . "</td>" .
										"<td> <a href='../scripts/servidor/procesar_eliminacion.php?idNC=".$fila['Num_Control']."' style = 'color:red'>Eliminar</a> </td></tr>");
						}
					} else {
						echo "Tabla Vacia";
					}
				?>
			</table>	
		
		</form>
	</body>
</html>