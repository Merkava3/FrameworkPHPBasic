<?php
session_start();
header('Content-Type: application/json');

$response = ['loggedin' => isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true];
$list = json_encode($response);
echo $list;
?>