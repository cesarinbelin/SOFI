<?php
session_start();
unset($_SESSION['nombreUsuarioSession']);
header('Location: form_login.php?login=false');

?>