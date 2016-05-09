angular.module('loginCtrl', [])

// inject the Comment service into our controller
.controller('loginController', function($scope, $http, $location, $window) {

    // object to hold all the data for the new comment form
   

    // loading variable to show the spinning loading icon
    $scope.loading = true;

    

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