<?php
include ("sesiones.php");
include("permiso01.php");
include_once("conn/conn.php");


//Agarramos el id que pasamos por la url 
$idUsuario = $_GET['id'];
//sql usuario con el id del url
$sql = "SELECT rol.nombreRol, 
               713utic.idEmpleado, adscripcion, nombre, apellidoPaterno, apellidoMaterno, correo, activo, 
               usuario.idUsuario, nombreUsuario, contraseniaUsuario
FROM 713utic 
INNER JOIN usuario ON 713utic.idEmpleado = usuario.idEmpleado 
INNER JOIN rol ON usuario.idRol = rol.idRol 
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
    <title>Editar Usuario</title>


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
  
<h3>Actualiza los datos del Usuario</h3>
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
<h3>Actualiza los datos del Usuario</h3>
<hr class="red">
    <main class="page">
    <form class="form-horizontal" role="form" action="actualizaUsuario.php?id=<?php echo $idUsuario?>" method="post">    
          <div class="form-group">
            <label class="col-sm-3 control-label">Nombre</label>
              <div class="col-sm-9">
                <input class=".form-control" placeholder="<?php echo $row['nombre'];?>" type="text" name="nombre">
              </div>
          </div>
          <div class="form-group">
            <label class="col-sm-3 control-label" >Apellido Paterno</label>
              <div class="col-sm-9">
                <input class=".form-control" placeholder="<?php echo $row['apellidoPaterno'];?>" type="text" name="apellidoPaterno">
              </div>
          </div>
          <div class="form-group">
            <label class="col-sm-3 control-label" >Apellido Materno</label>
              <div class="col-sm-9">
                <input class=".form-control" placeholder="<?php echo $row['apellidoMaterno'];?>" type="text" name="apellidoMaterno">
              </div>
          </div>
          <div class="form-group">
            <label class="col-sm-3 control-label" >Correo:</label>
              <div class="col-sm-9">
                <input class=".form-control" placeholder="<?php echo $row['correo'];?>" type="text" name="correo">
              </div>
          </div> 
          <!--
          <div class="form-group">
            <label class="col-sm-3 control-label" for="passwtextrd-03">Cargo</label>
              <div class="col-sm-9">
              <select class=".form-control" name="cargo">
              <option value disabled selected><?php/* echo $row['adscripcion'];?></option>
              <?php 
              //sql rol 
              $sql1 = "SELECT idEmpleado, adscripcion FROM 713utic WHERE 1";        
              $result1 = mysqli_query($con,$sql1) or die(mysqli_close($con));
              if(mysqli_num_rows($result1)>0){
                while($rowRol = mysqli_fetch_assoc($result1)){
              ?>
                <option value="<?php echo $rowRol['idEmpleado']?>"><?php echo $rowRol['adscripcion']?></option>
              <?php
                }
              }
              */?>
              </select>
              </div>
          </div>
            -->
          <div class="form-group">
            <label class="col-sm-3 control-label" >Nombre Usuario</label>
              <div class="col-sm-9">
                <input class=".form-control" placeholder="<?php echo $row['nombreUsuario'];?>" type="text" name="nombreUsuario">
              </div>
          </div>
          <div class="form-group">
            <label class="col-sm-3 control-label" >Contraseña:</label>
              <div class="col-sm-9">
                <input class=".form-control" placeholder="<?php echo $row['contraseniaUsuario'];?>" type="text" name="contraseniaUsuario">
              </div>
          </div>
          <div class="form-group">
            <label class="col-sm-3 control-label" for="passwtextrd-03">Rol</label>
              <div class="col-sm-9">
              <select class=".form-control" name="idRol">
              <option value disabled selected><?php echo $row['nombreRol'];?></option>
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
              </div>
          </div>
          <div class="form-group">
            <div class="col-sm-offset-3 col-sm-9">
              <button class="btn btn-primary pull-left" type="submit">Enviar</button>
            </div>
          </div>
        </form>
    </main>

    <!-- JS -->
    
     <!-- Contenido   <script src="https://framework-gb.cdn.gob.mx/gobmx.js"></script>  -->
     <script src="https://framework-gb.cdn.gob.mx/gobmx.js"></script>
  </body>
</html>
