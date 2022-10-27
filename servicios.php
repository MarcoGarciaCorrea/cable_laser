<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cable Laser</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="css/servicios.css">
</head>

<body>
    <header class="sticky-top">
        <div class="container-lg">
            <nav class="navbar navbar-expand-lg bg-ligth ">
                <div class="container-fluid py-2">
                    <a class="navbar-brand" href="index.php">
                        <img src=".\imagenes\LogoPequeno.png" alt="Bootstrap" width="150" height="70">
                    </a>
                    <!--ESTE BOTON PERMITE EL COLAPSO-->
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav m-auto mb-lg-0 fs-5 fw-bolder">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Inicio</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Servicios</a>
                                <div>

                                    <ul>
                                        <li class="titulo"><a href="#"><b>SERVICIO HOGAR</b></a></li>
                                        <li><a href="">INTERNET HOGAR</a></li>
                                        <li><a href="#">PLANES INTERNET</a></li>
                                        <li><a href="#">FIBRA OPTICA</a></li>
                                        <li><a href="#">COBERTURA</a></li>
                                    </ul>

                                    <ul>
                                        <li class="titulo"><a href="Servicio_al_cliente.php"><b>SERVICIO TECNICOS</b></a></li>
                                        <li><a href="tel:000-000">LLAMA AL 0000-0000</a></li>
                                        <li><a href="https://chat.whatsapp.com/E71SevRQxtVDVmeklfQ4iJ">WHATSAPP DE SOPORTE</a></li>
                                        <li><a href="#">PAGA TU RECIBO</a></li>
                                        <li><a href="#">PREGUNTAS FRECUENTES</a></li>
                                    </ul>
                                    
                                </div>
                            </li>  
                                
                            <li class="nav-item">
                                <a class="nav-link" href="#">Nosotros</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Contactanos</a>
                            </li>
                        </ul>
                        <form class="d-flex">
                            <button class="btn btn-outline-primary" type="submit">Te llamamos</button>
                        </form>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <div class="container bg-dark text-primary">






<!-- Inicio de contenido de Modal -->
<div class="modal fade" id="modalContacto" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ingresa tus datos</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Correo electrónico</label>
                        <input type="email" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text">Nunca compartiremos su correo electrónico con nadie
                            más.</div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">celular</label>
                        <input type="text" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">aceptar terminos y condiciones</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </form>
            </div>

        </div>
    </div>
</div>
<!-- Fin de contenido de Modal -->

        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
            crossorigin="anonymous"></script>
</body>

</html>