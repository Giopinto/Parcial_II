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

             <!--  
         <header> <img src="img/logo.jpg">
          <h3> 
                <font color="white">
                     <span id="uni"> Colegio Ciencia y Tecnologia     </span> 
                      
                </font>
          </h3>
      </header> 
      -->


      

          
           
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
          
              <td bgcolor="#B2D8BB" width="40%" align="center">
              
              <img src="img/tema.png">&nbsp;&nbsp;</td>
              
              &nbsp;&nbsp;&nbsp;&nbsp;
              <td bgcolor="#B2D8BB" width="50%" align="left"><h3><b>Modificar Asistencia</b></h3></td>
              
              
              
                 
              </td>
              
              
              
              
            </tr>
            
          </table>
          <br>
              <form name="FormAs0" method="post" action="datoes.php?fecha=xxx">
                
                <br><br>
                <table width="80%" align="center" align="center">
                  <tr>
                    <td >
                      <h3>Seleccione fecha a buscar:</h3>
                    </td> 
                    <td>
                      <h2>
                        <input  type="date" name="TxtFecha" align="center" required=""> 
                      </h2> 
                    </td>
                  </tr>
                  <tr>
                    <td colspan="2" align="center">
                    <br><br><br><br><br>
                      
                        <input type="submit" name="BtnEnviar" value="Mostrar">
                      
                      
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
            
<button type="button" class="btn btn-primary btn-lg btn-block">Creado por: Otto Calderon, Carlos Milla, Giovanni Pinto</button>
          </footer>








  
  <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>