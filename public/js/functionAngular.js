 var app = angular.module('myApp',['ngMaterial'])
app.controller('MyController',  function($scope,$http){
          $http.get('http://localhost:8080/nganhang/public/themcauhoi').success(function(response) {
            $scope.nganh=response;
            console.log(response);
        });
        // Tab ngành
         $scope.current_tab = 1;

        $scope.changeTab = function(index){
        	$scope.current_tab = index;
        };

        $scope.isActiveTab = function(index){
        	return index === $scope.current_tab;
        };

        // Tab Môn Học
        $scope.current_tab1 = 1;

        
        $scope.changeTab1 = function(index){
                $scope.current_tab1 = index;
        };
        
      
        $scope.isActiveTab1 = function(index){
                return index === $scope.current_tab1;
        };


        // Tab Chương
        $scope.current_tab2 = 1;

  
        $scope.changeTab2 = function(index){
                $scope.current_tab2 = index;
        };
        
        $scope.isActiveTab2 = function(index){
                return index === $scope.current_tab2;
        };


      

})





