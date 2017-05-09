<?php
	$host = "localhost";
	$user = "root";
	$pass = "";
	$db = "productos";
	$ConexionDb = new PDO("mysql:host={$host};dbname={$db}",$user,$pass,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
	//$calendarioConexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //$calendarioConexion->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
?>