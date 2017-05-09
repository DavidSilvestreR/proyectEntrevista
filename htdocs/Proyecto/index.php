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
  <script src="./lib/dist/sweetalert.min.js"></script>

  <script src="js/app.js"></script>

<body>
 <?php require("templates/nav.php"); ?>
  <div class="container">
  	<div class="row">
  		<h1 class="titlePage">Nuevo Producto</h1>
  		<div class="col m12 content">
  			<div class="row ">
  				<div class="col m6">
  				<input placeholder="Nombre" id="nameP" type="text" class="validate">
         		 <label for="first_name">Nombre del Priducto</label>  					
  				</div>
  				<div class="col m6">
  				<input placeholder="Cantidad " id="numStokc" type="text" class="validate">
         		<label for="first_name">Stock</label>   					
  				</div>
  			</div>
  			<div class="row">
  				<div class="col m12">
  				<input placeholder="$percip" id="precio" type="number" class="validate">
         		<label for="first_name">preco del producto</label>    					
  				</div>
  			</div>
  			<div class="col m12 submit-btn">
  			<input  class="waves-effect waves-light btn" id="submit" type="button" value="Agregar">
  			</div>
  		</div>
  		
  	</div>

  </div>
	
</body>
</html>