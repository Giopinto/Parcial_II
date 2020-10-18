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
    <title>Eliminar</title>

    <!-- Bootstrap -->
    <link rel="stylesheet"  href="css/bootstrap.min.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
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
                  <li><a href="asignacion1.php"><span class="glyphicon glyphicon-folder-open"></span>  Asignacion de Catedraticos</a></li>
              </ul>



                  <ul class="nav navbar-nav navbar-right">
                       
                        <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="glyphicon glyphicon-user"></span> <?php echo $_SESSION["nombre"]; ?><span class="caret"></span></a>

                          <ul class="dropdown-menu">
                            <li><a href="salir.php">Cerrar Sesiòn</a></li>
                            <li><a href="asignacion1.php">Ver Asignacion</a></li>

                           
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
            <tr>
          
              <td bgcolor="#B2D8BB" width="30%" align="center">
              
              <img src="img/Admin.png">&nbsp;&nbsp;
              
              &nbsp;&nbsp;&nbsp;&nbsp;
              <td bgcolor="#B2D8BB" width="20%"><h4>Eliminar Asistencia</h4></td>
              
              
              
                 
              </td>
              
              
              
              
            </tr>
            
          </table>
             <br><br>


             <table width="80%" align="center">
               <tr>
                 <td bgcolor="#B2D8BB" colspan="2" align="center">
                   <?php 
                error_reporting(E_ALL ^ E_NOTICE);
                
                if ($_GET["error"]=="no") {
                  echo "<font color='#2C82C9' ><h4><span>Asistencia Eliminado con Exito...</span></h4></font>";
                }
                else{
                  
                }    
              ?>

              <?php
              error_reporting(E_ALL ^ E_NOTICE);
              
              if ($_GET["error1"]=="no") {
                echo "<font color='red' ><h4><span> Eliminacion fue Cancelado!! </span></h4></font>";
              }
              else{
                
              }    
            ?>
                 </td>
               </tr>
             
     <tr>
       <td align="center">
         
      
             <form method="post" action="eg.php">
                  Ingrese fecha de Asistencia a Eliminar: <input type="date" name="TxtFecha">
                  <br><br>
                  Ingrese Carnet de Estudiante:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="TxtCarnet">
                  <br><br>
                  Codigo del Maestro Guia del Grado:<input type="text" name="TxtCat">
                  <br><br><br>
                  <input type="submit" name="BtnEnviar" value="Eliminar">
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








 	
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>