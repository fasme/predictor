angular.module('commentService', [])

.factory('Comment', function($http) {

    return {
        // get all the comments
        get : function() {
          
            return $http.get('api/comments');
        },

        // save a comment (pass in comment data)
        save : function(commentData) {
            console.log(commentData.e);
            return $http({
                method: 'POST',
                url: 'api/comments',
                headers: { 'Content-Type' : 'application/json' },
                data: {e:commentData.e}
            });
        },

        // destroy a comment
        destroy : function(id) {
            return $http.delete('api/comments/' + id);
        }
    }

});