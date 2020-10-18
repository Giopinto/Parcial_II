<?php 

	 include 'conexion.php';
     $usuario=$_POST['TxtUsuario'];
     $contra=$_POST['TxtContra'];
     //$sql="select nombre, id_cat from catedraticos where nombre= '".$usuario."' and id_cat=".$contra." ";
     $sql= "select * from administrador where id_admin=".$usuario." and contra='".$contra."' ";
     $ejecutar=mysqli_query($conexion, $sql);
     $resultado=mysqli_fetch_array($ejecutar);



     if ($_POST["TxtUsuario"]==$resultado['id_admin'] && $_POST["TxtContra"]==$resultado['contra']){
		//inicio de session_name()
		session_start();
		echo "validado";
		//declaro variables de sesion (variables globales que podran ser utilizadas en cualquier página)
		$_SESSION["autenticado"] =true;
		$_SESSION["usuario"]=$_POST["TxtUsuario"];
		$_SESSION["nombre"]=$resultado["nombre"]."  ".$resultado["apellido"];
		$_SESSION["codigo"]=$_POST["TxtUsuario"];


		

		//redireccionar a la pagina deseada
		header("Location: inicio.php");
		//echo $_SESSION['nombre'];
	}
	else{
		//si los datos son incorrectos, se direcciona al index enviando el valor SI al error del GET
		header("Location: index.php?error=si");
	}
 ?>