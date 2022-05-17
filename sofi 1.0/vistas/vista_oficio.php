<?php

include_once "../global/conn.php";


	//echo "se abre la conexióna la BD";
	$sql= "SELECT * FROM oficios";	
	$result=mysqli_query($con,$sql) or die(mysqli_close($con));
	$row =mysqli_fetch_assoc($result); 
	if (mysqli_num_rows($result)>0){

	


	echo ("Nombre del oficio: ") . $row["nombre"] . " ";
	//echo ("La direccion es: ") . $row["direccion"] . "<br>";
	echo "<a target=black href='../oficios/Bernstein - West Side Story (Complete Vocal Score).pdf'> Abrir </a></br>";


	}

	

	
?>	
