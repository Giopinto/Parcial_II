<?php 
	session_start();
	/*verifico que la variable $_SESSION["autenticado"] continue con el valor "true", 
	
	$_SESSION["autenticado" se le asigno el valor de TRUE en la pagina autenticar.php
	el caracter ! antes de $_SESSION["autenticado"] esta indicando que si el valor de la variable es falso, entonceces redirecciona
	a salir.php quien elimina y destruye la sesion 	
	*/
	if (!$_SESSION["autenticado"]) {
		header("Location: salir.php");
	}

 ?>