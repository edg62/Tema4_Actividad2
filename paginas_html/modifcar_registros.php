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

				function val($value=''){
					
				}

				include("../scripts/servidor/conexion.php");
				$conexion = conexion("127.0.0.1","root","","escuela");
				$sql = "SELECT * FROM alumnos";
				$resultado = mysqli_query($conexion, $sql);

				//mostrar los datos de la tabla
				if (mysqli_num_rows($resultado) > 0) {
					while ($fila = mysqli_fetch_assoc($resultado)) {
						printf("<tr><td>" . $fila['Num_Control'] . "</td>" . 
									"<td> <input type='text' value='" . $fila['Nombre_Alumno'] . "'></td>" . 
									"<td> <input type='text' value='" . $fila['Primer_Ap'] . "'></td>" .
									"<td> <input type='text' value='" . $fila['Segundo_Ap'] . "'></td>" .
									"<td> <input type='text' value='" . $fila['Edad_Alumno'] . "'></td>" .
									"<td> <input type='text' value='" . $fila['Semestre_Alumno'] . "'></td>" .
									"<td> <input type='text' value='" . $fila['Carrera_Alumno'] . "'></td>" .
									"<td> <a href='../scripts/servidor/procesar_modificacion.php?nc=".$fila['Num_Control']."&nom=".$fila['Nombre_Alumno']."&ap1=".$fila['Primer_Ap']."&ap2=".$fila['Segundo_Ap']."&ed=".$fila['Edad_Alumno']."&sem=".$fila['Semestre_Alumno']."&car=".$fila['Carrera_Alumno']."' style = 'color:red'>Modificar</a> </td></tr>");
					}
				} else {
					echo "Tabla Vacia";
				}	
			?>
		</table>

	</body>
</html>