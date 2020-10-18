<?php 
	include('sesion.php');
	include('conexion.php');
 
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	
	<title>Inicio de Sesion</title>
	<link rel="stylesheet"  href="css/bootstrap.min.css">
  <link rel="stylesheet"  href="css/estilo2.css">
</head>
<body>

			   <section class="todo">
         <header> <img src="img/logousac.png">
          <h3> 
                <font color="white">
                     <span id="uni"> Colegio Ficticio</span> <br>
                      
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
             <h4> <font color="blue">Administrador</font> </h4>
           
          </div>


          <div class="collapse navbar-collapse">
              
                  <ul class="nav navbar-nav">
                  <li><a href="cgrado.php"><span class="glyphicon glyphicon-link"></span> Grado y Seccion</a></li>
                   <li><a href="asignacion1.php"><span class="glyphicon glyphicon-folder-open"></span>  Asignacion de Catedraticos</a></li>
                  <li><a href="eliminar.php"><span class="glyphicon glyphicon-book"></span> Eliminar Asistencia</a></li>
                  
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
                        
                       
                        <br>
                       <p align="center"><img height="300px" src="./img/asistencia.png"></p> 
                        
                        <h2 align="center"><font color="#721A1A">Control de Asistencia</font></h2>

          </section>
<br> <br>
    <footer>
            <p>
            
<button type="button" class="btn btn-primary btn-lg btn-block">Creado por: Otto Calderon, Carlos Milla, Giovanni Pinto</button>
          </footer>








 	
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
 