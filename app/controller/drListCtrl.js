app.controller('drListCtrl', function ($scope, $rootScope, Data, $filter, $location, ngTableParams, $routeParams, $cookies) {
	//send id//
	$scope.detail = function (list) {
		Data.drId =  list.id;//alert(Data.drId);
	}

	//Fetch Data//
	Data.get('doctors').then(function(data){
		$scope.doctors = data.data;
		$scope.doctors.push( data.doctors );
	});
	// Serach by Doctor Name
	$scope.drSearch = function (data) {		
		 var city =  data.city;//alert(city);
		 var drname =  data.name;//alert(drname);
		 var specialty =  data.specialty;
		 var locality =  data.locality;
		 if(city == undefined){ city = "indore"; }	
			 if(drname != undefined ){
				 //var url = "/doctors/"+city+"?n=" + (drname || "");
				$location.path('/doctors/'+city).search({
					n: drname
				});
			 }else{
				 $location.url( "/doctors/"+city+"/"+specialty+"/"+locality);
			 }
	}
	
	function init() {
		var search = $location.search();
		var name = search.n;
		var specialty = $routeParams.specialty;
		var locality = $routeParams.locality;
	if(name != undefined){	
		var cty = $routeParams.drname;
		Data.get('doctor/'+cty+'/'+name).then(function(result){
				if(result.status == "success"){
					$scope.lists = result.data;
					$scope.data = result;
				}else{
					$scope.msg = result;
				}
		 });
	}else if(locality != '' && locality != undefined) { 		
		var city = $routeParams.city; 
		Data.get('doctors/'+city+'/'+specialty+'/'+locality).then(function(result){
			if(result.status == "success"){
				$scope.lists = result.data;
				$scope.data = result;
			}else{
				$scope.msg = result;
			}
	 	});
	}else{ 
		var city = $routeParams.city; 
		Data.get('doctors/'+city+'/'+specialty).then(function(result){
			if(result.status == "success"){
				$scope.lists = result.data;
				$scope.data = result;
			}else{
				$scope.msg = result;
			}
	 	});
	}
 }
	
init();
});

		//pagination	
	 /*   $scope.tableParams = new ngTableParams(
			// merge default params with url
			angular.extend({
				page: 1,            // show first page
				count: 5,          // count per page
				sorting: {
					drname: 'asc'     // initial sorting
				}
			},
			$location.search()), {
				total: data.length, // length of data
				getData: function($defer, params) {
					$location.search(params.url()); // put params in url
	
					// use build-in angular filter
					var orderedData = params.sorting ?
							$filter('orderBy')(data, params.orderBy()) :
							data;
	
					$defer.resolve(orderedData.slice((params.page() - 1) * params.count(), params.page() * params.count()));
				}
			}
		);*/

