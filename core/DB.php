<?php

class DB {
	private static $db_host;
	private static $db_name;
	private static $db_username;
	private static $db_password;

	public static $connection;
	public static $instance;

	private function __construct() {
		$db_data = @require 'config/database.php';
		self::$db_host     = $db_data['db_host'];
		self::$db_name     = $db_data['db_name'];
		self::$db_username = $db_data['db_username'];
		self::$db_password = $db_data['db_password'];
		try {
			self::$connection = new PDO("mysql:host=".self::$db_host.";dbname=".self::$db_name.";charset=utf8", self::$db_username, self::$db_password);
		} catch(Exception $e) {
			echo $e->getMessage();
			die();		
		}
	}

	public static function getInstance() {
		if(!isset(self::$instance))
			self::$instance = new self;

		return self::$instance;
	} 
}

?>