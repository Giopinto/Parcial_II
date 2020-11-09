<?php 

$conexion=mysqli_connect("localhost", "root",'',"asis");
	if (!$conexion) {
		echo "error";
	}else{
		echo "Conectado con exito";
	}



	//$conexion=mysqli_connect("localhost", "root",'',"asis");

  //$conexion=mysqli_connect("localhost", "root",'',"proyecto");

	//if (!$conexion) {
		//echo "Error en la conexion";
	//}else{
		//echo "Conectado con exito";
	//}
 ?>