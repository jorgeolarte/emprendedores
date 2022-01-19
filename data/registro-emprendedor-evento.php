<?php
/*
 * Formulario encargado de registrar un nuevo usuario
 */

// Variables de conexión
include 'conexion.php';

// Creo el json para devolver
$jsondata = array();

if (!empty($_POST)) {

	// CRear las variables
	$nombre_completo = utf8_decode(ucwords($_POST['text-nombre']));
	$emprendimiento = utf8_decode(ucwords($_POST['text-emprendimiento']));
	$telefono = $_POST['text-telefono'];
	$email = $_POST['text-email'];
	$id_evento = $_POST['id_evento'];

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
		// Se cae la conexión debe hacer algo
		die("Connection failed: " . $conn->connect_error);

		// Agrego el valor a la variable
		$jsondata["success"] = false;
		$jsondata["message"] = 'Tenemos un problema técnico, regresa en unos minutos';
	}

	// Consulta para saber si el man ya se encuentra registrado
	$sql_buscar = "SELECT * FROM emprendedores WHERE telefono LIKE '%" . $telefono . "%'";
	$result = $conn->query($sql_buscar);

	if ($result->num_rows > 0) {
		// Agrego el valor a la variable
		$jsondata["success"] = false;
		$jsondata["message"] = 'Hey ' . utf8_encode($nombre_completo) . ', ya estás registrado en nuestra comunidad';

		// output data of each row
		// while($row = $result->fetch_assoc()) {
		// echo "id: " . $row["id"]. " - nombre: " . $row["nombre"]. " - emprendimiento " . $row["emprendimiento"]. "<br>";
		// }
	} else {

		// No existe entonces se va a crear el registro
		$stmt = $conn->prepare("INSERT INTO emprendedores (nombre, emprendimiento, telefono, email) VALUES (?,?,?,?)");
		$stmt->bind_param('ssss', $nombre_completo, $emprendimiento, $telefono, $email);

		if ($stmt->execute()) {

			// Se creo el emprendedor
			// Consulto el id del emprendedor creado
			$id_emprendedor = $conn->insert_id;

			// Consultar si el emprendedor se encuentra registrado en el evento 
			$sql_evento = "SELECT id FROM reuniones WHERE id_emprendedor = " . $id_emprendedor . " AND id_tipo_reunion = " . $id_evento;
			$result_evento = $conn->query($sql_evento);

			// Validar si esta registrado en el evento
			if ($result_evento->num_rows > 0) {
				// El usuario ya se encuentra registrado en el evento
				$jsondata["success"] = false;
				$jsondata["message"] = $nombre . ' ya te habías registrado con anterioridad!';
			} else {
				// Insertar emprendedor en el evento
				$sql = "INSERT INTO reuniones (id_emprendedor, id_tipo_reunion) VALUES (" . $id_emprendedor . ", " . $id_evento . ")";

				if ($conn->query($sql) === TRUE) {

					// Divide el nombre en espacios
					$nombres = explode(" ", $nombre_completo);
					// Obtiene el primer nombre
					$nombre = utf8_encode($nombres[0]);

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
						'referencia' => 'REGISTRO ESCUELA', //(campo opcional) Numero de referencio ó nombre de campaña
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

					/*
			 		 * AGREGA UN NUEVO CORREO A LA LISTA DE MAILCHIMP
			 		 */

					// MailChimp API credentials
					$apiKey = 'e4e727622fb737dad0be5d30d6184f95-us3';
					$listID = '284d09995a';

					// MailChimp API URL
					$memberID = md5(strtolower($email));
					$dataCenter = substr($apiKey, strpos($apiKey, '-') + 1);
					$url_mailchimp = 'https://' . $dataCenter . '.api.mailchimp.com/3.0/lists/' . $listID . '/members/' . $memberID;

					// member information
					$json = json_encode([
						'email_address' => $email,
						'status'        => 'subscribed',
						'merge_fields'  => [
							'FNAME'     => utf8_encode($nombre_completo),
							'PHONE'     => $telefono,
							'EMPRENDE'     => utf8_encode($emprendimiento)
						]
					]);

					// send a HTTP POST request with curl
					$ch_mailchimp = curl_init($url_mailchimp);
					curl_setopt($ch_mailchimp, CURLOPT_USERPWD, 'user:' . $apiKey);
					curl_setopt($ch_mailchimp, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
					curl_setopt($ch_mailchimp, CURLOPT_RETURNTRANSFER, true);
					curl_setopt($ch_mailchimp, CURLOPT_TIMEOUT, 10);
					curl_setopt($ch_mailchimp, CURLOPT_CUSTOMREQUEST, 'PUT');
					curl_setopt($ch_mailchimp, CURLOPT_SSL_VERIFYPEER, false);
					curl_setopt($ch_mailchimp, CURLOPT_POSTFIELDS, $json);
					$result = curl_exec($ch_mailchimp);
					$httpCode = curl_getinfo($ch_mailchimp, CURLINFO_HTTP_CODE);
					curl_close($ch_mailchimp);

					/*
			 		 * CODIGO ENCARGADO DE LLAMAR A google
			 		 */

					// Llamar el google para agregar el usuario en Google Contacts
					$url_google = 'https://hooks.zapier.com/hooks/catch/5262460/ooykbxo/';

					//create a new cURL resource
					$ch_google = curl_init($url_google);

					// Defino la data a enviar a google
					$data_google = array(
						"telefono" => $telefono,
						"nombre" =>  utf8_encode($nombre_completo),
						"emprendimiento" =>  utf8_encode($emprendimiento),
						"email" => $email
					);

					$payload_google = json_encode($data_google);

					//attach encoded JSON string to the POST fields
					curl_setopt($ch_google, CURLOPT_POSTFIELDS, $payload_google);

					//set the content type to application/json
					curl_setopt($ch_google, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));

					//return response instead of outputting
					curl_setopt($ch_google, CURLOPT_RETURNTRANSFER, true);

					//execute the POST request
					$result = curl_exec($ch_google);

					//close cURL resource
					curl_close($ch_google);

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
			// Agrego el valor a la variable
			$jsondata["success"] = false;
			$jsondata["message"] = 'Tenemos un problema técnico, regresa en unos minutos';
		}
	}

	// Cierra la conexión
	$conn->close();
} else {
	// Agrego el valor a la variable
	$jsondata["success"] = false;
	$jsondata["message"] = 'No se ha enviado el formulario';
}

//Aunque el content-type no sea un problema en la mayoría de casos, es recomendable especificarlo
header('Content-type: application/json;');
echo json_encode($jsondata);
//echo "<h1>Holi</h1>";
//var_dump($jsondata);
exit();
