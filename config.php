<?php
require 'environment.php';


$config = array();

if (ENVIRONMENT == "development") {
	define("BASE_URL", "http://cadastropankararu.com/");
	$config['dbname']="pankararu";
	$config['host']="localhost";
	$config['dbuser']="root";
	$config['dbpass']="";
}
else{
	define("BASE_URL", "http://sistema.aldeiabrejinhodaserra.com.br/");
	$config['dbname']="aldeia97_pankararu";
	$config['host']="aldeiabrejinhodaserra.com.br";
	$config['dbuser']="aldeia97_GAL2005";
	$config['dbpass']="pankararu2019";

}

global $pdo;

try {
	$pdo = new PDO("mysql:dbname=".$config['dbname'].";host=".$config['host'],$config['dbuser'],$config['dbpass']);
	
} catch (PDOException $e) {

	echo "ERRO: ".$e->getMessage();

}