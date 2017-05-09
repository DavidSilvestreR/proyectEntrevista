<?php 
require("C:/xampp/includes/conexiones/produtos.conexion.php");
require('C:/xampp/includes/clases/producos.class.php');
$respose['sucess']=false;
$post=json_decode(file_get_contents("php://input"));

session_start();


if (isset($post)) {
	foreach ($post as $key => $value) {
		
			if (isset( $value->{'cantidad'})) {
				$_SESSION["carro"][]= array('NombreProducto' => $value->{'nombre'} ,
					                          'cantidad' => $value->{'cantidad'},
					                           'id'=> $value->{'idpod'},
					                           'precio'=> $value->{'precio'}
				                           );			 	
			 }
		}
	}

	

echo json_encode($_SESSION["carro"]);
//session_destroy();







 ?>