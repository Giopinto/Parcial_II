<?php 
  include('sesion.php');
  include('conexion.php');

  $fecha=$_POST['TxtFecha'];
  $carnet=$_POST['TxtCarnet'];
  $cat=$_POST['TxtCat'];
  $admin=$_SESSION["usuario"];

  echo $fecha; echo " <br>";
  echo $carnet; echo " <br>";
  echo $cat; echo " <br>";
 echo $admin; echo " <br>";

  $sql="select * from asistencia where id_estudiante=".$carnet."  and fecha='".$fecha."'";
  $eje=mysqli_query($conexion,$sql);
  $leer=mysqli_fetch_array($eje);
  $grado=$leer["2"];
  $seccion=$leer["3"];
  echo $grado; echo " <br>";
  echo $seccion; echo " <br>";
 echo $sql;
  //echo $leer["2"]." id_grado <br>";
  //echo $leer["3"]." id_seccion <br>";
  //echo $leer1["2"]." Cod Seccion <br>";


  if (!$leer) {

    //echo "Datos Almacenados";
          //header("Location: asignacion1.php");
        
        
        echo "error";
        }else{
          $sql2="insert into aeliminado (id_estudiante,fecha,id_grado, id_seccion, id_cat, id_admin) 
          values (".$carnet.",'".$fecha."',".$grado.",'".$seccion."',".$cat.",".$admin.")";

          $eje2=mysqli_query($conexion,$sql2);
          if (!$eje2) {
             echo "error, datos no guardados";
          }else{
            //echo "Guardado con Exito";
           header("Location: confirmar.php?carnet=$carnet & fecha=$fecha & cat=$cat");
          }
        
  }    
 ?>


 