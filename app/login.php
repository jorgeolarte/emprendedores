<?php 
session_start();

if (isset($_GET['redirect'])) {
    header('Location: ' . $_GET['redirect']);
} else {
    header('Location: index.php');
}
?>