<?php
	session_start();

	include("conexion.php");
						//127.0.0.1
	$conexion = conexion("127.0.0.1","root","","escuela");

	//var_dump($conexion);

	$nc = $_POST["caja_no_control"];
	$n = $_POST["caja_nombre"];
	$pa = $_POST["caja_primerAp"];
	$sa = $_POST["caja_segundoAp"];
	$e = $_POST["caja_edad"];
	$s = $_POST["caja_semestre"];
	$c = $_POST["caja_carrera"];

	//validacion
	$validacionDatos = true;
	if (strlen($nc)<=0){
		$validacionDatos = false;
	}


	if ($validacionDatos) {
		//para evitar sql injection se debe utilizar STATEMENTS (Declaraciones Preparadas)

		// INSERT INTO alumnos VALUES('',)
		$sql = "INSERT INTO alumnos VALUES('$nc','$n','$pa','$sa',$e,$s,'$c')";

		if (mysqli_query($conexion, $sql)) {
			echo "YEA BEBY, registro aghregado";
		} else {
			echo "No Funciono";
		}

	} else{
		echo "Faltan Datos";
		$_SESSION['dato_num_control'] = $nc;
		$_SESSION['msj_error'] = "Dato Incorrecto";
	}
?>