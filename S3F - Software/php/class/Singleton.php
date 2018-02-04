<?php
 
	class Singleton {
	 
	   private static $_instance = null;
	   private static $_option = null;
	 
	   private function __construct() {  
	   
	   }
	 
	   public static function getInstance() {
	 
	     if(is_null(self::$_instance)) {
	     	$_option = array(
			  PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
			);
	       self::$_instance = new PDO('mysql:host=localhost;dbname=s3f_db', 'root', '', $_option);  
	     }
	 
	     return self::$_instance;
	   }
	}