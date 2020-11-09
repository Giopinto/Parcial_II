<?php
	include('sesion.php');
	include('conexion.php');

echo "Datos Ingresados por el usuario"."<br>";
 $grado=$_POST['TxtG'];
  $seccion=$_POST['TxtS'];
  $cat=$_POST['TxtCat'];

//=======================================================================================
	$sql = "SELECT * FROM grado_seccion WHERE id_cat=".$cat;
	
	$result = mysqli_query($conexion,$sql);
	$leer = mysqli_fetch_array($result);
	if (!$leer) {
			
			$sql1 = "SELECT * FROM grado_seccion WHERE id_grado=".$grado;
			
			

			$result1 = mysqli_query($conexion,$sql1);
			$leer1 = mysqli_fetch_array($result1);

			if (!$leer1) {
				
					$sql2 = "SELECT * FROM grado_seccion WHERE id_seccion='".$seccion;
			
			

			$result2 = mysqli_query($conexion,$sql2);
			$leer2 = mysqli_fetch_array($result2);	
			if (!$leer) {
				$sql2="insert into grado_seccion (id_grado, id_seccion, id_cat) values (".$grado.",'".$seccion."',".$cat.")";

				$Eje=mysqli_query($conexion,$sql2);
				//echo $sql2;

				if (!$Eje) {
					echo "No se guardaron los datos";
				}else{
					echo "Datos Almacenados";
					header("Location: asignacion1.php");
				}
			}else{
				echo "La seccion ya esta asignado";
			}
			
			}else{
				echo "El Grado ya se encuentra asignado";
			}
	}else{
		echo "El Docente ya se encuentra asignado";
		//header("Location: asignacion1.php?error5=si");
	}
	
 ?>