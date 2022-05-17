<?php
//Validamos que la persona que llega a esta vista tiene el permiso numero 2 
if(($_SESSION['permiso']) != "2"){
    
    echo "redirigir al login";
    header("Location: ../form_login.php");
}

?>