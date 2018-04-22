'use strict';
var MMIapp = angular.module('MMIapp', ['ngSanitize', 'ngResource', 'ngAnimate']);

MMIapp.controller('ctrlLogin', ['$scope',
    function($scope) {
}]);

MMIapp.config(function($interpolateProvider){
    $interpolateProvider.startSymbol('<%=').endSymbol('%>');
});