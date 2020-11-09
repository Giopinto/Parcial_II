<?php 
  
  include('conexion.php');
  include('sesion.php');
  $id="";
  if (isset($_GET['id'])) {
    $id=$_GET['id'];
  }
  $car="";
  if (isset($_GET['car'])) {
    $car=$_GET['car'];
  }

  $fecha="";
  if (isset($_GET['fecha'])) {
    $fecha=$_GET['fecha'];
  }
  echo "id>".$id."<br>";
  echo "car>".$car."<br>";
  $sql="SELECT * FROM asistencia WHERE id_asistencia=".$id." and id_estudiante=".$car;
  $eje=mysqli_query($conexion,$sql);
  $leer=mysqli_fetch_array($eje);
  //echo $sql;
  if (!$leer) {
    echo "no se encontro el carnet de la asistencia";
  }else{
    //echo "carnet hallado";
    //buscando datos del alumno
    $consulta="SELECT * FROM estudiantes WHERE id_estudiante=".$leer["1"];
    $ejecutar=mysqli_query($conexion,$consulta);
    $lectura=mysqli_fetch_array($ejecutar);
    //buscando datos del estado
    $consulta1="SELECT * FROM estados";
    $ejecutar1=mysqli_query($conexion,$consulta1);
  }
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
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-list-alt"></span> Asistencia<b class="caret"></b></a>
                      <ul class="dropdown-menu">
                          <li><a href="fechaa.php?>">Tomar Asistencia</a></li>
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
              <td bgcolor="#B2D8BB" width="70%" align="left"><h3><b>Asistencia del día <?php echo $fecha?></b></h3></td> 
              </td>
            </tr>          
          </table>
          <br>
             <form name="FormAs" method="post" action="editar.php?id=<?php echo $id; ?> & car=<?php echo $car; ?>">
    
    <br><br>
    <center>
    <?php 
        error_reporting(E_ALL ^ E_NOTICE); //EVITAR MENSAJES DE NOTIFICACION
        //AL EXISTIR UN ERROR EN VALIDACION DE DATOS
        if ($_GET["error"]=="si") {
          echo "<font color='red' ><h4><span> Error, Datos Incorrectos</span></h4></font>";
        }elseif ($_GET["error"]=="no") {
          echo "<font color='#41A85F' ><h4><span> Datos Actualizados con Exito</span></h4></font>";
        }
        
      ?>
      <br>
        
    </center>
    <table border="1" width="50%" align="center">
      <tr>
        <td align="center" bgcolor="#00A885"><b>Id Asistencia</b></td>
        <td align="center" bgcolor="#00A885"><b>Carnet</b></td>
        <td align="center" bgcolor="#00A885"><b>Alumno</b></td>
       
      </tr>
      
        
        <tr>
          <td align="center">
            <?php echo $id; ?>
          </td>
          <td align="center">
            <?php echo $car; ?>
          </td>
          <td align="center">
            <?php echo $lectura["1"]." ".$lectura["2"] ?>
          </td>
         
        </tr>
      
    </table>


        <br><br> <br>
        <p align="center"><font size="4" color="#2969B0">Editar Estado, Agregar Observacion</font></p>
     

        <table width="50%" align="center">
        <tr>
          <td align="center"><b>Estado</b></td>
          <td align="center"><b>Observacion</b></td>
        </tr>
          <tr>
              <td>
            <select class="form-control" name="TxtEstado" id="TxtEstado">
            
              <?php while ($lectura1=mysqli_fetch_array($ejecutar1)) { 
                //echo "<option>".$row['Nombre'].", ".utf8_encode($_SESSION["carrera"])."</option>";
                echo "<option>".$lectura1["1"]."</option>"; 
                //$name=$row['Nombre'];
                //echo "<input type='hidden' name='Jornada' value='".$lectura1["0"]."'>";
              }?>
            </select>
          </td>
          <td>
            <input type="text" class="form-control" name="Comentario" id="Comentario" value="<?php echo $leer["7"]; ?>">
          </td>
        </tr>
        <tr>
          
          <td colspan="2" align="center"><br><br>
            <input type="submit" value="Guardar">
              
          </td>
          </tr>

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