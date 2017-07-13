<?php
require 'environment.php';

define("BASE_URL", "http://localhost/meuDominio");

global $config;
$config = array();
if(ENVIRONMENT == 'development') {
	$config['dbname'] = 'nomeDoBancoDeDados';
	$config['host'] = 'localhost';
	$config['dbuser'] = 'root';
	$config['dbpass'] = 'root';
} else {
	$config['dbname'] = 'mvc';
	$config['host'] = 'localhost';
	$config['dbuser'] = 'root';
	$config['dbpass'] = 'root';
}
?>
