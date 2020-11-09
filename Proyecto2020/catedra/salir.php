<?php 
	//iniciar session
	session_start();
	//destruir session
	session_destroy();
	//redireccionar al index
	header("Location: index.php")
 ?>