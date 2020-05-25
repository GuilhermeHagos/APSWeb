<?php

	require_once "../vendor/autoload.php";


	echo parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH); 

	echo "<hr>";

	echo 'Isso está funcionando';
	
	echo "<hr>";

    $route = new \App\Route;

?>