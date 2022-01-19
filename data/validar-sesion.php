<?php 

session_start(); 

if (!isset($_SESSION['telefono'])) {
    echo "Session no existe";
    header('Location: index.php');
}

?>