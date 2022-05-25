<?php
include ("sesiones.php");
include("permiso01.php");
include_once("conn/conn.php");

?>

<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Nuevo Usuario</title>


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
  
  <h3> Formulario Nuevo Usuario</h3>
    <hr class="red">        
  <!-- Contenido -->
    <main class="page">
      <!-- Llamda a archivo jquery -->
   <script src="https://code.jquery.com/jquery-3.6.0.min.js"> </script>




    <div class="row clearfix">
      <div class="col-md-9">


      <p>
          "Ingresa los datos del nuevo Usuario"
        </p>
        <ol class="bottom-buffer top-buffer">
      <div class="tab-pane clearfix " id="tab-01">
          <label for="datos" class="control-label">Formulario Nuevo Usuario</label>
          <br>
          <br> 
          <form role="form" action="creaUsuario.php" method="post">
            <div class="row">
              <div class="col-md-6 col-xs-12">
                <div class="form-group">
                  <label for="nombre" class="control-label">Nombre
                    <span class="asteriscoData form-text">*</span>
                  </label>
                  <input id="nombre" type="text"
                  class="campos form-control ember-text-field ember-view" name="nombre">
                  <small class="smallDatos form-text form-text-error hide" aria-live="polite"> Este campo es obligatorio
                  </small>
                </div>
              </div>
              <div class="col-md-6 col-xs-12">
                <div class="form-group">
                  <label for="apeliidoPaterno" class="control-label">Apellido Paterno
                    <span class="asteriscoData form-text">*</span>
                  </label>
                  <input id="calendarioFechaElaboradoInternoDestinatarioEntrada" type="text"
                  class="campos form-control ember-text-field ember-view" name="apellidoPaterno">
                  <small class="smallDatos form-text form-text-error hide" aria-live="polite"> Este campo es obligatorio
                  </small>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 col-xs-12">
                <div class="form-group">
                  <label for="apellidoMaterno" class="control-label">Apellido Materno
                    <span class="asteriscoData form-text">*</span>
                  </label>
                  <input id="nombre" type="text"
                  class="campos form-control ember-text-field ember-view" name="apellidoMaterno">
                  <small class="smallDatos form-text form-text-error hide" aria-live="polite"> Este campo es obligatorio
                  </small>
                </div>
              </div>
              <div class="col-md-6 col-xs-12">
                <div class="form-group">
                  <label for="correo" class="control-label">Correo
                    <span class="asteriscoData form-text">*</span>
                  </label>
                  <input id="calendarioFechaElaboradoInternoDestinatarioEntrada" type="text"
                  class="campos form-control ember-text-field ember-view" name="correo">
                  <small class="smallDatos form-text form-text-error hide" aria-live="polite"> Este campo es obligatorio
                  </small>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 col-xs-12">
                <div class="form-group">
                  <label for="adscripcion" class="control-label">Cargo
                    <span class="asteriscoData form-text">*</span>
                  </label>
                  <select name="adscripcion" class="campos form-control form-selected select small">
                    <option value disabled selected>Seleciona el cargo</option>
                    <?php 
                      //sql rol 
                      $sql1 = "SELECT adscripcion FROM 713utic";        
                      $result1 = mysqli_query($con,$sql1) or die(mysqli_close($con));
                      if(mysqli_num_rows($result1)>0){
                        while($rowAdscripcion = mysqli_fetch_assoc($result1)){
                      ?>
                        <option value="<?php echo $rowAdscripcion['adscripcion']?>"><?php echo $rowAdscripcion['adscripcion']?></option>
                      <?php
                        }
                      }
                      ?>
                  </select>
                  <small class="smallDatos form-text form-text-error hide" aria-live="polite"> Este campo es obligatorio
                  </small>
                </div>
              </div>
              <div class="col-md-6 col-xs-12">
                <div class="form-group">
                  <label for="unidad" class="control-label">Unidad
                    <span class="asteriscoData form-text">*</span>
                  </label>
                  <select name="idUnidad" class="campos form-control form-selected select small">
                    <option value disabled selected>Seleciona la unidad</option>
                    <?php 
                      //sql rol 
                      $sql1 = "SELECT * FROM unidad";        
                      $result1 = mysqli_query($con,$sql1) or die(mysqli_close($con));
                      if(mysqli_num_rows($result1)>0){
                        while($rowUnidad = mysqli_fetch_assoc($result1)){
                      ?>
                        <option value="<?php echo $rowUnidad['idUnidad']?>"><?php echo $rowUnidad['nombre']?></option>
                      <?php
                        }
                      }
                      ?>
                  </select>
                  <small class="smallDatos form-text form-text-error hide" aria-live="polite"> Este campo es obligatorio
                  </small>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 col-xs-12">
                <div class="form-group">
                  <label for="nombreUsuario" class="control-label">Nombre Usuario
                    <span class="asteriscoData form-text">*</span>
                  </label>
                  <input id="nombre" type="text"
                  class="campos form-control ember-text-field ember-view" name="nombreUsuario">
                  <small class="smallDatos form-text form-text-error hide" aria-live="polite"> Este campo es obligatorio
                  </small>
                </div>
              </div>
              <div class="col-md-6 col-xs-12">
                <div class="form-group">
                  <label for="contraseniaUsuario" class="control-label">Contraseña Usuario
                    <span class="asteriscoData form-text">*</span>
                  </label>
                  <input id="calendarioFechaElaboradoInternoDestinatarioEntrada" type="text"
                  class="campos form-control ember-text-field ember-view" name="contraseniaUsuario">
                  <small class="smallDatos form-text form-text-error hide" aria-live="polite"> Este campo es obligatorio
                  </small>
                </div>
              </div>
            </div>
            <div class="row">
            <div class="col-md-6 col-xs-12">
                <div class="form-group">
                  <label for="rol" class="control-label">Rol
                    <span class="asteriscoData form-text">*</span>
                  </label>
                  <select name="idRol" class="campos form-control form-selected select small">
                    <option value disabled selected>Seleciona el rol</option>
                    <?php 
                      //sql rol 
                      $sql1 = "SELECT * FROM rol";        
                      $result1 = mysqli_query($con,$sql1) or die(mysqli_close($con));
                      if(mysqli_num_rows($result1)>0){
                        while($rowRol = mysqli_fetch_assoc($result1)){
                      ?>
                        <option value="<?php echo $rowRol['idRol']?>"><?php echo $rowRol['nombreRol']?></option>
                      <?php
                        }
                      }
                      ?>
                  </select>
                  <small class="smallDatos form-text form-text-error hide" aria-live="polite"> Este campo es obligatorio
                  </small>
                </div>
              </div>
              <div class="col-md-6 col-xs-12">
                <div class="form-group">
                  <label for="calendar" class="control-label">Fecha de Ingreso
                    <span class="asteriscoData form-text">*</span>
                  </label>
                  <input id="calendarioFechaIngresoNuevoUsuario" type="text" 
                  class="campos form-control ember-text-field ember-view" name="calendarioFechaIngresoNuevoUsuario">
                  <small class="smallDatos form-text form-text-error hide" aria-live="polite"> Este campo es obligatorio
                  </small>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 col-xs-12">
                <div class="form-group">
                    <button class="btn btn-primary pull-right" type="submit">Enviar</button> 
                </div>
              </div>
            </div>
          </form>
          </div>
      </div>
    </div>
    </main>

    <!-- JS -->
    
     <!-- Contenido   <script src="https://framework-gb.cdn.gob.mx/gobmx.js"></script>  -->
     <script src="https://framework-gb.cdn.gob.mx/gobmx.js"></script>

     <!-- Contenido para el calendario  <script src="https://framework-gb.cdn.gob.mx/assets/scripts/jquery-ui-datepicker.js"></script>  -->
     <script src="https://framework-gb.cdn.gob.mx/assets/scripts/jquery-ui-datepicker.js"></script>

     <!-- JS calendario calendarioFechaIngresoNuevoUsuario -->
     <script type="text/javascript">
      $gmx(document).ready(function() {
        $('#calendarioFechaIngresoNuevoUsuario').datepicker({changeYear: true});
      });
       </script>
  </body>
</html>
