<?php 
  include('sesion.php');
  include('conexion.php');

   $desde=$_POST['desde'];
   $hasta=$_POST['hasta'];

                  //COMPROBACION QUE LAS FECHAS EXISTAN
                   if(isset($desde)==false){
                      $desde = $hasta;
                    }

                    if(isset($hasta)==false){
                      $hasta = $desde;
                    }


    $sqle="select estudiantes.id_estudiante, estudiantes.nombre, estudiantes.apellido, grados.nombreg, secciones.id_seccion,estados.nombres,asistencia.observacion,asistencia.fecha
      from estudiantes, detalles_estudiante, grado_seccion, grados, secciones,asistencia,estados
      where grados.id_grado=grado_seccion.id_grado and
      secciones.id_seccion=grado_seccion.id_seccion and
      grado_seccion.id_grado=detalles_estudiante.id_grado and
      grado_seccion.id_seccion=detalles_estudiante.id_seccion and
      estudiantes.id_estudiante=detalles_estudiante.id_estudiante and
      detalles_estudiante.id_estudiante=asistencia.id_estudiante and
      detalles_estudiante.id_grado=asistencia.id_grado and
      detalles_estudiante.id_seccion=asistencia.id_seccion and
      asistencia.id_estado=estados.id_estado and
      asistencia.fecha BETWEEN '$desde' AND '$hasta' and
      asistencia.id_estudiante=". $_SESSION["usuario"];                    
      $eje = mysqli_query($conexion,$sqle);
      //$leer=mysqli_fetch_array($eje);
  
 ?>


 <!DOCTYPE html>
<html lang="es">
<head>
 <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <title>Fechas</title>
  <link rel="stylesheet"  href="css/bootstrap.min.css">
  <link rel="stylesheet"  href="css/estilo2.css">
     <style>
      
          img{
            width: 75px;
            height: 75px;
            background-color: white;
            -webkit-border-radius: 50%;
            position: center;
          } 

          .navbar{
  background: #00A885;
}
  </style>
</head>
<body>

         <section class="todo">
         

          
           
               <nav class="navbar navbar-default" role="navigation">
        <div class="container-fluid">
          <div class="navbar-header">
             <button type="button" class="navbar-toggle" data-togle="collapse" data-targer="#acolapsar">
               <span class="sr-only">Toggle Navigation</span>
              <span class="icon-bar"> </span>
              <span class="icon-bar"> </span>
              <span class="icon-bar"> </span>
             </button>
             <h4> <font color="blue">Estudiante</font> </h4>
           
          </div>


          <div class="collapse navbar-collapse">
              <ul class="nav navbar-nav">
                  
                  <li><a href="inicio.php"> <font color="white"> <span class="glyphicon glyphicon-home"></span> Regresar a Menu Principal</font></a></li>
                  
                    

                  
                  
              </ul>



                   <ul class="nav navbar-nav navbar-right">
                       
                        <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><font color="#D1D5D8"> <span class="glyphicon glyphicon-user"></span> <?php echo $_SESSION["nombre"]; ?><span class="caret"></span></font></a>

                          <ul class="dropdown-menu">
                            <li><a href="salir.php">Salir</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="inicio.php">Regresar a Menu Principal</a></li>
                          </ul>
                        </li>
                  </ul>


          </div>



        </div>
      
     </nav>

      <section id="cuerpo">   
      
          <table   width="98%">
            <tr>
          
              <td bgcolor="#B2D8BB" width="25%" align="center">
              
              <img src="img/tema.png">&nbsp;&nbsp;</td>
              
              &nbsp;&nbsp;&nbsp;&nbsp;
              <td bgcolor="#B2D8BB" width="50%" align="left"><h4><b>Datos Asistencia de <?php echo $desde ."  &nbsp;al&nbsp; ". $hasta ?></b></h4></td> 
              </td>
            </tr>          
          </table>
          <br>

          <table border="1" width="70%">
            <tr>
              <td align="center"><b>Carnet</b></td>
              <td align="center"><b>Nombre Estudiante</b> </td>
              <td align="center"><b>Grado</b></td>
              <td align="center"><b>Seccion</b></td>
            </tr>
            <tr>
              <td align="center" ><?php echo $_SESSION["usuario"]; ?></td>
              
              <td align="center"><?php echo $_SESSION["nombre"]; ?></td>
              <td align="center"><?php echo $_SESSION["ngrado"]; ?></td>
              <td align="center"><?php echo $_SESSION["idseccion"]; ?></td>
            </tr>

          </table>
          
<br><br><br>
        <table class="table table-bordered table-hover" width="50%">
         
              

          <tbody>

              <tr align="center"> 
                <td align="center"><b>Fecha</b> </td>
                <td align="center"><b>Estado</b> </td>
                <td align="center"> <b> Observacion</b></td>
              </tr>
                      
             <?php 
          
                   while ($row = mysqli_fetch_assoc($eje)) {        
             ?>
                    
                       <tr>
                              
                               <td align="center"><?php echo $row['fecha']; ?></td>
                               <td align="center"><?php echo $row['nombres']; ?></td>
                               <td align="center"><?php echo $row['observacion']; ?></td>
                              
                              
                         <?php 
                            }  
                          ?>
                        </tr>
          </tbody>
        </table>  
        </section>
       <br><br><br><br><br><br><br>
          
    </section>
          
    
      <br>
      <footer>
         <p>    
         <button type="button" class="btn btn-primary btn-lg btn-block">Colegio Ciencia y Tecnologia</button>
      </footer>
  
  <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
