<?php
//Validamos que la persona que llega a esta vista tiene el permiso numero 1 
if(($_SESSION['permiso']) != "1"){
    
    echo "redirigir al login";
    header("Location: form_login.php");
}

?>