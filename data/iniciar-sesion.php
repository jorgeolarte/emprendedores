<?php

// Variables de conexión
include 'conexion.php';

// Creo el json para devolver
$jsondata = array();

if (!empty($_POST)) {
	
    // Viene del formulario
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];
    
    // Solo yo puedo ingresar a la adminsitración
    if ($telefono == '3017516045')
    {
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
        $sql_buscar = "SELECT * FROM emprendedores WHERE telefono = '" . $telefono . "' AND email = '" . $email . "'";
        $result = $conn->query($sql_buscar);
        
        if ($result->num_rows > 0) {

            // Inicio sesión
            session_start();
            /*session is started if you don't write this line can't use $_Session  global variable*/
            $_SESSION["telefono"]=$telefono;

            // Agrego el valor a la variable
            $jsondata["success"] = true;
            $jsondata["message"] = 'Redireccionando...';

            
            header("Refresh:1; Location: ../app/login.php?redirect=plan1.php");

            
        } else {
            // No existe entonces avisar que se registre
            $jsondata["success"] = false;
            $jsondata["message"] = 'No te encuentras registrado';
        }

        // Cierra la conexión
        $conn->close();
    
    } else  {
        // No existe entonces avisar que se registre
        $jsondata["success"] = false;
        $jsondata["message"] = 'No tienes permisos de administrador';
    }

} 
else 
{
	// Agrego el valor a la variable
	$jsondata["success"] = false;
	$jsondata["message"] = 'No se ha enviado el formulario';
}

//Aunque el content-type no sea un problema en la mayoría de casos, es recomendable especificarlo
header('Content-type: application/json; charset=utf-8');
echo json_encode($jsondata);
exit();
?>