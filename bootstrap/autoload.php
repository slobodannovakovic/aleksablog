<?php

session_start();

date_default_timezone_set('Europe/Belgrade');
//ini_set('date.timezone', 'Europe/Belgrade');

//print_r(glob('../app/*', GLOB_ONLYDIR));
spl_autoload_register(function($className) {
	$ClassesFilePath = 'core/'.$className.'.php';

	if(file_exists($ClassesFilePath)) require_once $ClassesFilePath;
	else die('nepostojeća klasa '.$className);
});

?>