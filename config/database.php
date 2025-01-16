<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

// Définir les constantes
define('DB_HOST', '7.tcp.eu.ngrok.io');
define('DB_PORT', 18680);
define('DB_DATABASE', $_ENV['DB_DATABASE']);
define('DB_USERNAME', $_ENV['DB_USERNAME']);
define('DB_PASSWORD', $_ENV['DB_PASSWORD']);
