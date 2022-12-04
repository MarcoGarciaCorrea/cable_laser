<?php
// Inicializ la sesion
session_start();
 
// Compruebe si el usuario ya ha iniciado sesión; en caso de que no esté logueado se redirige a la pantalla de login
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>

<?php include 'template/header.php' ?>

<?php
    include_once "model/conexion.php";
    $sentencia = $bd -> query("select * from contactanos");
    $contactanos = $sentencia->fetchAll(PDO::FETCH_OBJ);
    //print_r($persona);
?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <!-- inicio alerta -->
            <?php 
                if(isset($_GET['mensaje']) and $_GET['mensaje'] == 'falta'){
            ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Error!</strong> Rellena todos los campos.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php 
                }
            ?>


            <?php 
                if(isset($_GET['mensaje']) and $_GET['mensaje'] == 'registrado'){
            ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Registrado!</strong> Se agregaron los datos.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php 
                }
            ?>   
            
            

            <?php 
                if(isset($_GET['mensaje']) and $_GET['mensaje'] == 'error'){
            ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Error!</strong> Vuelve a intentar.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php 
                }
            ?>   



            <?php 
                if(isset($_GET['mensaje']) and $_GET['mensaje'] == 'editado'){
            ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Cambiado!</strong> Los datos fueron actualizados.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php 
                }
            ?> 


            <?php 
                if(isset($_GET['mensaje']) and $_GET['mensaje'] == 'eliminado'){
            ?>
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Eliminado!</strong> Los datos fueron borrados.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php 
                }
            ?> 

            <!-- fin alerta -->

            
            <div class="card">
                <div class="card-header">
                    Listado de comentarios
                </div>
                <div class=" p-4">
                    <table class="table align-middle">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nombres</th>
                                <th scope="col">Apellidos</th>
                                <th scope="col">Tipo_Doc</th>
                                <th scope="col">#Documento</th>
                                <th scope="col">Correo</th>
                                <th scope="col">Celular</th>
                                <th scope="col">Fecha</th>
                                <th scope="col">Mensaje</th>
                                <th scope="col">Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            <?php 
                                foreach($contactanos as $dato){ 
                            ?>

                            <tr>
                                <td scope="row"><?php echo $dato->codContac; ?></td>
                                <td><?php echo $dato->nombres; ?></td>
                                <td><?php echo $dato->apellidos; ?></td>
                                <td><?php echo $dato->tipoDocCont; ?></td>
                                <td><?php echo $dato->nroDocCont; ?></td>
                                <td><?php echo $dato->correo; ?></td>
                                <td><?php echo $dato->celular; ?></td>
                                <td><?php echo $dato->fecha; ?></td>
                                <td><?php echo $dato->mensaje; ?></td>
                                
                                <td><a onclick="return confirm('Estas seguro de eliminar?');" class="text-danger" href="eliminarComentario.php?codigo=<?php echo $dato->codContac; ?>"><i class="bi bi-trash"></i></a></td>
                            </tr>

                            <?php 
                                }
                            ?>

                        </tbody>
                    </table>
                    
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'template/footer.php' ?>
</body>
