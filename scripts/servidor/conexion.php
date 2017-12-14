<?php
	function conexion($h,$u,$p,$bd) {
		if (!($enlace = mysqli_connect($h,$u,$p,$bd)))
			die("Fallo en conexion !!!" . mysqli_connect_error());
		else
			return $enlace;
	}

	function cerrar_conexion() {
		mysql_close(mysqli_connect("127.0.0.1","root",""));
	}
?>