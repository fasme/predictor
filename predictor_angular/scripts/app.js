var app = angular.module("app",["ngRoute", "ngResource"])

.config(["$routeProvider", function ($routeProvider)
{
	$routeProvider.when("/home", {
		templateUrl: "templates/list.html",
		controller: "HomeCtrl"

	})
	.when('/edit/:id', {
		templateUrl: "templates/edit.html",
		controller: "EditCtrl"
	})

	.when('/create', {
		templateUrl: "templates/create.html",
		controller: "CreateCtrl"
	})
}])


.controller("homeCtrl", ["$scope", function($scope) {

alert();
}])


.controller("CreateCtrl", ["$scope", "Videos", "$http", function($scope, Videos,$http) {


$scope.submit = function(){
	


	Videos.save("wn")
            .success(function(data) {

            	console.log(data);
                // if successful, we'll need to refresh the comment list
                /*Comment.get()
                    .success(function(getData) {
                        $scope.comments = getData;
                        $scope.loading = false;
                    });
                    */

            })
            .error(function(data) {
                console.log(data);
            });




}


}])


/*
.factory("Videos",function($resource)
{
	console.log("FACTORY");

	r = $resource("http://localhost/predictor/public/videos/:id",{id:"@_id"},{
		update: {method: "PUT", params: {id:"@id"}}
	})

	console.log(r);
	return r;
	
})
*/

.factory('Videos', function($http) {

    return {
        // get all the comments
        get : function() {
            return $http.get('/api/comments');
        },

        // save a comment (pass in comment data)
        save : function(commentData) {

  		console.log(commentData);
            return $http({
                method: 'POST',
                url: '../public/videos',
                headers: { 'Content-Type' : 'application/json' },
                //data: $.param(commentData)
                data: {e:commentData}
            });
        },

        // destroy a comment
        destroy : function(id) {
            return $http.delete('/api/comments/' + id);
        }
    }

});
