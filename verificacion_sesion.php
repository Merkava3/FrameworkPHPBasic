<?php
session_start();
header('Content-Type: application/json');
echo print_r($_SESSION['user']);

// Verificar si existe una sesión activa
$loggedin = isset($_SESSION['user']);

echo json_encode(['loggedin' => $loggedin]);
?>