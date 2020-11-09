<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
  <title>Login Catedratico</title>
  <link rel="stylesheet"  href="css/bootstrap.min.css">
  <link rel="stylesheet"  href="css/estilos.css">
   <script language="javascript">

    function validarNro(e) {

        var key;

        if(window.event) // IE
           {
                key = e.keyCode;
           }

        else if(e.which) // Netscape/Firefox/Opera
          {
              key = e.which;
          }

        if (key < 48 || key > 57)
          {
            if(key == 8 ) // Detectar . (punto) y backspace (retroceso)
                 { return true; }
              else 
                 { return false; }
            }
                return true;
      }

</script>

</head>
<body>

    <section class="todo">
         <header> <img src="img/logousac.png">
          <h3> 
                <font color="white">
                     <span id="uni"> Colegio Ficticio </span> <br>
                </font>
          </h3>
          
      </header>
<br><br>
      <a href="../index.php"><span class="glyphicon glyphicon-home"></span> Inicio</a>

          <nav>
           
           
          </nav>
      <br><br><br><br>
          <section id="cuerpo">
         
         
                   <legend align="center">Bienvenido Catedratico</legend>



        <br>
           <table  width="50%">
             <tr bgcolor="#D94A4A">
               <td width="50%" align="right">
                 <img src="img/locka.png">
               </td>
               <td>
                 <h4> <font color="white">Iniciar Sesi&oacute;n</font></h4>
               </td>
             </tr>
             <tr>
               <td colspan="2" align="center">
                   <form name="FrmAutenticar"action="autenticar.php" method="post" enctype="application/x-www-form-urlencoded">
                    <?php 
                error_reporting(E_ALL ^ E_NOTICE); //EVITAR MENSAJES DE NOTIFICACION
                //AL EXISTIR UN ERROR EN VALIDACION DE DATOS
                if ($_GET["error"]=="si") {
                  echo "<font color='red' ><h4>
                  <div class='alert alert-warning' role='alert'>
                        <strong>Error!</strong> Datos Ingresados incorrectos.
                  </div>  
                  </h4></font>";
                }
                 
              ?>
                   <hr>
                  
                  Usuario<br>
                  <input type="text"  name="TxtUsuario" required placeholder="Ingrese Usuario" onkeypress="javascript:return validarNro(event)" />
                  <br><br>
                  Contrase&ntilde;a<br>
                  <input type="password" name="TxtContra"  required placeholder="Ingrese Contraseña">
                  <br><br>
                  <input type="submit" value="Ingresar">
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
            
<button type="button" class="btn btn-primary btn-lg btn-block">Creado por: Otto Calderon, Carlos Milla, Giovanni Pinto</button>
          </footer>
</body>
</html>