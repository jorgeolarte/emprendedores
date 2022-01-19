<!DOCTYPE html>
<html>

<head>
  <?php 
  $title = "Di Papaya - Noche de confesiones y fracasos";
  $descripcion = "3 empresarios nos cuentan las cagadas y aprendizajes. Regístrate para asistir a Di Papaya, una noche de confesiones y fracasos.";
  $keywords = "fracasar, emprendedores, emprender, aprender, di papaya, emprendedores cartago, cartago, cartago valle del cauca, noche de fracasos, formación para emprendedores";
  $thumbnail = "thumbnail-confesiones-fracasos.jpg";
  $url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
  ?>

  <?php include 'templates/header.php'; ?>

  <style>
    body {
        background: #333;
        color: #fff;
    }
  </style>
</head>

<body class="animated fadeIn slower">
  <?php include 'templates/navbar.php'; ?>
    
    <img src="img/dar-papaya-cover.jpg" class="img-fluid" alt="Di Papaya - 1ra Noche De Confesiones Y Fracasos">

    <!-- Encabezado 
    <div class="pt-4 bg-primary text-light" style="background-image: url(&quot;img/IMG_8980.jpg&quot;);	background-position: center;	background-size: cover; background-repeat: no-repeat;">
        <div class="embed-responsive embed-responsive-16by9">
            <video id="my-video" class="afterglow embed-responsive-item" width="720" height="405" autoplay="autoplay" controls poster="assets/videos/2da-escuela-comunica-tu-proposito.jpg">
                <source src="assets/videos/2da-escuela-comunica-tu-proposito.mp4" type="video/mp4">
                <source src="assets/videos/2da-escuela-comunica-tu-proposito.ogv" type="video/ogv">
                Tu navegador no soporta video
            </video>
        </div>
    </div>-->
	
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
    <div class="bg-primary text-dark text-center" id="inscribirse">
        <div class="py-4 container">
            <div class="row">
                <div class="col-md-12 ">
                    <form action="data/registrar-evento.php" id="form-registrar-evento" method="post" class="form-inline justify-content-center">
                        <div class="form-group mb-2">
                            <label for="telefono" class="lead">Conoce sus confesiones y fracasos &nbsp;</label>
							<div class="input-group input-group-lg">
								<div class="input-group-prepend">
									<span class="input-group-text"><i class="fas fa-mobile-alt"></i></span>
								</div>
								<input type="text" class="form-control" id="telefono" name="telefono" pattern="\d{10,}" minlength="10" placeholder="Teléfono" required>
								<div class="input-group-append">
									<button type="submit" id="enviar" class="btn btn-danger animated infinite pulse"><i class="far fa-paper-plane"></i> Inscríbete</button>
								</div>
							</div>							
                        </div>    
                        <input type="hidden" name="evento_id" id="evento_id" value="4">
                    </form>
                    <div class="alert alert-primary my-0 text-center" role="alert" id="resp"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- Contenido -->
    <div class="pt-4 container">
        <div class="row pt-2">
            <div class="col-md-8 pb-3">
                <div>
                    <h2>Di Papaya<br><small class="text-muted">1ra Noche De Confesiones Y Fracasos</small></h2>
                    <p>Porque fracasar esta bien. Hemos creado un evento en que empresarios nos confiesan cómo dieron papaya y cuales fueron sus aprendizajes.</p>

                    <ul class="list-unstyled">
                        <li class="border border-primary p-3 media">
                            <img src="img/pacho-perea.jpg" class="rounded-circle img-fluid mr-3 w-25" alt="Pacho Perea">
                            <div class="media-body">
                                <h5 class="mt-0 mb-1">Pacho Perea<br><small class="text-muted">Gerente - Bordados Frixio</small></h5>
                                <p>Reconocido empresario de la ciudad en la cual destaca Frixio una empresa dedicada al diseño y confección de prendas de vestir bordadas a mano. </p>
                                <a href="#inscribirse"class="btn btn-danger"><i class="fas fa-poo"></i> ¿Cómo dio papaya?</a>
                            </div>
                        </li>
                        <li class="border border-primary p-3 media my-4">
                            <img src="img/david-diaz.jpg" class="rounded-circle img-fluid mr-3 w-25" alt="David Díaz">
                            <div class="media-body">
                                <h5 class="mt-0 mb-1">David Díaz<br><small class="text-muted">CEO - Mesher Consulting Data</small></h5>
                                <p>Ambicioso empresario español fundador de Mesher Consulting Data una empresa de servicios de consultoría IT que ofrece soluciones jurídicas y tecnológicas en materia de Protección de Datos & Compliance. </p>
                                <a href="#inscribirse"class="btn btn-danger"><i class="fas fa-poo"></i> ¿Cómo dio papaya?</a>
                            </div>
                        </li>
                        <li class="border border-primary p-3 media">
                        <img src="img/francisco-lopreto.jpg" class="rounded-circle img-fluid mr-3 w-25" alt="Francisco Lopreto">
                            <div class="media-body">
                                <h5 class="mt-0 mb-1">Francisco Lopreto<br><small class="text-muted">Gerente - Agroinsumos S.A.</small></h5>
                                <p>Con larga trayectoria empresarial, hoy gerente de Agroinsumos una de las 500 empresas más grandes de Colombia.</p>
                                <a href="#inscribirse"class="btn btn-danger"><i class="fas fa-poo"></i> ¿Cómo dio papaya?</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4">
                <div class="d-flex bd-highlight ">
                    <div class="bd-highlight mr-3">
                        <i class="border border-danger rounded-circle border-primary text-danger p-3 fas fa-heart fa-2x animated infinite pulse"></i>
                    </div>
                    <div class="bd-highlight pb-2">
                        <h4>¡Gratis!</h4>
                        <address class="text-muted">
                            Solo regístrate para que te reservemos un asiento.
                        </address>
                    </div>
                </div>
                <div class="d-flex bd-highlight">
                    <div class="bd-highlight mr-3">
                    <i class=""></i>
                        <i class="border rounded-circle border-primary text-primary p-3 fas fa-pray fa-2x"></i>
                    </div>
                    <div class="bd-highlight pb-2">
                        <h4>3 confesiones</h4>
                        <p class="text-muted">
                            Cada empresario nos confesara sus 3 cagadas.
                        </p>
                    </div>
                </div>
                <div class="d-flex bd-highlight">
                    <div class="bd-highlight mr-3">
                        <i class="border rounded-circle border-primary text-primary p-3 fas fa-microphone-alt fa-2x"></i>
                    </div>
                    <div class="bd-highlight pb-2">
                        <h4>15 minutos de preguntas</h4>
                        <p class="text-muted">
                            Escuchalo con atención, tendrás 15 minutos para preguntarle lo que quieras.
                        </p>
                    </div>
                </div>
                <div class="d-flex bd-highlight">
                    <div class="bd-highlight mr-3">
                        <i class="border rounded-circle border-primary text-primary p-3 far fas fa-clock fa-2x"></i>
                    </div>
                    <div class="bd-highlight pb-2">
                        <h4>Jueves 29 de agosto</h4>
                        <p class="text-muted">
                            Desde las 7:00 pm hasta que acabemos.<br>
                        </p>
                    </div>
                </div>
                <div class="d-flex bd-highlight">
                    <div class="bd-highlight mr-3">
                        <i class="border rounded-circle border-primary text-primary p-3 fas fa-map-marker-alt fa-2x"></i>
                    </div>
                    <div class="bd-highlight pb-2">
                        <h4>Vinola Bar</h4>
                        <address class="text-muted">
                            Calle 21A Nro. 4-15<br>
                            Cartago, Valle del Cauca<br>
                            <a href="#mapa" alt="¿Cómo llego allá?" class="my-1 btn btn-danger btn-sm"><i class="fas fa-map-marker-alt"></i> ¿Cómo llego allá?</a>
                        </address>
                    </div>
                </div>
                
            </div>
        </div>
    </div>

    <!-- Segundo CTA -->
    <div class="bg-secondary text-light text-center">
        <div class="py-4 container">
            <div class="row">
                <div class="col-md-12 ">
                    <form class="form-inline justify-content-center">
                        <div class="form-group mb-0">
                            <label for="telefono" class="lead">No te quedes sin silla &nbsp;</label>
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
    </div>

    <div class="bg-light text-dark py-4">
        <div class="container">
            <div class="row">
                <div id="mapa" class="col-md-12">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3976.1129577887614!2d-75.92669338590977!3d4.750406042548913!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e387018dc6c8dfd%3A0xee9c8f3e405d5947!2sVINOLA%20Bar!5e0!3m2!1ses-419!2sco!4v1566744220085!5m2!1ses-419!2sco" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>
            <div class="row">
                <div class="pt-4 col-md-12 text-center">
                    <h4><?= $title ?></h4>
                    <p class="text-muted">Vinola Bar, Calle 21A Nro. 4-15, Cartago, Valle del Cauca</p>
                    <p>
                        <ul class="list-inline">
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
                    </p>
                </div>
            </div>
        </div>
    </div>
    
    <?php include 'templates/followus.php'; ?>
    <?php include 'templates/footer.php'; ?>

    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/afterglowplayer@1.x"></script>

</body>

</html>