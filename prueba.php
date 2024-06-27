<?php
// Incluir el archivo de configuración de la base de datos y los modelos
require_once 'Conexion.php';
require_once 'DataAccessInterface.php';
require_once 'DatabaseHandler.php';
require_once 'DynamicQuery.php';
require_once 'controller.php'; 

// Obtener la URL solicitada
$url = isset($_GET['url']) ? $_GET['url'] : 'home';
echo " Hola mundo ";
echo $url;

// Dividir la URL en partes
$urlParts = explode('/', rtrim($url, '/'));
echo "Partes de la URL: ";
print_r($urlParts);
echo "<br />";

?>