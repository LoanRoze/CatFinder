<?php


require_once './config/database.php';


function dbConnect() {
	$db = new mysqli(DB_CONFIG['host'], DB_CONFIG['username'], DB_CONFIG['password'], DB_CONFIG['database'], DB_CONFIG['port']);
	// $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
	// $db->exec('SET NAMES utf8');
	return $db;
}