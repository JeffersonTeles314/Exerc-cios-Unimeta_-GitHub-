<?php
require 'config.php';
try{
	$conexao = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);
	$conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	//echo "OK";
}catch(PDOException $e){
	echo "ERROR: ". $e->getMessage();
}