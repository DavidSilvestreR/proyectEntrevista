<?php 
require("C:/xampp/includes/conexiones/produtos.conexion.php");
require('C:/xampp/includes/clases/producos.class.php');
	$respose['sucess']=false;  
	$registrar=new RegistraProductos($ConexionDb);
    $producos= $registrar->getProductos();  


    echo json_encode($producos);

 ?>