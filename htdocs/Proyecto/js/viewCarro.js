var implementacion = angular.module('carro',[]);
implementacion.controller('carroCTRL',['$scope','$http','$timeout',function($scope,$http,$timeout,$interval,$mdDialog){ 
  
  $scope.getCarroInfo=function(){
    $http.get('./api/carrito.php', $scope.datos).then(function(res){ 
      $scope.carrito=res.data
      console.log($scope.carrito);
   });
  }  
  $scope.getCarroInfo();

  $scope.pagarCarrito=function(){ 
    swal({
          title: "Esta seguro de Realizar La compra",
          text: "",
          type: "",
          showCancelButton: true,
          confirmButtonColor: "#DD6B55",
          confirmButtonText: "Si compra",
          closeOnConfirm: false
    },
    function(){
      
      location.href="http://localhost/Proyecto/api/pagarCarrito.php";
      swal("Compra Realizada", "Gracias por su preferenca");      
      setTimeout(function(){ location.reload(); },1000);
    });



  }



}]);

