<?php
$port = "127.0.0.1";
$usuario = "root";
$pass = "";
$dbname = "sistema_oficios";

// Create connection
$con = mysqli_connect($port, $usuario, $pass, $dbname);
// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
//echo "Connected successfully";
//mysqli_close($con);
?>  