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
    <form class="form-horizontal" role="form" action="creaUsuario.php" method="post">    
          <div class="form-group">
            <label class="col-sm-3 control-label">Nombre</label>
              <div class="col-sm-9">
                <input class=".form-control" placeholder="" type="text" name="nombreUsuario">
              </div>
          </div>
          <div class="form-group">
            <label class="col-sm-3 control-label" >Apellido Paterno</label>
              <div class="col-sm-9">
                <input class=".form-control" placeholder="" type="text" name="apellidoPaterno">
              </div>
          </div>
          <div class="form-group">
            <label class="col-sm-3 control-label" >Apellido Materno</label>
              <div class="col-sm-9">
                <input class=".form-control" placeholder="" type="text" name="apellidoMaterno">
              </div>
          </div>
          <div class="form-group">
            <label class="col-sm-3 control-label" >Correo:</label>
              <div class="col-sm-9">
                <input class=".form-control" placeholder="" type="text" name="correo">
              </div>
          </div>
          <div class="form-group">
            <label class="col-sm-3 control-label" for="password-03">Cargo</label>
              <div class="col-sm-9">
                <input class=".form-control" placeholder="" type="text" name="cargo">
              </div>
          </div>
          <div class="form-group">
            <label class="col-sm-3 control-label" >Nombre Usuario</label>
              <div class="col-sm-9">
                <input class=".form-control" placeholder="" type="text" name="nombreUsuario">
              </div>
          </div>
          <div class="form-group">
            <label class="col-sm-3 control-label" >Contraseña:</label>
              <div class="col-sm-9">
                <input class=".form-control" placeholder="" type="text" name="contraseniaUsuario">
              </div>
          </div>
          <div class="form-group">
            <label class="col-sm-3 control-label" for="passwtextrd-03">Rol</label>
              <div class="col-sm-9">
               
              <select class=".form-control" name="idRol">

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
