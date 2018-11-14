 var app = angular.module('myApp',['ngRoute','ngMaterial']).constant('API', 'http://localhost/nganhangdethi/public/')
 app.controller('MyController',  function($scope,$http){

 })

 app.config(function ($routeProvider,$locationProvider) {
 	var urlLocal="http://localhost/nganhangdethi/resources/views/";
 	$routeProvider
 	.when('/',{
 		templateUrl:urlLocal+'admin/adminIndex.php',
 	})
 	.when('/gvAdd',{
 		templateUrl:urlLocal+'admin/giangvien/giangvien_add.html',
 		controller:'themgiangvien'
 	})
 	.when('/gvEdit',{
 		templateUrl:urlLocal+'admin/giangvien/giangvien_edit.html',
 		controller:'suagiangvien'
 	})
 	.when('/rapAdd',{
 		templateUrl:urlLocal+'admin/rapChieu/rapChieu_add.html',
 		controller:'themRapChieu'
 	})
 	.when('/rapEdit',{
 		templateUrl:urlLocal+'admin/rapChieu/rapChieu_edit.html',
 		controller:'suaRapChieu'
 	})
 	.when('/phimAdd',{
 		templateUrl:urlLocal+'admin/phim/phim_Add.html',
 		controller:'ql_Phim'
 	})
 	.when('/phimEdit', {
 		templateUrl:urlLocal+ 'admin/phim/phim_Edit.html',
 		controller: 'ql_Phim'
 	})
 	.when('/tl',{
 		templateUrl:urlLocal+'admin/theLoai/theLoaiView.html',
 		controller:'theloai'
 	})

 	.otherwise({ redirectTo: '/' })
 });
 app.controller('themgiangvien',function ($scope,$http,$mdToast) {
 	$scope.addInfo=function(){
 		var urlCon='http://localhost/nganhangdethi/public/addGV';
 		var data =$.param({
 			tenGV:$scope.nameGV,
 			ngaySinh:$scope.ngaysinh,
 			email:$scope.email,
 			soDT:$scope.soDT,
 			tenTK:$scope.taikhoan
 		});
 		console.log(data);
 		var config={
 			headers:{
 				'content-type':'application/x-www-form-urlencoded;charset=UTF-8'
 			}
 		}
 		$http.post(urlCon,data,config)
 		.then(function(res){
 			if(res.data =='addSucess')	{	
 				$scope.showMessg('Thêm thành công');
 			}
 		},function(er){
 			$scope.showMessg('Thêm thất bại');
 			console.log(er.data);			
 		})
 	}
 	/* hien thi thong bao */
 	var last = {
 		bottom: true,
 		top: false,
 		left: false,
 		right: true
 	};

 	$scope.toastPosition = angular.extend({},last);

 	$scope.getToastPosition = function() {
 		sanitizePosition();

 		return Object.keys($scope.toastPosition)
 		.filter(function(pos) { return $scope.toastPosition[pos]; })
 		.join(' ');
 	};

 	function sanitizePosition() {
 		var current = $scope.toastPosition;

 		if ( current.bottom && last.top ) current.top = false;
 		if ( current.top && last.bottom ) current.bottom = false;
 		if ( current.right && last.left ) current.left = false;
 		if ( current.left && last.right ) current.right = false;

 		last = angular.extend({},current);
 	}

 	$scope.showMessg = function(thongbao) {
 		var pinTo = $scope.getToastPosition();

 		$mdToast.show(
 			$mdToast.simple()
 			.textContent(thongbao)
 			.position(pinTo )
 			.hideDelay(3000)
 			);
 	};
 })
 app.controller('suagiangvien', function($scope,$http,API,$mdToast){
 	$http.get(API+'listGV').success(function(response){
 		$scope.giangviens=response;
 	});
 	$scope.showEdit=function(gv){
 		gv.hienThi=!gv.hienThi;
 	}	
 	$scope.show=function(gv){
 		gv.hienThi=!gv.hienThi;
 		$http.get(API+'listGV').success(function(response){
 			$scope.giangviens=response;
 		});

 	}	

 	$scope.editGV=function(gv){
 		
 		var data =$.param({
 			tenGV:$scope.nameGV,
 			ngaySinh:$scope.ngaysinh,
 			email:$scope.email,
 			soDT:$scope.soDT,
 			tenTK:$scope.taikhoan,
 			matKhau:$scope.pass
 		});
 		var config={
 			headers:{
 				'content-type':'application/x-www-form-urlencoded;charset=UTF-8'
 			}
 		}
 		$http.post(API+"editGV/"+gv.idGV,data,config)
 		.then(function(res){
 			if(res.data == 1)	{	
 				$scope.showMessg('Edit thành công');
 				gv.hienThi=!gv.hienThi;
 				
 			}
 		},function(er){
 			$scope.showMessg('Edit thất bại');
 			console.log(er.data);
 			
 		})

 	};

 	$scope.deleteGV=function(id){
 		var isXacNhan =confirm("Bạn có muốn xóa ?");
 		if(isXacNhan){
 			$http.get(API+'deleteGV/'+id)
 			.then(function(res){
 				if(res.data == 1)	{	
 					$scope.showMessg('Xóa thành công');
 					$http.get(API+'listGV').success(function(response){
 						$scope.giangviens=response;
 					});
 				}
 			},function(er){
 				$scope.showMessg('Xóa thất bại !');
 			})
 		}
 		else
 			return false;
 	}
 	var last = {
 		bottom: true,
 		top: false,
 		left: false,
 		right: true
 	};

 	$scope.toastPosition = angular.extend({},last);

 	$scope.getToastPosition = function() {
 		sanitizePosition();

 		return Object.keys($scope.toastPosition)
 		.filter(function(pos) { return $scope.toastPosition[pos]; })
 		.join(' ');
 	};

 	function sanitizePosition() {
 		var current = $scope.toastPosition;

 		if ( current.bottom && last.top ) current.top = false;
 		if ( current.top && last.bottom ) current.bottom = false;
 		if ( current.right && last.left ) current.left = false;
 		if ( current.left && last.right ) current.right = false;

 		last = angular.extend({},current);
 	}

 	$scope.showMessg = function(thongbao) {
 		var pinTo = $scope.getToastPosition();

 		$mdToast.show(
 			$mdToast.simple()
 			.textContent(thongbao)
 			.position(pinTo )
 			.hideDelay(3000)
 			);
 	};

 });