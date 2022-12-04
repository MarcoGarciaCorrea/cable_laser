<?php 
    if(!isset($_GET['codigo'])){
        header('Location: admin.php?mensaje=error');
        exit();
    }

    include 'model/conexion.php';
    $codigo = $_GET['codigo'];

    $sentencia = $bd->prepare("DELETE FROM contactanos where codContac = ?;");
    $resultado = $sentencia->execute([$codigo]);

    if ($resultado === TRUE) {
        header('Location: comentarios.php?mensaje=eliminado');
    } else {
        header('Location: comentarios.php?mensaje=error');
    }
    
?>