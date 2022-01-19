<?php
// Variables de conexión
include 'conexion.php';

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
	// Se cae la conexión debe hacer algo
	die("Connection failed: " . $conn->connect_error);
} 

// Consulta para saber si el man ya se encuentra registrado
$sql_buscar = "SELECT nombre, emprendimiento, telefono, email FROM emprendedores GROUP BY id";
$result = $conn->query($sql_buscar);

while($rows = $result->fetch_assoc()) {
    $dbdata[]=$rows;
}

// Creo el json para devolver
$jsondata = array();

// Agrego el valor a la variable
$jsondata["success"] = true;
$jsondata["emprendedores"] = $dbdata;



//Aunque el content-type no sea un problema en la mayoría de casos, es recomendable especificarlo
header('Content-type: application/json; charset=utf-8');
echo json_encode($dbdata);
exit();
?>