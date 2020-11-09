<?php 
	include('sesion.php');
	include('conexion.php');
 ?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Datos Estudiantes</title>

    <!-- Bootstrap -->
    <link rel="stylesheet"  href="css/bootstrap.min.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet"  href="css/estilo2.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

 <table class="table table-bordered table-hover">
  <thead>
    <tr>
      <th>Carnet</th>
      <th>Nombre</th>
      <th>Telefono</th>
      <th>Grado</th>
       <th>Seccion</th>
      <th>Accion</th>
    </tr>
  </thead>
  <tbody>
 <?php
        include "conexion.php";      
      $sql="select estudiantes.*,grados.nombreg,secciones.id_seccion
       from estudiantes,detalles_estudiante,grado_seccion,grados,secciones where 
       estudiantes.id_estudiante=detalles_estudiante.id_estudiante and
       detalles_estudiante.id_grado=grado_seccion.id_grado and
       detalles_estudiante.id_seccion=grado_seccion.id_seccion and
       grado_seccion.id_grado=grados.id_grado and
       grado_seccion.id_seccion=secciones.id_seccion";
      $eje=mysqli_query($conexion,$sql);
      while ($row = mysqli_fetch_assoc($eje)) {
           $nombrec=$row['nombre']." ".$row['apellido'];     
  ?>
    
    <tr>
      <td><?php echo $row['id_estudiante']; ?></td>
      <td><?php echo $nombrec; ?></td>
      <td><?php echo $row['telefono']; ?></td>
      <td><?php echo $row['nombreg']; ?></td>
      <td><?php echo $row['id_seccion']; ?></td>
      <td>
      <a class="btn btn-warning btn-sm" data-toggle="modal" data-target="#myModal<?php echo $row['id_estudiante']; ?>"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
      <a class="btn btn-danger btn-sm"  onclick="deletedata('<?php echo $row['id_estudiante']; ?>')" ><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>

<!-- Modal -->
<div class="modal fade" id="myModal<?php echo $row['id_estudiante']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel<?php echo $row['id_estudiante']; ?>" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel<?php echo $row['id_estudiante']; ?>">Editar Datos</h4>
      </div>
      <div class="modal-body">

<form>


  <div class="form-group">
    <label for="nm">Nombre:</label>
    <input type="text" class="form-control" id="nm<?php echo $row['id_estudiante']; ?>" value="<?php echo $row['nombre']; ?>">
  </div>

<div class="form-group">
    <label for="ap">Apellido:</label>
    <input type="text" class="form-control" id="ap<?php echo $row['id_estudiante']; ?>" value="<?php echo $row['apellido']; ?>">
  </div>

  <div class="form-group">
    <label for="tel">Telefono:</label>
    <input type="text" class="form-control" id="tel<?php echo $row['id_estudiante']; ?>" value="<?php echo $row['telefono']; ?>">
  </div>
  <div class="form-group">
    <label for="c">Contraseña:</label>
    <input type="text" class="form-control" id="c<?php echo $row['id_estudiante']; ?>" value="<?php echo $row['contra']; ?>">
  </div>

  <div class="form-group">
    
    <input type="hidden" class="form-control" id="ad<?php echo $row['id_estudiante']; ?>" value="<?php echo $row['id_admin']; ?>">
  </div>
  
</form>
      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        <button type="button" onclick="updatedata('<?php echo $row['id_estudiante']; ?>')" class="btn btn-primary">Guardar Cambios</button>
      </div>
    </div>
  </div>
</div>
      
      </td>
    </tr>
<?php
}
?>
  </tbody>
      </table>