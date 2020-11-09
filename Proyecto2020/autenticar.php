<?php 

	 include 'conexion.php';
     $usuario=$_POST['TxtUsuario'];
     $contra=$_POST['TxtContra'];
     //$sql="select nombre, id_cat from catedraticos where nombre= '".$usuario."' and id_cat=".$contra." ";
     $sql= "select * from estudiantes where id_estudiante=".$usuario." and contra='".$contra."' ";
     $ejecutar=mysqli_query($conexion, $sql);
     $resultado=mysqli_fetch_array($ejecutar);



     if ($_POST["TxtUsuario"]==$resultado['id_estudiante'] && $_POST["TxtContra"]==$resultado['contra']){
		//inicio de session_name()
		session_start();
		echo "validado";
		$sql1="select grados.id_grado,grados.nombreg,secciones.id_seccion
			from grados,secciones,grado_seccion,detalles_estudiante,asistencia
			where grados.id_grado=grado_seccion.id_grado and 
			secciones.id_seccion=grado_seccion.id_seccion and
			grado_seccion.id_grado=detalles_estudiante.id_grado and
			grado_seccion.id_seccion=detalles_estudiante.id_seccion and
			detalles_estudiante.id_estudiante=".$resultado['id_estudiante'];

			/*$sql1="select grados.id_grado,grados.nombreg,secciones.id_seccion
			from grados,secciones,grado_seccion,detalles_estudiante,asistencia
			where grados.id_grado=grado_seccion.id_grado and 
			secciones.id_seccion=grado_seccion.id_seccion and
			grado_seccion.id_grado=detalles_estudiante.id_grado and
			grado_seccion.id_seccion=detalles_estudiante.id_seccion and
			detalles_estudiante.id_estudiante=asistencia.id_estudiante and
			asistencia.id_estudiante=".$resultado['id_estudiante'];
			*/
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
		//declaro variables de sesion (variables globales que podran ser utilizadas en cualquier página)
		$_SESSION["autenticado"] =true;
		$_SESSION["usuario"]=$_POST["TxtUsuario"];
		$_SESSION["nombre"]=$resultado["nombre"]."  ".$resultado["apellido"];
		$_SESSION["codigo"]=$_POST["TxtUsuario"];
		$_SESSION["idgrado"]=$leer1["0"]; //codigo grado
		$_SESSION["ngrado"]=$leer1["1"];//nombre grado
		$_SESSION["idseccion"]=$leer1["2"];//codigo seccion


		

		//redireccionar a la pagina deseada
		header("Location: inicio.php");
		//echo $_SESSION['nombre'];
	}
	else{
		//si los datos son incorrectos, se direcciona al index enviando el valor SI al error del GET
		header("Location: index.php?error=si");
	}
 ?>