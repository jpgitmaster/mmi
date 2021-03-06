'use strict'; 
var usrContent = angular.module('usrContent', []);

usrContent.controller('ctrlImages', ['$scope', '$timeout',
    function($scope, $timeout) {

    $scope.imgForm = function(imgtarget){
        $timeout(function(){
          $scope.imgtarget = imgtarget;
        }, 10);
    }

    $scope.resetBrowse = function(){
        if($scope.msg['dp']){
            $scope.msg['dp'] = '';
        }
        angular.element('.fileUpload .upload').val('');
    }
    
}]);
usrContent.directive('fileInput', ['$parse', '$http', '$timeout',
    function($parse, $http, $timeout){
    return {
        restrict: 'A',
        link: function(scope, elm, attrs){
          elm.bind('change', function(){
              
            var files = elm[0].files;
            console.log(files);
            
            $parse(attrs.fileInput).assign(scope, files);
            scope.$apply();
            
            // scope.shw_avatarmdl = true;
            // scope.loader = true;

            $http({
                method: 'POST',
                url: "/admin/images/validate_banner",
                headers: { 'Content-Type': undefined },
                transformRequest: function (data) {
                    var fd = new FormData();
                    angular.forEach(data.img_files, function(file){
                       fd.append('file', file);
                    });
                    return fd;
                },
                data: {img_files: files}
            }).then(function(result){
                var msg = result.data;
            //     scope.shw_avatarmdl = false;
                
                if(!msg['dp']['error']['file']){
                    var file = files[0];
                    angular.element('#imgModal').appendTo('body').modal({
                        backdrop: 'static'
                    });
                    (function(file) {
                        var reader = new FileReader();
                        reader.readAsDataURL(file);
                        reader.onload = function(e) {
                            var imgTarget = e.target.result;
                            scope.imgForm(imgTarget);
                        }
                    }(file));
                    scope.msg = '';
                }else{
                    scope.msg = msg;
                }
            });
          });
        }
    }
}]);