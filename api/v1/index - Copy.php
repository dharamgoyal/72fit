<?php
require '.././libs/Slim/Slim.php';

\Slim\Slim::registerAutoloader();
$app = new \Slim\Slim();
$app = \Slim\Slim::getInstance();



//RESTAPI: Get Doctors list
$app->get('/doctors', function(){ 
	$rows = array
			(
			"status" => "success",
			"message" => "Data selected from database",
			"data" => array(			 
				"0" => array
					(
					"id" => 1,	    
					"drname" => 'Dr. Ashok Nayak',	    
					"address" => 'No. G-3/346, Sector E8, Gulmohar Colony, Bhopal - 460039',
					"speciality"=>'Dermatologist/Cosmetologist Cosmetic Skin Care Clinic / Koramangala Womens Clinic ',
					"experience"=>18,
					"city"=>'Bhopal'	    
					),
				"1" => array
					(
					"id" => 2,
					"drname" => 'Dr. Yogesh Varma',
					"address" => 'E4/151, Shop 10, Arera Colony, Bhopal - 462016',
					"speciality"=>'Dermatologist/ dentist',
					"experience"=>17,
					"city"=>'Bhopal'
					),
				"2" => array
					(
					"id" => 3,
					"drname" => 'Ayushman Hospital',
					"address" => 'Ayushman Hospital, Sector C, Shahpura, Bhopal - 462016',
					"speciality"=>'Dermatologist / dentist ',
					"experience"=>16,
					"city"=>'Bhopal'
					),
				"3" => array
					(
					"id" => 4,
					"drname" => 'Dr. S C Rajendran',
					"address" => 'MY Hospital, Sector C, ab-road, Indore - 462001',
					"speciality"=>'Cosmetologist Cosmetic Skin Care Clinic / Koramangala Womens Clinic ',
					"experience"=>15,
					"city"=>'Indore'
					),
				"4" => array
					(
					"id" => 5,
					"drname" => 'Dr. Devendran',
					"address" => 'MY Hospital, Sector C, ab-road, Indore - 462001',
					"speciality"=>'Cosmetologist Cosmetic Skin Care Clinic / Koramangala Womens Clinic ',
					"experience"=>15,
					"city"=>'Indore'
					),
				"5" => array
					(
					"id" => 6,
					"drname" => 'Dr. S C Jain',
					"address" => 'MY Hospital, Sector C, rnt-marg, Indore - 462001',
					"speciality"=>'Cosmetologist Cosmetic Skin Care Clinic / dentist',
					"experience"=>15,
					"city"=>'Indore'
					),
				"6" => array
					(
					"id" => 7,
					"drname" => 'Dr. D C Gupta',
					"address" => 'MY Hospital, Sector C, ab-road, Indore - 462001',
					"speciality"=>'dentist / Koramangala Womens Clinic ',
					"experience"=>15,
					"city"=>'Indore'
					)
				,
				"7" => array
					(
					"id" => 8,
					"drname" => 'Dr. D C Sharma',
					"address" => 'MY Hospital, Sector C, rnt, Indore - 462001',
					"speciality"=>'Cosmetologist Cosmetic Skin Care Clinic / Koramangala Womens Clinic ',
					"experience"=>15,
					"city"=>'Indore'
					)
				,
				"8" => array
					(
					"id" => 9,
					"drname" => 'Dr. M K Gupta',
					"address" => 'MY Hospital, Sector C, ab-road, Indore - 462001',
					"speciality"=>'Cosmetologist Cosmetic Skin Care Clinic / Koramangala Womens Clinic ',
					"experience"=>15,
					"city"=>'Indore'
					)
				,
				"9" => array
					(
					"id" => 10,
					"drname" => 'Dr. D V Jain',
					"address" => 'MY Hospital, Sector C, ab road, Indore - 462001',
					"speciality"=>'dentist ',
					"experience"=>15,
					"city"=>'Indore'
					)
				,
				"10" => array
					(
					"id" => 11,
					"drname" => 'Dr. G K Gupta',
					"address" => 'MY Hospital, Sector C, marg, Indore - 462001',
					"speciality"=>'dentist / Koramangala Womens Clinic ',
					"experience"=>15,
					"city"=>'Indore'
					)
				,
				"11" => array
					(
					"id" => 12,
					"drname" => 'Dr. D C Varma',
					"address" => 'MY Hospital, Sector C, rnt, Indore - 462001',
					"speciality"=>'Cosmetologist Cosmetic Skin Care Clinic / Koramangala Womens Clinic ',
					"experience"=>15,
					"city"=>'Indore'					)
				,
				"12" => array
					(
					"id" => 13,
					"drname" => 'Dr. L C Nayak',
					"address" => 'MY Hospital, Sector C, marg, Indore - 462001',
					"speciality"=>'dentist / Koramangala Womens Clinic ',
					"experience"=>15,
					"city"=>'Indore'
					)										
				)	
	     );
    echoResponse(200, $rows);
});

										/* End */ 
//RESTAPI: Get Search Doctor list
$app->get('/doctors/:city/:specialty', function($city,$specialty) { 
    global $db;
//echo $city; 
	$city = explode(" ",$city);
	$row1 = array();
	foreach($city as $findme){
		$data=array(			 
				"0" => array
					(
					"id" => 1,	    
					"drname" => 'Dr. Ashok Nayak',	    
					"address" => 'No. G-3/346, Sector E8, Gulmohar Colony, Bhopal - 460039',
					"speciality"=>'Dermatologist/Cosmetologist Cosmetic Skin Care Clinic / Koramangala Womens Clinic ',
					"experience"=>18,
					"city"=>'Bhopal'	    
					),
				"1" => array
					(
					"id" => 2,
					"drname" => 'Dr. Yogesh Varma',
					"address" => 'E4/151, Shop 10, Arera Colony, Bhopal - 462016',
					"speciality"=>'Dermatologist/ dentist',
					"experience"=>17,
					"city"=>'Bhopal'
					),
				"2" => array
					(
					"id" => 3,
					"drname" => 'Ayushman Hospital',
					"address" => 'Ayushman Hospital, Sector C, Shahpura, Bhopal - 462016',
					"speciality"=>'Dermatologist / dentist ',
					"experience"=>16,
					"city"=>'Bhopal'
					),
				"3" => array
					(
					"id" => 4,
					"drname" => 'Dr. S C Rajendran',
					"address" => 'MY Hospital, Sector C, ab-road, Indore - 462001',
					"speciality"=>'Cosmetologist Cosmetic Skin Care Clinic / Koramangala Womens Clinic ',
					"experience"=>15,
					"city"=>'Indore'
					),
				"4" => array
					(
					"id" => 5,
					"drname" => 'Dr. Devendran',
					"address" => 'MY Hospital, Sector C, ab-road, Indore - 462001',
					"speciality"=>'Cosmetologist Cosmetic Skin Care Clinic / Koramangala Womens Clinic ',
					"experience"=>15,
					"city"=>'Indore'
					),
				"5" => array
					(
					"id" => 6,
					"drname" => 'Dr. S C Jain',
					"address" => 'MY Hospital, Sector C, rnt-marg, Indore - 462001',
					"speciality"=>'Cosmetologist Cosmetic Skin Care Clinic / dentist',
					"experience"=>15,
					"city"=>'Indore'
					),
				"6" => array
					(
					"id" => 7,
					"drname" => 'Dr. D C Gupta',
					"address" => 'MY Hospital, Sector C, ab-road, Indore - 462001',
					"speciality"=>'dentist / Koramangala Womens Clinic ',
					"experience"=>15,
					"city"=>'Indore'
					)
				,
				"7" => array
					(
					"id" => 8,
					"drname" => 'Dr. D C Sharma',
					"address" => 'MY Hospital, Sector C, rnt, Indore - 462001',
					"speciality"=>'Cosmetologist Cosmetic Skin Care Clinic / Koramangala Womens Clinic ',
					"experience"=>15,
					"city"=>'Indore'
					)
				,
				"8" => array
					(
					"id" => 9,
					"drname" => 'Dr. M K Gupta',
					"address" => 'MY Hospital, Sector C, ab-road, Indore - 462001',
					"speciality"=>'Cosmetologist Cosmetic Skin Care Clinic / Koramangala Womens Clinic ',
					"experience"=>15,
					"city"=>'Indore'
					)
				,
				"9" => array
					(
					"id" => 10,
					"drname" => 'Dr. D V Jain',
					"address" => 'MY Hospital, Sector C, ab road, Indore - 462001',
					"speciality"=>'dentist ',
					"experience"=>15,
					"city"=>'Indore'
					)
				,
				"10" => array
					(
					"id" => 11,
					"drname" => 'Dr. G K Gupta',
					"address" => 'MY Hospital, Sector C, marg, Indore - 462001',
					"speciality"=>'dentist / Koramangala Womens Clinic ',
					"experience"=>15,
					"city"=>'Indore'
					)
				,
				"11" => array
					(
					"id" => 12,
					"drname" => 'Dr. D C Varma',
					"address" => 'MY Hospital, Sector C, rnt, Indore - 462001',
					"speciality"=>'Cosmetologist Cosmetic Skin Care Clinic / Koramangala Womens Clinic ',
					"experience"=>15,
					"city"=>'Indore'					)
				,
				"12" => array
					(
					"id" => 13,
					"drname" => 'Dr. L C Nayak',
					"address" => 'MY Hospital, Sector C, marg, Indore - 462001',
					"speciality"=>'dentist / Koramangala Womens Clinic ',
					"experience"=>15,
					"city"=>'Indore'
					)										
				);
	 		
	 	foreach ($data as $k=>$v){	
		  if(stripos($v['city'], $findme) !== false ){
			 $row1[]=$v;
		  }
		}
	} 

//echo $specialty;
//echo '<pre>'; print_r($row1);die();		
	$specialty = explode(" ",$specialty);
	
	foreach($specialty as $findme1){
	 $row = array();
	 foreach ($row1 as $k=>$v1){
		 if((stripos($v1['speciality'], $findme1) !== false) ){
			$row[]=$v1;	  
		 }
	 }
	}
	
//echo '<pre>'; print_r($row); die();
	$tmp = array();
    foreach(array_reverse($row) as $v3) {
        $id = $v3['id'];
        isset($tmp[$id]) or $tmp[$id] = $v3;
    }
    $a = array_reverse(array_values($tmp));
	$a1 = count($a);
	if(empty($a)){
		$rows = Array
	   (
		"status" => 'failed',
		"message" => "We couldn't find doctors for you
					Your search for '".$specialty."' did not match any doctors."
	   );
	}else{	
		$rows = Array
		   (		
		    "count"=>$a1,
			"status" => "success",
			"message" => "Data selected from database",
			"data" => $a
		   );
	}	   
	   //echo '<pre>'; print_r($rows );
    echoResponse(200, $rows);
});
										/* End */
										
//RESTAPI: Get Search Doctor list
$app->get('/doctors/:city/:specialty/:locality', function($city,$specialty,$locality) { 
    global $db;
//echo $city; die();
	$city = explode(" ",$city);
	$row1 = array();
	foreach($city as $findme){
		$data=array(			 
				"0" => array
					(
					"id" => 1,	    
					"drname" => 'Dr. Ashok Nayak',	    
					"address" => 'No. G-3/346, Sector E8, Gulmohar Colony, Bhopal - 460039',
					"speciality"=>'Dermatologist/Cosmetologist Cosmetic Skin Care Clinic / Koramangala Womens Clinic ',
					"experience"=>18,
					"city"=>'Bhopal'	    
					),
				"1" => array
					(
					"id" => 2,
					"drname" => 'Dr. Yogesh Varma',
					"address" => 'E4/151, Shop 10, Arera Colony, Bhopal - 462016',
					"speciality"=>'Dermatologist/ dentist',
					"experience"=>17,
					"city"=>'Bhopal'
					),
				"2" => array
					(
					"id" => 3,
					"drname" => 'Ayushman Hospital',
					"address" => 'Ayushman Hospital, Sector C, Shahpura, Bhopal - 462016',
					"speciality"=>'Dermatologist / dentist ',
					"experience"=>16,
					"city"=>'Bhopal'
					),
				"3" => array
					(
					"id" => 4,
					"drname" => 'Dr. S C Rajendran',
					"address" => 'MY Hospital, Sector C, ab-road, Indore - 462001',
					"speciality"=>'Cosmetologist Cosmetic Skin Care Clinic / Koramangala Womens Clinic ',
					"experience"=>15,
					"city"=>'Indore'
					),
				"4" => array
					(
					"id" => 5,
					"drname" => 'Dr. Devendran',
					"address" => 'MY Hospital, Sector C, ab-road, Indore - 462001',
					"speciality"=>'Cosmetologist Cosmetic Skin Care Clinic / Koramangala Womens Clinic ',
					"experience"=>15,
					"city"=>'Indore'
					),
				"5" => array
					(
					"id" => 6,
					"drname" => 'Dr. S C Jain',
					"address" => 'MY Hospital, Sector C, rnt-marg, Indore - 462001',
					"speciality"=>'Cosmetologist Cosmetic Skin Care Clinic / dentist',
					"experience"=>15,
					"city"=>'Indore'
					),
				"6" => array
					(
					"id" => 7,
					"drname" => 'Dr. D C Gupta',
					"address" => 'MY Hospital, Sector C, ab-road, Indore - 462001',
					"speciality"=>'dentist / Koramangala Womens Clinic ',
					"experience"=>15,
					"city"=>'Indore'
					)
				,
				"7" => array
					(
					"id" => 8,
					"drname" => 'Dr. D C Sharma',
					"address" => 'MY Hospital, Sector C, rnt, Indore - 462001',
					"speciality"=>'Cosmetologist Cosmetic Skin Care Clinic / Koramangala Womens Clinic ',
					"experience"=>15,
					"city"=>'Indore'
					)
				,
				"8" => array
					(
					"id" => 9,
					"drname" => 'Dr. M K Gupta',
					"address" => 'MY Hospital, Sector C, ab-road, Indore - 462001',
					"speciality"=>'Cosmetologist Cosmetic Skin Care Clinic / Koramangala Womens Clinic ',
					"experience"=>15,
					"city"=>'Indore'
					)
				,
				"9" => array
					(
					"id" => 10,
					"drname" => 'Dr. D V Jain',
					"address" => 'MY Hospital, Sector C, ab road, Indore - 462001',
					"speciality"=>'dentist ',
					"experience"=>15,
					"city"=>'Indore'
					)
				,
				"10" => array
					(
					"id" => 11,
					"drname" => 'Dr. G K Gupta',
					"address" => 'MY Hospital, Sector C, marg, Indore - 462001',
					"speciality"=>'dentist / Koramangala Womens Clinic ',
					"experience"=>15,
					"city"=>'Indore'
					)
				,
				"11" => array
					(
					"id" => 12,
					"drname" => 'Dr. D C Varma',
					"address" => 'MY Hospital, Sector C, rnt, Indore - 462001',
					"speciality"=>'Cosmetologist Cosmetic Skin Care Clinic / Koramangala Womens Clinic ',
					"experience"=>15,
					"city"=>'Indore'					)
				,
				"12" => array
					(
					"id" => 13,
					"drname" => 'Dr. L C Nayak',
					"address" => 'MY Hospital, Sector C, marg, Indore - 462001',
					"speciality"=>'dentist / Koramangala Womens Clinic ',
					"experience"=>15,
					"city"=>'Indore'
					)										
				);
	 		
	 	foreach ($data as $k=>$v){	
		  if(stripos($v['city'], $findme) !== false ){
			 $row1[]=$v;
		  }
		}
	} 

//echo $specialty;
//echo '<pre>'; print_r($row1);		
	$specialty = explode(" ",$specialty);
	
	foreach($specialty as $findme1){
	 $row2 = array();
	 foreach ($row1 as $k=>$v1){
		 if((stripos($v1['speciality'], $findme1) !== false) ){
			$row2[]=$v1;	  
		 }
	 }
	}
	
//echo $locality;	
//	echo '<pre>'; print_r($row); die();
	$locality = explode(" ",$locality);
	$row = array();
	foreach($locality as $findme2){
	 foreach ($row2 as $k=>$v2){
		 if((stripos($v2['address'], $findme2) !== false) ){
			$row[]=$v2;	  
		 }
	 }
	}
//	echo '<pre>'; print_r($row); die();
	$tmp = array();
    foreach(array_reverse($row) as $v3) {
        $id = $v3['id'];
        isset($tmp[$id]) or $tmp[$id] = $v3;
    }
    $a = array_reverse(array_values($tmp));
	$a1 = count($a);
	if(empty($a)){
		$rows = Array
	   (
		"status" => 'failed',
		"message" => "We couldn't find doctors for you
					Your search for '".$specialty."' did not match any doctors."
	   );
	}else{	
		$rows = Array
		   (		
		    "count"=>$a1,
			"status" => "success",
			"message" => "Data selected from database",
			"data" => $a
		   );
	}	   
	   //echo '<pre>'; print_r($rows );
    echoResponse(200, $rows);
});
										/* End */

										
//RESTAPI: Get Search Doctor list
$app->get('/doctor/:cty/:name', function($city,$name) { 
    global $db;
//echo $name;die();
	$city = explode(" ",$city);
	$row1 = array();
	foreach($city as $findme){
		$data=array(			 
				"0" => array
					(
					"id" => 1,	    
					"drname" => 'Dr. Ashok Nayak',	    
					"address" => 'No. G-3/346, Sector E8, Gulmohar Colony, Bhopal - 460039',
					"speciality"=>'Dermatologist/Cosmetologist Cosmetic Skin Care Clinic / Koramangala Womens Clinic ',
					"experience"=>18,
					"city"=>'Bhopal'	    
					),
				"1" => array
					(
					"id" => 2,
					"drname" => 'Dr. Yogesh Varma',
					"address" => 'E4/151, Shop 10, Arera Colony, Bhopal - 462016',
					"speciality"=>'Dermatologist/ dentist',
					"experience"=>17,
					"city"=>'Bhopal'
					),
				"2" => array
					(
					"id" => 3,
					"drname" => 'Ayushman Hospital',
					"address" => 'Ayushman Hospital, Sector C, Shahpura, Bhopal - 462016',
					"speciality"=>'Dermatologist / dentist ',
					"experience"=>16,
					"city"=>'Bhopal'
					),
				"3" => array
					(
					"id" => 4,
					"drname" => 'Dr. S C Rajendran',
					"address" => 'MY Hospital, Sector C, ab-road, Indore - 462001',
					"speciality"=>'Cosmetologist Cosmetic Skin Care Clinic / Koramangala Womens Clinic ',
					"experience"=>15,
					"city"=>'Indore'
					),
				"4" => array
					(
					"id" => 5,
					"drname" => 'Dr. Devendran',
					"address" => 'MY Hospital, Sector C, ab-road, Indore - 462001',
					"speciality"=>'Cosmetologist Cosmetic Skin Care Clinic / Koramangala Womens Clinic ',
					"experience"=>15,
					"city"=>'Indore'
					),
				"5" => array
					(
					"id" => 6,
					"drname" => 'Dr. S C Jain',
					"address" => 'MY Hospital, Sector C, rnt-marg, Indore - 462001',
					"speciality"=>'Cosmetologist Cosmetic Skin Care Clinic / dentist',
					"experience"=>15,
					"city"=>'Indore'
					),
				"6" => array
					(
					"id" => 7,
					"drname" => 'Dr. D C Gupta',
					"address" => 'MY Hospital, Sector C, ab-road, Indore - 462001',
					"speciality"=>'dentist / Koramangala Womens Clinic ',
					"experience"=>15,
					"city"=>'Indore'
					)
				,
				"7" => array
					(
					"id" => 8,
					"drname" => 'Dr. D C Varma',
					"address" => 'MY Hospital, Sector C, rnt, Indore - 462001',
					"speciality"=>'Cosmetologist Cosmetic Skin Care Clinic / Koramangala Womens Clinic ',
					"experience"=>15,
					"city"=>'Indore'
					)
				,
				"8" => array
					(
					"id" => 9,
					"drname" => 'Dr. M K Gupta',
					"address" => 'MY Hospital, Sector C, ab-road, Indore - 462001',
					"speciality"=>'Cosmetologist Cosmetic Skin Care Clinic / Koramangala Womens Clinic ',
					"experience"=>15,
					"city"=>'Indore'
					)
				,
				"9" => array
					(
					"id" => 10,
					"drname" => 'Dr. D V Jain',
					"address" => 'MY Hospital, Sector C, ab road, Indore - 462001',
					"speciality"=>'dentist ',
					"experience"=>15,
					"city"=>'Indore'
					)
				,
				"10" => array
					(
					"id" => 11,
					"drname" => 'Dr. G K Gupta',
					"address" => 'MY Hospital, Sector C, marg, Indore - 462001',
					"speciality"=>'dentist / Koramangala Womens Clinic ',
					"experience"=>15,
					"city"=>'Indore'
					)
				,
				"11" => array
					(
					"id" => 12,
					"drname" => 'Dr. D C Varma',
					"address" => 'MY Hospital, rnt, Indore - 462001',
					"speciality"=>'dentist',
					"experience"=>15,
					"city"=>'Indore'					)
				,
				"12" => array
					(
					"id" => 13,
					"drname" => 'Dr. L C Nayak',
					"address" => 'MY Hospital, Sector C, marg, Indore - 462001',
					"speciality"=>'dentist / Koramangala Womens Clinic ',
					"experience"=>15,
					"city"=>'Indore'
					)										
				);
	 		
	 	foreach ($data as $k=>$v){	
		  if(stripos($v['city'], $findme) !== false ){
			 $row1[]=$v;
		  }
		}
	} 
		
	$result = preg_replace('/\bdr\b/i', '', $name);
	$string1 = str_replace(".","",$result);
	$string = explode(" ",$string1);
	
	foreach($string as $findme1){
	 $row = array();
	 foreach ($row1 as $k=>$v1){
		 if((stripos($v1['drname'], $findme1) !== false) ){
			$row[]=$v1;	  
		 }
	 }
	}
	//echo '<pre>'; print_r($row); die();	
	$tmp = array();
    foreach(array_reverse($row) as $v1) {
        $id = $v1['id'];
        isset($tmp[$id]) or $tmp[$id] = $v1;
    }
    $a = array_reverse(array_values($tmp));
	$a1 = count($a);
	if(empty($a)){
		$rows = Array
	   (
		"status" => 'failed',
		"message" => "We couldn't find doctors for you
					Your search for '".$name."' did not match any doctors."
	   );
	}else{	
		$rows = Array
		   (
		   	"name"=>$name,
		    "count"=>$a1,
			"status" => "success",
			"message" => "Data selected from database",
			"data" => $a
		   );
	}	   
	   //echo '<pre>'; print_r($rows );
    echoResponse(200, $rows);
});
										/* End */

//RESTAPI: Get Doctor Details
	$app->get('/doctor/:id', function($id) { 
		global $db;
		$uid = array('id'=>$id);
		$id =implode(" ",$uid);
	
		function array_r_search($param, $arr) {
			foreach ($arr as $item) {
				if (($item == $param) || (is_array($item) && array_r_search($param, $item))) {
					return $item;
				}
			}
			
			return false;
		}
		$arr = array(			 
				"0" => array
					(
					"id" => 1,	    
					"drname" => 'Dr. Ashok Nayak',	    
					"address" => 'No. G-3/346, Sector E8, Gulmohar Colony, Bhopal - 460039',
					"speciality"=>'Dermatologist/Cosmetologist Cosmetic Skin Care Clinic / Koramangala Womens Clinic ',
					"experience"=>18,
					"city"=>'Bhopal'	    
					),
				"1" => array
					(
					"id" => 2,
					"drname" => 'Dr. Yogesh Varma',
					"address" => 'E4/151, Shop 10, Arera Colony, Bhopal - 462016',
					"speciality"=>'Dermatologist/ dentist',
					"experience"=>17,
					"city"=>'Bhopal'
					),
				"2" => array
					(
					"id" => 3,
					"drname" => 'Ayushman Hospital',
					"address" => 'Ayushman Hospital, Sector C, Shahpura, Bhopal - 462016',
					"speciality"=>'Dermatologist / dentist ',
					"experience"=>16,
					"city"=>'Bhopal'
					),
				"3" => array
					(
					"id" => 4,
					"drname" => 'Dr. S C Rajendran',
					"address" => 'MY Hospital, Sector C, ab-road, Indore - 462001',
					"speciality"=>'Cosmetologist Cosmetic Skin Care Clinic / Koramangala Womens Clinic ',
					"experience"=>15,
					"city"=>'Indore'
					),
				"4" => array
					(
					"id" => 5,
					"drname" => 'Dr. Devendran',
					"address" => 'MY Hospital, Sector C, ab-road, Indore - 462001',
					"speciality"=>'Cosmetologist Cosmetic Skin Care Clinic / Koramangala Womens Clinic ',
					"experience"=>15,
					"city"=>'Indore'
					),
				"5" => array
					(
					"id" => 6,
					"drname" => 'Dr. S C Jain',
					"address" => 'MY Hospital, Sector C, rnt-marg, Indore - 462001',
					"speciality"=>'Cosmetologist Cosmetic Skin Care Clinic / dentist',
					"experience"=>15,
					"city"=>'Indore'
					),
				"6" => array
					(
					"id" => 7,
					"drname" => 'Dr. D C Gupta',
					"address" => 'MY Hospital, Sector C, ab-road, Indore - 462001',
					"speciality"=>'dentist / Koramangala Womens Clinic ',
					"experience"=>15,
					"city"=>'Indore'
					)
				,
				"7" => array
					(
					"id" => 8,
					"drname" => 'Dr. D C Varma',
					"address" => 'MY Hospital, Sector C, rnt, Indore - 462001',
					"speciality"=>'Cosmetologist Cosmetic Skin Care Clinic / Koramangala Womens Clinic ',
					"experience"=>15,
					"city"=>'Indore'
					)
				,
				"8" => array
					(
					"id" => 9,
					"drname" => 'Dr. M K Gupta',
					"address" => 'MY Hospital, Sector C, ab-road, Indore - 462001',
					"speciality"=>'Cosmetologist Cosmetic Skin Care Clinic / Koramangala Womens Clinic ',
					"experience"=>15,
					"city"=>'Indore'
					)
				,
				"9" => array
					(
					"id" => 10,
					"drname" => 'Dr. D V Jain',
					"address" => 'MY Hospital, Sector C, ab road, Indore - 462001',
					"speciality"=>'dentist ',
					"experience"=>15,
					"city"=>'Indore'
					)
				,
				"10" => array
					(
					"id" => 11,
					"drname" => 'Dr. G K Gupta',
					"address" => 'MY Hospital, Sector C, marg, Indore - 462001',
					"speciality"=>'dentist / Koramangala Womens Clinic ',
					"experience"=>15,
					"city"=>'Indore'
					)
				,
				"11" => array
					(
					"id" => 12,
					"drname" => 'Dr. D C Varma',
					"address" => 'MY Hospital, Sector C, rnt, Indore - 462001',
					"speciality"=>'Cosmetologist Cosmetic Skin Care Clinic / Koramangala Womens Clinic ',
					"experience"=>15,
					"city"=>'Indore'					)
				,
				"12" => array
					(
					"id" => 13,
					"drname" => 'Dr. L C Nayak',
					"address" => 'MY Hospital, Sector C, marg, Indore - 462001',
					"speciality"=>'dentist / Koramangala Womens Clinic ',
					"experience"=>15,
					"city"=>'Indore'
					)										
				);
		$arr1  = array_r_search($id, $arr);
		
		$rows = Array
		   (
			"status" => "success",
			"message" => "Data selected from database",
			"data" => Array
			 (
			  $arr1
			 )
		   );
		 //  print_r($rows );
		echoResponse(200, $rows);
});
										/* End */

 
function echoResponse($status_code, $response) {
    global $app;
    $app->status($status_code);
    $app->contentType('application/json');
    echo json_encode($response,JSON_NUMERIC_CHECK);
}
$app->run();
?>