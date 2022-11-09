<?php
    include('Conexion.php');
    $nom=$_POST['nom'];
    $ape=$_POST['ape'];
    $td=$_POST['tipoDoc'];
    $doc=$_POST['doc'];
    $correo=$_POST['correoCo'];
    $cel=$_POST['cel'];
    $msj=$_POST['msj'];
    
    $insertar="INSERT INTO contactanos(nombres, apellidos, tipoDocCont, nroDocCont, correo, celular, mensaje, estadoContac) VALUES ('$nom', '$ape', '$td', '$doc', '$correo', '$cel', '$msj', 'SIN ATENDER');";
    
    mysqli_query($conexion, $insertar);
    
    echo "<script>alert('Gracias por escribirnos, uno de nuestros asesores evaluara tu comentario')</script>"; 
    echo "<script>location.href='Contacto.php'</script>";
    mysqli_close($conexion);
?>