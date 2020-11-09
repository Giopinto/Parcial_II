<?php 
	include('sesion.php');
	include('conexion.php');
	$fecha="";
	if (isset($_GET['fecha'])) {
      $fecha=$_GET['fecha'];
	}
   
   //echo $fecha;


	/*$carnet="";
	if (isset($_GET['carnet'])) {
      $carnet=$_GET['carnet'];
	}

	echo "<br>";
   echo "carnet". $carnet;

	$i=0;
	$a=0;
	*/
	
	echo $_POST["TxtFecha"];
	//echo $_POST["A1"];
	//echo $_POST["comentario"]." space";
	
	//buscando todos los alumnos para la asistencia
$sql="select * from detalles_estudiante where id_grado=".$_SESSION["idgrado"]." and id_seccion='".$_SESSION["idseccion"]."'";
	$eje=mysqli_query($conexion,$sql);
	
	//buscando si la asistencia ya se asigno en el dia
	$consulta="select * from asistencia where fecha='".$fecha."' and id_cat=".$_SESSION["usuario"];
	$query=mysqli_query($conexion,$consulta);
	$read=mysqli_fetch_array($query);
	echo $consulta;
	//$i=$read['id_estudiante'];
	if (!$read) {
	//echo "no hay asistencia para hoy";
		//echo $consulta;

		while ($leer=mysqli_fetch_array($eje)) {//ciclo para guardar la asistencia de cada alumno
				if (!$leer) {
					echo "sin datos de alumno.<br>";
				}else{
					//$i=$i+1;
					//$i=$i+$read["1"];
					
					
					$sql1="insert into asistencia (id_estudiante,id_grado,id_seccion,id_estado,fecha,id_cat) 
							values(".$leer["0"].",".$_SESSION["idgrado"].",'".$_SESSION["idseccion"]."',".$_POST["A".$leer["0"]].",'".$fecha."',".$_SESSION["usuario"].")";
					$eje1=mysqli_query($conexion,$sql1);
					
					echo $sql1."<br>";
					//echo $_POST["A".$i]."<br>";
					if (!$eje1) {
						$a=0;
						              //echo "<br>Guardado el Tema: ".$_POST["Practico".$i];
						echo "<br>no se guardo asistencia para el carnet> ".$leer["0"];
					}else{
						//$a=$i;
						$a=1;
						echo "<br>se guardo asistencia para el carnet> ".$leer["0"]."<br>";
					}		
				}	
				//echo "<br>Asistencia guardada con exito !!<br>";
			}
			header("Location:asistencia.php?error=no");
	}else{
		echo "ya se ingreso la asistencia";
		header("Location:asistencia.php?error=si");
	}
 ?>