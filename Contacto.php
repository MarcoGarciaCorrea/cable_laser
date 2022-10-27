<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="css/contacto.css">
</head>

<body>
    <!--Comienzo de Header-->
    <header class="sticky-top container-fluid bg-white">
        <nav class="navbar navbar-expand-md container-md">
            <div class="container-fluid py-2">
                <a class="navbar-brand" href="index.php">
                    <img src=".\imagenes\LogoPequeno.png" alt="Logo" width="150" height="70">
                </a>
                <!--ESTE BOTON PERMITE EL COLAPSO-->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav m-auto text-center">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="servicios.php">Servicios</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="nosotros.php">Nosotros</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contacto.php">Contáctanos</a>
                        </li>
                    </ul>
                    <!-- Boton que llama al modal a través de su ID -->
                    <div class="text-center md-mt-4">
                        <button class="btn btn-outline-primary me-auto" type="button" data-bs-toggle="modal"
                            data-bs-target="#modalContacto">Te llamamos</button>
                    </div>


                </div>
            </div>
        </nav>
    </header>
    <!--Fin de Header-->

    <!--Comienzo de main-->
    <main class="mainform">
        <div class="formularioContacto">
            <h5>Contactanos para resolver tus dudas</h5>
            <section class="cont_contacto">
                <article class="columna_cont">
                    <form class="fc" action="">
                        <select name="sucursales" id="sucursales" onclick="seleccionarMapa()">
                            <option value="1">Sucursal</option>
                            <option value="2">Chaclacayo</option>
                            <option value="3">El Agustino</option>
                            <option value="4">Pangoa</option>
                            <option value="5">Mazamari</option>
                            <option value="6">Satipo</option>
                        </select><br>
                        <input type="text" placeholder="Nombres"><br>
                        <input type="text" placeholder="Apellidos"><br>
                        <select>
                            <option value="doc0">Tipo de documento</option>
                            <option value="doc1">DNI</option>
                            <option value="doc2">Carnet de Extranjeria</option>
                            <option value="doc3">RUC</option>
                        </select><br>
                        <input type="text" placeholder="Nro. Documento"><br>
                        <input type="text" placeholder="Correo"><br>
                        <input type="text" placeholder="Celular"><br>
                        <textarea placeholder="Mensaje"></textarea><br>
                        <button type="submit" name="envio">Enviar</button>
                    </form>
                    <div class="mapa" id="lm">
                        <iframe class="link_mapa" src=""></iframe>
                    </div>
                </article>
            </section>
        </div>
    </main>
    <!--Fin de main-->

    <!--Comienzo footer-->
    <footer class="">
        <div class="mt-5 text-center p-3" style="background-color: rgba(0, 0, 0, 0.05);">

            ©2022 <a class="text-reset fw-bold" href="https://#">Cable Laser</a> | Todos los derechos reservados
        </div>
    </footer>





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




    <!-- JavaScript necesario para bootstrap -->
    <script src="js/obtenerMapa.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
        crossorigin="anonymous"></script>
</body>

</html>