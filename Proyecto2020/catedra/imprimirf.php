<?php 
  include('sesion.php');
  include('conexion.php');
 $de=$_POST["Fecha0"];
  $a=$_POST["Fecha1"];
  $sql="SELECT * FROM asistencia WHERE fecha BETWEEN '".$de."' And '".$a."' and id_cat=".$_SESSION["usuario"]." order by fecha";
  $eje=mysqli_query($conexion,$sql);
  
 ?>


 <!DOCTYPE html>
<html lang="es">
<head>
 <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <title>Fechas</title>
  <link rel="stylesheet" type="text/css" href="bootstrap-3.3.5-dist/css/bootstrap.min.css">
  <!--ESTABLECER AREA DE IMPRESION-->
  <script type="text/javascript">
    function imprSelec(areadeimpresion){
      var ficha=document.getElementById(areadeimpresion);var ventimp=window.open(' ','popimpr');ventimp.document.write(ficha.innerHTML);ventimp.document.close();ventimp.print();ventimp.close();}
  </script>
  <!--FIN DE FUNCION PARA IMPRIMIR-->
  <link rel="stylesheet"  href="css/bootstrap.min.css">
  <link rel="stylesheet"  href="css/estilo2.css">
</head>
<body>



<div id="areadeimpresion">
        <section class="todo">
         <header> <img src="img/logousac.png">
          <h3> 
                <font color="white">
                     <span id="uni"> Colegio Ficticio </span> 
                      
                </font>
          </h3>
      </header>

          
           
              


          
      
          <section id="cuerpo">
             <center><h2>Listado de Asistencia <?php echo $de." a ".$a; ?></h2></center>
        <br>
        <table  width="80%" align="center">
          <tr><td>
            <table>
              <tr>
                <td>
                 <b> Grado:</b>
                </td>
                <td>
                  
                    <?php echo utf8_encode($_SESSION["ngrado"]); ?> 
                  
                  
                </td>
              </tr>
              <tr>
                <td>
                 <b>Sección:</b> 
                </td>
                <td>
                  
                    <?php echo utf8_encode($_SESSION["idseccion"]); ?>
                 
                </td>
              </tr>
              <tr>
                <td>
                  <b>Docente Guia: </b>
                </td>
                <td>
                  
                    <?php echo utf8_encode($_SESSION["nombre"]); ?>
                  
                </td>
              </tr>
            </table>
            <hr>
          </td></tr>
        </table><br>
            <table  class=" table table-striped" >
              <thead>
                <tr>
                  <th>Fecha</th>
                  <th>Carnet</th>
                  <th>Alumno</th>
                  <th>Estado</th>
                  <th>Observacion</th>
                </tr>
              </thead>
              <tbody>
                <?php while ($leer=mysqli_fetch_array($eje)) { 
                  if (!$leer) {
                    echo "<tr><td>sin datos para la fecha</td></tr>";
                  }else{
                    //buscando al alumno NOMBRE Y APELLIDO
                    $a="SELECT * FROM estudiantes WHERE id_estudiante=".$leer["id_estudiante"];
                    $b=mysqli_query($conexion,$a);
                    $c=mysqli_fetch_array($b);  
                    //buscando el estado NOMBRE
                    $a1="SELECT * FROM estados WHERE id_estado=".$leer["id_estado"];
                    $b1=mysqli_query($conexion,$a1);
                    $c1=mysqli_fetch_array($b1);
                  ?>
                    <tr>
                      <td><?php echo  $leer["5"] ?></td>
                      <td>
                        <?php echo $leer["1"]; //carnet?>
                      </td>
                      <td>
                        <?php echo $c["1"]." ".$c["2"]; //alumno?>
                      </td>
                      <td>
                        <?php echo $c1["1"]; //estado?>
                      </td>
                      <td>
                        <?php echo $leer["observacion"]; ?>
                      </td>
                    </tr>
                <?php
                  }
                 } 
                 ?>     
              </tbody>
            </table>
          </section>
       <br><br><br><br>
          
    </section>
<br>

<a href="javascript:imprSelec('areadeimpresion')">
   <p align="center">   <button type="submit" class="btn btn-primary btn-lg" name="BtnImprimir">IMPRIMIR</button>
  </a>
  <a href="fecha1.php" class="btn btn-primary btn-lg active" role="button">Buscar otra fecha</a>
  <br><br><br>
    <footer>
           </p>
            
<button type="button" class="btn btn-primary btn-lg btn-block">Creado por: Otto Calderon, Carlos Milla, Giovanni Pinto</button>
          </footer>
  </div> <!-- FINALIZAR IMPRESION DE HOJA-->  
  
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>