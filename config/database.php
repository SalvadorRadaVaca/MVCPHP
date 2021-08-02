<?php

	class Conectar {

		public static function conexion() {

			$conexion = mysqli_connect("localhost", "root", "040319659", "mvc");
			return $conexion;

		}
	}

?>