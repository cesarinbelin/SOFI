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
    <title>Buscar Oficios</title>








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
    

<h3>Lista de Oficios</h3>
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
      <a class="navbar-brand" href="#">Sistema de Oficios</a>
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
            <li><a href="VistaBuscarOficio.php">Lista de Oficios</a></li>
            <li><a href="form_cargar_oficio.php">Subir nuevo Oficio</a></li>
          </ul>
        </li>
        <li>
          <a href="logout.php" role="button" >Cerrar Sesion </a>
        </li>
      </ul>
    </div>
  </div>
</nav>
</div>
<ol class="bottom-buffer top-buffer">

<h3>Buscar Oficios</h3>

<hr class="red">




<section>  
<h3>Busqueda con tiempo real</h3>
<div class="row clearfix">
  <div class="col-md-9">
    <div class="col-md-8 col-xs-12">
      <div class="form-group">
        <label for="nombre" class="control-label">Buscar por Oficio, Cargo, Asunto
        </label>
        <input name="caja_busqueda" id="caja_busqueda" type="text"
        class="campos form-control ember-text-field ember-view" name="nombre">
        <small class="smallDatos form-text form-text-error hide" aria-live="polite"> Este campo es obligatorio</small>
      </div>
    </div>
    
    
  </div>
</div>

<div id="datos">
</div>


</section>






  


       
    </main>

    <!-- JS -->
    
     <!-- Contenido   <script src="https://framework-gb.cdn.gob.mx/gobmx.js"></script>  -->
     <script src="https://framework-gb.cdn.gob.mx/gobmx.js"></script>
     <script src="jquery.min.js"></script>
     <script src="https://code.jquery.com/jquery-3.6.0.min.js"> </script>
     <script src="main.js"></script>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>



     

  </body>
</html>