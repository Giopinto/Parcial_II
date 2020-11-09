<?php 
  include('sesion.php');
  include('conexion.php');
  $fecha=$_POST["TxtFecha"];
  if (isset($_GET['fecha'])) {
    $fecha1=$_GET['fecha'];
  }
  //$fecha1=$_GET["fecha"];
  //$sql="select * from asistencia where fecha='".$fecha."' or Fecha='".$fecha1."'";
  $sql="SELECT * FROM asistencia WHERE fecha='".$fecha."' and id_cat= ".$_SESSION["usuario"];
  $eje=mysqli_query($conexion,$sql);
  
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
            width: 90px;
            height: 90px;
            background-color: white;
            -webkit-border-radius: 50%;
            position: center;
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
             <h4> <font color="blue">Catedr&aacute;tico</font> </h4>
           
          </div>


          <div class="collapse navbar-collapse">
              <ul class="nav navbar-nav">
                  
                  <li><a href="inicio.php"><span class="glyphicon glyphicon-home"></span> Regresar a Menu Principal</a></li>
                    

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
                            <li><a href="salir.php">Salir</a></li>
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

                <br>
          <table   width="98%">
            <tr>
          
              <td bgcolor="#B2D8BB" width="25%" align="center">
              
              <img src="img/tema.png">&nbsp;&nbsp;</td>
              
              &nbsp;&nbsp;&nbsp;&nbsp;
              <td bgcolor="#B2D8BB" width="70%" align="left"><h3><b>Datos de la Asistencia Dia <?php echo $fecha ?></b></h3></td>  
              
              </td>
            </tr>  
          </table>
          <br>
              <form name="FormAs" method="post" action="#">
                <br><br>
                
                <table class="table table-bordered table-hover">
                  <thead>
                    <th >Id</th>
                    <th>Carnet</th>
                    <th>Alumno</th>
                    <th>Fecha</th>
                    <th>Opcion</th>
                  </thead>
                  <tbody>
                    <?php 
                      //echo "Asistencia del día".$fecha; 
                      //echo $sql;
                      while ($leer=mysqli_fetch_array($eje)) {
                        if (!$leer) {
                          echo "no hay datos para la fecha ".$fecha;
                        }else{
                          //echo "buscando datos...";
                          $id=$leer["0"];
                          $car=$leer["1"];

                    ?>

                          <tr>
                            <td><?php echo  $leer["0"]; ?></td>
                            <td><?php echo $leer["1"]; ?></td>

                            <?php 
                                //BUSACNDO LOS DATOS DEL  ALUMNO
                                $consulta="SELECT * FROM estudiantes WHERE id_estudiante=".$leer["1"];
                                $ejecutar=mysqli_query($conexion,$consulta);
                                $lectura=mysqli_fetch_array($ejecutar);
                            ?>
                            <td><?php echo $lectura["1"]." ".$lectura["2"] ; ?></td>
                            <td><?php echo $fecha; ?></td>

                            <td align="center"><button type="button" class="btn btn-warning"><?php echo "<a href='agregar1.php?id=$id & car=$car & fecha=$fecha'>Ver</a>"; ?></button></td>

                          </tr>
                         <?php  
                        }
                      }
                    ?>
                  </tbody>
                </table>    
          </form>
          </section>
       <br><br><br><br><br><br> <br>
          
    </section>
<br>
    <footer>
            <p>
            
<button type="button" class="btn btn-primary btn-lg btn-block">Creado por: Otto Calderon, Carlos Milla, Giovanni Pinto </button>
          </footer>








  
  <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>