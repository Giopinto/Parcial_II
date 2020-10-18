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
  
  <title>Grados</title>
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
             <h4> <font color="#2969B0">Administrador</font> </h4>
           
          </div>


          <div class="collapse navbar-collapse">
              <ul class="nav navbar-nav">
                  
                  <li><a href="inicio.php"><span class="glyphicon glyphicon-home"></span> Regresar a Menu Principal</a></li>
                    
                   <li><a href="cgrado.php"><span class="glyphicon glyphicon-link"></span> Grado y Seccion</a></li>
                  <li><a href="eliminar.php"><span class="glyphicon glyphicon-book"></span> Eliminar Asistencia</a></li>
              </ul>



                  <ul class="nav navbar-nav navbar-right">
                       
                        <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="glyphicon glyphicon-user"></span> <?php echo $_SESSION["nombre"]; ?><span class="caret"></span></a>

                          <ul class="dropdown-menu">
                            <li><a href="salir.php">Cerrar Sesiòn</a></li>
                            <li><a href="cgrado.php">Control de Grados</a></li>

                           
                            <li role="separator" class="divider"></li>
                            <li><a href="inicio.php">Inicio</a></li>
                          </ul>
                        </li>
                  </ul>


          </div>



        </div>
      
     </nav>


          
      
          <section id="cuerpo">
          <br>
          <table   width="98%">

          
          </tr>
            <tr>
          
              <td bgcolor="#B2D8BB" width="10%" align="center">
              
              <img src="img/Admin.png">&nbsp;&nbsp;
              
              &nbsp;&nbsp;&nbsp;&nbsp;
              <td bgcolor="#B2D8BB" width="20%" align="left"><h4>Asignacion de Seccion y Catedratico Guia</h4></td>
              
            </td>
  
            </tr>
  
          </table>
          <br><br>
          



               <table  width="98%">
               <tr>
            <td bgcolor="#B2D8BB" colspan="2" align="center">
              <?php 
                error_reporting(E_ALL ^ E_NOTICE);
                
                if ($_GET["error"]=="si") {
                  echo "<font color='red' ><h4><span>El Grado y Seccion ya se encuentra asignado...</span></h4></font>";
                }
                else{
                  
                }    
              ?>

              <?php
              error_reporting(E_ALL ^ E_NOTICE);
              
              if ($_GET["error1"]=="si") {
                echo "<font color='red' ><h4><span> El Docente ya se encuentra asignado!! </span></h4></font>";
              }
              else{
                
              }    
            ?>


            <?php
              error_reporting(E_ALL ^ E_NOTICE);
              
              if ($_GET["error2"]=="no") {
                echo "<font color='#2C82C9' ><h4><span> Grado Asignado Con Exito!! </span></h4></font>";
              }
              else{
                
              }    
            ?>
            </td>
                    <tr>
                      <td align="center" width="60%">
                          <font size="3"><b>Grados Actuales</b></font>
                            <table border="1" width="80%">
                <thead>
                  <tr>
                   
                    <th>Grado</th>
                    <th>Seccion</th>
                    
                    <th>Docente Guia</th>
                  </tr>
                </thead>
                <tbody>
              <?php

               $sql="select grados.id_grado,grados.nombreg,secciones.id_seccion,catedraticos.nombre,catedraticos.apellido
               from grados,secciones,grado_seccion,catedraticos,administrador
              where grados.id_grado=grado_seccion.id_grado and 
              grado_seccion.id_seccion=secciones.id_seccion and
              grado_seccion.id_cat=catedraticos.id_cat and
              catedraticos.id_admin=administrador.id_admin and
              administrador.id_admin=".$_SESSION["usuario"];

            /*  $sql="select catedraticos.nombre,catedraticos.apellido, grado_seccion.* from catedraticos,grado_seccion,administrador
              where grado_seccion.id_cat=catedraticos.id_cat and 
              catedraticos.id_admin=administrador.id_admin and
              administrador.id_admin=".$_SESSION["codigo"];*/
              $eje=mysqli_query($conexion,$sql);
              while ($row = mysqli_fetch_assoc($eje)) {
                   /* //para mostrar Grados
              //22222222222222222222222222222222222222222222222222222222222222222
                     $sqln="select * from grados where id_grado=".$row['id_grado'];
                      $res=mysqli_query($conexion,$sqln);
                      $row1=mysqli_fetch_assoc($res);
                      if (!$row1) {
                        echo "Dato no existente o no encontrado";
                      }
              //22222222222222222222222222222222222222222222222222222222222222222

              //Mostrar Seccion
              //333333333333333333333333333333333333333333333333333333333333333333333   
                      $sqls="select * from secciones where id_seccion='".$row['id_seccion']."'";
                      $eje=mysqli_query($conexion,$sqls);
                      $row2=mysqli_fetch_assoc($eje);
                      if (!$row2) {
                        echo "Dato no existente o no encontrado";
                      }
                        $nombrec=$row['nombre']."  ".$row['apellido'];  
                     */
                    ?>
                  
                  <tr>
                    
                    <td align="center"><?php echo $row['nombreg']; ?></td>
                    <td align="center"><?php echo $row['id_seccion']; ?></td>
                    <td align="center"><?php echo $row['nombre']." ".$row['apellido'];  ?></td>
                    
  
                     
                    <?php
                    }
                    ?> 
                    </tbody>          
                      </table>

                      </td>
                      <form method="post" action="guardarasignacion.php">
                      <td align="left">
                          <font size="3"><b>Asignar Nuevo Grado</b></font><br>
                          <br>
                             Selecione El Grado &nbsp;&nbsp;&nbsp;
                         <select name="TxtG"  class="caja2" id="TxtG">
                         <option selected="---">---</option>
                          <?php 
                              include 'conexion.php';
                            $sql1="select * from grados where id_admin=".$_SESSION["usuario"];
                            $ejecutar=mysqli_query($conexion,$sql1);
                            while ($row1=mysqli_fetch_assoc($ejecutar)) {
                              echo "<option value=".$row1['id_grado']."";
                                //if ($_POST['nombre']==$row['id_tipotema']) {
                                  //echo " SELECTED ";
                                //}
                              echo ">";
                              $grado= $row1['nombreg']; 
                              echo utf8_encode($grado);
                              echo "</option>";
                            }
                           ?>
                         </select>
                          <br> <br> 

                         Selecione La Seccion:  
                         <select name="TxtS"  class="caja2" id="TxtS">
                         <option selected="---">---</option>
                          <?php 
                              include 'conexion.php';
                            $sql2="select * from secciones";
                            $ejecutar=mysqli_query($conexion,$sql2);
                            while ($row2=mysqli_fetch_assoc($ejecutar)) {
                              echo "<option value='".$row2['id_seccion']."'";
                                //if ($_POST['nombre']==$row['id_tipotema']) {
                                  //echo " SELECTED ";
                                //}
                              echo ">";
                               $seccion=$row2['id_seccion']; 
                               echo $seccion;
                              echo "</option>";
                            }
                           ?>
                         </select>
                          <br> <br> 
                        Selecione Catedratico:
                         <select name="TxtCat"  class="caja3" id="TxtCat">
                         <option selected="---">---</option>
                          <?php 
                              include 'conexion.php';
                            $sql3="select * from catedraticos";
                            $ejecutar=mysqli_query($conexion,$sql3);
                            while ($row3=mysqli_fetch_assoc($ejecutar)) {
                              echo "<option value=".$row3['id_cat']."";
                                //if ($_POST['nombre']==$row['id_tipotema']) {
                                  //echo " SELECTED ";
                                //}
                              echo ">";
                               $nombrec=$row3['nombre']."  ".$row3['apellido']; 
                              echo utf8_encode($nombrec);
                              echo "</option>";
                            }
                           ?>
                         </select>


                          <br><br>
                      <input type="submit" value="Guardar Asignacion">
                    </form>


                        </td>
                      
                    </tr>


                  </table>





         

 
          </section>
       <br><br><br>
          
    </section>
<br>
    <footer>
            <p>
            
<button type="button" class="btn btn-primary btn-lg btn-block">Colegio Ficticio</button>
          </footer>








  
 <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>