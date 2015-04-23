app.controller('indexCtrl', function ($scope, Data, $location) {

	//Fetch Data//
    Data.get('doctors').then(function(data){
		$scope.doctors = data.data;
		$scope.doctors.push( data.doctors );
	});
	// Serach by Doctor Name
	$scope.drSearch = function () {
			
		 var city =  $scope.city;//alert(city);
		 var drname =  $scope.drname;//alert(dnm);
		 var specialty =  $scope.specialty;
		 var locality =  $scope.locality;
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
	
   // Activates Tooltips for Social Links
  $('.tooltip-social').tooltip({
    selector: "a[data-toggle=tooltip]"
  })
   
});