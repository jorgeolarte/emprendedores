<!DOCTYPE html>
<html>

<head>
    <?php
    $title = "6ta Natillada Netwroking";
    $descripcion = "Te invitamos a darle la bienvenida a la fecha más especial del año. La navidad llego y con ella traerá amor y relaciones de valor con otros emprendedores.  ";
    $keywords = "conexiones de valor, natilla, buñuelos, navidad, emprendedores, emprender, aprender, emprendimiento, emprendedores cartago, cartago, cartago valle del cauca, networking";
    $url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    ?>

    <?php include 'templates/header.php'; ?>
</head>

<body class="animated fadeIn slower">

    <div class="snowflakes" aria-hidden="true">
        <div class="snowflake">
            ❅
        </div>
        <div class="snowflake">
            ❆
        </div>
        <div class="snowflake">
            ❅
        </div>
        <div class="snowflake">
            ❆
        </div>
        <div class="snowflake">
            ❅
        </div>
        <div class="snowflake">
            ❆
        </div>
        <div class="snowflake">
            ❅
        </div>
        <div class="snowflake">
            ❆
        </div>
        <div class="snowflake">
            ❅
        </div>
        <div class="snowflake">
            ❆
        </div>
        <div class="snowflake">
            ❅
        </div>
        <div class="snowflake">
            ❆
        </div>
    </div>

    <?php include 'templates/navbar.php'; ?>

    <!-- Encabezado -->
    <div class="pt-3">
        <audio src="assets/musica/la-billos-caracas-boys-cantares-de-navidad.mp3" autoplay>
            Tu navegador no soporta <code>música</code>.
        </audio>
    </div>

    <!-- Muestra la cantidad de registros disponibles -->
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
    <section class="bg-secondary text-light text-center" id="inscribirse">
        <div class="py-4 container">
            <div class="row">
                <div class="col-md-12 ">
                    <form action="data/registrar-evento.php" id="form-registrar-evento" method="post" class="form-inline justify-content-center">
                        <div class="form-group mb-2">
                            <label for="telefono" class="lead">Exclusivo para emprendedores, inscríbete ya&nbsp;</label>
                            <div class="input-group input-group-lg">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-mobile-alt"></i></span>
                                </div>
                                <input type="text" class="form-control" id="telefono" name="telefono" pattern="\d{10,}" minlength="10" placeholder="Teléfono" required>
                                <div class="input-group-append">
                                    <button type="submit" id="enviar" class="btn btn-danger animated infinite pulse"><i class="fas fa-check"></i> Inscribirse</button>
                                </div>
                            </div>
                        </div>
                        <input type="hidden" name="evento_id" id="evento_id" value="6">
                    </form>
                    <div class="alert alert-primary my-0 text-center" role="alert" id="resp">
                        Este es un mensaje de confirmación
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Modal para registrarse dentro de la misma pagina -->
    <section class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Únete a nuestra comunidad</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="data/registro-emprendedor-evento.php" id="form-registro-modal" method="post">
                    <div class="modal-body">

                        <div class="form-group">
                            <label for="text-nombre" class="col-form-label">Nombre:</label>
                            <input type="text" class="form-control" placeholder="Escribe tu nombre..." required="required" type="text" name="text-nombre" id="text-nombre">
                        </div>
                        <div class="form-group">
                            <label for="text-emprendimiento" class="col-form-label">Emprendimiento:</label>
                            <input type="text" class="form-control" placeholder="Nombre de tu emprendimiento..." required="required" name="text-emprendimiento" id="text-emprendimiento">
                        </div>
                        <div class="form-group">
                            <label for="text-telefono" class="col-form-label">Teléfono:</label>
                            <input type="text" class="form-control" pattern="\d{10,}" minlength="10" placeholder="Teléfono de contacto" required="required" name="text-telefono" id="text-telefono" readonly>
                        </div>
                        <div class="form-group">
                            <label for="text-email" class="col-form-label">Email:</label>
                            <input type="email" class="form-control" placeholder="Correo electrónico" required="required" name="text-email" id="text-email">
                        </div>
                        <input type="hidden" name="id_evento" id="id_evento" value="6">
                        <div class="alert alert-primary mb-0 text-center" role="alert" id="resp-modal">
                            A simple primary alert—check it out!
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-danger"><i class="fa fa-user fa-fw"></i> Regístrate</button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <!-- Muestra el menu de la pagina -->
    <section class="py-3 border-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <nav class="nav font-weight-normal">
                        <a class="nav-link text-secondary" href="#contenido">Acerca de</a>
                        <a class="nav-link text-secondary" href="#testimonios">Testimonios</a>
                        <a class="nav-link text-secondary" href="#mapa">¿Cómo llegar?</a>
                    </nav>
                </div>
            </div>
        </div>
    </section>

    <!-- Contenido -->
    <section class="border-bottom" id="contenido">
        <div class="py-4 container">
            <div class="row">
                <div class="col-md-12">

                </div>
            </div>
            <div class="row pt-2">
                <div class="col-md-8 pb-3">
                    <div>
                        <h1>Natillada Networking <br><small class="text-muted">Da la bienvenida a la fecha más especial del año</small></h1>
                        <p>La navidad llego y con ella traerá amor y relaciones de valor con otros emprendedores. Registrate en nuestro Networking navideño, donde podrás conectarte con otros emprendedores, conocer experiencias nuevas y sentir la magía de la navidad. </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="d-flex bd-highlight">
                        <div class="bd-highlight mr-3">
                            <i class="border rounded-circle border-danger text-danger p-3 fas fa-dollar-sign fa-2x"></i>
                        </div>
                        <div class="bd-highlight pb-2">
                            <h4>¡GRATIS!</h4>
                            <address class="text-muted">
                                Crea conexiones de valor y oportunidades comerciales
                            </address>

                        </div>
                    </div>
                    <div class="d-flex bd-highlight">
                        <div class="bd-highlight mr-3">
                            <i class="border rounded-circle border-danger text-danger p-3 far fa-calendar-alt fa-2x"></i>
                        </div>
                        <div class="bd-highlight pb-2">
                            <h4>Viernes 29 de noviembre</h4>
                            <p class="text-muted">
                                Desde las 19:00 hasta las 21:30 hora de Colombia.
                            </p>
                        </div>
                    </div>
                    <div class="d-flex bd-highlight">
                        <div class="bd-highlight mr-3">
                            <i class="border rounded-circle border-danger text-danger p-3 fas fa-map-marker-alt fa-2x"></i>
                        </div>
                        <div class="bd-highlight pb-2">
                            <h4>Vinola Bar</h4>
                            <address class="text-muted">
                                Calle 21A Nro. 4-15<br>
                                Cartago, Valle del Cauca<br>
                                <a href="#mapa" alt="¿Cómo llegar?" class="my-1 btn btn-danger btn-sm"><i class="fas fa-map-marker-alt"></i> ¿Cómo llegar?</a>
                            </address>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- Sección de mapa -->
    <section class="py-4 container">
        <div class="row">
            <div id="mapa" class="col-md-12">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3976.1129577887614!2d-75.92669338590977!3d4.750406042548913!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e387018dc6c8dfd%3A0xee9c8f3e405d5947!2sVINOLA%20Bar!5e0!3m2!1ses-419!2sco!4v1566744220085!5m2!1ses-419!2sco" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center">
                <h4 class="pt-2"><?= $title ?></h4>
                <p class="text-muted">Vinola Bar, Calle 21A Nro. 4-15, Cartago, Valle del Cauca</p>
                <ul class="list-inline mb-0">
                    <li class="list-inline-item">
                        <a href="https://www.google.com/maps/preview?saddr=Current+Location&daddr=VINOLA+Bar,+Calle+21A,+Cartago,+Valle+del+Cauca&dirflg=walking" class="btn btn-lg" alt="¿Cómo llegar caminando?" target="_blank"><i class="fas fa-walking"></i></a>
                    </li>
                    <li class="list-inline-item">
                        <a href="https://www.google.com/maps/preview?saddr=Current+Location&daddr=VINOLA+Bar,+Calle+21A,+Cartago,+Valle+del+Cauca" class="btn btn-lg" alt="¿Cómo llegar en carro?" target="_blank"><i class="fas fa-car"></i></a>
                    </li>
                    <li class="list-inline-item">
                        <a href="https://www.google.com/maps/preview?saddr=Current+Location&daddr=VINOLA+Bar,+Calle+21A,+Cartago,+Valle+del+Cauca&dirflg=bicycling" class="btn btn-lg" alt="¿Cómo llegar en moto o bici?" target="_blank"><i class="fas fa-bicycle"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </section>


    <?php include 'templates/followus.php'; ?>
    <?php include 'templates/footer.php'; ?>

    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/afterglowplayer@1.x"></script>

</body>

</html>