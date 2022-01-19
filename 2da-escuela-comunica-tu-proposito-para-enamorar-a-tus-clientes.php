<!DOCTYPE html>
<html>

<head>
  <?php 
  $title = "2da Escuela - Comunica tu propósito para enamorar a tus clientes";
  $descripcion = "Vende a las emociones de los clientes. Descubre tu propósito empresarial para aprender a enamorar a tus clientes.";
  $keywords = "emprendedores, emprender, aprender, escuela de emprendedores, emprendedores cartago, cartago, cartago valle del cauca, escuela de emprendedores, formación para emprendedores";
  $url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
  ?>

  <?php include 'templates/header.php'; ?>
</head>

<body class="animated fadeIn slower">
  <?php include 'templates/navbar.php'; ?>
    <!-- Encabezado -->
    <div class="pt-4 bg-primary text-light" style="background-image: url(&quot;img/IMG_8980.jpg&quot;);	background-position: center;	background-size: cover; background-repeat: no-repeat;">
        <div class="embed-responsive embed-responsive-16by9">
            <video id="my-video" class="afterglow embed-responsive-item" width="720" height="405" autoplay="autoplay" controls poster="assets/videos/2da-escuela-comunica-tu-proposito.jpg">
                <source src="assets/videos/2da-escuela-comunica-tu-proposito.mp4" type="video/mp4">
                <source src="assets/videos/2da-escuela-comunica-tu-proposito.ogv" type="video/ogv">
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
    <div class="bg-secondary text-light text-center">
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
									<button type="submit" id="enviar" class="btn btn-primary animated infinite pulse"><i class="fas fa-check"></i> Inscribirse</button>
								</div>
							</div>							
                        </div>    
                        <input type="hidden" name="evento_id" id="evento_id" value="3">
                    </form>
                    <div class="alert alert-primary my-0 text-center" role="alert" id="resp">
                        Este es un mensaje de confirmación
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Contenido -->
    <div class="py-4 container">
        <div class="row pt-2">
            <div class="col-md-8 pb-3">
                <div>
                    <h2>Comunica tu propósito para enamorar a tus clientes <br><small class="text-muted">2da Escuela De Emprendedores</small></h2>
                    <p>Enamora a tu cliente a través del sus emociones. Conoce las diferentes estructuras cerebrales que influyen en la fidelización de tus clientes y como el reflejo del propósito de la empresa construye una filosofía emprendedora.</p>
                    <h3>Objetivo general</h3>
                    <p>Promover la importancia del propósito del emprendimiento para enganchar a los clientes.</p>
                    <h3>Objetivos especificos</h3>
                    <ul>
                        <li>Identificar el propósito del emprendimiento.</li>
                        <li>Conocer las estructuras cerebrales que intervienen en el proceso de toma de decisiones.</li>
                        <li>Reconocer los factores emocionales que intervienen en el vinculo con el cliente.</li>
                    </ul>
                    <div class="border border-warning pt-4 px-3 pb-3">
                        <h4>Habilidades que obtendrás</h4>
                        <p>
                            <span class="badge badge-warning p-3 my-1">Propósito empresarial</span> 
                            <span class="badge badge-warning p-3 my-1">Comunicación estratégica</span> 
                            <span class="badge badge-warning p-3 my-1">Persuasión</span> 
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
                        <h4>Solo 30 mil pesos</h4>
                        <address class="text-muted">
                            Con lo que comprarías 6 cervezas en el lugar más gomelo, te alcanza para formarte.
                        </address>
                    </div>
                </div>
                <div class="d-flex bd-highlight">
                    <div class="bd-highlight mr-3">
                        <i class="border rounded-circle border-primary text-primary p-3 fas fa-clock fa-2x"></i>
                    </div>
                    <div class="bd-highlight pb-2">
                        <h4>Aprox. 3 horas de formación</h4>
                        <p class="text-muted">
                            Desde las 18:30 hasta las 21:30 hora de Colombia.
                        </p>
                    </div>
                </div>
                <div class="d-flex bd-highlight">
                    <div class="bd-highlight mr-3">
                        <i class="border rounded-circle border-primary text-primary p-3 far fa-calendar-alt fa-2x"></i>
                    </div>
                    <div class="bd-highlight pb-2">
                        <h4>Martes 20 de agosto</h4>
                        <p class="text-muted">
                            Acompañamiento continuo del mentor.<br>
                            <a href="assets/ical/2da-escuela-comunica-tu-proposito.ics" alt="Añadir al calendario" class="my-1 btn btn-danger btn-sm"><i class="fas fa-calendar-alt"></i> Agéndate</a>
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
                            <a href="#mapa" alt="¿Dónde queda?" class="my-1 btn btn-danger btn-sm"><i class="fas fa-map-marker-alt"></i> ¿Dónde queda?</a>
                        </address>
                    </div>
                </div>
                
            </div>
        </div>
    </div>

    <div class="pb-4 container">
        <div class="row">
            <div id="mapa" class="col-md-12">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3976.1152713634942!2d-75.9167105859098!3d4.750004842552319!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e38701c566f63c3%3A0xfed1ca1706952a7f!2sCamara+De+Comercio+De+Cartago!5e0!3m2!1ses-419!2sco!4v1565742216661!5m2!1ses-419!2sco" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </div>
        <div class="row">
            <div class="pt-4 col-md-12 text-center">
                <h4><?= $title ?></h4>
                <p class="text-muted">Cámara De Comercio De Cartago, Carrera 4ta Nro 12 - 101, Cartago, Valle del Cauca</p>
                <p>
                    <ul class="list-inline">
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
                </p>
            </div>
        </div>
    </div>
    
    <?php include 'templates/followus.php'; ?>
    <?php include 'templates/footer.php'; ?>

    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/afterglowplayer@1.x"></script>

</body>

</html>