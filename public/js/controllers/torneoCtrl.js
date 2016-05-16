angular.module('torneoCtrl', [])

// inject the Comment service into our controller
.controller('torneoController', function($scope, $http, $location, $window) {

    $scope.loading = true;


    $http.post("api/proximosPartidos", {},{}).then(function(data){
            console.log(data.data);
            $scope.proximospartidos = data.data.partido;

        });



    $scope.submit = function() {
        console.log($scope.datos.email);
            $http.post('api/login', {email:$scope.datos.email, password: $scope.datos.password}, {}).then(function(data){
            console.log(data);
            if(data.data.success == "ok")
            {
                $window.location.href = 'index';

            }
            

        }, function(error){
            console.log(error);

        });

        

    };




});