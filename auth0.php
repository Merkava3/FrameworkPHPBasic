<?php
require 'env.php';
loadEnv(__DIR__ . '/.env');

require './auth0-PHP-main/src/Auth0.php'; // Ajusta la ruta según la estructura de la carpeta auth0
use Auth0\SDK\Auth0;
echo "hola mundo";
$config = require 'config.php';
$auth0 = new Auth0([
    'domain' => $config['domain'],
    'client_id' => $config['client_id'],
    'client_secret' => $config['client_secret'],
    'redirect_uri' => $config['redirect_uri'],
    'scope' => 'openid profile email',
]);

$userInfo = $auth0->getUser();
if (!$userInfo) {
    echo '<a href="' . $auth0->login() . '">Login</a>';
} else {
    echo 'Hello, ' . htmlspecialchars($userInfo['name']) . '!';
    echo '<a href="/logout.php">Logout</a>';
}




?>