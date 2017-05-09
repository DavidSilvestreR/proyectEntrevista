<?php
require("C:/xampp/includes/conexiones/produtos.conexion.php");
require('C:/xampp/includes/clases/producos.class.php');
$respose['sucess']=false;
if (isset($_POST['nombre']) and isset($_POST['ncanticad']) and isset($_POST['precio'])) {
	$registrar=new RegistraProductos($ConexionDb);
	 $name=$_POST['nombre'];
     $catidad=$_POST['ncanticad'];
     $precio=$_POST['precio'];
     $campos = array('nombre' => $name , 'cantidad'=>$catidad,'precio'=>$precio);     
     $id_registra= $registrar->registraProductos($campos);     
     if ($id_registra > 0) {
       $respose['sucess']=true;     	
     }else{
     	 $respose['sucess']=false;  
     }}

echo json_decode($respose['sucess']);




 ?>