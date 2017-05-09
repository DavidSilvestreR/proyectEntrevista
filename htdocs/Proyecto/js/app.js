$(document).ready(function(){
$("#submit").click(function(){
var name = $("#nameP").val();
var numStokc = $("#numStokc").val();
var precio = $("#precio").val();
var dataString = 'nombre='+ name + '&ncanticad='+ numStokc + '&precio='+ precio;
if(name==''||numStokc==''||precio=='')
{
alert("Favor de llenar Todos los campos.");
}
else
{
$.ajax({
type: "POST",
url: "api/registraProducto.php",
data: dataString,
cache: false,
success: function(result){
console.log(result);
if (result) {
	alert('producto Registrado Correctamente');
    $("#nameP").val("");
    $("#numStokc").val("");
    $("#precio").val("");
}else{
	alert('Error al registrar');
}
}
});
}
return false;
});
});