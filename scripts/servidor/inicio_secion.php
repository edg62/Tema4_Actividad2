<?php
	$usuario = $_POST["caja_usuario"];
	$password = $_POST["caja_password"];

	include("conexion.php");
	$conexion = conexion("127.0.0.1","root","","usuarios_escuela");
	$sql = "SELECT * FROM usuarios WHERE nombre_usuario='".$usuario."' AND password_usuario=SHA1('".$password."')";
	$resultado = mysqli_query($conexion, $sql);

	//echo "hola";

	if (mysqli_num_rows($resultado) == 1) {
		session_start();
		$_SESSION['activo'] = 1;
		$_SESSION['nombre_usuario'] = strtoupper($usuario);
		header("location: ../../paginas_html/eliminar_registro.php");

		//cierre de secion
		/*	session_start();
			session_unset();
			session_destroy();
			header("location: login");
		*/

		//comprobacion de sesion
		/*if (!$_SESSION['activo'] == 1) {
			header("rura index")
		*/}
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
	}
?>