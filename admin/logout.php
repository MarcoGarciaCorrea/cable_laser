<?php
// Inicializ la sesion
session_start();
 
$_SESSION = array();
 
// Destruye la sesión
session_destroy();
 
// Redirige a la pagina de login
header("location: login.php");
exit;
?>