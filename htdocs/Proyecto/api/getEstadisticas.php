<?php 
header('Content-Type: application/json');
require("C:/xampp/includes/conexiones/produtos.conexion.php");
require('C:/xampp/includes/clases/producos.class.php');
	$respose['sucess']=false; 
	
	$registrar=new RegistraProductos($ConexionDb);
    $estadisticas= $registrar->getEstaditicas(); 
    foreach ($estadisticas as $key => $value) {
    	$datos[]=array((string)$value['nombre'], (int) $value['ventas']);
    	
    }
    if ($estadisticas==false) {
     	echo json_encode($respose['sucess']);
     }else{
     	echo json_encode($datos);
     }

    





 ?>