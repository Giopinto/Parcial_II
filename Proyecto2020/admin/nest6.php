<?php 
   include 'conexion.php';
   $est=$_POST['TxtId'];
   $g=$_POST['TxtG'];
   $s=$_POST['TxtS'];

   $sql="insert into detalles_estudiante(id_estudiante,id_grado,id_seccion) values(".$est.",".$g.",'".$s."')";
   $eje=mysqli_query($conexion,$sql);
   if (!$eje) {
   	 echo "Error: Datos no Existen";
      header("Location:nest5.php?error=si");
   }else{
   	echo "Proceso Guardado Con Exito";
      header("Location:nest5.php?error=no");
   }
 ?>