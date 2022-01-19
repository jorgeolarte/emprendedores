<?php 

include '../data/validar-sesion.php';

// Preguntar si enviaron el ID
if (!isset($_GET['id'])) {
    // Redirecciona a la pagina
    header('Location: admin.php?error=1');
} else {
    // Variables de conexión
    include '../data/conexion.php';
  
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        // Se cae la conexión debe hacer algo
        die("Connection failed: " . $conn->connect_error);
    } else {
        // Elimina a la persona
        //$sql = "DELETE FROM emprendedores WHERE id = " . $_GET['id'];

        //if ($conn->query($sql) === TRUE) {
            // Redirecciona a la pagina
            //header('Location: admin.php');
        //} else {
            // Redirecciona a la pagina
            //echo "Error deleting record: " . $conn->error;
            //header('Location: admin.php?error=2');
        //}

        // Redirecciona a la pagina
        header('Location: admin.php');

        $conn->close();
    }
}
?>