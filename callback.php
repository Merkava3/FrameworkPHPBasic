<?php
require 'env.php';
loadEnv(__DIR__ . '/.env');

require 'auth0/src/Auth0.php'; // Ajusta la ruta según la estructura de la carpeta auth0
use Auth0\SDK\Auth0;

$config = require 'config.php';
$auth0 = new Auth0([
    'domain' => $config['domain'],
    'client_id' => $config['client_id'],
    'client_secret' => $config['client_secret'],
    'redirect_uri' => $config['redirect_uri'],
    'scope' => 'lszondas@gmail.com',
]);

$auth0->exchange();
header('Location: /');
