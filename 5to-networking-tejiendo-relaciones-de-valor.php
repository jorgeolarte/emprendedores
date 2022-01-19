﻿<!DOCTYPE html>
<html>

<head>
  <?php 
  $title = "5to Networking - Tejiendo Relaciones De Valor";
  $descripcion = "¿Quieres crear oportunidades comerciales?. Regístrate en el 5to Networking de Emprendedores Cartago, Tejiendo Relaciones de Valor";
  $keywords = "emprendedores, emprender, aprender, emprendimiento, emprendedores cartago, cartago, cartago valle del cauca, networking";
  $url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
  ?>

  <?php include 'templates/header.php'; ?>
</head>

<body class="animated fadeIn slower">
  <?php include 'templates/navbar.php'; ?>
    <!-- Encabezado -->
    <div class="pt-4 bg-primary text-light" style="background-image: url(&quot;img/IMG_8980.jpg&quot;);	background-position: center;	background-size: cover; background-repeat: no-repeat;">
        <div class="embed-responsive embed-responsive-16by9">
            <video id="my-video" class="afterglow embed-responsive-item" width="720" height="405" controls autoplay="autoplay" poster="assets/videos/5to-networking-tejiendo-relaciones-de-valor.jpg">
                <source src="assets/videos/5to-networking-tejiendo-relaciones-de-valor.mp4" type="video/mp4">
                <source src="assets/videos/5to-networking-tejiendo-relaciones-de-valor.ogv" type="video/ogv">
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
                        <input type="hidden" name="evento_id" id="evento_id" value="2">
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
        <div class="row">
            <div class="col-md-9">
                <div>
                    <h2>5to Networking - Tejiendo Relaciones De Valor</h2>
					<p>Te invitamos a que juntos bordemos nuestros sueños en el lienzo Cartagueño y mostremos nuestro emprendimiento al mundo. Registrate en nuestro 5to Networking “Tejiendo relaciones de valor” de emprendedores Cartago, donde podrás conocer nuevas experiencias, conectarte con otros emprendedores y sentirte orgulloso de tus raíces.</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="pb-2">
                    <h3>Fecha y hora</h3>
                    <p class="text-muted">
                        <abbr title="día">Martes.</abbr> 16 de julio de 2019<br>
                        18:30 - 21:30 hora Colombia<br>
                        <a href="assets/ical/5to_Networking__Tejiendo_Relaciones_De_Valor.ics" alt="Añadir al calendario" class="my-1 btn btn-primary btn-sm"><i class="fas fa-calendar-alt"></i> Añadir al calendario</a>
                    </p>
                </div>
                <div>
                    <h3>Ubicación</h3>
                    <address class="text-muted">
                        <strong>Galería de Arte, Frixio</strong><br>
                        Carrera 4ta Nro 1A-72<br>
                        Cartago, Valle del Cauca<br>
                        <a href="#mapa" alt="Ver en mapa" class="my-1 btn btn-primary btn-sm"><i class="fas fa-map-marker-alt"></i> Ver en el mapa</a>
                    </address>
                </div>
            </div>
        </div>
    </div>

    <div class="pb-4 container">
        <div class="row">
            <div id="mapa" class="col-md-12">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3976.11241884547!2d-75.90511528485808!3d4.750499496549836!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e387000be97ada3%3A0xca0fcccbda8166a!2sFrixio+-+Bordados+de+Cartago!5e0!3m2!1ses-419!2sco!4v1562616511654!5m2!1ses-419!2sco" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </div>
        <div class="row">
            <div class="pt-4 col-md-12 text-center">
                <h4>5to Networking - Tejiendo Relaciones De Valor</h4>
                <p class="text-muted">Galería de Arte, Frixio, Carrera 4ta Nro 1A-72, Cartago, Valle del Cauca</p>
                <p>
                    <ul class="list-inline">
                        <li class="list-inline-item">
							<a href="https://www.google.com/maps/preview?saddr=Current+Location&daddr=Frixio+-+Bordados+de+Cartago,+Cra.+4+%23%23+1A+-+72,+Cartago,+Valle+del+Cauca&dirflg=walking" class="btn btn-lg" alt="¿Cómo llegar caminando?" target="_blank"><i class="fas fa-walking"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a href="https://www.google.com/maps/preview?saddr=Current+Location&daddr=Frixio+-+Bordados+de+Cartago,+Cra.+4+%23%23+1A+-+72,+Cartago,+Valle+del+Cauca" class="btn btn-lg" alt="¿Cómo llegar en carro?" target="_blank"><i class="fas fa-car"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a href="https://www.google.com/maps/preview?saddr=Current+Location&daddr=Frixio+-+Bordados+de+Cartago,+Cra.+4+%23%23+1A+-+72,+Cartago,+Valle+del+Cauca&dirflg=bicycling" class="btn btn-lg" alt="¿Cómo llegar en moto o bici?" target="_blank"><i class="fas fa-bicycle"></i></a>
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