<?php 
	session_start();
 ?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<title>Agregar Alumno</title>
	</head>

	<body>
		<h2>Altas de Alumnos</h2>

		<form id="form_reregistro_alumno" name="form_reregistro_alumno" method="POST" action="../scripts/servidor/procesar_insercion.php">
			
			<label>Num. Control: </label>
			<input type="text" name="caja_no_control"
					placeholder="Número de Control"
					maxlength="8"
					required
					pattern="[0-9]{8}"
					value="<?php echo isset($_SESSION['dato_num_control']) ? $_SESSION['dato_num_control'] : "" ?>" 
			><br>

			<span style="<?php echo(isset($_SESSION['msj_error']) ? 'color: red;' : 'color:white;' ); ?>">
				<?php echo(isset($_SESSION['msj_error']) ? $_SESSION['msj_error'] : '' ); ?>
			</span>

			<label>Nombre: </label><input type="text" name="caja_nombre"><br>
			<label>Primer Ap: </label><input type="text" name="caja_primerAp"><br>
			<label>Segundo Ap: </label><input type="text" name="caja_segundoAp"><br>
			<label>Edad: </label><input type="text" name="caja_edad"><br>
			<label>Semestre: </label><input type="text" name="caja_semestre"><br>
			<label>Carrera: </label><input type="text" name="caja_carrera"><br>
			<br>
			<!--<input type="submit" name="btnEnviar" value="<<Enviar>>" onsubmit="return validarJavascript()"> Validacion javascript-->

			<input type="submit" name="btnEnviar" value="<<Enviar>>" onsubmit="return validarJavascript()">
		</form>
	</body>
</html>