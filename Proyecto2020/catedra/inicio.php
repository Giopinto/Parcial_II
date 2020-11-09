<?php 
	include('sesion.php');
	include('conexion.php');
  $sql="select * from grado_seccion where id_cat=".$_SESSION["usuario"];
  $eje=mysqli_query($conexion,$sql);
  $leer=mysqli_fetch_array($eje);
  if (!$leer) {
    $a=0;
  }else{
    $a=1;
    //validando el grado
    $sql2="select * from grados where id_grado=".$leer["id_grado"];
    $eje2=mysqli_query($conexion, $sql2);
    $leer2=mysqli_fetch_array($eje2);
    if (!$leer2) {
      echo "no se encontro grado";
    }
    //validando la seccion
    $sql3="select * from secciones where id_seccion='".$leer["id_seccion"]."'";
    $eje3=mysqli_query($conexion, $sql3);
    $leer3=mysqli_fetch_array($eje3);
    if (!$leer3) {
      echo "no se encontro la seccion";
    }
      
  }
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	
	<title>Inicio de Sesion</title>
	<link rel="stylesheet"  href="css/bootstrap.min.css">
  <link rel="stylesheet"  href="css/estilos.css">
</head>
<body onload="viewdata()">

			   <section class="todo">
                 <header> <img src="img/logousac.png">
                  <h3> 
                        <font color="white">
                             <span id="uni"> Colegio Ficticio </span> 
                        </font>
                  </h3>
              </header>

          
           
       <nav class="navbar navbar-default" role="navigation">
        <div class="container-fluid">
          <div class="navbar-header">
             <button type="button" class="navbar-toggle" data-togle="collapse" data-targer="#acolapsar">
               <span class="sr-only">Toggle Navigation</span>
              <span class="icon-bar"> </span>
              <span class="icon-bar"> </span>
              <span class="icon-bar"> </span>
             </button>
             <h4> <font color="blue">Catedr&aacute;tico</font> </h4>
           
          </div>


          <div class="collapse navbar-collapse">
              
                  <ul class="nav navbar-nav">
                  
                  
                  
                  <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-list-alt"></span> Asistencia<b class="caret"></b></a>
                      <ul class="dropdown-menu">
                          <li><a href="fechaa.php?a=<?php echo $a; ?>">Tomar Asistencia</a></li>
                          <li><a href="agregar.php">Agregar Asistencia</a></li>
            
                      </ul>
                    
                  </li>

                   <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-print"></span> Ver e Imprimir<b class="caret"></b></a>
                      <ul class="dropdown-menu">
                          <li><a href="dia.php">Fecha Especifica</a></li>
                          <li><a href="fecha1.php">Rango de Fechas</a></li>
                          
                      </ul>
                    
                  </li>
                  
              </ul>

                  <ul class="nav navbar-nav navbar-right">
                       
                       
                            <li><a href="salir.php"><span class="glyphicon glyphicon-off"></span> Cerrar Sesion</a></li>
                            
                           
                            
                          </ul>
                        </li>
                  </ul>


          </div>



        </div>
      
     </nav>


        
          <section id="cuerpo">
                
                        <h1 align="center">Bienvenido:</h1>
                       <h1 align="center"> <font color="#2558BF"> <?php echo $_SESSION["nombre"]; ?></font> </h1> 
                        
                        <?php 
                          if ($a==0) {
                            echo "Actualmente no tiene grado asignado.";
                          }else{
                            echo "<h4 align='center'> Grado Asignado:   ";
                            echo utf8_encode($leer2["nombreg"])." Sección: ".$leer3["id_seccion"];

                          }
                           
                        ?>
                        <br>
                        <img height="300px" src="./img/asistencia.png">
                        
                        <h2 align="center"><font color="#721A1A">Control de Asistencia de Grado Guia</font></h2>
                        

          </section>
<div id="viewdata"></div>
           </section>
<br> <br>
    <footer>
            <p>
            
<button type="button" class="btn btn-primary btn-lg btn-block">Creado por: Otto Calderon, Carlos Milla, Giovanni Pinto </button>
          </footer>








 	
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
 