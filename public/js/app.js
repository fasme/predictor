var commentApp = angular.module('commentApp', ['mainCtrl','loginCtrl', 'commentService', 'torneoCtrl'],function($interpolateProvider) {
        $interpolateProvider.startSymbol('<%');
        $interpolateProvider.endSymbol('%>');
    }
        ); 


