<?php 
	include("conexion.php");
	include("sesion.php");
//	echo $_POST["TxtEstado"];
	$id="";
	if (isset($_GET['id'])) {
		$id=$_GET['id'];
	}
	$car="";
	if (isset($_GET['car'])) {
		$car=$_GET['car'];
	}
	echo "id>".$id."<br>";
	echo "car>".$car."<br>";

	$consulta1="SELECT * FROM estados";
	$ejecutar1=mysqli_query($conexion,$consulta1);
	//$lectura1=mysqli_fetch_array($ejecutar1);
	$cod="";
	while ($lectura1=mysqli_fetch_array($ejecutar1)) {
		if (!$lectura1) {
			# code...
		}else{
			if ($lectura1["1"]==$_POST["TxtEstado"]) {
				$cod=$lectura1["0"];
			}	
		}
	}	
	//echo $cod;
	/*$query="UPDATE Asistencias SET Observacion='$cod',  WHERE IdAsistencia='$id' ";
	echo $query;
	$resultado=$conexion->query($query);
	if(!$resultado){
		echo "Usuario Modificado";
	}else{
		echo "Error al Modificar Usuario";						
	}*/
			

	$sql="update asistencia set id_estado=".$cod.", observacion='".$_POST["Comentario"]."' where id_asistencia=".$id." and id_estudiante=".$car;
	$eje=mysqli_query($conexion,$sql);
	echo $sql;
	if (!$eje) {
		echo "no se guardaron los cambios para la edicion";
		header("Location:agregar1.php?id=$id & car=$car & error=si");
		//header("Location:editar1.php?id=$id & car=$car & error=no");
	}else{
		echo "se actualizo con exito";
		header("Location:agregar1.php?id=$id & car=$car & error=no");
	}

 ?>