<?php
//nuestro usuario
$carpeta="mario";
if(!is_dir($carpeta)){
    mkdir($carpeta);
    echo "Se ha creado directorio $carpeta";
}

 else {
    echo "El directorio $carpeta ya existe";
}
echo"<br/>";





$fecha="2023-06-40";
//substr nos ayuda a poder quitarle cosas a nuestra fecha
$anioFecha=substr($fecha, 0, -6);


//carpeta de mario para el año
$carpetaMario="$carpeta/$anioFecha";
if(!is_dir($carpetaMario)){
    mkdir($carpetaMario);
    echo "Se ha creado directorio $carpetaMario";
}
 else {
    echo "El directorio $carpetaMario ya existe";
}

?>
