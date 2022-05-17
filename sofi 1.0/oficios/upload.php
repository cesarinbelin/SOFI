<?php
include_once("../global/conn.php");
if (isset($_POST['submit'])) {

$folder_path = '../oficios/';

$nombre = basename($_FILES['oficio']['name']);
$nuevo_nombre = $folder_path . $nombre;

if (move_uploaded_file($_FILES['oficio']['tmp_name'], $nuevo_nombre)) {
   if ($_FILES['oficio']['type'] != "application/pdf") {

       echo "<p>Los oficios deben cargarse en PDF.</p>";
   } else {
       $sql = "INSERT INTO oficios (nombre, direccion) 
                   VALUES ('{$nombre}','{$nuevo_nombre}')";
                   //.die(mysql_error());
       $result = mysqli_query($con, $sql)or die(mysqli_error($con));
  }

  if ($result) {
    echo '<script type ="text/javascript">
    alert("El documento se subio correctamente");
    window.location.href="form_upload.php";
    </script>';
  } else {
       echo 'Algo fallo :c cesarinbelin';
  }
}
}



?>