'use strict';
var MMIapp = angular.module('MMIapp', ['ngSanitize', 'ngResource', 'ngAnimate']);

MMIapp.controller('ctrlLogin', ['$scope', '$timeout', '$http',
    function($scope, $timeout, $http) {
}]);

MMIapp.config(function($interpolateProvider){
    $interpolateProvider.startSymbol('<%=').endSymbol('%>');
});