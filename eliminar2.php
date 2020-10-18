<?php 
      include('sesion.php');
      include('conexion.php');

      $carnet=$_POST['TxtCarnet'];

      if (isset($_POST['BtnAe'])) {
        echo "Presiono el boton de Eliminar";
        $sql="delete from asistencia where id_estudiante=".$carnet;
        $eje=mysqli_query($conexion,$sql);
        if (!$eje) {
            echo "Error en la eliminacion tabla Asistencia";
        }else{
            echo "Datos Eliminados con Exito tabla Asistencia";
        }
      }

      if (isset($_POST['BtnA'])) {
          echo "Presiono el boton de Cancelar";
           $sql1="delete from aeliminado where id_estudiante=".$carnet;
            $eje1=mysqli_query($conexion,$sql1);
            if (!$eje1) {
                echo "Error en la eliminacion tabla Asistencia Eliminado";
            }else{
               echo "Datos Eliminados con Exito tabla Asistencia Eliminado";
             }
      }
?>