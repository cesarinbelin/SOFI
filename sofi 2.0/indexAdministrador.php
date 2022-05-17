<?php
include ("sesiones.php");
include("permiso01.php");
include_once("conn/conn.php");




//echo "<a href='indexAdministrador.php'>Modulo Usuarios</a></br>";

//echo "<a href='../oficios/form_upload.php'>Modulo Oficios</a></br>";

?>


<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pagina principal</title>


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


<hr>
<hr>



  <h3> Usuario: <?php echo $_SESSION['nombreUsuarioSession'];?></h3>
  <h3> Permiso: <?php echo $_SESSION['permiso'];?></h3>
  
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
        <li><a href="usuarios.php">Usuarios</a></li>
        <li><a href="oficios.php">Oficios</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Desplegable <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Acción</a></li>
            <li><a href="#">Otra acción</a></li>
            <li><a href="#">Algo más aquí</a></li>
            <li class="divider"></li>
            <li><a href="#">Enlace separado</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
       
    </main>

    <!-- JS -->
    
     <!-- Contenido   <script src="https://framework-gb.cdn.gob.mx/gobmx.js"></script>  -->
     <script src="https://framework-gb.cdn.gob.mx/gobmx.js"></script>
  </body>
</html>