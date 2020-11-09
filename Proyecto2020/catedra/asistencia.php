<?php 
	include('sesion.php');
	include('conexion.php');

	//$fecha="";
	//if (isset($_GET['fecha'])) {
 // $fecha=$_GET['fecha'];
	//}
	//echo $id;


          $fecha=$_POST['TxtFecha'];
          $sql="select * from detalles_estudiante where id_grado=".$_SESSION["idgrado"]." and id_seccion='".$_SESSION["idseccion"]."'";
          $eje=mysqli_query($conexion,$sql);
           //echo $_SESSION["usuario"];           
      $x=0;
      
 ?>


 <!DOCTYPE html>
<html lang="es">
<head>
 <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	
	<title>Listado</title>
	<link rel="stylesheet"  href="css/bootstrap.min.css">
  <link rel="stylesheet"  href="css/estilo2.css">
  
</head>
<body>

			   <section class="todo">
         <header> <img src="img/logo.jpg">
          <h3> 
                <font color="white">
                     <span id="uni"> Colegio Ciencia y Tecnologia     </span> 
                      
                </font>
          </h3>
      </header>

          
           
               <nav class="navbar navbar-default"  role="navigation">
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
                  
                  <li><a href="inicio.php"><span class="glyphicon glyphicon-home"></span> Regresar a Menu Principal</a></li>
                  	<li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-list-alt"></span> Asistencia<b class="caret"></b></a>
                      <ul class="dropdown-menu">
                          
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
                       
                        <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="glyphicon glyphicon-user"></span> <?php echo $_SESSION["nombre"]; ?><span class="caret"></span></a>
                          <ul class="dropdown-menu">
                            <li><a href="salir.php">Cerrar Sesion</a></li>
                            <li><a href="inicio.php">Regresar a Menu Principal</a></li>

                           
                            <li role="separator" class="divider"></li>
                            <li><a href="#">Siguiente pagina</a></li>
                          </ul>
                        </li>
                  </ul>


          </div>



        </div>
      
     </nav>


          
      
          <section id="cuerpo">
        				
                 
                    <form method="post" action="gasistencia.php?fecha=<?php echo $fecha ;?>">
    <table width="50%"  align="center">
      <tr>
        <td width="10%" >
          <b>Grado:</b>   
        </td>
        <td width="40%">
          
          <?php echo utf8_encode($_SESSION["ngrado"]); ?>   
        </td>
        <tr>
          <td >
            <b>Sección:</b>     
          </td>
          <td>
            <?php echo $_SESSION["idseccion"]; ?>      
          </td>
        </tr>
      </tr>
      <tr>
        <td >
          <b>Fecha:</b>
        </td> 
        <td>
          <?php echo  $fecha; ?>
        </td>
      </tr>
    </table>

    <hr>
    <h2>
    <center>
      <?php 
        error_reporting(E_ALL ^ E_NOTICE); //EVITAR MENSAJES DE NOTIFICACION
        //AL EXISTIR UN ERROR EN VALIDACION DE DATOS
        if ($_GET["error"]=="si") {
          echo "<font color='red' ><h4><span> Asitencia ya asignada en esta fecha.</span></h4></font>";
        }elseif ($_GET["error"]=="no") {
          echo "<font color='#41A85F' ><h4><span> Asistencia Guardado con exito !!.</span></h4></font>";
        }
        else{
          echo "<br>Listado de Asistencia<br>";
        }    
      ?>
    </center> 
    </h2> 
    <br>
    <div class="row">
          <div class="col-md-12" >
            <table  class=" table table-striped" >
              <thead>
                <tr>
                  <th>#</th>
                  <th>Carnet</th>
                  <th>Nombre(s)</th>
                  <th>Apellido(s)</th>
                  <th>Presente</th>
                  <th>Ausente</th>
                 
                </tr>
              </thead>
              <tbody>
              <?php while ($leer=mysqli_fetch_array($eje)) {
                if (!$leer) {
                  echo "<tr><td colspan='7'>Sin información de alumnos.</td>";  
                }else{
                  $x=$x+1;
                  echo "<tr><td>".$x."</td>";//NUMERO DE FILA
                  echo "<td>".$leer["0"]."</td>";//CARNET
                  $sql1="select * from estudiantes where id_estudiante=".$leer["0"];
                  $carnet=$leer["0"];
                  $eje1=mysqli_query($conexion,$sql1);
                  $leer1=mysqli_fetch_array($eje1);
                  echo "<td>".$leer1["nombre"]."</td>";// NOMBRE DE ALUMNO
                  echo "<td>".$leer1["apellido"]."</td>";// APELLIDO DE ALUMNO
                  echo "<td><input type='radio' name='A".$leer["0"]."' value='1' required=''></td>";//RADIO DE SELECCION
                  echo "<td><input type='radio' name='A".$leer["0"]."' value='2' required=''></td>";//RADIO DE SELECCION
                 // echo "<td><input type='text' name='comentario' class='form-control' placeholder='Observación'></td></tr>";//CAJA DE COMENTARIO
                }
              } ?>    
            
              <tr>
                <td colspan="7" align="center">
                  <br><button type="submit" name="Submit" class="btn btn-warning">Guardar Asistencia</button>
                </td>
              </tr>   
              </tbody>
            </table>
          </div>
        </div>
  </form>
         
          </section>
      <br><br><br><br><br><br>
          
    </section>

    <footer>
            <p>
            
<button type="button" class="btn btn-primary btn-lg btn-block">Creado por: Otto Calderon, Carlos Milla, Giovanni Pinto</button>
          </footer>








 	
	<script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>