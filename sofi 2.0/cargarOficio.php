<?php 
include ("sesiones.php");
include("permiso01.php");
include_once("conn/conn.php");

//Configuramos la hora
date_default_timezone_set("America/Mexico_City");
//echo date("h:i:s");

//Guardamos los datos del formulario
$idEmpleado = $_POST['idEmpleado'];
//Esta condicion nos sirve para saber si el oficio es circular o particular
if($idEmpleado=!0){
  $oficioDirigido="1";
}else{
  $oficioDirigido="0";
}
$nombre = $_POST['nombre'];
$cargo = $_POST['cargo'];
$unidad = $_POST['unidad'];
$oficio = $_POST['oficio'];
$fechaElaboracion = $_POST['fechaElaboracion'];

$oficioReferencia1 = $_POST['oficioReferencia1'];
$fechaRecibidoSICT = $_POST['fechaRecibidoSICT'];
$estadoOficio = $_POST['estadoOficio'];
$fechaRespuesta = $_POST['fechaRespuesta'];
$asunto = $_POST['asunto'];
//$archivoOficio = $_POST['archivoOficio'];
$descripcion = $_POST['descripcion'];
//Esta boolean nos va a indicar si es interno o externo 
$tipoOficio="0";
$fechaRegistroSOFI= date("yy-m-d h:i:s");





if($con){



if (isset($_POST['submit'])) {
//El nombre de la carpeta a donde la vamos a poner 
$carpeta = 'oficios/';

//En esta parte obtenemos el nombre el archivo y captamos el nombre del mismo
$nombre = basename($_FILES['archivoOficio']['name']);


$nuevo_nombre_ruta = $carpeta . $nombre;

//La funcion move_uploaded file esta funcion le vamos a indicar que vamos a mover lo que subimos
//Primer parametro ruta temporal de donde lo estamos sacando
//Segundo parametro ruta a donde se va a mover 
if (move_uploaded_file($_FILES['archivoOficio']['tmp_name'], $nuevo_nombre_ruta)) {
   if ($_FILES['archivoOficio']['type'] != "application/pdf") {

       echo "<p>Los oficios deben cargarse en PDF.</p>";
   } else {
       $sql = "INSERT INTO oficio (tipoOficio, estadoOficio, oficioDirigido,
                                   oficio, fechaElaboracion, asunto, descripcion, 
                                   fechaRecibidoSICT,
                                   fechaRespuesta, OficioReferencia1, OficioReferencia2,
                                   OficioReferencia3, OficioReferencia4, fechaRegistroSOFI,
                                   idEmpleado, nombre, cargo, unidad, direccion) 
                   VALUES ('$tipoOficio', '$estadoOficio', '$oficioDirigido', 
                           '$oficio', '$fechaElaboracion', '$asunto', '$descripcion', 
                           '$fechaRecibidoSICT', 
                           '$fechaRespuesta', '$oficioReferencia1', '$oficioReferencia1',
                           '$oficioReferencia1', '$oficioReferencia1', '$fechaRegistroSOFI', 
                           '$idEmpleado', '$nombre', '$cargo', '$unidad', '$nuevo_nombre')";
                   //.die(mysql_error());
       $result = mysqli_query($con, $sql)or die(mysqli_error($con));
  }

  if ($result) {
    echo '<script type ="text/javascript">
    alert("El documento se subio correctamente");
    window.location.href="oficios.php";
    </script>';
  } else {
       echo 'Algo fallo :c cesarinbelin';
  }
} 
}

}else{
	echo "hubo un error";
}

?> 

<?php





echo $idEmpleado;
echo "<br>";
echo $nombre;
echo "<br>";
echo $cargo;
echo "<br>";
echo $unidad;
echo "<br>";
echo $oficio;
echo "<br>";
echo $fechaElaboracion;
echo "<br>";
echo $oficioReferencia1;
echo "<br>";
echo $fechaRecibidoSICT;
echo "<br>";
echo $estadoOficio;
echo "<br>";
echo $fechaRespuesta;
echo "<br>";
echo $asunto;
echo "<br>";
echo $oficio; 
echo "<br>";
echo $descripcion;
echo "<br>";












?>