<?php
include ("sesiones.php");
include("permiso01.php");
include_once("conn/conn.php");


//Agarramos el id que pasamos por la variable de sesion
$idUsuario = $_SESSION['idUsuarioSession'];

//Agarramos el id que pasamos por la url 
//$idUsuario = $_GET['id'];
//sql usuario con el id del url
$sql = "SELECT * FROM usuario 
        WHERE idUsuario ='".$idUsuario."'";        
$result = mysqli_query($con,$sql) or die(mysqli_close($con));
$row = mysqli_fetch_assoc($result);


?>

<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Formulario alta oficio</title>


    <!-- CSS -->
    <link href="/favicon.ico" rel="shortcut icon">
    <link href="https://framework-gb.cdn.gob.mx/assets/styles/main.css" rel="stylesheet">

    <!-- Respond.js soporte de media queries para Internet Explorer 8 -->
    <!-- ie8.js EventTarget para cada nodo en Internet Explorer 8 -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/ie8/0.2.2/ie8.js"></script>
    <![endif]-->

  </head>
  
  <body>
  
  <h3> Favor de ingresar los siguientes datos:</h3>
    <hr class="red">        
  <!-- Contenido -->
    <main class="page">

    <!-- Llamda a archivo jquery -->
   <script src="https://code.jquery.com/jquery-3.6.0.min.js"> </script>

    <form class="form-horizontal" role="form"  method="post">
          <div class="form-group">
            <label class="col-sm-3 control-label">Oficio:</label>
              <div class="col-sm-9">
                <input class=".form-control"  placeholder="Oficio" type="text" name="">
              </div>
          </div>
          <div class="form-group">
            <label class="col-sm-3 control-label" >Tipo:</label>
              <div class="col-sm-9"> 
              <div class="checkbox">
                <label>
                  <input type="checkbox" value="opcion-01"> Circular
                </label>
                <label>
                  <input type="checkbox" value="opcion-02"> Memorando
                </label>
              </div>
              </div>
          </div>
          <div class="form-group">
            <label class="col-sm-3 control-label" >Remitente:</label>
              <div class="col-sm-9">
                <?php echo $row['nombreUsuario']?>
              </div>
          </div>

          


          <div class="form-group">
            <label class="col-sm-3 control-label">Destinatario</label>
              <div class="col-sm-9">
              <select class=".form-control" name="">
              
              <?php 
              //sql usuario
              //sql rol 
              $sql1 = "SELECT * FROM usuario";        
              $result1 = mysqli_query($con,$sql1) or die(mysqli_close($con));
              if(mysqli_num_rows($result1)>0){
                while($rowUsuario = mysqli_fetch_assoc($result1)){
              ?>
              ?>
                <option value="<?php echo $rowUsuario['nombreUsuario']?>"><?php echo $rowUsuario['nombreUsuario']?></option>
              <?php
                }
              }
              ?>
              </select>
              </div>
          </div>







          <div class="form-group">
            <label class="col-sm-3 control-label" >¿El oficio es de pedimento o respuesta?:</label>
              <div class="col-sm-9"> 
              <div class="checkbox">
                <label>
                  <input type="checkbox" value="opcion-01" id="respuesta"> Pedimento
                </label>
                <label>
                  <input type="checkbox" value="opcion-02" id="respuesta"> Respuesta
                </label>
                <script>
                  function respuesta(){
                    var a=document.getElementById("respuesta").value;
                    if (a=="si"){
                      document.write("funciona");
                    }
                  }

                </script>
                <button class="btn btn-primary pull-left" onclick="respuesta()">Guardar</button>
              </div>
              </div>
          </div>




            

          <div class="form-group">
            <label class="col-sm-4 control-label">Número de oficio:</label>
              <div class="col-sm-8">
                <input class=".form-control"  placeholder="Número de oficio" type="text" name="">
              </div>
          </div>
          <div class="form-group">
            <label class="col-sm-3 control-label">Título:</label>
              <div class="col-sm-9">
                <input class=".form-control"  placeholder="Título" type="text" name="">
                <small class="smallDatos form-text form-tect-error hide" aria-live="polite"> Este campo es obligatorio
                </small>
              </div>
          </div>
          <div class="form-group">
            <label class="col-sm-3 control-label">Asunto:</label>
              <div class="col-sm-9">
                <input class=".form-control"  placeholder="Asunto" type="text" name="">
              </div>
          </div>
          <div class="form-group">
            <label class="col-sm-3 control-label">Número de oficio:</label>
              <div class="col-sm-9">
                <input class=".form-control"  placeholder="Número de oficio" type="text" name="">
              </div>
          </div>
          <div class="form-group datepicker-group">
           <label class="col-sm-3 control-label" for="calendar">Calendario:</label>
              <div class="col-sm-9">
                <input class=".form-control" id="calendarYear" type="text">
              </div>
          </div>
          <div class="form-group">
             <label class="col-sm-3 control-label" for="file-01">Cargar archivo:</label>
               <div class="col-sm-9">
                 <input class=".form-control" id="file-01" type="file">
               </div>
          </div>
          <div class="form-group">
             <label class="col-sm-3 control-label" for="file-01">Descripción del oficio:</label>
               <div class="col-sm-9">
               <textarea class="col-sm-6" class=".form-control" rows="5"></textarea>
               </div>
          </div>
          <div class="form-group">
            <div class="col-sm-offset-3 col-sm-9">
              <button class="btn btn-primary pull-left" type="submit">Guardar</button>
            </div>
          </div>
        </form>
    </main>

    <!-- JS -->
    
     <!-- Contenido   <script src="https://framework-gb.cdn.gob.mx/gobmx.js"></script>  -->
     <script src="https://framework-gb.cdn.gob.mx/gobmx.js"></script>


    <!-- Contenido para el calendario  <script src="https://framework-gb.cdn.gob.mx/assets/scripts/jquery-ui-datepicker.js"></script>  -->
     <script src="https://framework-gb.cdn.gob.mx/assets/scripts/jquery-ui-datepicker.js"></script>

     <script type="text/javascript">
      $gmx(document).ready(function() {
        $('#calendarYear').datepicker({changeYear: true});
      });
       </script>
  </body>
</html>
