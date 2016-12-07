<?php 
	$host ="localhost";
	$dbName ="myphp"
	$dbusername ="root";
	$bPassword ="";

	$dbh = new PDO("'"mysql:dbName=$dbname;host=$host;charset=utf8", $dbusername, $bPassword, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));

?>