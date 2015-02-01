<?php
require_once 'PostmanOAuthSmtpEngine.php';
require_once 'PostmanGmailAuthenticationManager.php';
require_once 'PostmanAuthenticationManagerFactory.php';

if (! class_exists ( "PostmanLogger" )) {
	
	//
	class PostmanLogger {
		private $name;
		function __construct($name) {
			$this->name = $name;
		}
		function debug($text) {
			error_log ( 'DEBUG ' . $this->name . ': ' . $text );
		}
		function error($text) {
			error_log ( 'ERROR ' . $this->name . ': ' . $text );
		}
	}
}
?>