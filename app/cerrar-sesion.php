<?php
session_start();
// destroy everything in this session
session_destroy();
header('Location: index.php');
?>