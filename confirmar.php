<?php 
  include('sesion.php');
  include('conexion.php');

  $carnet="";
	if (isset($_GET['carnet'])) {
		$carnet=$_GET['carnet'];
	}
	$fecha="";
	if (isset($_GET['fecha'])) {
		$fecha=$_GET['fecha'];
	}
	$cat="";
	if (isset($_GET['cat'])) {
		$cat=$_GET['cat'];
	}
	//echo $carnet; echo " <br>";
	//echo $fecha; echo " <br>";
	//echo $cat; echo " <br>";


	$sql="select * from asistencia where id_estudiante=".$carnet."  and fecha='".$fecha."' and id_cat=".$cat;
	  $eje=mysqli_query($conexion,$sql);
	  $leer=mysqli_fetch_array($eje);
	  $asis=$leer["0"];
	  //echo $asis; echo " <br>";

	 /* $sql1="select * from aeliminado where id_estudiante=".$carnet."  and fecha='".$fecha."' and id_cat=".$cat;
	  $eje1=mysqli_query($conexion,$sql1);
	  $leer1=mysqli_fetch_array($eje1);
	  $aelim=$leer1["0"];
	  echo $aelim;
    */
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
                  	
                  <li><a href="asignacion1.php"><span class="glyphicon glyphicon-folder-open"></span>  Asignaci&oacute;n</a></li>
                  <li><a href="#"><span class="glyphicon glyphicon-book"></span> Estudiantes</a></li>
              </ul>



                  <ul class="nav navbar-nav navbar-right">
                       
                        <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="glyphicon glyphicon-user"></span> <?php echo $_SESSION["nombre"]; ?><span class="caret"></span></a>

                          <ul class="dropdown-menu">
                            <li><a href="salir.php">Salir</a></li>
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
              <td bgcolor="#B2D8BB" width="20%"><h4>Confirmar Eliminacion</h4></td>
              
              
              
                 
              </td>
              
              
              
              
            </tr>
            
          </table>


             <br><br><br><br>

             <table bgcolor="1" width="80%" align="center">
             <tr>
               <td align="center">

             <form method="post" action="#">
                  <!-- Carnet del Estudiante a Eliminar:<input type="text" name="TxtCarnet" value="<?php //echo $carnet; ?>"> -->
                 Carnet del Estudiante a Eliminar:<input type="text" name="TxtCarnet" align="center">
                  
                  <br><br><br>
                  <input type="submit" name="BtnAe" value="Eliminar" align="center">&nbsp;&nbsp;&nbsp;&nbsp;
                  <input type="submit" name="BtnA" value="Cancelar" align="center">

                 
             </form>
             </td>
             </tr>
             </table>

 
          </section>
       <br><br><br>
           <br><br><br><br> <br><br>
    </section>
<br>
    <footer>
            <p>
            
<button type="button" class="btn btn-primary btn-lg btn-block">Colegio Ficticio</button>
          </footer>








 	
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>


<?php 
     

      $carnet=$_POST['TxtCarnet'];

      if (isset($_POST['BtnAe'])) {
        echo "Presiono el boton de Eliminar";
        $sql="delete from asistencia where id_estudiante=".$carnet." and fecha='".$fecha."'";
        $eje=mysqli_query($conexion,$sql);
        if (!$eje) {
            echo "Error en la eliminacion tabla Asistencia";
        }else{
            echo "Datos Eliminados con Exito tabla Asistencia";
            //header("Location: eliminar.php?error=no");
        }
      }

      if (isset($_POST['BtnA'])) {
          echo "Presiono el boton de Cancelar";
           $sql1="delete from aeliminado where id_estudiante=".$carnet;
            $eje1=mysqli_query($conexion,$sql1);
            if (!$eje1) {
                echo "Error en la eliminacion tabla Asistencia Eliminado";
            }else{
               echo "Datos Eliminados con Exito tabla Asistencia Eliminado";
               //header("Location: eliminar.php?error1=no");
             }
      }
?>

