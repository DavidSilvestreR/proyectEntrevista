<?php 
session_start();
require("C:/xampp/includes/conexiones/produtos.conexion.php");
require('C:/xampp/includes/clases/producos.class.php');
$registrar=new RegistraProductos($ConexionDb);


if (isset($_SESSION["carro"])) {
	foreach ($_SESSION["carro"] as $key ) {		
		 $id_registra_compra= $registrar->registraCompra($key);
		 if ($id_registra_compra==false) {
		 	break;
		 	$id_registra_compra=false;
		 }
	}	
}
$id_registra_compra=true;
if($id_registra_compra){
	

	
	$datos = array();
	$contador=0;
	$total=0;
	foreach ($_SESSION["carro"] as $key => $value){
        $total+=$value['cantidad']*$value['precio'];
		$datos[$contador]="<tr>
				           <td style='border:1px solid #ccc;'>".$value['NombreProducto']."</td>
				           <td style='border:1px solid #ccc;'>".$value['cantidad']."</td>
				           <td style='border:1px solid #ccc;'>".$value['precio']."</td>				
			               </tr>";
		$contador++;
		
	}

	$tabla=implode(",",$datos);
	require('ticket_pdf.php');



};

session_destroy();







 ?>