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


          
      
          <section id="cuerpo">
          <br>
          <table   width="98%">

          
          </tr>
            <tr>
          
              <td bgcolor="#B2D8BB" width="10%" align="center">
              
              <img src="img/Admin.png">&nbsp;&nbsp;
              
              &nbsp;&nbsp;&nbsp;&nbsp;
              <td bgcolor="#B2D8BB" width="20%" align="left"><h4>Asignacion de Padre de Familia del Estudiante</h4></td>
              
            </td>
  
            </tr>
  
          </table>
         
     <br><br><br>
     <p align="center"><b>Ingrese Datos del Padre de Familia</b></p> <br><br>

     <table>
       <tr>
         <td align="center">
           
         
     <form method="post" action="nest2.php">
         Ingrese Codigo:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="TxtId"> <br>
         Ingrese Nombre:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="TxtNom"> <br>
         Ingrese Apellido:&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="TxtAp"> <br>
         Ingrese Telefono:&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="TxtTel"> <br>
         Ingrese Contrasena:<input type="text" name="TxtContra"> <br><br><br>
         <input type="submit" value="Guardar Datos">
      </form>
      </td>
       </tr>
     </table>

 
          </section>
       <br><br><br><br><br><br><br>
          
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