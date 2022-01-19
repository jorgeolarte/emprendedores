<!DOCTYPE html>
<html>

<head>
    <?php
    $title = "4ta Escuela - La Aventura Comienza";
    $descripcion = "Genera impacto con tu discurso. Asiste a la 3ra Escuela, Pitch: Lánzate a la acción y aprende a ser persuasivo y crear empatía con el público que te escucha.";
    $keywords = "como iniciar un negocio, como emprender, que es un pitch, pitch, cómo ser más persuasivo, como generar empatía, emprendedores, emprender, aprender, escuela de emprendedores, emprendedores cartago, cartago, cartago valle del cauca, escuela de emprendedores, formación para emprendedores";
    $evento_id = 8;
    $thumbnail = 'la-aventura-comienza.jpg';
    $url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    ?>

    <?php include 'templates/header.php'; ?>
</head>

<body class="animated fadeIn slower">
    <?php include 'templates/navbar.php'; ?>

    <!-- Encabezado 
    <div class="pt-4 bg-primary text-light" style="background-image: url(&quot;img/IMG_8980.jpg&quot;);	background-position: center;	background-size: cover; background-repeat: no-repeat;">
        <div class="embed-responsive embed-responsive-16by9">
            <video id="my-video" class="afterglow embed-responsive-item" width="720" height="405" autoplay="autoplay" data-youtube-id="" controls poster="assets/videos/3ra-escuela-pitch-lanzate-accion.jpg">
                Tu navegador no soporta video
            </video>
        </div>
    </div>
    -->

    <br>

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

    <!-- Menu escuela -->
    <section class="py-3 border-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <nav class="nav font-weight-normal">
                        <a class="nav-link text-secondary" href="#contenido">Acerca de</a>
                        <a class="nav-link text-secondary" href="#profesores">Profesores</a>
                        <a class="nav-link text-secondary" href="#testimonios">Testimonios</a>
                        <a class="nav-link text-secondary" href="#mapa">¿Cómo llegar?</a>
                        <a class="nav-link text-secondary" href="#patrocinadores">Patrocinadores</a>
                    </nav>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-light">
        <div class="py-3 container">
            <div class="row">
                <div class="col-md-12">
                    <h1>La Aventura Comienza <br><small class="text-muted">4ª Escuela De Emprendedores</small></h1>
                </div>
            </div>
        </div>
    </section>

    <!-- Contenido -->
    <section class="border-bottom" id="contenido">
        <div class="pt-4 container">
            <div class="row">
                <div class="col-md-8 pb-5">
                    <div>
                        <h2>¿Qué vas aprender?</h2>
                        <ul>
                            <li class="py-1">Empatizar y entender las motivaciones de compra de tus clientes</li>
                            <li class="py-1">Identificar el propósito de tu emprendimiento</li>
                            <li class="py-1">Como vender a través de Instagram</li>
                            <li class="py-1">Estrategias de Marketing Digital orientadas en Instagram para negocios</li>
                            <li class="py-1">Llevar un control de tus ingresos y gastos que te permita mantener en perspectiva el avance de tu emprendimiento</li>
                        </ul>

                        <div class="pb-4">
                            <div class="card bg-light">
                                <div class="card-header border border-light py-2" role="tab" id="headingDescripcion">
                                    <p class="lead font-weight-bold mb-0">
                                        <a data-toggle="collapse" href="#collapseDescripcion" aria-expanded="false" aria-controls="collapseDescripcion">
                                            ¿Cómo funciona la escuela? <i class="fa"></i>
                                        </a>
                                    </p>
                                </div>
                                <div id="collapseDescripcion" class="collapse" role="tabpanel" aria-labelledby="headingDescripcion" data-parent="#accordion">
                                    <div class="card-body">
                                        <h6></h6>
                                        <p>Utilizamos un enfoque <strong>socio-constructivista</strong> en cada uno de nuestros talleres, lo cual significa que se evalúan las competencias iniciales de los participantes. A partir de su emprendimiento se construyen las temáticas abordadas en cada taller, el participante es el encargado de construir su conocimiento y el mentor será su guía principal en esta construcción. Al finalizar se evaluará la evolución según su proyecto.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <h3>¿Qué talleres vas a recibir?</h3>
                        <div id="accordion" role="tablist" class="bg-white border-0">
                            <div class="card">
                                <div class="card-header border border-primary bg-white py-3" role="tab" id="headingFinanzas">
                                    <h5 class="mb-0">
                                        <a data-toggle="collapse" href="#collapseFinanzas" aria-expanded="false" aria-controls="collapseFinanzas">
                                            <i class="fas fa-book"></i> Finanzas para emprendedores <i class="fa"></i>
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapseFinanzas" class="collapse" role="tabpanel" aria-labelledby="headingFinanzas" data-parent="#accordion">
                                    <div class="card-body pl-5">
                                        <h6><i class="far fa-calendar-alt"></i> Martes 3 de marzo, 6:00 pm</h6>
                                        <h6><i class="far fa-clock"></i></i> 3 horas de clase</h6>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header border border-primary bg-white py-3" role="tab" id="headingDerecho">
                                    <h5 class="mb-0">
                                        <a class="collapsed" data-toggle="collapse" href="#collapseDerecho" aria-expanded="false" aria-controls="collapseDerecho">
                                            <i class="fas fa-book"></i> Derecho societario <i class="fa"></i>
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapseDerecho" class="collapse" role="tabpanel" aria-labelledby="headingDerecho" data-parent="#accordion">
                                    <div class="card-body pl-5">
                                        <h6><i class="far fa-calendar-alt"></i> Martes 10 de marzo, 6:00 pm</h6>
                                        <h6><i class="far fa-clock"></i></i> 3 horas de clase</h6>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header border border-primary bg-white py-3" role="tab" id="headingProposito">
                                    <h5 class="mb-0">
                                        <a class="collapsed" data-toggle="collapse" href="#collapseProposito" aria-expanded="false" aria-controls="collapseProposito">
                                            <i class="fas fa-book"></i> Comunica tu propósito para enamorar a tus clientes <i class="fa"></i>
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapseProposito" class="collapse" role="tabpanel" aria-labelledby="headingProposito" data-parent="#accordion">
                                    <div class="card-body pl-5">
                                        <h6><i class="far fa-calendar-alt"></i> Martes 17 de marzo, 6:00 pm</h6>
                                        <h6><i class="far fa-clock"></i></i> 3 horas de clase</h6>
                                        Enamora a tu cliente a través del sus emociones, conoce las diferentes estructuras cerebrales que influyen en la fidelización de tus clientes y como el reflejo del propósito de la empresa construye una filosofía
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header border border-primary bg-white py-3" role="tab" id="headingPitch">
                                    <h5 class="mb-0">
                                        <a class="collapsed" data-toggle="collapse" href="#collapsePitch" aria-expanded="false" aria-controls="collapsePitch">
                                            <i class="fas fa-book"></i> Pitch: Lánzate a la acción <i class="fa"></i>
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapsePitch" class="collapse" role="tabpanel" aria-labelledby="headingPitch" data-parent="#accordion">
                                    <div class="card-body pl-5">
                                        <h6><i class="far fa-calendar-alt"></i> Martes 24 de marzo, 6:00 pm</h6>
                                        <h6><i class="far fa-clock"></i></i> 3 horas de clase</h6>
                                        Genera impacto con tu discurso. Aprende a ser persuasivo y crear empatía con el público que te escucha.
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header border border-primary bg-white py-3" role="tab" id="headingInstagram">
                                    <h5 class="mb-0">
                                        <a class="collapsed" data-toggle="collapse" href="#collapseInstagram" aria-expanded="false" aria-controls="collapseInstagram">
                                            <i class="fas fa-book"></i> Instagram para negocios <i class="fa"></i>
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapseInstagram" class="collapse" role="tabpanel" aria-labelledby="headingInstagram" data-parent="#accordion">
                                    <div class="card-body pl-5">
                                        <h6><i class="far fa-calendar-alt"></i> Martes 31 de marzo, 2:00 pm</h6>
                                        <h6><i class="far fa-clock"></i></i> 4 horas de clase</h6>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-md-4">
                    <div class="d-flex bd-highlight mb-3">
                        <div class="bd-highlight mr-3">
                            <i class="bg-light border rounded-circle text-primary p-3 fas fa-user-graduate fa-2x"></i>
                        </div>
                        <div class="bd-highlight pb-2">
                            <h4 class="mb-0">5 clases</h4>
                            <p class="text-muted">
                                Todos los martes de marzo
                            </p>
                        </div>
                    </div>
                    <div class="d-flex bd-highlight mb-3">
                        <div class="bd-highlight mr-3">
                            <i class="bg-light border rounded-circle text-primary p-3 fas fa-clock fa-2x"></i>
                        </div>
                        <div class="bd-highlight pb-2">
                            <h4 class="mb-0">17 horas</h4>
                            <p class="text-muted">
                                De formación en 5 clases
                            </p>
                        </div>
                    </div>
                    <div class="d-flex bd-highlight mb-3">
                        <div class="bd-highlight mr-3">
                            <i class="bg-light border rounded-circle text-primary p-3 far fa-money-bill-alt fa-2x"></i>
                        </div>
                        <div class="bd-highlight pb-2">
                            <h4 class="mb-0">Por $120.000</h4>
                            <p class="text-muted">
                                Ahorra <strong>$20.000</strong> del precio sugerido <del class="text-danger">$140.000</del>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Profesores -->
    <section class="bg-light border-bottom" id="profesores">
        <div class="py-4 container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="text-center mb-4">
                        Conoce tus profesores <br>
                        <small class="text-muted">Reconocidos profesionales</small>
                    </h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="media my-2">
                        <img class="img-fluid mr-3 d-block rounded-circle w-25" src="assets/profes/eduar-posada.jpg" alt="Eduar Samuel Posada">
                        <div class="media-body">
                            <h5 class="mt-0">Eduar Samuel Posada</h5>
                            <p class="small">Abogado Universidad Cooperativa Medellín. Especialista en Derecho de Daños y Responsabilidad Pública y Privada en la Universidad Libre de Pereira</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="media my-2">
                        <img class="img-fluid mr-3 d-block rounded-circle w-25" src="assets/profes/leslie-singer.jpg" alt="Leslie Singer">
                        <div class="media-body">
                            <h5 class="mt-0">Leslie Singer</h5>
                            <p class="small">Comunicación social y periodismo en la Universidad de La Sabana. Mercadeo estratégico en la Universidad ICESI</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="media my-2">
                        <img class="img-fluid mr-3 d-block rounded-circle w-25" src="assets/profes/carolina-reyes.jpg" alt="Carolina Reyes">
                        <div class="media-body">
                            <h5 class="mt-0">Carolina Reyes</h5>
                            <p class="small">Marketing y Negocios Internacionales en la Universidad Autónoma de Occidente. Marketing Digital en la Universidad ICESI</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="media my-2">
                        <img class="img-fluid mr-3 d-block rounded-circle w-25" src="assets/profes/anlleli.jpg" alt="Anlleli Romero">
                        <div class="media-body">
                            <h5 class="mt-0">Anlleli Romero</h5>
                            <p class="small">Contadora Publica de la Universidad del Valle. Diplomado en Normas Internacionales de Información Financiera NIIF de la universidad del Valle</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="media my-2">
                        <img class="img-fluid mr-3 d-block rounded-circle w-25" src="assets/profes/jorge-olarte.jpg" alt="Jorge Olarte">
                        <div class="media-body">
                            <h5 class="mt-0">Jorge Olarte</h5>
                            <p class="small">Magíster en Ingeniería de Software de la Universidad Pontificia de Salamanca, Ingeniero de Sistemas de la Universidad de Manizales</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="media my-2">
                        <img class="img-fluid mr-3 d-block rounded-circle w-25" src="assets/profes/andrea-salazar.jpg" alt="Andrea Salazar">
                        <div class="media-body">
                            <h5 class="mt-0">Andrea Salazar Morales</h5>
                            <p class="small">Psicóloga profesional de la universidad Konrad Lorenz, especialista en psicología de consumidor de la Konrad Lorenz</p>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <!-- Segundo CTA -->
    <section class="bg-inscripcion text-white text-center border-bottom" id="bono">
        <div class="py-4 container">
            <div class="row">
                <div class="col-md-12">
                    <h2>¡Inscríbete ya!</h2>
                    <p class="lead mb-0">Precio <small><del class="text-danger">$140.000</del></small> por <strong class="font-weight-bolder">$120.000</strong></p>
                    <p class="lead font-weight-bold">Ahorras $20.000</p>
                    <p class="lead mb-0"><a href="#inscribirse" class="px-5 py-3 btn btn-lg btn-success animated infinite pulse"><i class="far fa-paper-plane"></i> ¡Inscríbete ya!</a></p>
                    <p class="font-italic"><small>Si pagas la totalidad antes del inicio de clases</small></p>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonios -->
    <section class="py-5 border-bottom" id="testimonios">
        <div class="container d-flex align-items-center flex-column ">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="text-center mb-4">Testimonios</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="media">
                        <img src="assets/testimonios/laura-jordan.jpg" class="img-fluid rounded-circle mr-3 w-25" alt="Laura Jordan fundadora de Pal❤Mar">
                        <div class="media-body">
                            <blockquote class="blockquote">
                                <p class="small mb-1">"A veces pensamos que nuestros emprendimientos no tienen más finalidad que vender un producto o servicio, pero esa concepción cambió cuando asistí a la escuela de propósito, ahí me pude dar cuenta que vendemos a través de nuestras emociones"</p>
                                <footer class="blockquote-footer">Laura Jordan, fundadora de <cite title="Source Title">Pal❤Mar</cite></footer>
                            </blockquote>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="media">
                        <img src="assets/testimonios/sandra-alzate.jpg" class="img-fluid rounded-circle mr-3 w-25" alt="Sandra Alzate fundadora de La Frutería">
                        <div class="media-body">
                            <blockquote class="blockquote">
                                <p class="small mb-1">"Gracias a la escuela de Emprendedores Cartago, comprendí que la educación es la clave para lograr un emprendimiento con legalidad, y que a través de la innovación, el amor y la disciplina; una idea se puede convertir en acciones."</p>
                                <footer class="blockquote-footer">Sandra Alzate, fundadora de <cite title="Source Title">La Frutería</cite></footer>
                            </blockquote>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Sección de mapa -->
    <div class="bg-light">
        <section class="py-4 border-bottom container">
            <div class="row">
                <div id="mapa" class="col-md-12">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d10312.681883455474!2d-75.91926786674594!3d4.755700222751233!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e387003345bd20b%3A0xdc9d21192454bee5!2sCorporaci%C3%B3n%20de%20Estudios%20Tecnol%C3%B3gicos%20del%20Norte%20del%20Valle!5e0!3m2!1ses!2sco!4v1582314863176!5m2!1ses!2sco" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">
                    <h4 class="pt-2"><?= $title ?></h4>
                    <p class="text-muted">Corporación de Estudios Tecnológicos del Norte del Valle, Calle 10 #3-95, Cartago, Valle del Cauca</p>
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item">
                            <a href="https://www.google.com/maps/preview?saddr=Current+Location&daddr=Corporación+de+Estudios+Tecnológicos+del+Norte+del+Valle,+Cartago,+Valle+del+Cauca&dirflg=walking" class="btn btn-lg" alt="¿Cómo llegar caminando?" target="_blank"><i class="fas fa-walking"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a href="https://www.google.com/maps/preview?saddr=Current+Location&daddr=Corporación+de+Estudios+Tecnológicos+del+Norte+del+Valle,+Cartago,+Valle+del+Cauca" class="btn btn-lg" alt="¿Cómo llegar en carro?" target="_blank"><i class="fas fa-car"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a href="https://www.google.com/maps/preview?saddr=Current+Location&daddr=Corporación+de+Estudios+Tecnológicos+del+Norte+del+Valle,+Cartago,+Valle+del+Cauca&dirflg=bicycling" class="btn btn-lg" alt="¿Cómo llegar en moto o bici?" target="_blank"><i class="fas fa-bicycle"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
    </div>

    <!-- Patrocinadores -->
    <section class="py-5 bg-white" id="patrocinadores">
        <div class="container d-flex align-items-center flex-column ">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="text-center mb-4">
                        Patrocinadores <br>
                        <small class="text-muted">Gracias por hacerlo realidad</small>
                    </h2>
                </div>
            </div>
            <div class="row">
                <div class="col-6 col-md-2 px-5">
                    <img src="assets/patrocinadores/cotecnova.jpg" class="img-fluid" alt="Cotecnova">
                </div>
                <div class="col-6 col-md-2 px-5">
                    <img src="assets/patrocinadores/graficas-palatino.jpg" class="img-fluid" alt="Gráficas Palatino">
                </div>
                <div class="col-6 col-md-2 px-5">
                    <img src="assets/patrocinadores/antojo-urbano.jpg" class="img-fluid" alt="Antojo Urbano">
                </div>
                <div class="col-6 col-md-2 px-5">
                    <img src="assets/patrocinadores/nebraska.jpg" class="img-fluid" alt="Nebraska Café">
                </div>
                <div class="col-6 col-md-2 px-5">
                    <img src="assets/patrocinadores/lex.jpg" class="img-fluid" alt="Lex Digital Group">
                </div>
                <div class="col-6 col-md-2 px-5">
                    <img src="assets/patrocinadores/vinola.jpg" class="img-fluid" alt="Vinola">
                </div>
            </div>
        </div>
    </section>

    <?php include 'templates/followus.php'; ?>
    <?php include 'templates/footer.php'; ?>

    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/afterglowplayer@1.x"></script>

</body>

</html>