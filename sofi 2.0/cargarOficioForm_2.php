<?php 
include ("sesiones.php");
include("permiso01.php");
include_once("conn/conn.php");

//Configuramos la hora
date_default_timezone_set("America/Mexico_City");
//echo date("h:i:s");

//Guardamos los datos del formulario
$idEmpleado = $_POST['idEmpleado'];
$idEmpleadoCondicion = $idEmpleado;
//Esta condicion nos sirve para saber si el oficio es circular o particular
if($idEmpleadoCondicion=!0){
  $oficioDirigido="1";
}else{
  $oficioDirigido="0";
}
$entradaSalida="1";
$nombre = $_POST['nombre'];
$cargo = $_POST['cargo'];
$unidad = $_POST['unidad'];
$oficio = $_POST['oficio'];
$fechaElaboracion = $_POST['fechaElaboracion'];

//$oficioReferencia1 = $_POST['oficioReferencia1'];
$fechaRecibidoSICT = $_POST['fechaRecibidoSICT'];
$estadoOficio = $_POST['estadoOficio'];
$fechaRespuesta = $_POST['fechaRespuesta'];
$asunto = $_POST['asunto'];
//$archivoOficio = $_POST['archivoOficio'];
$descripcion = $_POST['descripcion'];
//Esta boolean nos va a indicar si es interno o externo 
$tipoOficio="0";
$fechaRegistroSOFI= date("yy-m-d h:i:s");





/* 

En esta parte tenemos la creacion de carpetas

E   M   P   I   E  Z   A

*/





//datos de nuestro oficio
$oficiosCarpeta = "oficios";
if(!is_dir($oficiosCarpeta)){
  mkdir($oficiosCarpeta);
}


//Consulta para saber el nombre del empleado 
//sql usuario con el id del url
$sql = "SELECT nombre, apellidoPaterno, apellidoMaterno
        FROM 713utic  
        WHERE idEmpleado ='".$idEmpleado."'";        
$result = mysqli_query($con,$sql) or die(mysqli_close($con));
$row = mysqli_fetch_assoc($result);
//Guardamos los datos de la base de datos en nuestras variables
$nombreEmpleado = $row['nombre'];
$apellidoPaternoEmpleado = $row['apellidoPaterno'];
$apellidoMaternoEmpleado = $row['apellidoMaterno'];


$nombreCompleto=$nombreEmpleado . " " . $apellidoPaternoEmpleado . " " . $apellidoMaternoEmpleado;
$nombreCarpeta="$oficiosCarpeta/$nombreCompleto";

if(!is_dir($nombreCarpeta)){
    mkdir($nombreCarpeta);
}


//substr nos ayuda a poder quitarle caracteres finales a nuestra fecha
//para que de 2023-06-40 nos quede solamente el año 2023
$anioFecha=substr($fechaElaboracion, 0, -6);




//carpeta de mario para el año
$nombreAnioCarpeta="$nombreCarpeta/$anioFecha";
if(!is_dir($nombreAnioCarpeta)){
    mkdir($nombreAnioCarpeta);
}

//substr nos ayuda a poder quitarle caracteres finales a nuestra fecha
//para que de 2023-06-40 nos quede solamente el mes 12
$mesFecha=substr($fechaElaboracion, 5, -3);
switch ($mesFecha) {
    case 1:
        $nombreAnioMesCarpeta="$nombreCarpeta/$anioFecha/enero/";
        break;
    case 2:
        $nombreAnioMesCarpeta="$nombreCarpeta/$anioFecha/febrero/";
        break;
    case 3:
        $nombreAnioMesCarpeta="$nombreCarpeta/$anioFecha/marzo/";
        break;
    case 4:
        $nombreAnioMesCarpeta="$nombreCarpeta/$anioFecha/abril/";
        break;
    case 5:
        $nombreAnioMesCarpeta="$nombreCarpeta/$anioFecha/mayo/";
        break;
    case 6:
        $nombreAnioMesCarpeta="$nombreCarpeta/$anioFecha/junio/";
        break;
    case 7:
        $nombreAnioMesCarpeta="$nombreCarpeta/$anioFecha/julio/";
        break;
    case 8:
        $nombreAnioMesCarpeta="$nombreCarpeta/$anioFecha/agosto/";
        break;
    case 9:
        $nombreAnioMesCarpeta="$nombreCarpeta/$anioFecha/septiembre/";
        break;
    case 10:
        $nombreAnioMesCarpeta="$nombreCarpeta/$anioFecha/octubre/";
        break;
    case 11:
        $nombreAnioMesCarpeta="$nombreCarpeta/$anioFecha/noviembre/";
        break;
    case 12:
        $nombreAnioMesCarpeta="$nombreCarpeta/$anioFecha/diciembre/";
        break;
} 

//carpeta de mario-año para el mes
if(!is_dir($nombreAnioMesCarpeta)){
    mkdir($nombreAnioMesCarpeta);
    //echo "Se ha creado directorio $nombreAnioMesaCarpeta";
}
 else {
    //echo "El directorio $nombreAnioMesaCarpeta ya existe";
}


//Lo que vamos a obtener es la varaible nombreAnioMesCarpeta donde va a venir la ruta 
//que necesitamos para meter el archivo con respecto a la informacion del formulario


/* 

En esta parte tenemos la creacion de carpetas

T    E    R    M    I    N    A

*/





if($con){



if (isset($_POST['submit'])) {
//El nombre de la carpeta a donde la vamos a poner 

$carpeta = $nombreAnioMesCarpeta;
//$carpeta = 'oficios/EDNA PATRICIA SANTIAGO VARGAS/';

//En esta parte obtenemos el nombre el archivo y captamos el nombre del mismo
$nombreArchivo = basename($_FILES['archivoOficio']['name']);


$nuevo_nombre_ruta = $carpeta . $nombreArchivo;

//La funcion move_uploaded file esta funcion le vamos a indicar que vamos a mover lo que subimos
//Primer parametro ruta temporal de donde lo estamos sacando
//Segundo parametro ruta a donde se va a mover 

if (move_uploaded_file($_FILES['archivoOficio']['tmp_name'], $nuevo_nombre_ruta)) {
   if ($_FILES['archivoOficio']['type'] != "application/pdf") {

       echo "<p>Los oficios deben cargarse en PDF.</p>";
   } else {
       $sql = "INSERT INTO oficio (tipoOficio, estadoOficio, oficioDirigido, entradaSalida,
                                   oficio, fechaElaboracion, asunto, descripcion, 
                                   fechaRecibidoSICT,
                                   fechaRespuesta, OficioReferencia1, fechaRegistroSOFI,
                                   idEmpleado, nombre, cargo, unidad, direccion) 
                   VALUES ('$tipoOficio', '$estadoOficio', '$oficioDirigido', '$entradaSalida', 
                           '$oficio', '$fechaElaboracion', '$asunto', '$descripcion', 
                           '$fechaRecibidoSICT', 
                           '$fechaRespuesta', '$oficioReferencia1', '$fechaRegistroSOFI', 
                           '$idEmpleado', '$nombre', '$cargo', '$unidad', '$nuevo_nombre_ruta')";
                   //.die(mysql_error());
       $result = mysqli_query($con, $sql)or die(mysqli_error($con));
  }

  if ($result) {
    echo '<script type ="text/javascript">
    alert("El documento se subio correctamente");
    window.location.href="buscarOficio.html";
    </script>';
  } else {
       echo 'Algo fallo :c cesarinbelin';
  }
} 
}

}
else{
	echo "hubo un error";
}

?> 