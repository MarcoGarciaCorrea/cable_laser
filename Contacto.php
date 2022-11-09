<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cable Laser</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="css/contacto.css">
</head>
<body>
    <header class="sticky-top">
        <div class="container-lg">
            <nav class="navbar navbar-expand-lg bg-ligth ">
                <div class="container-fluid py-2">
                    <a class="navbar-brand" href="index.html">
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
                                <a class="nav-link" href="index.html">Servicios</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Nosotros</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="Contactos.html">Contactanos</a>
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
    
    <main class="mainform">
        <h5>Contactanos para resolver tus dudas</h5><br>
        <div class="form_busqueda">
            <aside class="caja_busqueda">
                <div class="titulo_busc">
                    <h6>Selecciona tu zona: </h6>
                </div>
                <form class="fbus" action="">
                    <select name="sucursales" id="sucursales" onclick="seleccionarMapa()">
                        <option value="1">Sucursal</option>
                        <option value="2">Chaclacayo</option>
                        <option value="3">El Agustino</option>
                        <option value="4">Pangoa</option>
                        <option value="5">Mazamari</option>
                        <option value="6">Satipo</option>
                    </select>
                </form>
            </aside>
        </div>
        
        <section class="cont_info">
            <article class="atencion">
                <h6>Atencion al Cliente</h6>
                <aside class="caja_contactos">
                    <div class="iconoContactos">
                        <img src="imagenes/iconoTelefono.png">
                    </div>
                    <div class="contacto">
                        <ul>Oficina:</ul>
                        <ul id="numOfi">-</ul>
                    </div>
                </aside>
                <aside class="caja_contactos">
                    <div class="iconoContactos">
                        <img src="imagenes/iconoTelefono.png">
                    </div>
                    <div class="contacto">
                        <ul>Soporte Técnico:</ul>
                        <ul id="numTec">-</ul>
                    </div>
                </aside>
                <aside class="caja_contactos">
                    <div class="iconoContactos">
                        <img class="icno" src="imagenes/iconoCorreo.png">
                    </div>
                    <div class="contacto">
                        <ul>Escribenos:</ul>
                        <ul id="correo">-</ul>
                    </div>
                </aside>
            </article>
            <div class="vertical_line"></div>
            <article class="atencion">
                <h6>Redes sociales</h6>
                <aside class="caja_contactos">
                    <div class="iconoContactos">
                        <img src="imagenes/iconoWhatsapp.png">
                    </div>
                    <div class="contacto">
                        <ul>Whatsapp:</ul>
                        <ul id="numWasa">-</ul>
                    </div>
                </aside>
                <aside class="caja_contactos">
                    <div class="iconoContactos">
                        <img src="imagenes/iconoFacebook.png">
                    </div>
                    <div class="contacto">
                        <ul>Facebook:</ul>
                        <ul id="nomFace">-</ul>
                    </div>
                </aside>
                <aside class="caja_contactos">
                    <div class="iconoContactos">
                        <img src="imagenes/iconoInstagram.png">
                    </div>
                    <div class="contacto">
                        <ul>Instagram:</ul>
                        <ul id="nomInsta">-</ul>
                    </div>
                </aside>
            </article>
        </section><br>
        <div class="formularioContacto">
           <h5>Envianos tus comentarios</h5>
           <section class="cont_contacto">
               <article class="columna_cont">
                   <form class="fc" method="post" action="GuardarComentarios.php" enctype="multipart/form-data">
                        <input type="text" name="nom" placeholder="Nombres" required><br>
                        <input type="text" name="ape" placeholder="Apellidos" required><br>
                        <select name="tipoDoc" required>
                            <option value="">Tipo de documento</option>
                            <option value="DNI">DNI</option>
                            <option value="CE">Carnet de Extranjeria</option>
                            <option value="RUC">RUC</option>
                        </select><br>
                        <input type="text" name="doc" placeholder="Nro. Documento" required><br>
                        <input type="text" name="correoCo" placeholder="Correo" required><br>
                        <input type="text" name="cel" placeholder="Celular"><br>
                        <textarea name="msj" placeholder="Mensaje" required></textarea><br>
                        <input id="enviarCom" type="submit" value="Enviar">
                    </form>
                    <div class="mapa" id="lm">
                        <iframe class="link_mapa" src="" ></iframe>
                    </div>
               </article>
           </section>
        </div>
    </main><br>
    
    <div class="container bg-dark text-primary"></div>

    <footer><br>
        <section class="cont_footer">
            <article class="fooCajaContacto">
                <a class="titulo_cont" href="Contactos.html">Contacto</a>
                <form class="fcont" action="">
                    <select name="numContactos" id="numeros" onclick="seleccionarNumero()">
                        <option value="1">Sucursal</option>
                        <option value="2">Chaclacayo</option>
                        <option value="3">El Agustino</option>
                        <option value="4">Pangoa</option>
                        <option value="5">Mazamari</option>
                        <option value="6">Satipo</option>
                    </select>
                </form>
                <ul id="fooNumero">Número:</ul>
                <ul id="fooDirecc">Dirección:</ul>
            </article><br>
            <article class="fooCajaServicios">
                <a class="titulo_cont" href="">Servicios</a><br>
                <a class="sub-serv" href="">Internet</a><br>
                <a class="sub-serv" href="">Cable</a><br>
                <a class="sub-serv" href="">Duos</a><br><br>
                <a class="titulo_cont" href="">Términos y condiciones de la web</a>
            </article><br>
            <article class="fooCajaRedes">
                <a href=""><img class="fooIcono" src="imagenes/iconoFacebookblanco.png"></a>
                <a href=""><img class="fooIcono" src="imagenes/iconoInstagramblanco.png"></a>
                <a href=""><img class="fooLogo" src="imagenes/LogoBlanco.png"></a>
            </article>
        </section>
        <div class="copy">© 2022 Cable Laser | TODOS LOS DERECHOS RESERVADOS</div>
    </footer>

        <!-- JavaScript Bundle with Popper -->
    <script src="js/obtenerMapa.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
            crossorigin="anonymous"></script>
</body>

</html>