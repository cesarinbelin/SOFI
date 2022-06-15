<?php
include ("sesiones.php");
include("permiso01.php");
include_once("conn/conn.php");

?>
<?php
include_once("conn/conn.php");

  $salida="";
    //echo "se abre la conexióna la BD";
	//$sql= "SELECT * FROM oficio ORDER BY fechaElaboracion DESC";
  $sql="SELECT  713utic.nombre AS nombre713utic, 713utic.apellidoPaterno, 713utic.apellidoMaterno, 713utic.adscripcion,   
        oficio.idOficio, oficio.tipoOficio, oficio.nombre, oficio.cargo, oficio.asunto, oficio.oficio, oficio.direccion, oficio.fechaElaboracion
         FROM 713utic 
         INNER JOIN oficio ON 713utic.idEmpleado = oficio.idEmpleado
         WHERE oficio.tipoOficio = "1"
         ORDER BY fechaElaboracion DESC";	
  if(isset($_POST['consulta'])){
    //$q=$mysqli->real_escape_string($_POST['consulta']);
    $q=mysqli_real_escape_string($con, $_POST['consulta']);
    //$sql="SELECT * FROM oficio WHERE oficio LIKE '%".$q."%'";
    $sql="SELECT  713utic.nombre AS nombre713utic, 713utic.apellidoPaterno, 713utic.apellidoMaterno, 713utic.adscripcion,   
        oficio.idOficio, oficio.nombre, oficio.cargo, oficio.asunto, oficio.oficio, oficio.direccion, oficio.fechaElaboracion
         FROM 713utic 
         INNER JOIN oficio ON 713utic.idEmpleado = oficio.idEmpleado
         WHERE oficio.nombre LIKE '%".$q."%' 
                             OR 713utic.nombre LIKE '%".$q."%' 
                             OR oficio.asunto LIKE '%".$q."%' 
                             OR oficio.oficio LIKE '%".$q."%'
                             OR oficio.cargo LIKE '%".$q."%' 
         ORDER BY fechaElaboracion DESC";
  }



	$result=mysqli_query($con,$sql) or die(mysqli_close($con));
    if(mysqli_num_rows($result)>0){
      $salida.="<table class='table table-bordered'>
	<thead>
		<tr>
    <th style='background-color: #5499C7'>Nombre</th>
    <th style='background-color: #5499C7'>Adscripcion</th>
    <th style='background-color: #73C6B6'>Nombre</th>
    <th style='background-color: #73C6B6'>Cargo</th>
    <th style='background-color: #73C6B6'>Asunto</th>
    <th style='background-color: #73C6B6'>Fecha de Elaboración</th>
    <th style='background-color: #73C6B6'>Oficio (PDF)</th>
    <th style='background-color: #b38e5d'></th>
	</thead>
    <tbody>";

    while($row = mysqli_fetch_assoc($result)){
      
      $oficio=$row["oficio"];
      //url es la direccion en la carpeta del oficio
      $url=$row["direccion"] . "?id=" . $row["idOficio"];

      //
      $urlEliminaOficio= "eliminaOficio.php?id=" . $row["idOficio"];
        $salida.=
          "<tr> 
            <td>" . $row['nombre713utic'] . " " . $row['apellidoPaterno'] . " " . $row['apellidoMaterno'] . "</td>
            <td>" . $row['adscripcion'] . "</td>
            <td>" . $row['nombre'] . "</td>
            <td>" . $row['cargo'] . "</td>
            <td>" . $row['asunto'] . "</td>
            <td>" . $row['fechaElaboracion'] . "</td>
            <td><a target=black href='$url' class='btn btn-link'>$oficio</a></td>
            <td><a href='$urlEliminaOficio' class='btn btn-danger'>Eliminar</a> </td>  

          </tr>";
     
    }
      $salida.="</tbody></table>";
  } else {
    $salida.="El oficio no se encuentra";
  }

  echo $salida;
  
  ?>
