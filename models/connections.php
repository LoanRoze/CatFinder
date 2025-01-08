<?php


require_once './config/database.php';

function dbConnect() {
	$db = new PDO(
    "mysql:host=" . DB_CONFIG['host'] . ";dbname=" . DB_CONFIG['database'],
    DB_CONFIG['username'],
    DB_CONFIG['password']
	);
	$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
	$db->exec('SET NAMES utf8');
	return $db;
}