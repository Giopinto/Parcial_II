<?php 
	include('sesion.php');
	include('conexion.php');
 ?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Datos</title>

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
      <th>Codigo</th>
      <th>Nombre</th>
      
      <th>Accion</th>
    </tr>
  </thead>
  <tbody>
 <?php
        include "conexion.php";      
      $sql="select * from grados where id_admin=".$_SESSION["usuario"];
      $eje=mysqli_query($conexion,$sql);
      while ($row = mysqli_fetch_assoc($eje)) {
              
  ?>
    
    <tr>
      <td><?php echo $row['id_grado']; ?></td>
      <td><?php echo $row['nombreg']; ?></td>
      
      <td>
      <a class="btn btn-warning btn-sm" data-toggle="modal" data-target="#myModal<?php echo $row['id_grado']; ?>"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
      <a class="btn btn-danger btn-sm"  onclick="deletedata('<?php echo $row['id_grado']; ?>')" ><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>

<!-- Modal -->
<div class="modal fade" id="myModal<?php echo $row['id_grado']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel<?php echo $row['id_grado']; ?>" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel<?php echo $row['id_grado']; ?>">Editar Datos</h4>
      </div>
      <div class="modal-body">

<form>

  <div class="form-group">
    <label for="nm">Nombre:</label>
    <input type="text" class="form-control" id="nm<?php echo $row['id_grado']; ?>" value="<?php echo $row['nombreg']; ?>">
  </div>
  
</form>
      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        <button type="button" onclick="updatedata('<?php echo $row['id_grado']; ?>')" class="btn btn-primary">Guardar Cambios</button>
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