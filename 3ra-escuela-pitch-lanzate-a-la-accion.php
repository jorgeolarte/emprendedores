<!DOCTYPE html>
<html>

<head>
    <?php
    $title = "3ra Escuela - Pitch: Lánzate a la acción";
    $descripcion = "Genera impacto con tu discurso. Asiste a la 3ra Escuela, Pitch: Lánzate a la acción y aprende a ser persuasivo y crear empatía con el público que te escucha.";
    $keywords = "como iniciar un negocio, como emprender, que es un pitch, pitch, cómo ser más persuasivo, como generar empatía, emprendedores, emprender, aprender, escuela de emprendedores, emprendedores cartago, cartago, cartago valle del cauca, escuela de emprendedores, formación para emprendedores";
    $evento_id = 5;
    $url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    ?>

    <?php include 'templates/header.php'; ?>
</head>

<body class="animated fadeIn slower">
    <?php include 'templates/navbar.php'; ?>

    <!-- Encabezado -->
    <div class="pt-4 bg-primary text-light" style="background-image: url(&quot;img/IMG_8980.jpg&quot;);	background-position: center;	background-size: cover; background-repeat: no-repeat;">
        <div class="embed-responsive embed-responsive-16by9">
            <video id="my-video" class="afterglow embed-responsive-item" width="720" height="405" autoplay="autoplay" data-youtube-id="jAe1FvfMSAI" controls poster="assets/videos/3ra-escuela-pitch-lanzate-accion.jpg">
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

    <section class="py-3 border-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <nav class="nav font-weight-normal">
                        <a class="nav-link text-secondary" href="#contenido">Acerca de</a>
                        <a class="nav-link text-secondary" href="#testimonios">Testimonios</a>
                        <a class="nav-link text-secondary" href="#pagos">Forma de pago</a>
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
                    <h1>Pitch: Lánzate a la acción <br><small class="text-muted">3ra Escuela De Emprendedores</small></h1>
                </div>
            </div>
            <div class="row pt-2">
                <div class="col-md-8 pb-3">
                    <div>
                        <p>Genera impacto con tu discurso. Asiste a la 3ra Escuela, Pitch: Lánzate a la acción y aprende a ser persuasivo y crear empatía con el público que te escucha.</p>
                        <h2>Objetivo general</h2>
                        <p>Reconoce y utiliza el pitch como una herramienta de persuación para alcanzar sus objetivos.</p>
                        <h3>Objetivos especificos</h3>
                        <ul>
                            <li>Distingue y diseña un pitch con las partes que lo componen.</li>
                            <li>Formula y comunica sus ideas de forma asertiva en el escenario.</li>
                            <li>Identifica y crea un discurso generando empatía con el auditorio.</li>
                        </ul>
                        <div class="border border-warning pt-4 px-3 pb-3">
                            <h4>Habilidades que obtendrás</h4>
                            <p>
                                <span class="badge badge-warning p-3 my-1">Comunicación</span>
                                <span class="badge badge-warning p-3 my-1">Persuasión</span>
                                <span class="badge badge-warning p-3 my-1">Empatía</span>
                            </p>
                        </div>

                    </div>
                </div>
                <div class="col-md-4">
                    <div class="d-flex bd-highlight">
                        <div class="bd-highlight mr-3">
                            <i class="border rounded-circle border-primary text-primary p-3 fas fa-dollar-sign fa-2x"></i>
                        </div>
                        <div class="bd-highlight pb-2">
                            <h4>Por 39 mil pesos</h4>
                            <address class="text-muted">
                                Mejora la persuación y empatía en tu discurso para hacer negocios.
                                <a href="#pagos" alt="¿Cómo pago?" class="my-1 btn btn-danger btn-sm"><i class="fas fa-map-marker-alt"></i> ¿Cómo pago?</a>
                            </address>

                        </div>
                    </div>
                    <div class="d-flex bd-highlight">
                        <div class="bd-highlight mr-3">
                            <i class="border rounded-circle border-primary text-primary p-3 far fa-calendar-alt fa-2x"></i>
                        </div>
                        <div class="bd-highlight pb-2">
                            <h4>Martes 1 de octubre</h4>
                            <p class="text-muted">
                                Desde las 18:30 hasta las 21:30 hora de Colombia.
                            </p>
                        </div>
                    </div>
                    <div class="d-flex bd-highlight">
                        <div class="bd-highlight mr-3">
                            <i class="border rounded-circle border-primary text-primary p-3 fas fa-map-marker-alt fa-2x"></i>
                        </div>
                        <div class="bd-highlight pb-2">
                            <h4>Cámara De Comercio De Cartago</h4>
                            <address class="text-muted">
                                Carrera 4ta Nro 12 - 101<br>
                                Cartago, Valle del Cauca<br>
                                <a href="#mapa" alt="¿Cómo llegar?" class="my-1 btn btn-danger btn-sm"><i class="fas fa-map-marker-alt"></i> ¿Cómo llegar?</a>
                            </address>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- Testimonios -->
    <section class="py-5 border-bottom" id="testimonios">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="text-center mb-4">Testimonios</h2>
                </div>
            </div>
            <div class="row">
                <div class="ml-auto p-3 col-md-3 bg-white">
                    <img class="img-fluid d-block rounded-circle" src="assets/testimonios/laura-jordan.jpg">
                </div>
                <div class="py-3 col-md-7 mr-auto bg-white text-dark">
                    <div class="blockquote mb-0 text-secondary px-3">
                        <p class="font-italic">"A veces pensamos que nuestros emprendimientos no tienen más finalidad que vender un producto o servicio, pero esa concepción cambió cuando asistí al taller "emprendimiento con propósito" ahí me puede dar cuenta que crear un marca con propósito haría más fácil segmentar mi público, fija el plus de la marca. Pero lo más importante que me dejó este taller fue el darme cuenta que vendemos a través de nuestras emociones."</p>
                        <div class="blockquote-footer"> <b>Laura Jordan</b>, Fundadora Pal❤Mar.</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Sección de precios -->
    <section class="pricing py-5" id="pagos">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="text-center mb-4 ">Formas de pago</h2>
                </div>
            </div>
            <div class="row">
                <!-- Pago Nequi -->
                <div class="col-lg-4">
                    <div class="card mb-5 mb-lg-0">
                        <div class="card-body">
                            <h5 class="card-title text-muted text-uppercase text-center">Nequi</h5>
                            <h6 class="card-price text-center">$39<span class="period"> mil pesos</span></h6>
                            <hr>
                            <ul class="fa-ul">
                                <li><span class="fa-li"><i class="fas fa-check"></i></span>Un asistente</li>
                                <li><span class="fa-li"><i class="fas fa-check"></i></span>Cupo garantizado</li>
                                <li><span class="fa-li"><i class="fas fa-check"></i></span>Pago a través de aplicación</li>
                            </ul>
                            <a class="btn btn-block btn-danger text-uppercase" data-toggle="collapse" href="#collapseNequi" role="button" aria-expanded="false" aria-controls="collapseNequi">Pagar con Nequi</a>
                            <div class="collapse" id="collapseNequi">
                                <div class="card card-body text-muted">
                                    <p>Sigue los pasos para pagar con Nequi</p>
                                    <ul>
                                        <li>Descarga e instala la aplicación en Nequi en tu celular. <a href="http://onelink.to/89sgqy" target="_blank" class="text-danger">Oprime aquí para descargar</a></li>
                                        <li>Crea una cuenta con tu número de celular.</li>
                                        <li>Ingresa a la app y recarga</li>
                                        <li>Selecciona la opción <b>Envía plata</b>.</li>
                                        <li>En número celular ingresa el número <b>3017516045</b>.</li>
                                        <li>En cantidad <b>$39.000</b>.</li>
                                        <li>En mensaje escribe tu nombre completo.</li>
                                        <li>Oprime en <b>Continúa</b>.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Pago efectivo + domicilio -->
                <div class="col-lg-4">
                    <div class="card mb-5 mb-lg-0">
                        <div class="card-body">
                            <h5 class="card-title text-muted text-uppercase text-center">Efectivo + Domicilio</h5>
                            <h6 class="card-price text-center">$44<span class="period"> mil pesos</span></h6>
                            <hr>
                            <ul class="fa-ul">
                                <li><span class="fa-li"><i class="fas fa-check"></i></span>Un asistente</li>
                                <li><span class="fa-li"><i class="fas fa-check"></i></span>Recogemos el dinero en la puerta de tu casa</li>
                                <li><span class="fa-li"><i class="fas fa-check"></i></span>Servicio de asistencia de pago</li>
                                <li class="text-muted"><span class="fa-li"><i class="fas fa-times"></i></span>Disposición de cupo hasta garantizar desembolso</li>
                            </ul>
                            <a href="http://bit.ly/2kyASox" class="btn btn-block btn-primary text-uppercase" target="_blank"><i class="fab fa-whatsapp"></i> Inicia conversación</a>
                        </div>
                    </div>
                </div>
                <!-- Sucursal Bancolombia -->
                <div class="col-lg-4">
                    <div class="card mb-5 mb-lg-0">
                        <div class="card-body">
                            <h5 class="card-title text-muted text-uppercase text-center">Corresponsal Bancolombia</h5>
                            <h6 class="card-price text-center">$39<span class="period"> mil pesos</span></h6>
                            <hr>
                            <ul class="fa-ul">
                                <li><span class="fa-li"><i class="fas fa-check"></i></span>Un asistente</li>
                                <li><span class="fa-li"><i class="fas fa-check"></i></span>Pago a través de sucursal Bancolombia</li>
                                <li class="text-muted"><span class="fa-li"><i class="fas fa-times"></i></span>Disposición de cupo hasta garantizar desembolso</li>
                            </ul>
                            <a class="btn btn-block btn-danger text-uppercase" data-toggle="collapse" href="#collapseBancolombia" role="button" aria-expanded="false" aria-controls="collapseBancolombia">Pagar con Bancolombia</a>
                            <div class="collapse" id="collapseBancolombia">
                                <div class="card card-body text-muted">
                                    <p>Sigue los pasos para pagar en un corresponsal Bancolombia</p>
                                    <ul>
                                        <li>Indicale al encargado que quieres recargar enviar dinero al telefono <b>301 751 6045</b></li>
                                        <li>En caso de que te pregunten por el número de convenio es: <b>63703</b></li>
                                        <li>Si te preguntan por el tipo de pago: Es un recaudo manual o pago de factura y ellos entender.</li>
                                        <li>Entrega los <b>$39.000</b></li>
                                        <li>Guarda y toma foto del comprobante.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

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

    <!-- Sección de mapa -->
    <section class="py-4 container">
        <div class="row">
            <div id="mapa" class="col-md-12">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3976.1152713634942!2d-75.9167105859098!3d4.750004842552319!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e38701c566f63c3%3A0xfed1ca1706952a7f!2sCamara+De+Comercio+De+Cartago!5e0!3m2!1ses-419!2sco!4v1565742216661!5m2!1ses-419!2sco" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center">
                <h4 class="pt-2"><?= $title ?></h4>
                <p class="text-muted">Cámara De Comercio De Cartago, Carrera 4ta Nro 12 - 101, Cartago, Valle del Cauca</p>
                <ul class="list-inline mb-0">
                    <li class="list-inline-item">
                        <a href="https://www.google.com/maps/preview?saddr=Current+Location&daddr=Camara+De+Comercio+De+Cartago,+%23+a+12-131,+Cra.+4+%23121,+Cartago,+Valle+del+Cauca&dirflg=walking" class="btn btn-lg" alt="¿Cómo llegar caminando?" target="_blank"><i class="fas fa-walking"></i></a>
                    </li>
                    <li class="list-inline-item">
                        <a href="https://www.google.com/maps/preview?saddr=Current+Location&daddr=Camara+De+Comercio+De+Cartago,+%23+a+12-131,+Cra.+4+%23121,+Cartago,+Valle+del+Cauca" class="btn btn-lg" alt="¿Cómo llegar en carro?" target="_blank"><i class="fas fa-car"></i></a>
                    </li>
                    <li class="list-inline-item">
                        <a href="https://www.google.com/maps/preview?saddr=Current+Location&daddr=Camara+De+Comercio+De+Cartago,+%23+a+12-131,+Cra.+4+%23121,+Cartago,+Valle+del+Cauca&dirflg=bicycling" class="btn btn-lg" alt="¿Cómo llegar en moto o bici?" target="_blank"><i class="fas fa-bicycle"></i></a>
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