<?php
  include('sesion.php');
  include('conexion.php');


  $nm = $_POST['nm'];
  $id = $_GET['id'];
  

if(isset($_GET['id'])){
$sqlmm="update grados set nombreg='".$nm."'  where id_grado=".$id;
//$sqlmm="update datos set nombre='".$nombre."', apellido='".$apellido."', email='".$email."'     where id='".$id."'";
$act=mysqli_query($conexion,$sqlmm);


if (!$act) {

?>
<div class="alert alert-danger alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Error!</strong>  error.
</div>
<?php
} else{
?>
<div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong></strong> Datos Actualizado con exito.
</div>
<?php
}
} else{
?> 
<div class="alert alert-warning alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Warning!</strong> Maaf anda salah alamat.
</div>
<?php
}
?>