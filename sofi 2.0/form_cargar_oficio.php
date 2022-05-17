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
  
         
  <!-- Contenido -->
    <main class="page">
    
    <!-- Llamda a archivo jquery -->
   <script src="https://code.jquery.com/jquery-3.6.0.min.js"> </script>

    <h3> Favor de ingresar los siguientes datos:</h3>
    <hr class="red"> 

    <div class="row clearfix">
      <div class="col-md-8">
        <p>
          "Puedes cargar tu oficio dependiendo de la opción que requieras:"
        </p>
        <ol class="bottom-buffer top-buffer">
          <li>
            <strong>Subir Oficio interno a la SCT de manera interna</strong>
          </li>
          <li>
            <strong>Subir Oficio de manera externo</strong>
          </li>

          
        <ul class="nav nav-tabs">
          <!-- 
          <li id="datos" class="active">
            <a data-toggle="tab" href="#tab-01" aria-expanded="false">Datos</a>
          </li> 
          <li id="form_cargar_oficio_interno"  class>
            <a data-toggle="tab" href="#tab-02" aria-expanded="false">Interno</a>
          </li>
          <li id="form_cargar_oficio_externo" class>
            <a data-toggle="tab" href="#tab-03" aria-expanded="false">Externo</a>
          </li>
          -->
          <li class="active" id="form_cargar_oficio_interno" class="dropdown" >
            <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
              Interno <span class="caret"></span>
            </a>
            <ul class="dropdown-menu">
              <li id="form_cargar_oficio_interno_remitente"  class>
                <a data-toggle="tab" href="#tab-01" aria-expanded="false">Remitente</a>
              </li>
              <li id="form_cargar_oficio_interno_destinatario"  class>
                <a data-toggle="tab" href="#tab-02" aria-expanded="false">Destinatario</a>
              </li>
            </ul>
          </li>
          <li class id="form_cargar_oficio_interno" class="dropdown" >
            <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
              Externo <span class="caret"></span>
            </a>
            <ul class="dropdown-menu">
              <li id="form_cargar_oficio_interno_remitente"  class>
                <a data-toggle="tab" href="#tab-03" aria-expanded="false">Remitente</a>
              </li>
              <li id="form_cargar_oficio_interno_destinatario"  class>
                <a data-toggle="tab" href="#tab-04" aria-expanded="false">Destinatario</a>
              </li>
            </ul>
          </li>





          
        </ul>


        <!--Tenemos la parte de los contenedores de formularios tab-xx-->
        <div class="tab-content">

          <div class="tab-pane clearfix" id="tab-00">  
            <div class="col-md-6 col-xs-12">
              <div class="form-group">
                <label for="datos" class="control-label">Oficios
                </label>
                <br>
                <br>
              </div>
            </div>
          </div>
          <div class="tab-pane clearfix" id="tab-05">  
            <div class="col-md-6 col-xs-12">
              <div class="form-group">
                <label for="datos" class="control-label">Datos
                  <span class="asteriscoData form-text">*</span>
                </label>
                <br>
                <a href="#" >Externos</a>
                <br>
              </div>
            </div>
          </div>
          
          <div class="tab-pane clearfix active" id="tab-01">Formulario Interno Remitente
          </div>

          <div class="tab-pane clearfix" id="tab-02">
          <form role="form" action="login.php" method="post">
            <div class="row">
              <div class="col-md-6 col-xs-12">
                <div class="form-group">
                  <label for="numero-oficio" class="control-label">Número de oficio
                    <span class="asteriscoData form-text">*</span>
                  </label>
                  <input id="numeroOficio" type="text"
                  class="campos form-control ember-text-field ember-view" name="numeroOficio">
                  <small class="smallDatos form-text form-text-error hide" aria-live="polite"> Este campo es obligatorio
                  </small>
                </div>
              </div>
              <div class="col-md-6 col-xs-12">
                <div class="form-group">
                  <label for="calendar" class="control-label">Fecha de elaboración:
                    <span class="asteriscoData form-text">*</span>
                  </label>
                  <input id="calendarioFechaElaborado" type="text"
                  class="campos form-control ember-text-field ember-view" name="fechaElaboracion">
                  <small class="smallDatos form-text form-text-error hide" aria-live="polite"> Este campo es obligatorio
                  </small>
                </div>
              </div>
            </div>

            <div class="row">



              









              <div class="col-md-6 col-xs-12">
                <div class="form-group">
                  <label for="remitente" class="control-label">Remitente
                    <span class="asteriscoData form-text">*</span>
                  </label>
                  <select name="idRol" class="campos form-control form-selected select small">
                    <option value disabled selected>Seleciona el Remitente</option>
                    <?php 
                      //sql rol 
                      $sql1 = "SELECT * FROM usuario";        
                      $result1 = mysqli_query($con,$sql1) or die(mysqli_close($con));
                      if(mysqli_num_rows($result1)>0){
                        while($rowUsuario = mysqli_fetch_assoc($result1)){
                      ?>
                        <option value="<?php echo $rowUsuario['idUsuario']?>"><?php echo $rowUsuario['nombre']?></option>
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
                  <label for="asunto" class="control-label">Destinatario
                    <span class="asteriscoData form-text">*</span>
                  </label>
                  <input type="text" id="destinatario" 
                        palceholder="Destinatario" 
                        class="campos form-control ember-text-field ember-view" name="destinatario">
                  <small class="smallDatos form-text form-text-error hide" aria-live="polite"> Este campo es obligatorio
                  </small>
                </div>
              </div>
            </div>


            <div class="row">
              <div class="col-md-6 col-xs-12">
                <div class="form-group">
                  <label for="cargo" class="control-label">Cargo
                    <span class="asteriscoData form-text">*</span>
                  </label>
                  <input type="text" id="cargo" 
                        palceholder="Viene de tabla" 
                        class="campos form-control ember-text-field ember-view" name="cargo">
                  <small class="smallDatos form-text form-text-error hide" aria-live="polite"> Este campo es obligatorio
                  </small>
                </div>
              </div>

              <div class="col-md-6 col-xs-12">
                <div class="form-group">
                  <label for="unidad" class="control-label">Unidad
                    <span class="asteriscoData form-text">*</span>
                  </label>
                  <select name="idRol" class="campos form-control form-selected select small">
                    <option value disabled selected>Seleciona el Remitente</option>
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
                  <label for="oficioReferencia" class="control-label">Oficio Referencia
                    <span class="asteriscoData form-text">*</span>
                  </label>
                  <select name="idRol" class="campos form-control form-selected select small">
                    <option value disabled selected>Seleciona el oficio</option>
                    <?php /*
                      //sql rol 
                      $sql1 = "SELECT * FROM rol";        
                      $result1 = mysqli_query($con,$sql1) or die(mysqli_close($con));
                      if(mysqli_num_rows($result1)>0){
                        while($rowRol = mysqli_fetch_assoc($result1)){*/
                      ?>
                        <option value="">Oficio 1</option>
                        <option value="">Oficio 2</option>
                        <option value="">Oficio 3</option>
                        <option value="">Oficio 4</option>
                      <?php/*
                        }
                      }*/
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
                  <label for="calendar" class="control-label">¿El oficio necesita respuesta?
                    <span class="asteriscoData form-text">*</span>
                  </label>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" value="opcion-01">Si
                    </label>
                    <label>
                      <input type="checkbox" value="opcion-02" >No
                    </label>
                  </div>
                  <small class="smallDatos form-text form-text-error hide" aria-live="polite"> Este campo es obligatorio
                  </small>
                 </div>
              </div>
              <div class="col-md-6 col-xs-12">
                <div class="form-group">
                  <label for="calendar" class="control-label">Fecha de respuesta
                    <span class="asteriscoData form-text">*</span>
                  </label>
                  <input id="calendarioFechaRespuesta" type="text"
                  class="campos form-control ember-text-field ember-view">
                  <small class="smallDatos form-text form-text-error hide" aria-live="polite"> Este campo es obligatorio
                  </small>
                </div>
              </div>
            </div>
            <div class="row">

              
              
            


              <div class="col-md-6 col-xs-12">
                <div class="form-group">
                  <label for="calendar" class="control-label">Fecha de recibido por la SCT
                    <span class="asteriscoData form-text">*</span>
                  </label>
                  <input id="calendarioFechaRecibido" type="text"
                  class="campos form-control ember-text-field ember-view">
                  <small class="smallDatos form-text form-text-error hide" aria-live="polite"> Este campo es obligatorio
                  </small>
                </div>
              </div>


              <div class="col-md-6 col-xs-12">
                <div class="form-group">
                  <label for="asunto" class="control-label">Asunto
                    <span class="asteriscoData form-text">*</span>
                  </label>
                  <input type="text" id="asunto" 
                        palceholder="Asunto" 
                        class="campos form-control ember-text-field ember-view" name="asunto">
                  <small class="smallDatos form-text form-text-error hide" aria-live="polite"> Este campo es obligatorio
                  </small>
                </div>
              </div>
            </div>

            

            <div class="row">
              <div class="col-md-12 col-xs-12">
                <div class="form-group">
                  <label for="" class="control-label">Breve Descripción
                    <span class="asteriscoData form-text">*</span>
                  </label>
                  <textarea cols="30" rows="5" class="campos form-control ember-text-field ember-view">
                  </textarea>
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

          <div class="tab-pane clearfix " id="tab-03">Formulario Externo Remitente
          </div>
          <div class="tab-pane clearfix " id="tab-04">Formulario Destinatario
          </div>


        </div>



        </ol>
      </div>
    </div>


    </main>

    <!-- JS -->
    
     <!-- Contenido   <script src="https://framework-gb.cdn.gob.mx/gobmx.js"></script>  -->
     <script src="https://framework-gb.cdn.gob.mx/gobmx.js"></script>


    <!-- Contenido para el calendario  <script src="https://framework-gb.cdn.gob.mx/assets/scripts/jquery-ui-datepicker.js"></script>  -->
     <script src="https://framework-gb.cdn.gob.mx/assets/scripts/jquery-ui-datepicker.js"></script>

     <script type="text/javascript">
      $gmx(document).ready(function() {
        $('#calendarioFechaElaborado').datepicker({changeYear: true});
      });
       </script>
     <script type="text/javascript">
      $gmx(document).ready(function() {
        $('#calendarioFechaRecibido').datepicker({changeYear: true});
      });
       </script>
     <script type="text/javascript">
      $gmx(document).ready(function() {
        $('#calendarioFechaRespuesta').datepicker({changeYear: true});
      });
       </script>


      <script>
        $gmx('a[data-toggle="tab"]').on('shown.bs.tab', function (270) {
          tab-02.target // newly activated tab
          e.relatedTarget // previous active tab
        })
      </script>
      
      



  </body>
</html>
