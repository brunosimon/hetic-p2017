<?php
	error_reporting(E_ALL);
	ini_set('display_errors', 1);

	define('DB_HOST', 'localhost');
	define('DB_USER', 'root');
	define('DB_PASS', 'root');
	define('DB_NAME', 'exercice-poll-caillard-poteloin');

	try
	{
		$pdo = new PDO('mysql:dbname='.DB_NAME.';host='.DB_HOST,DB_USER,DB_PASS);
		$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);
	}
	catch (PDOException $e)
	{
		die('error');
	}