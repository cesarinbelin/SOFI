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
    <title>Oficios</title>








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
<h3>Lista de Oficios</h3>
<hr class="red">





<table class="table table-responsive">
	<thead>
		<tr>
			<th>Nombre</th>
			<th>Asunto</th>
			<th>Empleado</th>
      <th>Unidad</th>
			<th>Fecha de elaboracion</th>
			<th>Estado Oficio</th>
			<th>PDF</th>
		</tr>
	</thead>
    <tbody>
        
    <?php
    if($con){
    //echo "se abre la conexióna la BD";
	$sql= "SELECT * FROM oficio where tipoOficio = '0';";	
	$result=mysqli_query($con,$sql) or die(mysqli_close($con));
    if(mysqli_num_rows($result)>0){
    while($row = mysqli_fetch_assoc($result)){
    $direccion=$row["direccion"];
    $idOficio=$row["idOficio"];
    $nombre=$row["nombre"];

    ?>
        <tr> 
            <td><?php echo $row['oficio'] ?></td>
            <td><?php echo $row['asunto'] ?></td>
            <td><?php echo $row['idEmpleado'] ?></td>
            <td><?php echo $row['unidad'] ?></td>
            <td><?php echo $row['fechaElaboracion'] ?></td>
            <td><?php echo $row['estadoOficio'] ?></td>
            <td><a target=black href="<?php echo $direccion ?>?id=<?php echo $idOficio ?>" class="btn btn-link"><?php echo $nombre ?></a></td>
            <td>
            <a href="eliminaOficio.php?id=<?php echo $row['idOficio']?>" class="btn btn-danger" >Eliminar</a> 
            
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








  


       
    </main>

    <!-- JS -->
    
     <!-- Contenido   <script src="https://framework-gb.cdn.gob.mx/gobmx.js"></script>  -->
     <script src="https://framework-gb.cdn.gob.mx/gobmx.js"></script>
  </body>
</html>