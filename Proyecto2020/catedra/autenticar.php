<?php 

		$usuario=$_POST['TxtUsuario'];
        $contra=$_POST['TxtContra'];
		include 'conexion.php';
		$sql= "select * from catedraticos where id_cat=".$usuario." and contra='".$contra."' ";
	    $ejecutar=mysqli_query($conexion, $sql);
	    $leer=mysqli_fetch_array($ejecutar);

	    if ($_POST["TxtUsuario"]==$leer['id_cat'] && $_POST["TxtContra"]==$leer['contra']) {
		session_start();
		echo "datos correctos.<br>";

		$sql1="select grados.id_grado,grados.nombreg,secciones.id_seccion
			from grados,secciones,grado_seccion
			where grados.id_grado=grado_seccion.id_grado and secciones.id_seccion=grado_seccion.id_seccion
			and grado_seccion.id_cat=".$leer['id_cat'];
		$eje=mysqli_query($conexion,$sql1);	
		$leer1=mysqli_fetch_array($eje);
		if (!$leer1) {
			echo "no se encontro el grado y seccion ";
		}else{
			echo $leer1["0"]." Cod Grado <br>";
			echo $leer1["1"]." Nombre Grado <br>";
			echo $leer1["2"]." Cod Seccion <br>";
			//echo $leer1["3"]." Nombre Seccion <br>";
		}
		//VARIABLES GLOBALES
		$_SESSION["autenticado"] =true;//SESION INICIADA
		$_SESSION["usuario"]=$leer['id_cat'];// TOMO EL CODIGO DEL MAESTRO
		$_SESSION["nombre"]=$leer['nombre']." ".$leer['apellido'];//  NOMBRE COMPLETO DEL DOCENTE
		$_SESSION["idgrado"]=$leer1["0"];
		$_SESSION["ngrado"]=$leer1["1"];
		$_SESSION["idseccion"]=$leer1["2"];
		//$_SESSION["nseccion"]=$leer1["3"];
		header("Location:inicio.php");
		echo "<br>ya estas logeado<br>";
	}
	else{
		header("Location:index.php?error=si");
	}		
 ?>