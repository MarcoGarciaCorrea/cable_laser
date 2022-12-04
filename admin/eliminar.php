<?php 
    if(!isset($_GET['codigo'])){
        header('Location: admin.php?mensaje=error');
        exit();
    }

    include 'model/conexion.php';
    $codigo = $_GET['codigo'];

    $sentencia = $bd->prepare("DELETE FROM clientes where id = ?;");
    $resultado = $sentencia->execute([$codigo]);

    if ($resultado === TRUE) {
        header('Location: admin.php?mensaje=eliminado');
    } else {
        header('Location: admin.php?mensaje=error');
    }
    
?>