app.controller('drDetailCtrl', function ($scope, Data, $routeParams, $location, $cookies) {
	if(Data.drId != undefined){
		$cookies.id = Data.drId;
	}	
	//Fetch Data/	
    Data.get('doctor/'+$cookies.id).then(function(data){
		$scope.details = data.data;
    });
	//End//	
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
	
});

