<?php
  include('sesion.php');
  include('conexion.php');

 // $id = $_POST['id'];
 //$id = $_GET['id'];
  $nm = $_POST['nm'];
  $ap = $_POST['ap'];
  $tel = $_POST['tel'];
  $c = $_POST['c'];
  $ad = $_POST['ad'];
  

  $sql="insert into catedraticos (nombre,apellido,telefono,contra,id_admin) values ('".$nm."','".$ap."',".$tel.",'".$c."',".$ad.")";
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