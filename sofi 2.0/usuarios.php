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
    <title>Usuarios</title>








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
      

<h3>Usuarios</h3>
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
<h3>Usuarios</h3>
<hr class="red">
  <!--<div class="row">
            <td>
              <a href="form_crea_usuario.php" class="btn btn-link">Nuevo usuario</a>
            </td>
  </div>-->
    


<table class="table table-responsive">
	<thead>
		<tr>
      <th>Id</th>
			<th>Nombre</th>
			<th>Apellido Paterno</th>
			<th>Apellido Materno</th>
			<th>Correo</th>
			<th>Cargo</th>
			<th>Fecha de ingreso</th>
			<th>Rol</th>
			<th>Activo</th>
		</tr>
	</thead>
    <tbody>
        
    <?php
    if($con){
    //echo "se abre la conexióna la BD";
	$sql= "SELECT rol.nombreRol, 713utic. idEmpleado, adscripcion, nombre, apellidoPaterno, apellidoMaterno, correo, activo, fechaIngreso, usuario.idUsuario
         FROM 713utic 
         INNER JOIN usuario ON 713utic.idEmpleado = usuario.idEmpleado 
         INNER JOIN rol ON usuario.idRol = rol.idRol 
         WHERE activo =0;";	
	$result=mysqli_query($con,$sql) or die(mysqli_close($con));
    if(mysqli_num_rows($result)>0){
    while($row = mysqli_fetch_assoc($result)){

    ?>
        <tr> 
            <th><?php echo $row['idEmpleado'] ?></td>
            <td><?php echo $row['nombre'] ?></td>
            <td><?php echo $row['apellidoPaterno'] ?></td>
            <td><?php echo $row['apellidoMaterno'] ?></td>
            <td><?php echo $row['correo'] ?></td>
            <td><?php echo $row['adscripcion'] ?></td>
            <td><?php echo $row['fechaIngreso'] ?></td>
            <td><?php echo $row['nombreRol'] ?></td>
            <td><?php echo $row['activo'] ?></td>
            
            <td>
            <a href="form_actualiza_usuario.php?id=<?php echo $row['idUsuario']?>" class="btn btn-default">Editar</a>
            </td>
            <td>
            <a href="eliminaUsuario.php?id=<?php echo $row['idUsuario']?>" class="btn btn-danger" >Eliminar</a> 
            </td>  
          </tr>
    <?php 
    }
    } else{
		echo "No se pudo ejecutar la sentencia SQL";
	}
    } else{
        echo "Hubo un error";
    } ?>
    </tbody>
</table>




</div>



  


       
    </main>

    <!-- JS -->
    
     <!-- Contenido   <script src="https://framework-gb.cdn.gob.mx/gobmx.js"></script>  -->
     <script src="https://framework-gb.cdn.gob.mx/gobmx.js"></script>
  </body>
</html>


