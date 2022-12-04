<?php
    print_r($_POST);
    if(!isset($_POST['codigo'])){
        header('Location: index.php?mensaje=error');
    }

    include 'model/conexion.php';
    $codigo = $_POST['codigo'];
    $nombre = $_POST['txtNombre'];
    $celular = $_POST['txtCelular'];
    $estado = $_POST['txtEstado'];

    $sentencia = $bd->prepare("UPDATE clientes SET nombres = ?, celular = ?, estado = ? where id = ?;");
    $resultado = $sentencia->execute([$nombre, $celular, $estado, $codigo]);

    if ($resultado === TRUE) {
        header('Location: admin.php?mensaje=editado');
    } else {
        header('Location: admin.php?mensaje=error');
        exit();
    }
    
?>