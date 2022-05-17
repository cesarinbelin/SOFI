<?php
include "global/conn.php";
$con1 = mysqli_connect($port, $usuario, $pass, $dbname)
	   or die(mysqli_last_error());

$usuario = "cesar";

$sql = "SELECT username_usuario, pass_usuario, permiso
		  FROM usuarios
		  WHERE username_usuario ='".$usuario."'";
$result = mysqli_query($con1, $sql);
//$row = mysqli_fetch_assoc($result);



if (mysqli_num_rows($result) > 0) {
while($row = mysqli_fetch_assoc($result)){
echo ("permiso: " . $row["permiso"]);
}
}
else {
	echo "0 results";
  }
?>