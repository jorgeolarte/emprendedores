var contarEmprendedores = function () {
	// this hace referencia al elemento que ha lanzado el evento click
	// con el método .data('user') obtenemos el valor del atributo data-user de dicho elemento y lo pasamos a la función getdetails definida anteriormente

	getdetails()

		.done(function (response) {
			//done() es ejecutada cuándo se recibe la respuesta del servidor. response es el objeto JSON recibido
			if (response.success == true) {
				console.log(response.emprendedores);
				// Actualizamos el HTML del elemento con id="#response-container"
				$("#emprendedores").html(response.emprendedores + ' Emprendedores');
			} else {
				//response.success no es true
				$("#response-container").html('No ha habido suerte: ' + response.data.message);

			}

		})

		.fail(function (jqXHR, textStatus, errorThrown) {
			$("#response-container").html("Algo ha fallado: " + textStatus);
		});
};

// getdeails será nuestra función para enviar la solicitud ajax    
var getdetails = function (id) {
	return $.getJSON("../data/consultar.php");
}

var contarRegistros = function (id) {
	// this hace referencia al elemento que ha lanzado el evento click
	// con el método .data('user') obtenemos el valor del atributo data-user de dicho elemento y lo pasamos a la función getdetails definida anteriormente

	getRegistros(id)

		.done(function (response) {
			//done() es ejecutada cuándo se recibe la respuesta del servidor. response es el objeto JSON recibido
			if (response.success == true) {
				console.log(response.cupos);
				// Actualizamos el HTML del elemento con id="#response-container"
				$("#cupos").html(response.cupos).trigger('change');
			} else {
				//response.success no es true
				$("#cupos").html('0').trigger('change');
			}

		})

		.fail(function (jqXHR, textStatus, errorThrown) {
			$("#response-container").html("Algo ha fallado: " + textStatus);
		});
};

// getdeails será nuestra función para enviar la solicitud ajax    
var getRegistros = function (id) {
	return $.getJSON("../data/consultar-evento.php", { "id": id });
}

$("#cupos").on('change', function () {
	// Preguntar si el cambio de cupos dio menor a cero
	if ($(this).text() <= 0) {
		// Desactivar el boton de enviar y telefono
		$("#enviar").attr("disabled", true);
		$("#telefono").attr("disabled", true);
		// Cambiar mensaje boton
		$("#enviar").html("<i class='fas fa-thermometer-full'></i> Llenos");
		// Esconder mensaje informativo cupos
		$("#mensaje-cupos").hide();
		// Cambiar clases del boton
		$("#enviar").removeClass("btn-primary animated infinite pulse");
		$("#enviar").toggleClass("btn-danger");
	}
});

$(document).ready(function () {

	$("#resp").hide();
	$("#resp-modal").hide();

	// Formulario de registro de emprendedor
	$("#form-registro").on('submit', function (e) {

		// Stop the browser from submitting the form.
		e.preventDefault();
		// Serialize the form data.
		var formData = $(this).serialize();

		// Submit the form using AJAX.
		$.ajax({
			type: 'POST',
			url: $(this).attr('action'),
			data: formData,
			success: function (data) {
				$("#resp").show();
				$("#resp").html(data.message);
				console.log(data);
				if (data.success) {
					// Se completo la tarea
					$("#resp").removeClass();
					$("#resp").toggleClass("alert alert-primary mb-0 text-center");
					console.log("TODO BIEN");
					contarEmprendedores();
				}
				else {
					// Error
					$("#resp").removeClass();
					$("#resp").toggleClass("alert alert-danger mb-0 text-center");
					console.log("TODO MAL");
				}
			},
		});
		// TODO
	});

	contarEmprendedores();

	// Formulario de registro de evento
	$("#form-registrar-evento").on('submit', function (e) {

		// Stop the browser from submitting the form.
		e.preventDefault();
		console.log("Se disparo el evento de registrar evento");
		// Serialize the form data.
		var formData = $(this).serialize();
		console.log($(this).attr('action'));

		// Submit the form using AJAX.
		$.ajax({
			type: 'POST',
			url: $(this).attr('action'),
			data: formData,
			success: function (data) {
				$("#resp").show();
				$("#resp").html(data.message);
				console.log(data);
				if (data.success) {
					// Se completo la tarea
					$("#resp").removeClass();
					$("#resp").toggleClass("alert alert-primary mb-0 text-center");
					console.log("TODO BIEN");
					contarRegistros($("#evento_id").val());
				}
				else {
					// Error
					$("#resp").removeClass();
					$("#resp").toggleClass("alert alert-danger mb-0 text-center");
					// Si se debe mostrar el modal
					if(data.modal) {
						$('#exampleModal').modal('show');
						// Limpia el formulario
						$('#form-registro-modal').trigger("reset");
						// Asigna el valor del telefono
						$('#text-telefono').val($('#telefono').val());
					}
					console.log("TODO MAL");
				}
			},
		});
		// TODO
	});

	// Registro de emprendedor + evento
	$("#form-registro-modal").on('submit', function (e) {

		// Stop the browser from submitting the form.
		e.preventDefault();
		// Serialize the form data.
		var formData = $(this).serialize();

		// Submit the form using AJAX.
		$.ajax({
			type: 'POST',
			url: $(this).attr('action'),
			data: formData,
			success: function (data) {
				// Poner mensajes
				$("#resp-modal").show();
				$("#resp-modal").html(data.message);
				$("#resp").show();
				$("#resp").html(data.message);
				console.log(data);

				if (data.success) {
					// Se oculta el modal
					$('#exampleModal').modal('hide');
					// Se completo la tarea
					$("#resp").removeClass();
					$("#resp").toggleClass("alert alert-primary mb-0 text-center");
					// Mensaje a la consola
					console.log("Se creo emprendedor y se inserto en evento");
				}
				else {
					// Se oculta el modal
					$('#exampleModal').modal('show');
					// Error
					$("#resp-modal").removeClass();
					$("#resp-modal").toggleClass("alert alert-danger mb-0 text-center");
					console.log("Error al intentar crear emprendedor y/o insertar en evento");
				}
				
			},
		});
		// TODO
	});

	$("#form-signin").on('submit', function (e) {

		// Stop the browser from submitting the form.
		e.preventDefault();
		console.log("Iniciando sesión...");
		// Serialize the form data.
		var formData = $(this).serialize();
		console.log($(this).attr('action'));

		// Submit the form using AJAX.
		$.ajax({
			type: 'POST',
			url: $(this).attr('action'),
			data: formData,
			success: function (data) {
				$("#resp").show();
				$("#resp").html(data.message);
				console.log(data);
				if (data.success) {
					// Se completo la tarea
					$("#resp").removeClass();
					$("#resp").toggleClass("alert alert-primary mb-0 text-center");
					console.log("Redireccionando...");
					window.location.replace("../app/login.php?redirect=admin.php");
				}
				else {
					// Error
					$("#resp").removeClass();
					$("#resp").toggleClass("alert alert-danger mb-0 text-center");
					console.log("Imposible iniciar sesión");
				}
			},
		});
		// TODO
	});

	contarRegistros($("#evento_id").val());

	// if ('serviceWorker' in navigator) {
	// window.addEventListener('load', function() {
	// navigator.serviceWorker.register('sw.js').then(function(registration) {
	// // Registration was successful
	// console.log('ServiceWorker registration successful with scope: ', registration.scope);
	// }, function(err) {
	// // registration failed :(
	// console.log('ServiceWorker registration failed: ', err);
	// });
	// });
	// }

	$(function() {
		$('#WAButton').floatingWhatsApp({
		  phone: '+573136365886', //WhatsApp Business phone number International format-
		  //Get it with Toky at https://toky.co/en/features/whatsapp.
		  headerTitle: '¡Escríbenos!', //Popup Title
		  popupMessage: 'Hola emprendedor, ¿en qué podemos ayudarte?', //Popup Message
		  //message: "Me gustaría ser parte de la comunidad.",
		  showPopup: true, //Enables popup display
		  buttonImage: '<img src="../img/whatsapp.svg" />', //Button Image
		  //headerColor: '#3ae7ab', //Custom header color
		  //backgroundColor: '#3ae7ab', //Custom background button color
		  position: "right"    
		});
	  });

});


  