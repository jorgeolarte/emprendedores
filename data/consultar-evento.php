<?php
// Variables de conexión
include 'conexion.php';

if( isset($_GET['id']) ) {
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        // Se cae la conexión debe hacer algo
        die("Connection failed: " . $conn->connect_error);
    } 

    // Consulta para saber si el man ya se encuentra registrado
    $sql_buscar = "SELECT t.capacidad - COUNT(r.id_tipo_reunion) AS cantidad FROM tipos_reuniones AS t INNER JOIN reuniones AS r ON r.id_tipo_reunion = t.id WHERE t.id = " . $_GET['id'] ." GROUP BY t.capacidad";
    $result = $conn->query($sql_buscar);

    // Encuentra el valor
    while($row = $result->fetch_assoc()) {
        $capacidad = $row['cantidad'];
    }

    // Creo el json para devolver
    $jsondata = array();

    // Agrego el valor a la variable
    $jsondata["success"] = true;
    $jsondata["cupos"] = $capacidad;

    //Aunque el content-type no sea un problema en la mayoría de casos, es recomendable especificarlo
    header('Content-type: application/json; charset=utf-8');
    echo json_encode($jsondata);
    exit();
}
?>