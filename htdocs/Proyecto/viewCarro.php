<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Productos</title>
</head>
<!-- CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css">
  <link rel="stylesheet" type="text/css" href="./lib/dist/sweetalert.css">
  <link rel="stylesheet" type="text/css" href="./css/style.css">
  <!-- JavaScript -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
  <script src="./lib/dist/sweetalert.min.js"></script>
  <script src="js/viewCarro.js"></script>
<body ng-app="carro"  ng-controller="carroCTRL">
 <?php require("templates/nav.php"); ?>
  <div class="container">
  <h1 class="titlePage">Cantidad de Articulos</h1>
  	<div class="row content">
  		<table class=" table bordered striped" >
      <thead>
        <tr>
          <th>Nombre</th>
          <th>Cantidad</th>
          <th>Precio</th>
          <th>Total</th>
        </tr>
      </thead>
      <tbody>
        <tr ng-repeat=" c in carrito">
          <td>{{c.NombreProducto}}</td>
          <td>{{c.cantidad}}</td>
          <td>{{c.precio}}</td>
          <td>{{c.cantidad * c.precio}}</td>
        </tr>
      </tbody>  
      </table>
  	</div>
    <div><a class="waves-effect waves-light btn" ng-click="pagarCarrito()"><i class="material-icons right"></i>Pagar</a></div>

  </div>
	
</body>
</html>