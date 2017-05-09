<?php 	
require('C:/xampp/htdocs/Proyecto/mpdf/mpdf.php');

$mpdf = new mPDF();
$mpdf->WriteHTML("<div style='width:50%; margin: auto; border:3px solid #ccc; padding: 5px; margin-top: 100px;height: 400px;'>
	<table style='width: 100%; border-collapse: collapse;'>
		<thead style='border-bottom:1px dashed #ccc; '>
			<tr>
				<th colspan='3' style='padding-bottom5px; ;text-align:center;padding-bottom: 5px; font-size: 15px;'>Nombre de la tienda</th>
			</tr>
			<tr>
				<th colspan='3' style='padding-bottom5px; ;text-align:center;padding-bottom: 5px;font-size:13px;'>Naucalpan de Juarez (".date("Y").")</th>			
			</tr>
			<tr>
				<th colspan='3' style='padding-bottom5px; ;text-align:center;padding-bottom: 5px;font-size:13px;'>Telefono 555-555-555</th>
			</tr>
			<tr>
				<th colspan='3' style='padding-bottom5px; ;text-align:center;padding-bottom: 5px;font-size:13px; '>Ticket De Compra</th>
			</tr>
			<tr>
				<th colspan='3' style='padding-bottom5px;text-align:left;padding-bottom: 5px;font-size:13px; border-bottom:1px dashed #ccc;'>Fecha:/".date("j/n/Y")."</th>
			</tr>
		</thead>
		<tbody>
		    <tr>
		     <td colspan='3'style='padding:10px;color:#fff; height:20px;'></td>
		    </tr>
			<tr style='border: 1px solid #ccc;'>
				<td style='border: 1px solid #ccc; background: #ccc; text-align: center;'>Producto</td>
				<td style='border: 1px solid #ccc; background: #ccc; text-align: center;'>Cantidad</td>
				<td style='border: 1px solid #ccc; background: #ccc; text-align: center;'>Precio</td>
			</tr>".$tabla."
			<tr>
				<td colspan='2' style='text-align:right;'>Total</td>
				<td colspan='1' style='text-align:left;'>$".$total."</td>
			</tr>
			<tr>
				<td colspan='3' style='text-align: center;'>Gracas por su compra</td>
			</tr>
		</tbody>
	</table>
</div>");
$mpdf->SetTitle("Ticket");
//$mpdf->Output("../archivos/SolicitudesCotizacion/".$id_solicitud_cotizacion.'.pdf','F');

$mpdf->Output("Ticket.pdf","D");




 ?>