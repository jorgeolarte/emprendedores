<!DOCTYPE html>
<html>

<head>
    <?php
    $title = "7° Networking - Tatayamba: Tribu De Emprendedores";
    $descripcion = "¿Quieres crear oportunidades comerciales?. Regístrate en el 7° Networking de Emprendedores Cartago, Tatayamba: Tribu De Emprendedores";
    $keywords = "emprendedores, emprender, aprender, emprendimiento, emprendedores cartago, cartago, cartago valle del cauca, networking, negocios, relaciones de valor, conexiones de valor";
    $evento_id = 7;
    $url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    ?>

    <?php include 'templates/header.php'; ?>
</head>

<body class="animated fadeIn slower">
    <?php include 'templates/navbar.php'; ?>
    <!-- Encabezado -->
    <div class="pt-4 bg-primary text-light" style="background-image: url(&quot;img/IMG_8980.jpg&quot;);	background-position: center;	background-size: cover; background-repeat: no-repeat;">
        <div class="embed-responsive embed-responsive-16by9">
            <video id="my-video" class="afterglow embed-responsive-item" width="720" height="405" autoplay="autoplay" data-youtube-id="FG5_cFxBquY" controls poster="assets/videos/7-networking-tribu-emprendedores.jpg">
                Tu navegador no soporta video
            </video>
        </div>
    </div>

    <div class="bg-danger text-white text-center" id="mensaje-cupos">
        <div class="container">
            <div class="row">
                <div class="col-md-12 animated infinite flash slower">
                    <small><i>Cupos limitados... quedan <span id="cupos">0</span> disponibles</i></small>
                </div>
            </div>
        </div>
    </div>

    <!-- Formulario registro -->
    <?php include 'data/form-registro-evento.php'; ?>

    <!-- Modal para registrarse dentro de la misma pagina -->
    <?php include 'data/modal-registro-emprendedor.php'; ?>

    <!-- Menu del evento -->
    <section class="py-3 border-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <nav class="nav font-weight-normal">
                        <a class="nav-link text-secondary" href="#contenido">Acerca de</a>
                        <a class="nav-link text-secondary" href="#mapa">¿Cómo llegar?</a>
                        <a class="nav-link text-secondary" href="#patrocina">Patrocina</a>
                    </nav>
                </div>
            </div>
        </div>
    </section>

    <!-- Contenido -->
    <div class="py-4 container" id="contenido">
        <div class="row">
            <div class="col-md-9">
                <div>
                    <h2>7° Networking <span class="badge badge-danger">Evento gratuito</span><br><small class="text-muted">Tatayamba: Tribu De Emprendedores</small></h2>
                    <p>Porque los negocios se hacen entre personas</p>
                    <p>Te invitamos a nuestro networking, donde podrás crear relaciones de valor, abrirte a nuevas oportunidades de negocio; conectando con otros emprendedores.</p>
                    <p>Asiste y juntos consolidemos nuestra comunidad.</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="pb-2">
                    <h3>Fecha y hora</h3>
                    <p class="text-muted">
                        <abbr title="día">Jueves.</abbr> 13 de febrero de 2020<br>
                        19:00 - 21:30 hora Colombia<br>
                    </p>
                </div>
                <div>
                    <h3>Ubicación</h3>
                    <address class="text-muted">
                        <strong>Tatayamba Café</strong><br>
                        Carrera 4ta Nro 13-30<br>
                        Cartago, Valle del Cauca<br>
                        <a href="#mapa" alt="Ver en mapa" class="my-1 btn btn-primary btn-sm"><i class="fas fa-map-marker-alt"></i> Ver en el mapa</a>
                    </address>
                </div>
            </div>
        </div>
    </div>

    <div class="py-4 container">
        <div class="row">
            <div id="mapa" class="col-md-12">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2811.53632047337!2d-75.91531489969084!3d4.75043418086552!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e38701c45b16373%3A0x837cd8ae42d35aa3!2sTatayamba%20Cafe!5e0!3m2!1sen!2sco!4v1581165749571!5m2!1sen!2sco" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </div>
        <div class="row">
            <div class="pt-4 col-md-12 text-center">
                <h4>7° Networking - Tatayamba: Tribu De Emprendedores</h4>
                <p class="text-muted">Tatayamba Café, Carrera 4ta Nro 13-30, Cartago, Valle del Cauca</p>
                <p>
                    <ul class="list-inline">
                        <li class="list-inline-item">
                            <a href="https://www.google.com/maps/preview?saddr=Current+Location&daddr=Tatayamba+Cafe,+Cra.+4+%23%2313+-+30,+Cartago,+Valle+del+Cauca&dirflg=walking" class="btn btn-lg" alt="¿Cómo llegar caminando?" target="_blank"><i class="fas fa-walking"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a href="https://www.google.com/maps/preview?saddr=Current+Location&daddr=Tatayamba+Cafe,+Cra.+4+%23%2313+-+30,+Cartago,+Valle+del+Cauca" class="btn btn-lg" alt="¿Cómo llegar en carro?" target="_blank"><i class="fas fa-car"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a href="https://www.google.com/maps/preview?saddr=Current+Location&daddr=Tatayamba+Cafe,+Cra.+4+%23%2313+-+30,+Cartago,+Valle+del+Cauca&dirflg=bicycling" class="btn btn-lg" alt="¿Cómo llegar en moto o bici?" target="_blank"><i class="fas fa-bicycle"></i></a>
                        </li>
                    </ul>
                </p>
            </div>
        </div>
    </div>

     <!-- Segundo CTA -->
     <section class="bg-secondary text-light text-center">
        <div class="py-4 container">
            <div class="row">
                <div class="col-md-12 ">
                    <form class="form-inline justify-content-center">
                        <div class="form-group mb-0">
                            <label for="telefono" class="lead">No te quedes sin cupo &nbsp;</label>
                            <div class="input-group input-group-lg">
                                <div class="input-group-append">
                                    <a href="#inscribirse" class="btn btn-danger animated infinite pulse"><i class="far fa-paper-plane"></i> ¡Inscríbete ya!</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Patrocina -->
    <section class="text-center" id="patrocina">
        <div class="py-4 container">
            <div class="row">
                <div class="col-md-12 ">
                    <h2 class="pb-2">Patrocina</h2>
                    <img data-src="assets/networking/logo-tatayamba-cafe.jpg" alt="Tatayamba Café" class="lazyload img-fluid w-25">
                </div>
            </div>
        </div>
    </section>

    <?php include 'templates/followus.php'; ?>
    <?php include 'templates/footer.php'; ?>

    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/afterglowplayer@1.x"></script>

</body>

</html>