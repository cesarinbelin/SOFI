<?php
//Validamos que la persona que llega a esta vista tiene el permiso numero 3 
if(($_SESSION['permiso']) != "3"){
    
    echo "redirigir al login";
    header("Location: ../form_login.php");
}

?>