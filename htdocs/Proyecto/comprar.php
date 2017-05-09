<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Compra Productos</title>
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

  <script src="js/getProductos.js"></script>
<body ng-app="venderProductos"  ng-controller="vendernCTRL">
<?php require("templates/nav.php"); ?>	
<div class="container">
<h1 class="titlePage">Prodcutos</h1>
<div class="row productos" >
	<div class="col m4" ng-repeat=" p in productos">
          <div class="card blue-grey darken-1">
            <div class="card-content white-text">
              <span class="card-title"></span>
              <p>Nombre: {{p.nombre}} </p>
            </div>
            <div class="card-action">
              
              <label for="cantidad">Cantidad {{p.cantidad}}</label>
                 <input class="cantidadPro" type="number" ng-model="producto[$index].cantidad">
                 <input  class="nombrePro" type="hidden"  ng-model="producto[$index].nombre=p.nombre"> 
                 <input  class="idProd"  type="hidden" ng-model="producto[$index].idpod=p.id_producto">
                 <input  class="precio"  type="hidden" ng-model="producto[$index].precio=p.precio">                  
                 <br>
                 <button class="compra" ng-click="registracompra()"> Comprar</button>              	
             
              
            </div>
          </div> 
	</div>
	
</div>	
</div>	
</body>
</html>