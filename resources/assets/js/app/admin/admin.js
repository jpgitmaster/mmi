'use strict';

var admnApp = angular.module('admnApp', ['ngSanitize', 'ngResource', 'ngAnimate', 'usrContent']);


admnApp.controller('ctrlApp', ['$scope',
  function($scope) {
    
}]);

admnApp.config(function($interpolateProvider){
    $interpolateProvider.startSymbol('<%=').endSymbol('%>');
});

// var usrHeader = angular.module('usrHeader', []);

// usrHeader.controller('ctrlHeader', ['$scope',
// 	function($scope) {

// }]);