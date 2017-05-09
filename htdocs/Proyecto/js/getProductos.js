var implementacion = angular.module('venderProductos',[]);
implementacion.controller('vendernCTRL',['$scope','$http','$timeout',function($scope,$http,$timeout,$interval,$mdDialog){ 
  $scope.getProductos=function(){
    $http.get('./api/getProductos.php', $scope.datos).then(function(res){ 
      $scope.productos=res.data
      console.log($scope.productos);
   });
  }
  $scope.getProductos(); 
  $scope.producto={};
  $scope.registracompra = function() {   
   $http({
          method: 'POST',
          url:  './api/carrito.php',
          data:$scope.producto,
        }).then(function(response){
          if(response.data){
            swal({
              title: 'Listo!',
              type: 'success',
              text: 'Articulos Agregados'
            }, function(){
              location.reload();
            });
          }else{

          }
        });
  };
}]);

