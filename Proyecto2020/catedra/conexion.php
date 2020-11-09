<?php 
	//$conexion=mysqli_connect("mysql.hostinger.es", "u248039019_root", "informatica2016", "	u248039019_asis");

$conexion=mysqli_connect("localhost", "root",'',"asis");
	if (!$conexion) {
		echo "error";
	}else{
		echo "Conectado con exito";
	}
	//if (!$conexion) {
		//echo "Error en la conexion";
	//}else{
		//echo "Conectado con exito";
	//}
 ?>