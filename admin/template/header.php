<!doctype html>
<html lang="es">
  <head>
    <title>Cable Laser | Admin</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <!-- cdn icnonos-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
  </head>
  <body>
      <!--Comienzo de Header-->
    <header class="sticky-top container-fluid bg-white">
        <nav class="navbar navbar-expand-md container-md">
            <div class="container-fluid py-2">
                <a class="navbar-brand" href="..\index.php">
                    <img src="..\imagenes\LogoPequeno.png" alt="Logo" width="150" height="70">
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
                            <a class="nav-link active" aria-current="page" href="admin.php">Clientes</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="comentarios.php">Comentarios</a>
                        </li>
                        
                    </ul>
                    <!-- Boton que llama al modal a través de su ID -->
                    <div class="text-center md-mt-4">
                        <form action="logout.php">
                        <button class="btn btn-outline-primary me-auto" type="submit" data-bs-toggle="modal"
                            data-bs-target="#modalContacto"> Salir</button></form>
                    </div>


                </div>
            </div>
        </nav>
    </header>
    <!--Fin de Header-->