<?php
    include('Conexion.php');
    $dni=$_POST['dni'];
    $celular=$_POST['celular'];
   
    
    $insertar="INSERT INTO llamadas(tipoDocLlamar, nroDocLlamar) VALUES ('$dni', '$celular');";
    
    mysqli_query($conexion, $insertar);
    
    echo "<script>alert('Te llamaremos pronto')</script>"; 
    echo "<script>location.href='index.php'</script>";
    mysqli_close($conexion);
?>