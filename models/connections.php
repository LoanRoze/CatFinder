<?php


require_once './config/database.php';

function dbConnect() {
    $db = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_DATABASE, DB_PORT);

    if ($db->connect_error) {
        die('Erreur de connexion à la base de données : ' . $db->connect_error);
	}
	
    $db->options(MYSQLI_OPT_CONNECT_TIMEOUT, 10);

    return $db;
}