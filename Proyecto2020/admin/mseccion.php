<?php 
  include('sesion.php');
  include('conexion.php');
 ?>


<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Datos Seccion</title>

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
  <body onload="viewdata()">
     <nav class="navbar navbar-default" role="navigation">
        <div class="container-fluid">
          <div class="navbar-header">
             <button type="button" class="navbar-toggle" data-togle="collapse" data-targer="#acolapsar">
               <span class="sr-only">Toggle Navigation</span>
              <span class="icon-bar"> </span>
              <span class="icon-bar"> </span>
              <span class="icon-bar"> </span>
             </button>
             <h4> <font color="#2969B0">Administrador</font> </h4>
           
          </div>


          <div class="collapse navbar-collapse">
              <ul class="nav navbar-nav">
                  
                  <li><a href="inicio.php"><span class="glyphicon glyphicon-home"></span> Regresar a Menu Principal</a></li>
                    
                  <li><a href="asignacion1.php"><span class="glyphicon glyphicon-folder-open"></span>  Asignacion de Catedraticos</a></li>
                  <li><a href="eliminar.php"><span class="glyphicon glyphicon-book"></span> Eliminar Asistencia</a></li>
              </ul>



                  <ul class="nav navbar-nav navbar-right">
                       
                        <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="glyphicon glyphicon-user"></span> <?php echo $_SESSION["nombre"]; ?><span class="caret"></span></a>

                          <ul class="dropdown-menu">
                            <li><a href="salir.php">Cerrar Sesiòn</a></li>
                            
                            <li><a href="cgrado.php">Regresar a Control de Grados</a></li>

                           
                            <li role="separator" class="divider"></li>
                            <li><a href="inicio.php">Regresar a Menu Principal</a></li>
                          </ul>
                        </li>
                  </ul>


          </div>



        </div>
      
     </nav>
    <div class="container">
 <br>
          <h2 align="center"><font color="#2969B0">Listado de Secciones</font></h2>
<!-- Button trigger modal -->

<p align="right"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
  Nueva Seccion
</button></p>
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Nueva Seccion</h4>
      </div>
      <div class="modal-body">
        
<form>



  <div class="form-group">
    <label for="nm">Nombre</label>
    <input type="text" class="form-control" id="nm">
  </div>

  <div class="form-group">
    <label for="des">Descripcion</label>
    <input type="text" class="form-control" id="des">
  </div>

</form>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        <button type="button" id="save" class="btn btn-primary">Guardar</button>
      </div>
    </div>
  </div>
</div>    
<div id="info"></div>
      <br/>
      <div id="viewdata"></div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script>
    function viewdata(){
       $.ajax({
     type: "GET",
     url: "cseccion.php"
      }).done(function( data ) {
    $('#viewdata').html(data);
      });
    }



    $('#save').click(function(){

  //var id = $('#id').val();
  var nm = $('#nm').val();
  var des = $('#des').val();
  
  var datas="&nm="+nm+"&des="+des;
  //var datas="id="+id+"&nm="+nm+"&gd="+gd;
      
  $.ajax({
     type: "POST",
     url: "sec2.php",
     data: datas
  }).done(function( data ) {
    $('#info').html(data);
    viewdata();
  });
    });




    function updatedata(str){
  
  var id = str;
  var nm = $('#nm'+str).val();
  var des = $('#des'+str).val();
  
   var datas="&nm="+nm+"&des="+des;
      
  $.ajax({
     type: "POST",
     url: "actseccion.php?id="+id,
     data: datas
  }).done(function( data ) {
    $('#info').html(data);
    viewdata();
  });
    }




    function deletedata(str){
  
  var id = str;
      
  $.ajax({
     type: "GET",
     url: "eliminarseccion.php?id="+id
  }).done(function( data ) {
    $('#info').html(data);
    viewdata();
  });

    }

   
    </script>
  </body>
</html> 
