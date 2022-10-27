<?php
/* datos de conexion con La BD*/
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'cable');
 
/* Conexion con la BD */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Verificar la conexion
if($link === false){
    die("No se pudo conectar. " . mysqli_connect_error());
}
?>