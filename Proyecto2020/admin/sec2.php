<?php
  include('sesion.php');
  include('conexion.php');

 // $id = $_POST['id'];
 //$id = $_GET['id'];
  $nm = $_POST['nm'];
  $des = $_POST['des'];
  

  $sql="insert into secciones (id_seccion,descripcion) values ('".$nm."','".$des."')";
//$sqln="insert into evaluadores(id_evaluador,nombre,nombre2,apellido,apellido2,especialidad,email,telefono,contra) 
//values(".$id.", '".$n1."', '".$n2."', '".$p1."', '".$p2."', '".$cat."','".$email."',".$tel.", '".$contra."')";
//$sqlmm="update datos set nombre='".$nombre."', apellido='".$apellido."', email='".$email."'     where id='".$id."'";
$eje=mysqli_query($conexion,$sql);


      if (!$eje) {

          ?>
          <div class="alert alert-danger alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <strong>Error!</strong>  error Verificar Datos.
          </div>
          <?php
      } else{
      ?>
      <div class="alert alert-success alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <strong></strong> Datos Guardados con exito.
      </div>
      <?php
      }
      

?>
  </div>