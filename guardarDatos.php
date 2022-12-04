<?php
    include('Conexion.php');
    $dni=$_POST['nombres'];
    $celular=$_POST['celular'];
   
    
    $insertar="INSERT INTO clientes(nombres, celular) VALUES ('$dni', '$celular');";
    
    mysqli_query($conexion, $insertar);
    
    echo "<script>alert('Te llamaremos pronto')</script>"; 
    echo "<script>location.href='index.php'</script>";
    mysqli_close($conexion);
?>