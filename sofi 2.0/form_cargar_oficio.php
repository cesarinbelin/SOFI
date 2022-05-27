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
<h3>Sube tu Oficio</h3>
<hr class="red">
    <!-- Contenido -->

    <main class="page">
<nav class="navbar navbar-inverse sub-navbar navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#subenlaces">
        <span class="sr-only">Interruptor de Navegación</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/">Sistema de Oficios</a>
    </div>
    <div class="collapse navbar-collapse" id="subenlaces">
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Usuarios <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="usuarios.php">Lista de Usuarios</a></li>
            <li><a href="form_crea_usuario.php">Crear nuevo Usuario</a></li>
            <li class="divider"></li>
            <li><a href="historicoUsuario.php">Historico Usuarios</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Oficios <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="oficios.php">Lista de Oficios</a></li>
            <li><a href="form_cargar_oficio.php">Subir nuevo Oficio</a></li>
            <li class="divider"></li>
            <li><a href="#">Buscar Oficio</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
</div>
<h3>Sube tu Oficio</h3>
<hr class="red">
    
    <!-- Llamda a archivo jquery -->
   <script src="https://code.jquery.com/jquery-3.6.0.min.js"> </script>

    <div class="row clearfix">
      <div class="col-md-8">
        
        <ol class="bottom-buffer top-buffer">

      <ul class="nav nav-tabs">                         
          <li  class="dropdown" >
          <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
              Interno<span class="caret"></span>
            </a>
            <ul class="dropdown-menu">
              <li class>
                <a data-toggle="tab" href="#tab-01" aria-expanded="false">Destinatario (entrada)</a>
              </li>
              <li class>
                <a data-toggle="tab" href="#tab-02" aria-expanded="false">Remitente (salida)</a>
              </li>
            </ul>
          </li>
          <li class="dropdown" >
            <a class="dropdown-toggle" data-toggle="dropdown" href="# " role="button" aria-haspopup="false" aria-expanded="false">
              Externo<span class="caret"></span>
            </a>
            <ul class="dropdown-menu">
              <li class>
                <a data-toggle="tab" href="#tab-03" aria-expanded="false">Destinatario (entrada)</a>
              </li>
              <li class>
                <a data-toggle="tab" href="#tab-04" aria-expanded="false">Remitente (salida)</a>
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
    
        <!--Tenemos el tab-05 donde ponemos un rapido resumen de los tipos de oficio-->
          <div class="tab-pane clearfix active" id="tab-05">  
            <div class="row">
              <div class="col-md-12 col-xs-12">
                <div class="form-group">
                  <label for="datos" class="control-label">Tipo oficio
                  </label>
                  <br>
                  <ul class="list-unstyled">
                    Las siguiente Información nos muetra las opciones para poder subir un oficio.
                  </ul>
                </div>
              </div>
              <div class="col-md-6 col-xs-12">
                <div class="form-group">
                  <label for="datos" class="control-label">Interno
                  </label>
                  <ul class="list-unstyled">
                    <li>  -Destinatario</li>
                    <p>Cuando un oficio es dirigido al área de la UTIC  por parte de
                      otra área, unidad, departamento de la SICT (entrada)</p>
                    <br>
                    <li>-Remitente</li>
                    <p>Cuando un oficio es dirigido a una área, unidad, departamento de la SICT
                      por parte del área UTIC (salida)</p>
                  </ul>
                </div>
              </div>
              <div class="col-md-6 col-xs-12">
                <div class="form-group">
                  <label for="datos" class="control-label">Externo
                  </label>
                  <ul class="list-unstyled">
                    <li>  -Destinatario</li>
                    <p>Cuando un oficio es dirigido al área de la UTIC  por parte de
                      una empresa AJENA a la SICT(entrada)</p>
                    <br>
                    <li>  -Remitente</li>
                    <p>Cuando un oficio es dirigido a una área, unidad, departamento de la SICT
                       por parte de una empresa AJENA a la SICT (salida)</p>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          
            <!--Tenemos el tab-03 el formulario  externo destinatario (entrada) 
        
      
        
      
      
      
        -->
        <div class="tab-pane clearfix " id="tab-01">
          <label for="datos" class="control-label">Formulario Interno Destinatario</label>
          <br>
          <br> 
          <form role="form" action="cargarOficio.php" method="post" enctype="multipart/form-data">
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
                  <input id="calendarioFechaElaboradoInternoDestinatarioEntrada" type="text"
                  class="campos form-control ember-text-field ember-view" name="fechaElaboracion">
                  <small class="smallDatos form-text form-text-error hide" aria-live="polite"> Este campo es obligatorio
                  </small>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 col-xs-12">
                <div class="form-group">
                  <label for="remitente" class="control-label">Destinatario
                    <span class="asteriscoData form-text">*</span>
                  </label>
                  <select name="idRol" class="campos form-control form-selected select small">
                    <option value disabled selected>Seleciona el Destinatario</option>
                    <?php 
                      //sql rol 
                      $sql1 = "SELECT * FROM 713utic";        
                      $result1 = mysqli_query($con,$sql1) or die(mysqli_close($con));
                      if(mysqli_num_rows($result1)>0){
                        while($row713utic = mysqli_fetch_assoc($result1)){
                      ?>
                        <option value="<?php echo $row713utic['idEmpleado']?>"><?php echo $row713utic['nombre'] . " " . $row713utic['apellidoPaterno'] . " " . $row713utic['apellidoMaterno']?></option>
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
                  <label for="asunto" class="control-label">Remitente
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
              <div class="col-md-6 col-xs-12">
                <div class="form-group">
                  <label for="calendar" class="control-label">Fecha recibido por la SICT (Dora)
                    <span class="asteriscoData form-text">*</span>
                  </label>
                  <input id="calendarioFechaRecibidoSICTInternoDestinatarioEntrada" type="text"
                  class="campos form-control ember-text-field ember-view">
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
                  <input id="calendarioFechaRespuestaInternoDestinatarioEntrada" type="text"
                  class="campos form-control ember-text-field ember-view">
                  <small class="smallDatos form-text form-text-error hide" aria-live="polite"> Este campo es obligatorio
                  </small>
                </div>
              </div>
            </div>
            <div class="row">                    
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
            <!--Tenemos el tab-04 el formulario  externo remitente (entrada) 
        
      
        
      
      
      
        -->
        <div class="tab-pane clearfix" id="tab-02">
          <label for="datos" class="control-label">Formulario Interno Remitente</label>
          <br>
          <br>
          <form role="form" action="cargarOficio.php" method="post" enctype="multipart/form-data">
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
                  <input id="calendarioFechaElaboradoInternoRemitenteSalida" type="text"
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
            <!--Tenemos el tab-03 el formulario  externo destinatario (entrada) 
        
      
        
      
      
      
        -->
        <div class="tab-pane clearfix " id="tab-03">
        <label for="datos" class="control-label">Formulario Externo Destinatario</label>
          <br>
          <br>
        <form role="form" action="cargarOficio.php" method="post" enctype="multipart/form-data">
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
                  <input id="calendarioFechaElaboradoExternoDestinatarioEntrada" type="text"
                  class="campos form-control ember-text-field ember-view" name="fechaElaboracion">
                  <small class="smallDatos form-text form-text-error hide" aria-live="polite"> Este campo es obligatorio
                  </small>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 col-xs-12">
                <div class="form-group">
                  <label for="remitente" class="control-label">Destinatario
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
                  <label for="asunto" class="control-label">Remitente
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
                  <input id="calendarioFechaRespuestaExternoDestinatarioEntrada" type="text"
                  class="campos form-control ember-text-field ember-view">
                  <small class="smallDatos form-text form-text-error hide" aria-live="polite"> Este campo es obligatorio
                  </small>
                </div>
              </div>
            </div>
            <div class="row">                                     
              <div class="col-md-6 col-xs-12">
                <div class="form-group">
                  <label for="calendar" class="control-label">Fecha de recibido por la SCT (Dora)
                    <span class="asteriscoData form-text">*</span>
                  </label>
                  <input id="calendarioFechaRecibidoSICTExternoDestinatarioEntrada" type="text"
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
            <!--Tenemos el tab-04 el formulario  externo remitente (entrada) 
        
      
        
      
      
      
        -->
        <div class="tab-pane clearfix " id="tab-04">
        <label  class="control-label">Formulario Externo Remitente</label>
          <br>
          <br>
        <form role="form" action="cargarOficio.php" method="post" enctype="multipart/form-data">
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
                  <input id="calendarioFechaElaboradoExternoRemitenteSalida" type="text"
                  class="campos form-control ember-text-field ember-view" name="fechaElaboracion">
                  <small class="smallDatos form-text form-text-error hide" aria-live="polite"> Este campo es obligatorio
                  </small>
                </div>
              </div>
            </div>
            <div class="row">            
              <div class="col-md-6 col-xs-12">
                <div class="form-group">
                  <label for="remitente" class="control-label">Destinatario
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
                  <label for="asunto" class="control-label">Remitente
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
          




          





          










</div>
    </div>
  </div>
</nav>
       
    </main>










<!-- JS -->
    
     <!-- Contenido   <script src="https://framework-gb.cdn.gob.mx/gobmx.js"></script>  -->
     <script src="https://framework-gb.cdn.gob.mx/gobmx.js"></script>


    <!-- Contenido para el calendario  <script src="https://framework-gb.cdn.gob.mx/assets/scripts/jquery-ui-datepicker.js"></script>  -->
     <script src="https://framework-gb.cdn.gob.mx/assets/scripts/jquery-ui-datepicker.js"></script>
      
     
     <!-- JS calendario interno destinatario -->
      <script type="text/javascript">
      $gmx(document).ready(function() {
        $('#calendarioFechaElaboradoInternoDestinatarioEntrada').datepicker({changeYear: true});
      });
       </script>
     <script type="text/javascript">
      $gmx(document).ready(function() {
        $('#calendarioFechaRecibidoSICTInternoDestinatarioEntrada').datepicker({changeYear: true});
      });
       </script>
     <script type="text/javascript">
      $gmx(document).ready(function() {
        $('#calendarioFechaRespuestaInternoDestinatarioEntrada').datepicker({changeYear: true});
      });
       </script>
       
     <!-- JS calendario interno remitente -->
     <script type="text/javascript">
      $gmx(document).ready(function() {
        $('#calendarioFechaElaboradoInternoRemitenteSalida').datepicker({changeYear: true});
      });
       </script>

     <!-- JS calendario externo destinatario -->
      <script type="text/javascript">
      $gmx(document).ready(function() {
        $('#calendarioFechaElaboradoExternoDestinatarioEntrada').datepicker({changeYear: true});
      });
       </script>
     <script type="text/javascript">
      $gmx(document).ready(function() {
        $('#calendarioFechaRecibidoSICTExternoDestinatarioEntrada').datepicker({changeYear: true});
      });
       </script>
     <script type="text/javascript">
      $gmx(document).ready(function() {
        $('#calendarioFechaRespuestaExternoDestinatarioEntrada').datepicker({changeYear: true});
      });
       </script>
       
     <!-- JS calendario externo remitente -->
     <script type="text/javascript">
      $gmx(document).ready(function() {
        $('#calendarioFechaElaboradoExternoRemitenteSalida').datepicker({changeYear: true});
      });
       </script>
     
     

      
      
      



  </body>
</html>