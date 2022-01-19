<?php

// Variables de conexión
include 'conexion.php';

// Creo el json para devolver
$jsondata = array();

if (!empty($_POST)) {

	// Viene del formulario
	$telefono = $_POST['telefono'];
	$id_evento = $_POST['evento_id'];

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
		// Se cae la conexión debe hacer algo

		die("Connection failed: " . $conn->connect_error);

		// Agrego el valor a la variable
		$jsondata["success"] = false;
		$jsondata["modal"] = false;
		$jsondata["message"] = 'Tenemos un problema técnico, regresa en unos minutos';
	}

	// Consulta para saber si el man ya se encuentra registrado
	$sql_buscar = "SELECT * FROM emprendedores WHERE telefono LIKE '%" . $telefono . "%'";
	$result = $conn->query($sql_buscar);

	if ($result->num_rows > 0) {

		// Obtener el emprendedor
		while ($rows = $result->fetch_assoc()) {
			// Obtiene el nombre
			$nombre_completo = $rows['nombre'];
			// Divide el nombre en espacios
			$nombres = explode(" ", $nombre_completo);
			// Obtiene el primer nombre
			$nombre = utf8_encode($nombres[0]);
			// Obtiene el id del emprendedor
			$id_emprendedor = $rows['id'];
		}

		// Consultar si el emprendedor se encuentra registrado en el evento 
		$sql_evento = "SELECT id FROM reuniones WHERE id_emprendedor = " . $id_emprendedor . " AND id_tipo_reunion = " . $id_evento;
		$result_evento = $conn->query($sql_evento);

		// Validar si esta registrado en el evento
		if ($result_evento->num_rows > 0) {
			// El usuario ya se encuentra registrado en el evento
			$jsondata["success"] = false;
			$jsondata["modal"] = false;
			$jsondata["message"] = $nombre . ' ya te habías registrado con anterioridad!';
		} else {
			$sql = "INSERT INTO reuniones (id_emprendedor, id_tipo_reunion) VALUES (" . $id_emprendedor . ", " . $id_evento . ")";

			if ($conn->query($sql) === TRUE) {

				/* 
				 * Enviar SMS con hablame
				 */

				$mensaje = $nombre . ' desde Emprendedores Cartago te felicitamos. Ya estás registrado en nuestro Escuela de Emprendedores - La Aventura Comienza. Te esperamos en la Universidad Cotecnova (Calle 10 #3-95) este martes 3 de marzo a las 6:00 pm';

				$url = 'https://api.hablame.co/sms/envio/';
				$data = array(
					'cliente' => 10015865, //Numero de cliente
					'api' => '1Ft1dZs1uBRiCuS3cLoq4yuvKdIDUI', //Clave API suministrada
					'numero' => $telefono, //numero o numeros telefonicos a enviar el SMS (separados por una coma ,)
					'sms' => $mensaje, //Mensaje de texto a enviar
					'fecha' => '', //(campo opcional) Fecha de envio, si se envia vacio se envia inmediatamente (Ejemplo: 2017-12-31 23:59:59)
					'referencia' => 'REGISTRO COMUNIDAD', //(campo opcional) Numero de referencio ó nombre de campaña
				);

				$options = array(
					'http' => array(
						'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
						'method'  => 'POST',
						'content' => http_build_query($data)
					)
				);
				$context  = stream_context_create($options);
				$result = json_decode((file_get_contents($url, false, $context)), true);				

				// Agrego el valor a la variable
				$jsondata["success"] = true;
				$jsondata["message"] = 'Felicitaciones ' . $nombre . ', ya estas registrado en el evento';
			} else {
				// Agrego el valor a la variable
				$jsondata["success"] = false;
				$jsondata["message"] = 'Tenemos un problema técnico, regresa en unos minutos';
			}
		}
	} else {
		// No existe entonces avisar que se registre
		$jsondata["success"] = false;
		$jsondata["modal"] = true;
		$jsondata["message"] = 'Para inscríbirte debes estar registrado en la comunidad';
	}

	// Cierra la conexión
	$conn->close();
} else {
	// Agrego el valor a la variable
	$jsondata["success"] = false;
	$jsondata["message"] = 'No se ha enviado el formulario';
}

//Aunque el content-type no sea un problema en la mayoría de casos, es recomendable especificarlo
header('Content-type: application/json; charset=utf-8');
echo json_encode($jsondata);
exit();
