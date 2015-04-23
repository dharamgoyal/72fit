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
		"drname" => 'Bhopal Medical Store',	    
		"address" => 'E-3,28-A,Arera Colony,E-3,28-A,Arera Colony,Crossing,Bhopal',
		"speciality"=>'',
		"contact"=>0755-4266480,
		"time"=>'',
		"city"=>'Bhopal'	    
		),
	"1" => array
		(
		"id" => 2,	    
		"drname" => 'Deep Medical',	    
		"address" => 'Deep Hospital,Opp.Sargam Talkies,Hoshangabad Rd.Bhopal',
		"speciality"=>'',
		"contact"=>0755-2573583,
		"time"=>'',
		"city"=>'Bhopal'	    
		),
	"2" => array
		(
		"id" => 3,	    
		"drname" => 'National Medical',	    
		"address" => 'National Hospital,E-3/61,Appo.Old Csmpion School Ground,Arera Cly.Bhopal',
		"speciality"=>'',
		"contact"=>0755-2440004-05-08,
		"time"=>'',
		"city"=>'Bhopal'	    
		),
	"3" => array
		(
		"id" => 4,	    
		"drname" => 'Narmada Medical',	    
		"address" => 'Narmada Advance Trauma& Critical Care Institute,E-3E-3/23,Arera Cly.Bhopal',
		"speciality"=>'',
		"contact"=>0755-2404000,
		"time"=>'',
		"city"=>'Bhopal'	    
		),		
	"4" => array
		(
		"id" => 5,	    
		"drname" => 'Shivam Medical',	    
		"address" => 'Shivam Hospital,E-8/3,Rly.Society,12 No.Stop,Arera Colony,Bhopal',
		"speciality"=>'',
		"contact"=>0755-4221469,
		"time"=>'',
		"city"=>'Bhopal'	    
		),		
	"5" => array
		(
		"id" => 6,	    
		"drname" => 'Shradha Medical',	    
		"address" => 'Shekhar Hospital,A-69,Shahpura,Near Manisha Market,Bhopal',
		"speciality"=>'',
		"contact"=>0755-2425242,
		"time"=>'',
		"city"=>'Bhopal'	    
		),		
	"6" => array
		(
		"id" => 7,	    
		"drname" => 'Suyash Medical',	    
		"address" => 'Malti Hospital,E-7/HIG-451,Arera Colony,Bhopal',
		"speciality"=>'',
		"contact"=>0755-2432908,
		"time"=>'',
		"city"=>'Bhopal'	    
		),		
	"7" => array
		(
		"id" => 8,	    
		"drname" => 'Pragya Medical',	    
		"address" => 'Meenakshi Hospital,E-5/38,Arera Colony,Bhopal',
		"speciality"=>'',
		"contact"=>0755-2466034,
		"time"=>'',
		"city"=>'Bhopal'	    
		),
	"8" => array
		(
		"id" => 9,	    
		"drname" => 'Vardhman Medical',	    
		"address" => 'Global Hospital E-5/24,Opp.,Bhopal',
		"speciality"=>'',
		"contact"=>0755-4290820,
		"time"=>'',
		"city"=>'Bhopal'	    
		),
	"9" => array
		(
		"id" => 10,	    
		"drname" => 'Vaibhav Medical Store',	    
		"address" => 'Niramay Hospital E-2/13,Arera Colony,Bhopal',
		"speciality"=>'',
		"contact"=>0755-2453448,
		"time"=>'',
		"city"=>'Bhopal'	    
		),
//BLOOD BANK
	"10" => array
		(
		"id" =>11 ,	    
		"drname" => 'Arpan Blod Bank',	    
		"address" => '131/6, Kiran Complex,Near Sargam Talkies,MP Nagar,Bhopal',
		"speciality"=>'',
		"contact"=>0755-3295142,
		"time"=>'',
		"city"=>'Bhopal'	    
		),
	"11" => array
		(
		"id" => 12,	    
		"drname" => 'Bhopal Blod Bank',	    
		"address" => '4,Near Hamidia HospitalFateh Garh,Bhopal',
		"speciality"=>'',
		"contact"=>0755-2538891,
		"time"=>'',
		"city"=>'Bhopal'	    
		),	
	"12" => array
		(
		"id" => 13,	    
		"drname" => 'Chirayu Blod Bank',	    
		"address" => '6,Malipura,Hawa Mahal road Opp.Nirmal Meera School,Bhopal',
		"speciality"=>'',
		"contact"=>0755-2531212,
		"time"=>'',
		"city"=>'Bhopal'	    
		),	
	"13" => array
		(
		"id" =>14 ,	    
		"drname" => 'Hamidia Hospital Blod Bank',	    
		"address" => 'Royal market ,Bhopal',
		"speciality"=>'',
		"contact"=>0755-2540222,2540051,
		"time"=>'',
		"city"=>'Bhopal'	    
		),	
	"14" => array
		(
		"id" => 15,	    
		"drname" => 'Red Cross Society',	    
		"address" => 'Shivaji Nagar,Bhopal',
		"speciality"=>'',
		"contact"=>922949551,0755-2550441,
		"time"=>'',
		"city"=>'Bhopal'	    
		),
//MEDICAL COLLEGE
	"15" => array
		(
		"id" => 16,	    
		"drname" => 'Chirayu Medical College And Hospital',	    
		"address" => 'Berahgarh Bhopal (MP)',
		"speciality"=>'',
		"contact"=>0755-6679132,
		"time"=>'',
		"city"=>'Bhopal'	    
		),
	"16" => array
		(
		"id" => 17,	    
		"drname" => 'Gandhi Medical College',	    
		"address" => 'Royal Market Bhopal',
		"speciality"=>'',
		"contact"=>0755-2541376,
		"time"=>'',
		"city"=>'Bhopal'	    
		),	
	"17" => array
		(
		"id" => 18,	    
		"drname" => 'L.N.Medical College And Research Centre',	    
		"address" => 'JK Town,Sarvdharan C-Sector Kolar Road,Bhopal',
		"speciality"=>'',
		"contact"=>'',
		"time"=>'',
		"city"=>'Bhopal'	    
		),	
	"18" => array
		(
		"id" => 19,	    
		"drname" => 'All India Institute Of Medical Sciences (AIMS)',	    
		"address" => 'Saket Nagar ,Bhopal',
		"speciality"=>'',
		"contact"=>0755-2902025,
		"time"=>'',
		"city"=>'Bhopal'	    
		),	
	"19" => array
		(
		"id" => 20,	    
		"drname" => 'Peoples College Of Medical Science And Research Centre',	    
		"address" => 'Bhanpur,By Pass Road,Bhopal',
		"speciality"=>'',
		"contact"=>0755-4005008,
		"time"=>'',
		"city"=>'Bhopal'	    
		),	
//GOVT.HOSPITAL	
	"20" => array
		(
		"id" => 21,	    
		"drname" => 'Civil Hospital',	    
		"address" => 'Bairagarh',
		"speciality"=>'Genral',
		"contact"=>0755-2711096,
		"time"=>'',
		"city"=>'Bhopal'	    
		),	
	"21" => array
		(
		"id" => 22,	    
		"drname" => 'Sultania Zanana Hospital',	    
		"address" => 'Near Kali Mandir,Rly. Station Road Bhopal',
		"speciality"=>'Maternity',
		"contact"=>0755-4050430,
		"time"=>'',
		"city"=>'Bhopal'	    
		),	
	"22" => array
		(
		"id" => 23,	    
		"drname" => 'Indian Red Cross Society',	    
		"address" => 'Near Mayur Park Link Road Bhopal',
		"speciality"=>'Genral',
		"contact"=>0755-2526100,
		"time"=>'',
		"city"=>'Bhopal'	    
		),	
	"23" => array
		(
		"id" =>24 ,	    
		"drname" => 'Jawahar Lal Nehru Hospital',	    
		"address" => 'DIG Square  Berasiya Road Bhopal',
		"speciality"=>'Genral',
		"contact"=>0755-2730178,
		"time"=>'',
		"city"=>'Bhopal'	    
		),	
	"24" => array
		(
		"id" => 25,	    
		"drname" => 'Katju Hospital',	    
		"address" => ' Jawahar Chowk,New Market,Bhopal',
		"speciality"=>'Genral',
		"contact"=>0755-4251639,
		"time"=>'',
		"city"=>'Bhopal'	    
		),
//PRIVATE HOSPITAL			
	"25" => array
		(
		"id" => 26,	    
		"drname" => 'Aashirwad Nursing Home',	    
		"address" => '48,MLA Qrt. Jawahar Chowk Bhopal',
		"speciality"=>'Gynaecologist And Genral',
		"contact"=>0755-2779636,
		"time"=>'',
		"city"=>'Bhopal'	    
		),	
	"26" => array
		(
		"id" => 27,	    
		"drname" => 'Agarwal Hospital',	    
		"address" => 'E-3/34,Arera Clny.Near Habibganj Rly.Crossing,Bhopal',
		"speciality"=>'Chest Phisician And Gynaecologist',
		"contact"=>0755-4283383,
		"time"=>'',
		"city"=>'Bhopal'	    
		),	
	"27" => array
		(
		"id" => 28,	    
		"drname" => 'Agarwal Nursing Home',	    
		"address" => 'Bajaria,Near Rly.Stn.Bhopal',
		"speciality"=>'Gynaecologist And Genral',
		"contact"=>0755-2734640,
		"time"=>'',
		"city"=>'Bhopal'	    
		),	
	"28" => array
		(
		"id" => 29,	    
		"drname" => 'Ajwani Eye Hospital',	    
		"address" => '115,Berasia Road,Sindhi Colony, Bhopal',
		"speciality"=>'Eye Specialist',
		"contact"=>0755-2745700,
		"time"=>'',
		"city"=>'Bhopal'	    
		),	
	"29" => array
		(
		"id" => 30,	    
		"drname" => 'A.K.Hospital',	    
		"address" => '7th Block,Sanjay Complex Nr.Mata Mandir Bhopal',
		"speciality"=>'Genral',
		"contact"=>0755-2776619,
		"time"=>'',
		"city"=>'Bhopal'	    
		),
//PATHOLOGY LAB			
	"30" => array
		(
		"id" => 31,	    
		"drname" => 'Alliance Medical Imaging Clinic',	    
		"address" => 'Near Tajul Maszid,Opp.Motiya Talab 76,1st Flr.Bhopal',
		"speciality"=>'',
		"contact"=>0755-4990899,9302250001,
		"time"=>'',
		"city"=>'Bhopal'	    
		),	
	"31" => array
		(
		"id" => 32,	    
		"drname" => 'Apollo Diagnostic Centre',	    
		"address" => '18,Taj Market Bhopal',
		"speciality"=>'',
		"contact"=>9826054433,
		"time"=>'',
		"city"=>'Bhopal'	    
		),	
	"32" => array
		(
		"id" => 33,	    
		"drname" => 'Delta Pathology Lab',	    
		"address" => '77,Motia TalabOpp.tajul Masjid,Bhopal',
		"speciality"=>'',
		"contact"=>0755-2531363,
		"time"=>'',
		"city"=>'Bhopal'	    
		),	
	"33" => array
		(
		"id" => 34,	    
		"drname" => 'Final Dignostics Centre',	    
		"address" => '45,Taj MarketBhopal',
		"speciality"=>'',
		"contact"=>0755-2541932,
		"time"=>'',
		"city"=>'Bhopal'	    
		),	
	"34" => array
		(
		"id" => 35,	    
		"drname" => 'Glaze X-Ray Pathology',	    
		"address" => '34,Taj Market Bhopal',
		"speciality"=>'',
		"contact"=>9303131253,
		"time"=>'',
		"city"=>'Bhopal'	    
		),
//C.T.SCAN AND M.R.I CENTRE			
	"35" => array
		(
		"id" => 36,	    
		"drname" => 'Sanya Dignostic',	    
		"address" => 'E-3/15,Arera Colony,Bhopal',
		"speciality"=>'',
		"contact"=>0755-462016,
		"time"=>'',
		"city"=>'Bhopal'	    
		),	
	"36" => array
		(
		"id" => 37,	    
		"drname" => 'Shivam Dignostic',	    
		"address" => 'Retghat Kamla Park Bhopal',
		"speciality"=>'',
		"contact"=>0755-4225514,
		"time"=>'',
		"city"=>'Bhopal'	    
		),	
	"37" => array
		(
		"id" => 38,	    
		"drname" => 'Venus MRI & MDCT Centre',	    
		"address" => '6,1/2Bus Stop,Shivaji Nagar Bhopal',
		"speciality"=>'',
		"contact"=>0755-4218801,
		"time"=>'',
		"city"=>'Bhopal'	    
		),	
	"38" => array
		(
		"id" => 39,	    
		"drname" => 'MEDI SCAN',	    
		"address" => 'Opp.Motia Talab,Tajul Masjid,Bhopal',
		"speciality"=>'',
		"contact"=>0755-2739577,
		"time"=>'',
		"city"=>'Bhopal'	    
		),	
	"39" => array
		(
		"id" => 40,	    
		"drname" => 'Bhopal Medical Centre',	    
		"address" => 'Indrapuri2,MP Nagar Bhopal',
		"speciality"=>'',
		"contact"=>0755-4273739,
		"time"=>'',
		"city"=>'Bhopal'	    
		),
//MEDICAL SUPPLIERS MANUFACTURES & FITNESS			
	"40" => array
		(
		"id" => 41,	    
		"drname" => 'Bombay Medical Hall',	    
		"address" => 'Jumerati,Bhopal',
		"speciality"=>'Homeopathic',
		"contact"=>0755-2733052,
		"time"=>'',
		"city"=>'Bhopal'	    
		),	
	"41" => array
		(
		"id" => 42,	    
		"drname" => 'Jain Homoeo Hall',	    
		"address" => 'Bima Kunj,Kolar Road Bhopal',
		"speciality"=>'Homeopathic',
		"contact"=>9329026250,
		"time"=>'',
		"city"=>'Bhopal'	    
		),	
	"42" => array
		(
		"id" => 43,	    
		"drname" => 'Kasturi Homoeo',	    
		"address" => 'Zone-2,MP Nagar,Bhopal',
		"speciality"=>'Homeopathic',
		"contact"=>0755-4272228,
		"time"=>'',
		"city"=>'Bhopal'	    
		),	
	"43" => array
		(
		"id" => 44,	    
		"drname" => 'New Life Homoeo Centre',	    
		"address" => 'Budhwara Char Batfi,Bhopal',
		"speciality"=>'Homeopathic',
		"contact"=>0755-2744160,
		"time"=>'',
		"city"=>'Bhopal'	    
		),	
	"44" => array
		(
		"id" => 45,	    
		"drname" => 'S.N. Homoeo Pharmacy',	    
		"address" => 'Indra Market,Jawahar Chowk Bhopal',
		"speciality"=>'Homeopathic',
		"contact"=>0755-2775303,
		"time"=>'',
		"city"=>'Bhopal'	    
		),			
	"45" => array
		(
		"id" => 46,	    
		"drname" => 'Garimas Herbal Beauty Care Centre',	    
		"address" => 'E-3/112,Sharda Cmplx 10 Market,Bhopal',
		"speciality"=>'Health & Beauty Care',
		"contact"=>0755-4277537,
		"time"=>'',
		"city"=>'Bhopal'	    
		),	
	"46" => array
		(
		"id" => 47,	    
		"drname" => 'Lavanya GYM & Fitness Centre',	    
		"address" => 'M 1st.Floor,Westent Plaza,Chuna Bhatti Sq.Bhopal',
		"speciality"=>'Health & Beauty Care',
		"contact"=>0755-3251024,
		"time"=>'',
		"city"=>'Bhopal'	    
		),	
	"47" => array
		(
		"id" => 48,	    
		"drname" => 'Vishal Fitness Planet',	    
		"address" => '4E-3/45,10 Cross Rd.Building 10 No.Mrkt.Bhopal',
		"speciality"=>'Health & Beauty Care',
		"contact"=>0755-2460123,
		"time"=>'',
		"city"=>'Bhopal'	    
		),	
	"48" => array
		(
		"id" => 49,	    
		"drname" => 'VLCC Slimming Beauty Fitness',	    
		"address" => '47-A,Malviya Nagar,New Market,Bhopal',
		"speciality"=>'Health & Beauty Care',
		"contact"=>0755-4232201,
		"time"=>'',
		"city"=>'Bhopal'	    
		),	
	"49" => array
		(
		"id" => 50,	    
		"drname" => 'Eastern Health Care',	    
		"address" => '303, Dawa Bazar,13-14mt,Marg Indore',
		"speciality"=>'Health & Beauty Care',
		"contact"=>0731-2463780,
		"time"=>'',
		"city"=>'Indore'	    
		),
//DOCTOR		
	"50" => array
		(
		"id" => 51,	    
		"drname" => 'Nisha Mishra (MBBS)',	    
		"address" => 'E-7/9,Char Imli,Behind CBI Office,Bhopal',
		"speciality"=>'Ophtho.',
		"contact"=>9425028573,
		"time"=>'06:00 TO 08:00PM',
		"city"=>'Bhopal'	    
		),	
	"51" => array
		(
		"id" => 52,	    
		"drname" => 'Jayshree Beedkar (MBBS,MS)',	    
		"address" => 'E-4/151,Arera Colony 10 No.Stop,Bhopal',
		"speciality"=>'Obs.& Gyn.',
		"contact"=>0755-2464616,
		"time"=>'06:00PM To 08:30PM',
		"city"=>'Bhopal'	    
		),	
	"52" => array
		(
		"id" => 53,	    
		"drname" => 'Jyoti Jain (MBBS,DGO)',	    
		"address" => 'Sujyoti Hospital,G-3/358,Gulmohar,Arera Clny Bhopal',
		"speciality"=>'',
		"contact"=>0755-2427363,
		"time"=>'10:00AM To 01:00PM 06:00 To 09:00PM',
		"city"=>'Bhopal'	    
		),	
	"53" => array
		(
		"id" => 54,	    
		"drname" => 'Kala Gidwani(MD)',	    
		"address" => 'E/5,108,Arera Colony Bhopal.',
		"speciality"=>'Obs.& Gyn.',
		"contact"=>9826055237,
		"time"=>'05PM TO 07:00PM',
		"city"=>'Bhopal'	    
		),	
	"54" => array
		(
		"id" => 55,	    
		"drname" => 'Krishna Sharma(MBBS,DGO)',	    
		"address" => '101/13,Shivaji Nagar Bhopal',
		"speciality"=>'',
		"contact"=>0755-2556776,
		"time"=>'08:00AM To 02:00PM 06:00 To 08:00PM',
		"city"=>'Bhopal'	    
		),	
	"55" => array
		(
		"id" => 56,	    
		"drname" => 'Malti Bhojwani (MBBS,MD)',	    
		"address" => 'HIG/451-452,E-7,Arera Colony,Bhopal',
		"speciality"=>'',
		"contact"=>0755-2468092,
		"time"=>'12:00PM To 07:00 PM',
		"city"=>'Bhopal'	    
		),	
	"56" => array
		(
		"id" => 57,	    
		"drname" => 'Meenakshi Verma(MBBS,MD)',	    
		"address" => 'Meenakshi Hospital,E-5/38 Arera Colony,Bhopal',
		"speciality"=>'',
		"contact"=>0755-2466033,
		"time"=>'10AM To 02:30PM  06:30 To 09:30PM',
		"city"=>'Bhopal'	    
		),	
	"57" => array
		(
		"id" =>58 ,	    
		"drname" => 'Salil Kumar(MS)',	    
		"address" => 'E-3/73,Arera Colony,Bhopal',
		"speciality"=>'Ophtho.',
		"contact"=>9425028444,
		"time"=>'05:30 To 08:30 PM',
		"city"=>'Bhopal'	    
		),	
	"58" => array
		(
		"id" => 59,	    
		"drname" => 'Neelima Agrawal(MBBS,DGO)',	    
		"address" => 'Agrawal Hospital,E-3/34,AreraColony Bhopal',
		"speciality"=>'',
		"contact"=>9826027878,
		"time"=>'10:00AM To 01:30PM 05:30 PM To  08:30PM',
		"city"=>'Bhopal'	    
		),	
	"59" => array
		(
		"id" => 60,	    
		"drname" => 'Sadhna Shrivastava(MBBS,DGO,DMCH)',	    
		"address" => 'Shekhar Hospital,A-69,Near Manisha Market,Shahpura,Bhopal',
		"speciality"=>'Obs.Gyn.',
		"contact"=>0755-2425242,
		"time"=>'10:00AM To 12:00PM  06:00PM To 08:30PM',
		"city"=>'Bhopal'	    
		),	
	"60" => array
		(
		"id" => 61,	    
		"drname" => 'Shobha Saran(MS)',	    
		"address" => 'C-4,BDA,24,Bungalow,6No.Stop.Shivaji Nagar,Bhopal',
		"speciality"=>'Obs.Gyn.',
		"contact"=>0755-2554502,
		"time"=>'09:00 To12:00 PM 05:00PM To 08:00 PM',
		"city"=>'Bhopal'	    
		),	
	"61" => array
		(
		"id" => 62,	    
		"drname" => 'Varuna Pathak(MBBS,MS,DNB)',	    
		"address" => '3,Nupur Kunj,E-3,Arera Colony,Bhopal',
		"speciality"=>'',
		"contact"=>0755-2465466,
		"time"=>'05:30PM To 08:30PM',
		"city"=>'Bhopal'	    
		),
	"62" => array
		(
		"id" => 63,	    
		"drname" => 'Kavita Saluja(MBBS,PGDMCH)',	    
		"address" => 'Saluja Nursing Home,ChollaNaka,Old City,Bhopal',
		"speciality"=>'',
		"contact"=>0755-2725980,
		"time"=>'03:00PM To 06:00PM',
		"city"=>'Bhopal'	    
		),
	"63" => array
		(
		"id" => 64,	    
		"drname" => 'Swagata Bramachari',	    
		"address" => 'Speciality Clinic,C-4,Parijat Complex,Bittan Market,Bhopal',
		"speciality"=>'Female Surgeon',
		"contact"=>9425310784,
		"time"=>'06:00 To 08:00PM',
		"city"=>'Bhopal'	    
		),
	"64" => array
		(
		"id" => 65,	    
		"drname" => 'Gajendra Chawla(MS)',	    
		"address" => 'E-7,/378,Arera Colony,Opp.Hanuman Mandir,Bhopal',
		"speciality"=>'Ophtho.',
		"contact"=>9425376207,
		"time"=>'06:30 To 08:30PM',
		"city"=>'Bhopal'	    
		),	
	"65" => array
		(
		"id" => 66,	    
		"drname" => 'A.P.Khalkho',	    
		"address" => '4 TCH Peoples Hospital,151/C,Indrapuri,Bhopal',
		"speciality"=>'Gyn.',
		"contact"=>0755-2488637,
		"time"=>'09:00AM To 01:00PM 03:00PM To 05:00PM',
		"city"=>'Bhopal'	    
		),	
	"66" => array
		(
		"id" => 67,	    
		"drname" => 'A.P.Khalkho',	    
		"address" => '656,Sector-9B, Saket  Nagar Bhopal',
		"speciality"=>'Ophthalmologists',
		"contact"=>0755-2435120,
		"time"=>'09:30Am To 01:00PM',
		"city"=>'Bhopal'	    
		),	
	"67" => array
		(
		"id" => 68,	    
		"drname" => 'Divya Batra(MBBS,DGO,)',	    
		"address" => 'Sec.-A,Indrapuri,Raisen Rd.Gate 1,Bhopal',
		"speciality"=>'Gynaecologist',
		"contact"=>0755-4262151,
		"time"=>'10:30AM TO 05:00PM',
		"city"=>'Bhopal'	    
		),	
	"68" => array
		(
		"id" => 69,	    
		"drname" => 'Hemlata Parashar(MS)',	    
		"address" => 'Jeewandhara Hos.2,Santoshi Vihar,Rajeev Nagar,Ayodhya By Pass Rd.Bhopal',
		"speciality"=>'Obst.Gyn.',
		"contact"=>9425302019,
		"time"=>'09:00 To 10:00 AM 04:00 To 06:30 PM',
		"city"=>'Bhopal'	    
		),	
	"69" => array
		(
		"id" => 70,	    
		"drname" => 'Amruta Girish Lale (MBBS,DOMS)',	    
		"address" => 'M-102,Baghmugalia,Bhopal',
		"speciality"=>'Opthalmologist',
		"contact"=>9425079859,
		"time"=>'09:30AM To 01:30PM 06:30 To 08:30',
		"city"=>'Bhopal'	    
		),
	"70" => array
		(
		"id" => 71,	    
		"drname" => 'Mukul Mathur(MBBS,DRM,DOMS)',	    
		"address" => 'Jawahar Lal Nehru Cancer Hosp.,Bhopal',
		"speciality"=>'',
		"contact"=>9424401854,
		"time"=>'09:00AM To 05:00PM',
		"city"=>'Bhopal'	    
		),	
	"71" => array
		(
		"id" => 72,	    
		"drname" => 'Sarita Agarwal (B.sc,MBBS,DGO)',	    
		"address" => 'Anugrah Clinic,189,Z-2,MP.Nagar,Bhopal',
		"speciality"=>'Obst.Gyn.',
		"contact"=>0755-2580225,
		"time"=>'06:30 PM To 08:30PM',
		"city"=>'Bhopal'	    
		),	
	"72" => array
		(
		"id" => 73,	    
		"drname" => 'Usha Mehta(MBBS,DGO)',	    
		"address" => '54,sector-A,Sonagiri,Opp.Piplani Petrol Pump,Bhopal',
		"speciality"=>'Obs.Gyn.',
		"contact"=>0755-2756493,
		"time"=>' 09:00AM To12:00 PM  06:00 To 08:00PM',
		"city"=>'Bhopal'	    
		),
	"73" => array
		(
		"id" => 74,	    
		"drname" => 'Bimla Gultani',	    
		"address" => 'Bimla Nursing Home,29,Idgah Hills,Bhopal',
		"speciality"=>'',
		"contact"=>0755-2541486,
		"time"=>'09:00 To11:00AM 05:00 To 07:00PM',
		"city"=>'Bhopal'	    
		),	
	"74" => array
		(
		"id" => 75,	    
		"drname" => 'Neelu Mehrotra(MBBS,DGO)',	    
		"address" => 'Jawaharlal Nehru, Cancer Hospital Research Center,Idgah Hills,Bhopal',
		"speciality"=>'Gyn.& Breast',
		"contact"=>9826483481,
		"time"=>'09:00AM T0 05:00PM',
		"city"=>'Bhopal'	    
		),	
	"75" => array
		(
		"id" => 76,	    
		"drname" => 'B.Bhardwaj(MBBS,MS)',	    
		"address" => '47,MLA,Quarter,Bhopal',
		"speciality"=>'',
		"contact"=>8989208333,
		"time"=>'06:30PM TO 08:30PM',
		"city"=>'Bhopal'	    
		),	
	"76" => array
		(
		"id" => 77,	    
		"drname" => 'Neelima Dhawale(MBBS,DGO,DNB)',	    
		"address" => '63,MLA Qutr.Jawahar ChowkBhopa',
		"speciality"=>'',
		"contact"=>9479102468,
		"time"=>'l.12:00 To 02:00PM 07:00 TO 09:00PM',
		"city"=>'Bhopal'	    
		),
	"77" => array
		(
		"id" => 78,	    
		"drname" => 'Savita Jain (MBBS,DGO)',	    
		"address" => 'Sharmanm Clinic,L.G.-8,Minal Mall,J.K. Rd.Bhopal',
		"speciality"=>'Obst.Gyn.',
		"contact"=>9926353492,
		"time"=>'12:00 To 01:00PM 06:00 To 09:00PM',
		"city"=>'Bhopal'	    
		),	
	"78" => array
		(
		"id" => 79,	    
		"drname" => 'Anuradha Bhargava (MBBS,DGO)',	    
		"address" => 'Vardan Hospital,Jahangirabad,Bhopal',
		"speciality"=>'',
		"contact"=>0755-2765621,
		"time"=>'11:00AM To 01:30PM',
		"city"=>'Bhopal'	    
		),	
	"79" => array
		(
		"id" => 80,	    
		"drname" => 'Kusum Saxena(MBBS,DGO)',	    
		"address" => 'Tanushree Hos.84,Shahzadrai Bhawan,ChiklodRd.Jahangirabad,Bhopal',
		"speciality"=>'',
		"contact"=>0755-2766966,
		"time"=>'11:00AM To 01:00PM 05:00 To 07:00PM',
		"city"=>'Bhopal'	    
		),	
	"80" => array
		(
		"id" => 81,	    
		"drname" => 'Vandna Chourasia(MBBS,MS)',	    
		"address" => 'B-66,Kasturba Nagar,Nr.Chetak Bridge,Bhopal',
		"speciality"=>'Infertility Spclst.',
		"contact"=>9827054013,
		"time"=>'11:00AM TO 02:00PM  07:30 To 09:30 PM',
		"city"=>'Bhopal'	    
		),	
	"81" => array
		(
		"id" => 82,	    
		"drname" => 'Manisha Jain(MS)',	    
		"address" => 'Suyash Hospital,45-A,Janki nagar,Chuna Bhatti,Bhopal.',
		"speciality"=>'Gynaecologist',
		"contact"=>0755-4279220,
		"time"=>'12:00 To02:00PM 07:00 To 09:00PM',
		"city"=>'Bhopal'	    
		),	
	"82" => array
		(
		"id" => 83,	    
		"drname" => 'Vandna Agarwal(MBBS,DGO,DNB)',	    
		"address" => 'Matratva Hos.Saevdharam Bhopal',
		"speciality"=>'Infertility Spclst.',
		"contact"=>0755-2734640,
		"time"=>'11:00AM To 02:00PM  06:00 To 09:00PM',
		"city"=>'Bhopal'	    
		),	
	"83" => array
		(
		"id" => 84,	    
		"drname" => 'Tanuja Saxena(MBBS,DGO)',	    
		"address" => 'C-69,Housing Board Clny.Koh-E-Fiza,Bhopal',
		"speciality"=>' Delivery & Operation',
		"contact"=>0755-2546201,
		"time"=>'05:00 To 08:00PM',
		"city"=>'Bhopal'	    
		),	
	"84" => array
		(
		"id" => 85,	    
		"drname" => 'Aruna Kumar(MBBS,MS,HOD,GMC)',	    
		"address" => 'Sultania JananaHos.Nr.Rly.Rd. Bhopal',
		"speciality"=>'Gyn.Dept.',
		"contact"=>0755-4050574,
		"time"=>'06:00 To 09:00PM',
		"city"=>'Bhopal'	    
		),
	"85" => array
		(
		"id" => 86,	    
		"drname" => 'Azra Khurram(MBBS,MS)',	    
		"address" => 'Hafees Eye Hos. MarernityHome,Opp.Lal Pared Grnd.Jahangirabad,Bhopal',
		"speciality"=>'',
		"contact"=>0755-2571160,
		"time"=>'09:00AM To 12:00PM',
		"city"=>'Bhopal'	    
		),	
	"86" => array
		(
		"id" => 87,	    
		"drname" => 'Vaibhav Dubey (MD)Psychiatry',	    
		"address" => '30,Civil Line,Bhopal',
		"speciality"=>'Psychiatrist & Neurologist',
		"contact"=>9424401688,
		"time"=>'09:00AM To 01:00PM 06:00 To 08:00PM',
		"city"=>'Bhopal'	    
		),	
	"87" => array
		(
		"id" => 88,	    
		"drname" => 'Veena Pandey(MBBS,DGO)',	    
		"address" => 'H.No.1,Prakash Nagar,By Pass Rd.BHEL Piplani Bhopal',
		"speciality"=>'',
		"contact"=>9179008009,
		"time"=>'09:00AM To 12:00PM  06:00 To 08:00PM',
		"city"=>'Bhopal'	    
		),	
	"88" => array
		(
		"id" => 89,	    
		"drname" => 'Anjana Chaturvedi',	    
		"address" => 'Chaturvedi Maternity & Gen.Hos.Raisen Rd.Pul Bogda Bhopal',
		"speciality"=>'Child & Female',
		"contact"=>9826023188,
		"time"=>'10:00AM To 01:30PM 06:00 To 09:00PM',
		"city"=>'Bhopal'	    
		),	
	"89" => array
		(
		"id" => 90,	    
		"drname" => 'Bharti Yadav(MBBS)',	    
		"address" => '239-A,Old Ashoka Garden,Prabhat Prtrol Pump,Nr.Hotel Silver In,Bhopal',
		"speciality"=>'Gyn.',
		"contact"=>9303132391,
		"time"=>'11:00AM TO 01:00PM 07:00 To 09:00PM',
		"city"=>'Bhopal'	    
		),
	"90" => array
		(
		"id" => 91,	    
		"drname" => 'Indubala Jain(MBBS,MS)',	    
		"address" => 'Pushkom  Maternity & Nursing Home,62,Old,Ashoka Garden,Bhopal',
		"speciality"=>'Gyn.',
		"contact"=>0755-2582550,
		"time"=>'10:00AM To 01:00PM 06:00 To 09:00PM',
		"city"=>'Bhopal'	    
		),
	"91" => array
		(
		"id" => 92,	    
		"drname" => 'Vaijayanti  Kolekar(MBBS,MD)',	    
		"address" => 'LBS,Hos.73,Tajul Masjid, Rd.Bhopal',
		"speciality"=>'',
		"contact"=>0755-2531678,
		"time"=>'11:00AM TO 03:00PM',
		"city"=>'Bhopal'	    
		),	
	"92" => array
		(
		"id" => 93,	    
		"drname" => 'Malti Bhojwani(MBBS,MD)',	    
		"address" => 'HIG/451-452,E-7,Arera Clny.Bhopal.',
		"speciality"=>'',
		"contact"=>0755-2468092,
		"time"=>'12:00 To 07:00 PM',
		"city"=>'Bhopal'	    
		),	
	"93" => array
		(
		"id" => 94,	    
		"drname" => 'Prabhakar Kawathekar(MD,DCP)',	    
		"address" => 'Shop No.1,Sterling Enclave,Phase-1,Bhopal',
		"speciality"=>'Pathologist',
		"contact"=>0755-2421628,
		"time"=>'06:00 To 09:00PM',
		"city"=>'Bhopal'	    
		),	
	"94" => array
		(
		"id" => 95,	    
		"drname" => 'Ashok Kumar Awasthi(MD)',	    
		"address" => 'B-288,Shahpura,C-sector,Opp.MPEB,Bhopal',
		"speciality"=>'Pathologist',
		"contact"=>9827056443,
		"time"=>'08:00AM To 08:00PM',
		"city"=>'Bhopal'	    
		),	
	"95" => array
		(
		"id" => 96,	    
		"drname" => 'Ajit Verma(MD,DM)',	    
		"address" => 'Akshey Heart Hospital,Char Imli.Bhopal',
		"speciality"=>'',
		"contact"=>9425013169,
		"time"=>'09:30AM To 03:00PM',
		"city"=>'Bhopal'	    
		),	
	"96" => array
		(
		"id" => 97,	    
		"drname" => 'Sunil Malik(MD)',	    
		"address" => 'C-11,BDA Colony,6No.Stop,Shivaji Nagar ,Bhopal',
		"speciality"=>'Neurology',
		"contact"=>0755-2711722,
		"time"=>'10:00AM TO 06:00PM',
		"city"=>'Bhopal'	    
		),	
	"97" => array
		(
		"id" => 98,	    
		"drname" => 'S.K.Jain(DM)',	    
		"address" => 'MLA Qrts.Jawahar Chowk,Bhopal.',
		"speciality"=>'Neurology',
		"contact"=>0755-2763838,
		"time"=>'11:00AM To 03:00PM',
		"city"=>'Bhopal'	    
		),	
	"98" => array
		(
		"id" => 99,	    
		"drname" => 'Raj Kishor Tiwari(MD)',	    
		"address" => 'Kamla Nehru Hos.GMC.Campus, Bhopal',
		"speciality"=>'Pathologist',
		"contact"=>9827011430,
		"time"=>'08:00AM To 02:00PM',
		"city"=>'Bhopal'	    
		),
	"99" => array
		(
		"id" => 100,	    
		"drname" => 'I.D.Chourasia (Ms,Mch,HH & GMC)',	    
		"address" => 'E-47 Bunglow,Bhopal',
		"speciality"=>'Neurosurgery',
		"contact"=>9826071926,
		"time"=>'07:00am To 08:00AM 04:00 To 08:00PM',
		"city"=>'Bhopal'	    
		),																																																																																																																	)
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
		"drname" => 'Bhopal Medical Store',	    
		"address" => 'E-3,28-A,Arera Colony,E-3,28-A,Arera Colony,Crossing,Bhopal',
		"speciality"=>'',
		"contact"=>0755-4266480,
		"time"=>'',
		"city"=>'Bhopal'	    
		),
	"1" => array
		(
		"id" => 2,	    
		"drname" => 'Deep Medical',	    
		"address" => 'Deep Hospital,Opp.Sargam Talkies,Hoshangabad Rd.Bhopal',
		"speciality"=>'',
		"contact"=>0755-2573583,
		"time"=>'',
		"city"=>'Bhopal'	    
		),
	"2" => array
		(
		"id" => 3,	    
		"drname" => 'National Medical',	    
		"address" => 'National Hospital,E-3/61,Appo.Old Csmpion School Ground,Arera Cly.Bhopal',
		"speciality"=>'',
		"contact"=>0755-2440004-05-08,
		"time"=>'',
		"city"=>'Bhopal'	    
		),
	"3" => array
		(
		"id" => 4,	    
		"drname" => 'Narmada Medical',	    
		"address" => 'Narmada Advance Trauma& Critical Care Institute,E-3E-3/23,Arera Cly.Bhopal',
		"speciality"=>'',
		"contact"=>0755-2404000,
		"time"=>'',
		"city"=>'Bhopal'	    
		),		
	"4" => array
		(
		"id" => 5,	    
		"drname" => 'Shivam Medical',	    
		"address" => 'Shivam Hospital,E-8/3,Rly.Society,12 No.Stop,Arera Colony,Bhopal',
		"speciality"=>'',
		"contact"=>0755-4221469,
		"time"=>'',
		"city"=>'Bhopal'	    
		),		
	"5" => array
		(
		"id" => 6,	    
		"drname" => 'Shradha Medical',	    
		"address" => 'Shekhar Hospital,A-69,Shahpura,Near Manisha Market,Bhopal',
		"speciality"=>'',
		"contact"=>0755-2425242,
		"time"=>'',
		"city"=>'Bhopal'	    
		),		
	"6" => array
		(
		"id" => 7,	    
		"drname" => 'Suyash Medical',	    
		"address" => 'Malti Hospital,E-7/HIG-451,Arera Colony,Bhopal',
		"speciality"=>'',
		"contact"=>0755-2432908,
		"time"=>'',
		"city"=>'Bhopal'	    
		),		
	"7" => array
		(
		"id" => 8,	    
		"drname" => 'Pragya Medical',	    
		"address" => 'Meenakshi Hospital,E-5/38,Arera Colony,Bhopal',
		"speciality"=>'',
		"contact"=>0755-2466034,
		"time"=>'',
		"city"=>'Bhopal'	    
		),
	"8" => array
		(
		"id" => 9,	    
		"drname" => 'Vardhman Medical',	    
		"address" => 'Global Hospital E-5/24,Opp.,Bhopal',
		"speciality"=>'',
		"contact"=>0755-4290820,
		"time"=>'',
		"city"=>'Bhopal'	    
		),
	"9" => array
		(
		"id" => 10,	    
		"drname" => 'Vaibhav Medical Store',	    
		"address" => 'Niramay Hospital E-2/13,Arera Colony,Bhopal',
		"speciality"=>'',
		"contact"=>0755-2453448,
		"time"=>'',
		"city"=>'Bhopal'	    
		),
//BLOOD BANK
	"10" => array
		(
		"id" =>11 ,	    
		"drname" => 'Arpan Blod Bank',	    
		"address" => '131/6, Kiran Complex,Near Sargam Talkies,MP Nagar,Bhopal',
		"speciality"=>'',
		"contact"=>0755-3295142,
		"time"=>'',
		"city"=>'Bhopal'	    
		),
	"11" => array
		(
		"id" => 12,	    
		"drname" => 'Bhopal Blod Bank',	    
		"address" => '4,Near Hamidia HospitalFateh Garh,Bhopal',
		"speciality"=>'',
		"contact"=>0755-2538891,
		"time"=>'',
		"city"=>'Bhopal'	    
		),	
	"12" => array
		(
		"id" => 13,	    
		"drname" => 'Chirayu Blod Bank',	    
		"address" => '6,Malipura,Hawa Mahal road Opp.Nirmal Meera School,Bhopal',
		"speciality"=>'',
		"contact"=>0755-2531212,
		"time"=>'',
		"city"=>'Bhopal'	    
		),	
	"13" => array
		(
		"id" =>14 ,	    
		"drname" => 'Hamidia Hospital Blod Bank',	    
		"address" => 'Royal market ,Bhopal',
		"speciality"=>'',
		"contact"=>0755-2540222,2540051,
		"time"=>'',
		"city"=>'Bhopal'	    
		),	
	"14" => array
		(
		"id" => 15,	    
		"drname" => 'Red Cross Society',	    
		"address" => 'Shivaji Nagar,Bhopal',
		"speciality"=>'',
		"contact"=>922949551,0755-2550441,
		"time"=>'',
		"city"=>'Bhopal'	    
		),
//MEDICAL COLLEGE
	"15" => array
		(
		"id" => 16,	    
		"drname" => 'Chirayu Medical College And Hospital',	    
		"address" => 'Berahgarh Bhopal (MP)',
		"speciality"=>'',
		"contact"=>0755-6679132,
		"time"=>'',
		"city"=>'Bhopal'	    
		),
	"16" => array
		(
		"id" => 17,	    
		"drname" => 'Gandhi Medical College',	    
		"address" => 'Royal Market Bhopal',
		"speciality"=>'',
		"contact"=>0755-2541376,
		"time"=>'',
		"city"=>'Bhopal'	    
		),	
	"17" => array
		(
		"id" => 18,	    
		"drname" => 'L.N.Medical College And Research Centre',	    
		"address" => 'JK Town,Sarvdharan C-Sector Kolar Road,Bhopal',
		"speciality"=>'',
		"contact"=>'',
		"time"=>'',
		"city"=>'Bhopal'	    
		),	
	"18" => array
		(
		"id" => 19,	    
		"drname" => 'All India Institute Of Medical Sciences (AIMS)',	    
		"address" => 'Saket Nagar ,Bhopal',
		"speciality"=>'',
		"contact"=>0755-2902025,
		"time"=>'',
		"city"=>'Bhopal'	    
		),	
	"19" => array
		(
		"id" => 20,	    
		"drname" => 'Peoples College Of Medical Science And Research Centre',	    
		"address" => 'Bhanpur,By Pass Road,Bhopal',
		"speciality"=>'',
		"contact"=>0755-4005008,
		"time"=>'',
		"city"=>'Bhopal'	    
		),	
//GOVT.HOSPITAL	
	"20" => array
		(
		"id" => 21,	    
		"drname" => 'Civil Hospital',	    
		"address" => 'Bairagarh',
		"speciality"=>'Genral',
		"contact"=>0755-2711096,
		"time"=>'',
		"city"=>'Bhopal'	    
		),	
	"21" => array
		(
		"id" => 22,	    
		"drname" => 'Sultania Zanana Hospital',	    
		"address" => 'Near Kali Mandir,Rly. Station Road Bhopal',
		"speciality"=>'Maternity',
		"contact"=>0755-4050430,
		"time"=>'',
		"city"=>'Bhopal'	    
		),	
	"22" => array
		(
		"id" => 23,	    
		"drname" => 'Indian Red Cross Society',	    
		"address" => 'Near Mayur Park Link Road Bhopal',
		"speciality"=>'Genral',
		"contact"=>0755-2526100,
		"time"=>'',
		"city"=>'Bhopal'	    
		),	
	"23" => array
		(
		"id" =>24 ,	    
		"drname" => 'Jawahar Lal Nehru Hospital',	    
		"address" => 'DIG Square  Berasiya Road Bhopal',
		"speciality"=>'Genral',
		"contact"=>0755-2730178,
		"time"=>'',
		"city"=>'Bhopal'	    
		),	
	"24" => array
		(
		"id" => 25,	    
		"drname" => 'Katju Hospital',	    
		"address" => ' Jawahar Chowk,New Market,Bhopal',
		"speciality"=>'Genral',
		"contact"=>0755-4251639,
		"time"=>'',
		"city"=>'Bhopal'	    
		),
//PRIVATE HOSPITAL			
	"25" => array
		(
		"id" => 26,	    
		"drname" => 'Aashirwad Nursing Home',	    
		"address" => '48,MLA Qrt. Jawahar Chowk Bhopal',
		"speciality"=>'Gynaecologist And Genral',
		"contact"=>0755-2779636,
		"time"=>'',
		"city"=>'Bhopal'	    
		),	
	"26" => array
		(
		"id" => 27,	    
		"drname" => 'Agarwal Hospital',	    
		"address" => 'E-3/34,Arera Clny.Near Habibganj Rly.Crossing,Bhopal',
		"speciality"=>'Chest Phisician And Gynaecologist',
		"contact"=>0755-4283383,
		"time"=>'',
		"city"=>'Bhopal'	    
		),	
	"27" => array
		(
		"id" => 28,	    
		"drname" => 'Agarwal Nursing Home',	    
		"address" => 'Bajaria,Near Rly.Stn.Bhopal',
		"speciality"=>'Gynaecologist And Genral',
		"contact"=>0755-2734640,
		"time"=>'',
		"city"=>'Bhopal'	    
		),	
	"28" => array
		(
		"id" => 29,	    
		"drname" => 'Ajwani Eye Hospital',	    
		"address" => '115,Berasia Road,Sindhi Colony, Bhopal',
		"speciality"=>'Eye Specialist',
		"contact"=>0755-2745700,
		"time"=>'',
		"city"=>'Bhopal'	    
		),	
	"29" => array
		(
		"id" => 30,	    
		"drname" => 'A.K.Hospital',	    
		"address" => '7th Block,Sanjay Complex Nr.Mata Mandir Bhopal',
		"speciality"=>'Genral',
		"contact"=>0755-2776619,
		"time"=>'',
		"city"=>'Bhopal'	    
		),
//PATHOLOGY LAB			
	"30" => array
		(
		"id" => 31,	    
		"drname" => 'Alliance Medical Imaging Clinic',	    
		"address" => 'Near Tajul Maszid,Opp.Motiya Talab 76,1st Flr.Bhopal',
		"speciality"=>'',
		"contact"=>0755-4990899,9302250001,
		"time"=>'',
		"city"=>'Bhopal'	    
		),	
	"31" => array
		(
		"id" => 32,	    
		"drname" => 'Apollo Diagnostic Centre',	    
		"address" => '18,Taj Market Bhopal',
		"speciality"=>'',
		"contact"=>9826054433,
		"time"=>'',
		"city"=>'Bhopal'	    
		),	
	"32" => array
		(
		"id" => 33,	    
		"drname" => 'Delta Pathology Lab',	    
		"address" => '77,Motia TalabOpp.tajul Masjid,Bhopal',
		"speciality"=>'',
		"contact"=>0755-2531363,
		"time"=>'',
		"city"=>'Bhopal'	    
		),	
	"33" => array
		(
		"id" => 34,	    
		"drname" => 'Final Dignostics Centre',	    
		"address" => '45,Taj MarketBhopal',
		"speciality"=>'',
		"contact"=>0755-2541932,
		"time"=>'',
		"city"=>'Bhopal'	    
		),	
	"34" => array
		(
		"id" => 35,	    
		"drname" => 'Glaze X-Ray Pathology',	    
		"address" => '34,Taj Market Bhopal',
		"speciality"=>'',
		"contact"=>9303131253,
		"time"=>'',
		"city"=>'Bhopal'	    
		),
//C.T.SCAN AND M.R.I CENTRE			
	"35" => array
		(
		"id" => 36,	    
		"drname" => 'Sanya Dignostic',	    
		"address" => 'E-3/15,Arera Colony,Bhopal',
		"speciality"=>'',
		"contact"=>0755-462016,
		"time"=>'',
		"city"=>'Bhopal'	    
		),	
	"36" => array
		(
		"id" => 37,	    
		"drname" => 'Shivam Dignostic',	    
		"address" => 'Retghat Kamla Park Bhopal',
		"speciality"=>'',
		"contact"=>0755-4225514,
		"time"=>'',
		"city"=>'Bhopal'	    
		),	
	"37" => array
		(
		"id" => 38,	    
		"drname" => 'Venus MRI & MDCT Centre',	    
		"address" => '6,1/2Bus Stop,Shivaji Nagar Bhopal',
		"speciality"=>'',
		"contact"=>0755-4218801,
		"time"=>'',
		"city"=>'Bhopal'	    
		),	
	"38" => array
		(
		"id" => 39,	    
		"drname" => 'MEDI SCAN',	    
		"address" => 'Opp.Motia Talab,Tajul Masjid,Bhopal',
		"speciality"=>'',
		"contact"=>0755-2739577,
		"time"=>'',
		"city"=>'Bhopal'	    
		),	
	"39" => array
		(
		"id" => 40,	    
		"drname" => 'Bhopal Medical Centre',	    
		"address" => 'Indrapuri2,MP Nagar Bhopal',
		"speciality"=>'',
		"contact"=>0755-4273739,
		"time"=>'',
		"city"=>'Bhopal'	    
		),
//MEDICAL SUPPLIERS MANUFACTURES & FITNESS			
	"40" => array
		(
		"id" => 41,	    
		"drname" => 'Bombay Medical Hall',	    
		"address" => 'Jumerati,Bhopal',
		"speciality"=>'Homeopathic',
		"contact"=>0755-2733052,
		"time"=>'',
		"city"=>'Bhopal'	    
		),	
	"41" => array
		(
		"id" => 42,	    
		"drname" => 'Jain Homoeo Hall',	    
		"address" => 'Bima Kunj,Kolar Road Bhopal',
		"speciality"=>'Homeopathic',
		"contact"=>9329026250,
		"time"=>'',
		"city"=>'Bhopal'	    
		),	
	"42" => array
		(
		"id" => 43,	    
		"drname" => 'Kasturi Homoeo',	    
		"address" => 'Zone-2,MP Nagar,Bhopal',
		"speciality"=>'Homeopathic',
		"contact"=>0755-4272228,
		"time"=>'',
		"city"=>'Bhopal'	    
		),	
	"43" => array
		(
		"id" => 44,	    
		"drname" => 'New Life Homoeo Centre',	    
		"address" => 'Budhwara Char Batfi,Bhopal',
		"speciality"=>'Homeopathic',
		"contact"=>0755-2744160,
		"time"=>'',
		"city"=>'Bhopal'	    
		),	
	"44" => array
		(
		"id" => 45,	    
		"drname" => 'S.N. Homoeo Pharmacy',	    
		"address" => 'Indra Market,Jawahar Chowk Bhopal',
		"speciality"=>'Homeopathic',
		"contact"=>0755-2775303,
		"time"=>'',
		"city"=>'Bhopal'	    
		),			
	"45" => array
		(
		"id" => 46,	    
		"drname" => 'Garimas Herbal Beauty Care Centre',	    
		"address" => 'E-3/112,Sharda Cmplx 10 Market,Bhopal',
		"speciality"=>'Health & Beauty Care',
		"contact"=>0755-4277537,
		"time"=>'',
		"city"=>'Bhopal'	    
		),	
	"46" => array
		(
		"id" => 47,	    
		"drname" => 'Lavanya GYM & Fitness Centre',	    
		"address" => 'M 1st.Floor,Westent Plaza,Chuna Bhatti Sq.Bhopal',
		"speciality"=>'Health & Beauty Care',
		"contact"=>0755-3251024,
		"time"=>'',
		"city"=>'Bhopal'	    
		),	
	"47" => array
		(
		"id" => 48,	    
		"drname" => 'Vishal Fitness Planet',	    
		"address" => '4E-3/45,10 Cross Rd.Building 10 No.Mrkt.Bhopal',
		"speciality"=>'Health & Beauty Care',
		"contact"=>0755-2460123,
		"time"=>'',
		"city"=>'Bhopal'	    
		),	
	"48" => array
		(
		"id" => 49,	    
		"drname" => 'VLCC Slimming Beauty Fitness',	    
		"address" => '47-A,Malviya Nagar,New Market,Bhopal',
		"speciality"=>'Health & Beauty Care',
		"contact"=>0755-4232201,
		"time"=>'',
		"city"=>'Bhopal'	    
		),	
	"49" => array
		(
		"id" => 50,	    
		"drname" => 'Eastern Health Care',	    
		"address" => '303, Dawa Bazar,13-14mt,Marg Indore',
		"speciality"=>'Health & Beauty Care',
		"contact"=>0731-2463780,
		"time"=>'',
		"city"=>'Indore'	    
		),
//DOCTOR		
	"50" => array
		(
		"id" => 51,	    
		"drname" => 'Nisha Mishra (MBBS)',	    
		"address" => 'E-7/9,Char Imli,Behind CBI Office,Bhopal',
		"speciality"=>'Ophtho.',
		"contact"=>9425028573,
		"time"=>'06:00 TO 08:00PM',
		"city"=>'Bhopal'	    
		),	
	"51" => array
		(
		"id" => 52,	    
		"drname" => 'Jayshree Beedkar (MBBS,MS)',	    
		"address" => 'E-4/151,Arera Colony 10 No.Stop,Bhopal',
		"speciality"=>'Obs.& Gyn.',
		"contact"=>0755-2464616,
		"time"=>'06:00PM To 08:30PM',
		"city"=>'Bhopal'	    
		),	
	"52" => array
		(
		"id" => 53,	    
		"drname" => 'Jyoti Jain (MBBS,DGO)',	    
		"address" => 'Sujyoti Hospital,G-3/358,Gulmohar,Arera Clny Bhopal',
		"speciality"=>'',
		"contact"=>0755-2427363,
		"time"=>'10:00AM To 01:00PM 06:00 To 09:00PM',
		"city"=>'Bhopal'	    
		),	
	"53" => array
		(
		"id" => 54,	    
		"drname" => 'Kala Gidwani(MD)',	    
		"address" => 'E/5,108,Arera Colony Bhopal.',
		"speciality"=>'Obs.& Gyn.',
		"contact"=>9826055237,
		"time"=>'05PM TO 07:00PM',
		"city"=>'Bhopal'	    
		),	
	"54" => array
		(
		"id" => 55,	    
		"drname" => 'Krishna Sharma(MBBS,DGO)',	    
		"address" => '101/13,Shivaji Nagar Bhopal',
		"speciality"=>'',
		"contact"=>0755-2556776,
		"time"=>'08:00AM To 02:00PM 06:00 To 08:00PM',
		"city"=>'Bhopal'	    
		),	
	"55" => array
		(
		"id" => 56,	    
		"drname" => 'Malti Bhojwani (MBBS,MD)',	    
		"address" => 'HIG/451-452,E-7,Arera Colony,Bhopal',
		"speciality"=>'',
		"contact"=>0755-2468092,
		"time"=>'12:00PM To 07:00 PM',
		"city"=>'Bhopal'	    
		),	
	"56" => array
		(
		"id" => 57,	    
		"drname" => 'Meenakshi Verma(MBBS,MD)',	    
		"address" => 'Meenakshi Hospital,E-5/38 Arera Colony,Bhopal',
		"speciality"=>'',
		"contact"=>0755-2466033,
		"time"=>'10AM To 02:30PM  06:30 To 09:30PM',
		"city"=>'Bhopal'	    
		),	
	"57" => array
		(
		"id" =>58 ,	    
		"drname" => 'Salil Kumar(MS)',	    
		"address" => 'E-3/73,Arera Colony,Bhopal',
		"speciality"=>'Ophtho.',
		"contact"=>9425028444,
		"time"=>'05:30 To 08:30 PM',
		"city"=>'Bhopal'	    
		),	
	"58" => array
		(
		"id" => 59,	    
		"drname" => 'Neelima Agrawal(MBBS,DGO)',	    
		"address" => 'Agrawal Hospital,E-3/34,AreraColony Bhopal',
		"speciality"=>'',
		"contact"=>9826027878,
		"time"=>'10:00AM To 01:30PM 05:30 PM To  08:30PM',
		"city"=>'Bhopal'	    
		),	
	"59" => array
		(
		"id" => 60,	    
		"drname" => 'Sadhna Shrivastava(MBBS,DGO,DMCH)',	    
		"address" => 'Shekhar Hospital,A-69,Near Manisha Market,Shahpura,Bhopal',
		"speciality"=>'Obs.Gyn.',
		"contact"=>0755-2425242,
		"time"=>'10:00AM To 12:00PM  06:00PM To 08:30PM',
		"city"=>'Bhopal'	    
		),	
	"60" => array
		(
		"id" => 61,	    
		"drname" => 'Shobha Saran(MS)',	    
		"address" => 'C-4,BDA,24,Bungalow,6No.Stop.Shivaji Nagar,Bhopal',
		"speciality"=>'Obs.Gyn.',
		"contact"=>0755-2554502,
		"time"=>'09:00 To12:00 PM 05:00PM To 08:00 PM',
		"city"=>'Bhopal'	    
		),	
	"61" => array
		(
		"id" => 62,	    
		"drname" => 'Varuna Pathak(MBBS,MS,DNB)',	    
		"address" => '3,Nupur Kunj,E-3,Arera Colony,Bhopal',
		"speciality"=>'',
		"contact"=>0755-2465466,
		"time"=>'05:30PM To 08:30PM',
		"city"=>'Bhopal'	    
		),
	"62" => array
		(
		"id" => 63,	    
		"drname" => 'Kavita Saluja(MBBS,PGDMCH)',	    
		"address" => 'Saluja Nursing Home,ChollaNaka,Old City,Bhopal',
		"speciality"=>'',
		"contact"=>0755-2725980,
		"time"=>'03:00PM To 06:00PM',
		"city"=>'Bhopal'	    
		),
	"63" => array
		(
		"id" => 64,	    
		"drname" => 'Swagata Bramachari',	    
		"address" => 'Speciality Clinic,C-4,Parijat Complex,Bittan Market,Bhopal',
		"speciality"=>'Female Surgeon',
		"contact"=>9425310784,
		"time"=>'06:00 To 08:00PM',
		"city"=>'Bhopal'	    
		),
	"64" => array
		(
		"id" => 65,	    
		"drname" => 'Gajendra Chawla(MS)',	    
		"address" => 'E-7,/378,Arera Colony,Opp.Hanuman Mandir,Bhopal',
		"speciality"=>'Ophtho.',
		"contact"=>9425376207,
		"time"=>'06:30 To 08:30PM',
		"city"=>'Bhopal'	    
		),	
	"65" => array
		(
		"id" => 66,	    
		"drname" => 'A.P.Khalkho',	    
		"address" => '4 TCH Peoples Hospital,151/C,Indrapuri,Bhopal',
		"speciality"=>'Gyn.',
		"contact"=>0755-2488637,
		"time"=>'09:00AM To 01:00PM 03:00PM To 05:00PM',
		"city"=>'Bhopal'	    
		),	
	"66" => array
		(
		"id" => 67,	    
		"drname" => 'A.P.Khalkho',	    
		"address" => '656,Sector-9B, Saket  Nagar Bhopal',
		"speciality"=>'Ophthalmologists',
		"contact"=>0755-2435120,
		"time"=>'09:30Am To 01:00PM',
		"city"=>'Bhopal'	    
		),	
	"67" => array
		(
		"id" => 68,	    
		"drname" => 'Divya Batra(MBBS,DGO,)',	    
		"address" => 'Sec.-A,Indrapuri,Raisen Rd.Gate 1,Bhopal',
		"speciality"=>'Gynaecologist',
		"contact"=>0755-4262151,
		"time"=>'10:30AM TO 05:00PM',
		"city"=>'Bhopal'	    
		),	
	"68" => array
		(
		"id" => 69,	    
		"drname" => 'Hemlata Parashar(MS)',	    
		"address" => 'Jeewandhara Hos.2,Santoshi Vihar,Rajeev Nagar,Ayodhya By Pass Rd.Bhopal',
		"speciality"=>'Obst.Gyn.',
		"contact"=>9425302019,
		"time"=>'09:00 To 10:00 AM 04:00 To 06:30 PM',
		"city"=>'Bhopal'	    
		),	
	"69" => array
		(
		"id" => 70,	    
		"drname" => 'Amruta Girish Lale (MBBS,DOMS)',	    
		"address" => 'M-102,Baghmugalia,Bhopal',
		"speciality"=>'Opthalmologist',
		"contact"=>9425079859,
		"time"=>'09:30AM To 01:30PM 06:30 To 08:30',
		"city"=>'Bhopal'	    
		),
	"70" => array
		(
		"id" => 71,	    
		"drname" => 'Mukul Mathur(MBBS,DRM,DOMS)',	    
		"address" => 'Jawahar Lal Nehru Cancer Hosp.,Bhopal',
		"speciality"=>'',
		"contact"=>9424401854,
		"time"=>'09:00AM To 05:00PM',
		"city"=>'Bhopal'	    
		),	
	"71" => array
		(
		"id" => 72,	    
		"drname" => 'Sarita Agarwal (B.sc,MBBS,DGO)',	    
		"address" => 'Anugrah Clinic,189,Z-2,MP.Nagar,Bhopal',
		"speciality"=>'Obst.Gyn.',
		"contact"=>0755-2580225,
		"time"=>'06:30 PM To 08:30PM',
		"city"=>'Bhopal'	    
		),	
	"72" => array
		(
		"id" => 73,	    
		"drname" => 'Usha Mehta(MBBS,DGO)',	    
		"address" => '54,sector-A,Sonagiri,Opp.Piplani Petrol Pump,Bhopal',
		"speciality"=>'Obs.Gyn.',
		"contact"=>0755-2756493,
		"time"=>' 09:00AM To12:00 PM  06:00 To 08:00PM',
		"city"=>'Bhopal'	    
		),
	"73" => array
		(
		"id" => 74,	    
		"drname" => 'Bimla Gultani',	    
		"address" => 'Bimla Nursing Home,29,Idgah Hills,Bhopal',
		"speciality"=>'',
		"contact"=>0755-2541486,
		"time"=>'09:00 To11:00AM 05:00 To 07:00PM',
		"city"=>'Bhopal'	    
		),	
	"74" => array
		(
		"id" => 75,	    
		"drname" => 'Neelu Mehrotra(MBBS,DGO)',	    
		"address" => 'Jawaharlal Nehru, Cancer Hospital Research Center,Idgah Hills,Bhopal',
		"speciality"=>'Gyn.& Breast',
		"contact"=>9826483481,
		"time"=>'09:00AM T0 05:00PM',
		"city"=>'Bhopal'	    
		),	
	"75" => array
		(
		"id" => 76,	    
		"drname" => 'B.Bhardwaj(MBBS,MS)',	    
		"address" => '47,MLA,Quarter,Bhopal',
		"speciality"=>'',
		"contact"=>8989208333,
		"time"=>'06:30PM TO 08:30PM',
		"city"=>'Bhopal'	    
		),	
	"76" => array
		(
		"id" => 77,	    
		"drname" => 'Neelima Dhawale(MBBS,DGO,DNB)',	    
		"address" => '63,MLA Qutr.Jawahar ChowkBhopa',
		"speciality"=>'',
		"contact"=>9479102468,
		"time"=>'l.12:00 To 02:00PM 07:00 TO 09:00PM',
		"city"=>'Bhopal'	    
		),
	"77" => array
		(
		"id" => 78,	    
		"drname" => 'Savita Jain (MBBS,DGO)',	    
		"address" => 'Sharmanm Clinic,L.G.-8,Minal Mall,J.K. Rd.Bhopal',
		"speciality"=>'Obst.Gyn.',
		"contact"=>9926353492,
		"time"=>'12:00 To 01:00PM 06:00 To 09:00PM',
		"city"=>'Bhopal'	    
		),	
	"78" => array
		(
		"id" => 79,	    
		"drname" => 'Anuradha Bhargava (MBBS,DGO)',	    
		"address" => 'Vardan Hospital,Jahangirabad,Bhopal',
		"speciality"=>'',
		"contact"=>0755-2765621,
		"time"=>'11:00AM To 01:30PM',
		"city"=>'Bhopal'	    
		),	
	"79" => array
		(
		"id" => 80,	    
		"drname" => 'Kusum Saxena(MBBS,DGO)',	    
		"address" => 'Tanushree Hos.84,Shahzadrai Bhawan,ChiklodRd.Jahangirabad,Bhopal',
		"speciality"=>'',
		"contact"=>0755-2766966,
		"time"=>'11:00AM To 01:00PM 05:00 To 07:00PM',
		"city"=>'Bhopal'	    
		),	
	"80" => array
		(
		"id" => 81,	    
		"drname" => 'Vandna Chourasia(MBBS,MS)',	    
		"address" => 'B-66,Kasturba Nagar,Nr.Chetak Bridge,Bhopal',
		"speciality"=>'Infertility Spclst.',
		"contact"=>9827054013,
		"time"=>'11:00AM TO 02:00PM  07:30 To 09:30 PM',
		"city"=>'Bhopal'	    
		),	
	"81" => array
		(
		"id" => 82,	    
		"drname" => 'Manisha Jain(MS)',	    
		"address" => 'Suyash Hospital,45-A,Janki nagar,Chuna Bhatti,Bhopal.',
		"speciality"=>'Gynaecologist',
		"contact"=>0755-4279220,
		"time"=>'12:00 To02:00PM 07:00 To 09:00PM',
		"city"=>'Bhopal'	    
		),	
	"82" => array
		(
		"id" => 83,	    
		"drname" => 'Vandna Agarwal(MBBS,DGO,DNB)',	    
		"address" => 'Matratva Hos.Saevdharam Bhopal',
		"speciality"=>'Infertility Spclst.',
		"contact"=>0755-2734640,
		"time"=>'11:00AM To 02:00PM  06:00 To 09:00PM',
		"city"=>'Bhopal'	    
		),	
	"83" => array
		(
		"id" => 84,	    
		"drname" => 'Tanuja Saxena(MBBS,DGO)',	    
		"address" => 'C-69,Housing Board Clny.Koh-E-Fiza,Bhopal',
		"speciality"=>' Delivery & Operation',
		"contact"=>0755-2546201,
		"time"=>'05:00 To 08:00PM',
		"city"=>'Bhopal'	    
		),	
	"84" => array
		(
		"id" => 85,	    
		"drname" => 'Aruna Kumar(MBBS,MS,HOD,GMC)',	    
		"address" => 'Sultania JananaHos.Nr.Rly.Rd. Bhopal',
		"speciality"=>'Gyn.Dept.',
		"contact"=>0755-4050574,
		"time"=>'06:00 To 09:00PM',
		"city"=>'Bhopal'	    
		),
	"85" => array
		(
		"id" => 86,	    
		"drname" => 'Azra Khurram(MBBS,MS)',	    
		"address" => 'Hafees Eye Hos. MarernityHome,Opp.Lal Pared Grnd.Jahangirabad,Bhopal',
		"speciality"=>'',
		"contact"=>0755-2571160,
		"time"=>'09:00AM To 12:00PM',
		"city"=>'Bhopal'	    
		),	
	"86" => array
		(
		"id" => 87,	    
		"drname" => 'Vaibhav Dubey (MD)Psychiatry',	    
		"address" => '30,Civil Line,Bhopal',
		"speciality"=>'Psychiatrist & Neurologist',
		"contact"=>9424401688,
		"time"=>'09:00AM To 01:00PM 06:00 To 08:00PM',
		"city"=>'Bhopal'	    
		),	
	"87" => array
		(
		"id" => 88,	    
		"drname" => 'Veena Pandey(MBBS,DGO)',	    
		"address" => 'H.No.1,Prakash Nagar,By Pass Rd.BHEL Piplani Bhopal',
		"speciality"=>'',
		"contact"=>9179008009,
		"time"=>'09:00AM To 12:00PM  06:00 To 08:00PM',
		"city"=>'Bhopal'	    
		),	
	"88" => array
		(
		"id" => 89,	    
		"drname" => 'Anjana Chaturvedi',	    
		"address" => 'Chaturvedi Maternity & Gen.Hos.Raisen Rd.Pul Bogda Bhopal',
		"speciality"=>'Child & Female',
		"contact"=>9826023188,
		"time"=>'10:00AM To 01:30PM 06:00 To 09:00PM',
		"city"=>'Bhopal'	    
		),	
	"89" => array
		(
		"id" => 90,	    
		"drname" => 'Bharti Yadav(MBBS)',	    
		"address" => '239-A,Old Ashoka Garden,Prabhat Prtrol Pump,Nr.Hotel Silver In,Bhopal',
		"speciality"=>'Gyn.',
		"contact"=>9303132391,
		"time"=>'11:00AM TO 01:00PM 07:00 To 09:00PM',
		"city"=>'Bhopal'	    
		),
	"90" => array
		(
		"id" => 91,	    
		"drname" => 'Indubala Jain(MBBS,MS)',	    
		"address" => 'Pushkom  Maternity & Nursing Home,62,Old,Ashoka Garden,Bhopal',
		"speciality"=>'Gyn.',
		"contact"=>0755-2582550,
		"time"=>'10:00AM To 01:00PM 06:00 To 09:00PM',
		"city"=>'Bhopal'	    
		),
	"91" => array
		(
		"id" => 92,	    
		"drname" => 'Vaijayanti  Kolekar(MBBS,MD)',	    
		"address" => 'LBS,Hos.73,Tajul Masjid, Rd.Bhopal',
		"speciality"=>'',
		"contact"=>0755-2531678,
		"time"=>'11:00AM TO 03:00PM',
		"city"=>'Bhopal'	    
		),	
	"92" => array
		(
		"id" => 93,	    
		"drname" => 'Malti Bhojwani(MBBS,MD)',	    
		"address" => 'HIG/451-452,E-7,Arera Clny.Bhopal.',
		"speciality"=>'',
		"contact"=>0755-2468092,
		"time"=>'12:00 To 07:00 PM',
		"city"=>'Bhopal'	    
		),	
	"93" => array
		(
		"id" => 94,	    
		"drname" => 'Prabhakar Kawathekar(MD,DCP)',	    
		"address" => 'Shop No.1,Sterling Enclave,Phase-1,Bhopal',
		"speciality"=>'Pathologist',
		"contact"=>0755-2421628,
		"time"=>'06:00 To 09:00PM',
		"city"=>'Bhopal'	    
		),	
	"94" => array
		(
		"id" => 95,	    
		"drname" => 'Ashok Kumar Awasthi(MD)',	    
		"address" => 'B-288,Shahpura,C-sector,Opp.MPEB,Bhopal',
		"speciality"=>'Pathologist',
		"contact"=>9827056443,
		"time"=>'08:00AM To 08:00PM',
		"city"=>'Bhopal'	    
		),	
	"95" => array
		(
		"id" => 96,	    
		"drname" => 'Ajit Verma(MD,DM)',	    
		"address" => 'Akshey Heart Hospital,Char Imli.Bhopal',
		"speciality"=>'',
		"contact"=>9425013169,
		"time"=>'09:30AM To 03:00PM',
		"city"=>'Bhopal'	    
		),	
	"96" => array
		(
		"id" => 97,	    
		"drname" => 'Sunil Malik(MD)',	    
		"address" => 'C-11,BDA Colony,6No.Stop,Shivaji Nagar ,Bhopal',
		"speciality"=>'Neurology',
		"contact"=>0755-2711722,
		"time"=>'10:00AM TO 06:00PM',
		"city"=>'Bhopal'	    
		),	
	"97" => array
		(
		"id" => 98,	    
		"drname" => 'S.K.Jain(DM)',	    
		"address" => 'MLA Qrts.Jawahar Chowk,Bhopal.',
		"speciality"=>'Neurology',
		"contact"=>0755-2763838,
		"time"=>'11:00AM To 03:00PM',
		"city"=>'Bhopal'	    
		),	
	"98" => array
		(
		"id" => 99,	    
		"drname" => 'Raj Kishor Tiwari(MD)',	    
		"address" => 'Kamla Nehru Hos.GMC.Campus, Bhopal',
		"speciality"=>'Pathologist',
		"contact"=>9827011430,
		"time"=>'08:00AM To 02:00PM',
		"city"=>'Bhopal'	    
		),
	"99" => array
		(
		"id" => 100,	    
		"drname" => 'I.D.Chourasia (Ms,Mch,HH & GMC)',	    
		"address" => 'E-47 Bunglow,Bhopal',
		"speciality"=>'Neurosurgery',
		"contact"=>9826071926,
		"time"=>'07:00am To 08:00AM 04:00 To 08:00PM',
		"city"=>'Bhopal'	    
		),																																																																																																																	);
	 		
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
		"drname" => 'Bhopal Medical Store',	    
		"address" => 'E-3,28-A,Arera Colony,E-3,28-A,Arera Colony,Crossing,Bhopal',
		"speciality"=>'',
		"contact"=>0755-4266480,
		"time"=>'',
		"city"=>'Bhopal'	    
		),
	"1" => array
		(
		"id" => 2,	    
		"drname" => 'Deep Medical',	    
		"address" => 'Deep Hospital,Opp.Sargam Talkies,Hoshangabad Rd.Bhopal',
		"speciality"=>'',
		"contact"=>0755-2573583,
		"time"=>'',
		"city"=>'Bhopal'	    
		),
	"2" => array
		(
		"id" => 3,	    
		"drname" => 'National Medical',	    
		"address" => 'National Hospital,E-3/61,Appo.Old Csmpion School Ground,Arera Cly.Bhopal',
		"speciality"=>'',
		"contact"=>0755-2440004-05-08,
		"time"=>'',
		"city"=>'Bhopal'	    
		),
	"3" => array
		(
		"id" => 4,	    
		"drname" => 'Narmada Medical',	    
		"address" => 'Narmada Advance Trauma& Critical Care Institute,E-3E-3/23,Arera Cly.Bhopal',
		"speciality"=>'',
		"contact"=>0755-2404000,
		"time"=>'',
		"city"=>'Bhopal'	    
		),		
	"4" => array
		(
		"id" => 5,	    
		"drname" => 'Shivam Medical',	    
		"address" => 'Shivam Hospital,E-8/3,Rly.Society,12 No.Stop,Arera Colony,Bhopal',
		"speciality"=>'',
		"contact"=>0755-4221469,
		"time"=>'',
		"city"=>'Bhopal'	    
		),		
	"5" => array
		(
		"id" => 6,	    
		"drname" => 'Shradha Medical',	    
		"address" => 'Shekhar Hospital,A-69,Shahpura,Near Manisha Market,Bhopal',
		"speciality"=>'',
		"contact"=>0755-2425242,
		"time"=>'',
		"city"=>'Bhopal'	    
		),		
	"6" => array
		(
		"id" => 7,	    
		"drname" => 'Suyash Medical',	    
		"address" => 'Malti Hospital,E-7/HIG-451,Arera Colony,Bhopal',
		"speciality"=>'',
		"contact"=>0755-2432908,
		"time"=>'',
		"city"=>'Bhopal'	    
		),		
	"7" => array
		(
		"id" => 8,	    
		"drname" => 'Pragya Medical',	    
		"address" => 'Meenakshi Hospital,E-5/38,Arera Colony,Bhopal',
		"speciality"=>'',
		"contact"=>0755-2466034,
		"time"=>'',
		"city"=>'Bhopal'	    
		),
	"8" => array
		(
		"id" => 9,	    
		"drname" => 'Vardhman Medical',	    
		"address" => 'Global Hospital E-5/24,Opp.,Bhopal',
		"speciality"=>'',
		"contact"=>0755-4290820,
		"time"=>'',
		"city"=>'Bhopal'	    
		),
	"9" => array
		(
		"id" => 10,	    
		"drname" => 'Vaibhav Medical Store',	    
		"address" => 'Niramay Hospital E-2/13,Arera Colony,Bhopal',
		"speciality"=>'',
		"contact"=>0755-2453448,
		"time"=>'',
		"city"=>'Bhopal'	    
		),
//BLOOD BANK
	"10" => array
		(
		"id" =>11 ,	    
		"drname" => 'Arpan Blod Bank',	    
		"address" => '131/6, Kiran Complex,Near Sargam Talkies,MP Nagar,Bhopal',
		"speciality"=>'',
		"contact"=>0755-3295142,
		"time"=>'',
		"city"=>'Bhopal'	    
		),
	"11" => array
		(
		"id" => 12,	    
		"drname" => 'Bhopal Blod Bank',	    
		"address" => '4,Near Hamidia HospitalFateh Garh,Bhopal',
		"speciality"=>'',
		"contact"=>0755-2538891,
		"time"=>'',
		"city"=>'Bhopal'	    
		),	
	"12" => array
		(
		"id" => 13,	    
		"drname" => 'Chirayu Blod Bank',	    
		"address" => '6,Malipura,Hawa Mahal road Opp.Nirmal Meera School,Bhopal',
		"speciality"=>'',
		"contact"=>0755-2531212,
		"time"=>'',
		"city"=>'Bhopal'	    
		),	
	"13" => array
		(
		"id" =>14 ,	    
		"drname" => 'Hamidia Hospital Blod Bank',	    
		"address" => 'Royal market ,Bhopal',
		"speciality"=>'',
		"contact"=>0755-2540222,2540051,
		"time"=>'',
		"city"=>'Bhopal'	    
		),	
	"14" => array
		(
		"id" => 15,	    
		"drname" => 'Red Cross Society',	    
		"address" => 'Shivaji Nagar,Bhopal',
		"speciality"=>'',
		"contact"=>922949551,0755-2550441,
		"time"=>'',
		"city"=>'Bhopal'	    
		),
//MEDICAL COLLEGE
	"15" => array
		(
		"id" => 16,	    
		"drname" => 'Chirayu Medical College And Hospital',	    
		"address" => 'Berahgarh Bhopal (MP)',
		"speciality"=>'',
		"contact"=>0755-6679132,
		"time"=>'',
		"city"=>'Bhopal'	    
		),
	"16" => array
		(
		"id" => 17,	    
		"drname" => 'Gandhi Medical College',	    
		"address" => 'Royal Market Bhopal',
		"speciality"=>'',
		"contact"=>0755-2541376,
		"time"=>'',
		"city"=>'Bhopal'	    
		),	
	"17" => array
		(
		"id" => 18,	    
		"drname" => 'L.N.Medical College And Research Centre',	    
		"address" => 'JK Town,Sarvdharan C-Sector Kolar Road,Bhopal',
		"speciality"=>'',
		"contact"=>'',
		"time"=>'',
		"city"=>'Bhopal'	    
		),	
	"18" => array
		(
		"id" => 19,	    
		"drname" => 'All India Institute Of Medical Sciences (AIMS)',	    
		"address" => 'Saket Nagar ,Bhopal',
		"speciality"=>'',
		"contact"=>0755-2902025,
		"time"=>'',
		"city"=>'Bhopal'	    
		),	
	"19" => array
		(
		"id" => 20,	    
		"drname" => 'Peoples College Of Medical Science And Research Centre',	    
		"address" => 'Bhanpur,By Pass Road,Bhopal',
		"speciality"=>'',
		"contact"=>0755-4005008,
		"time"=>'',
		"city"=>'Bhopal'	    
		),	
//GOVT.HOSPITAL	
	"20" => array
		(
		"id" => 21,	    
		"drname" => 'Civil Hospital',	    
		"address" => 'Bairagarh',
		"speciality"=>'Genral',
		"contact"=>0755-2711096,
		"time"=>'',
		"city"=>'Bhopal'	    
		),	
	"21" => array
		(
		"id" => 22,	    
		"drname" => 'Sultania Zanana Hospital',	    
		"address" => 'Near Kali Mandir,Rly. Station Road Bhopal',
		"speciality"=>'Maternity',
		"contact"=>0755-4050430,
		"time"=>'',
		"city"=>'Bhopal'	    
		),	
	"22" => array
		(
		"id" => 23,	    
		"drname" => 'Indian Red Cross Society',	    
		"address" => 'Near Mayur Park Link Road Bhopal',
		"speciality"=>'Genral',
		"contact"=>0755-2526100,
		"time"=>'',
		"city"=>'Bhopal'	    
		),	
	"23" => array
		(
		"id" =>24 ,	    
		"drname" => 'Jawahar Lal Nehru Hospital',	    
		"address" => 'DIG Square  Berasiya Road Bhopal',
		"speciality"=>'Genral',
		"contact"=>0755-2730178,
		"time"=>'',
		"city"=>'Bhopal'	    
		),	
	"24" => array
		(
		"id" => 25,	    
		"drname" => 'Katju Hospital',	    
		"address" => ' Jawahar Chowk,New Market,Bhopal',
		"speciality"=>'Genral',
		"contact"=>0755-4251639,
		"time"=>'',
		"city"=>'Bhopal'	    
		),
//PRIVATE HOSPITAL			
	"25" => array
		(
		"id" => 26,	    
		"drname" => 'Aashirwad Nursing Home',	    
		"address" => '48,MLA Qrt. Jawahar Chowk Bhopal',
		"speciality"=>'Gynaecologist And Genral',
		"contact"=>0755-2779636,
		"time"=>'',
		"city"=>'Bhopal'	    
		),	
	"26" => array
		(
		"id" => 27,	    
		"drname" => 'Agarwal Hospital',	    
		"address" => 'E-3/34,Arera Clny.Near Habibganj Rly.Crossing,Bhopal',
		"speciality"=>'Chest Phisician And Gynaecologist',
		"contact"=>0755-4283383,
		"time"=>'',
		"city"=>'Bhopal'	    
		),	
	"27" => array
		(
		"id" => 28,	    
		"drname" => 'Agarwal Nursing Home',	    
		"address" => 'Bajaria,Near Rly.Stn.Bhopal',
		"speciality"=>'Gynaecologist And Genral',
		"contact"=>0755-2734640,
		"time"=>'',
		"city"=>'Bhopal'	    
		),	
	"28" => array
		(
		"id" => 29,	    
		"drname" => 'Ajwani Eye Hospital',	    
		"address" => '115,Berasia Road,Sindhi Colony, Bhopal',
		"speciality"=>'Eye Specialist',
		"contact"=>0755-2745700,
		"time"=>'',
		"city"=>'Bhopal'	    
		),	
	"29" => array
		(
		"id" => 30,	    
		"drname" => 'A.K.Hospital',	    
		"address" => '7th Block,Sanjay Complex Nr.Mata Mandir Bhopal',
		"speciality"=>'Genral',
		"contact"=>0755-2776619,
		"time"=>'',
		"city"=>'Bhopal'	    
		),
//PATHOLOGY LAB			
	"30" => array
		(
		"id" => 31,	    
		"drname" => 'Alliance Medical Imaging Clinic',	    
		"address" => 'Near Tajul Maszid,Opp.Motiya Talab 76,1st Flr.Bhopal',
		"speciality"=>'',
		"contact"=>0755-4990899,9302250001,
		"time"=>'',
		"city"=>'Bhopal'	    
		),	
	"31" => array
		(
		"id" => 32,	    
		"drname" => 'Apollo Diagnostic Centre',	    
		"address" => '18,Taj Market Bhopal',
		"speciality"=>'',
		"contact"=>9826054433,
		"time"=>'',
		"city"=>'Bhopal'	    
		),	
	"32" => array
		(
		"id" => 33,	    
		"drname" => 'Delta Pathology Lab',	    
		"address" => '77,Motia TalabOpp.tajul Masjid,Bhopal',
		"speciality"=>'',
		"contact"=>0755-2531363,
		"time"=>'',
		"city"=>'Bhopal'	    
		),	
	"33" => array
		(
		"id" => 34,	    
		"drname" => 'Final Dignostics Centre',	    
		"address" => '45,Taj MarketBhopal',
		"speciality"=>'',
		"contact"=>0755-2541932,
		"time"=>'',
		"city"=>'Bhopal'	    
		),	
	"34" => array
		(
		"id" => 35,	    
		"drname" => 'Glaze X-Ray Pathology',	    
		"address" => '34,Taj Market Bhopal',
		"speciality"=>'',
		"contact"=>9303131253,
		"time"=>'',
		"city"=>'Bhopal'	    
		),
//C.T.SCAN AND M.R.I CENTRE			
	"35" => array
		(
		"id" => 36,	    
		"drname" => 'Sanya Dignostic',	    
		"address" => 'E-3/15,Arera Colony,Bhopal',
		"speciality"=>'',
		"contact"=>0755-462016,
		"time"=>'',
		"city"=>'Bhopal'	    
		),	
	"36" => array
		(
		"id" => 37,	    
		"drname" => 'Shivam Dignostic',	    
		"address" => 'Retghat Kamla Park Bhopal',
		"speciality"=>'',
		"contact"=>0755-4225514,
		"time"=>'',
		"city"=>'Bhopal'	    
		),	
	"37" => array
		(
		"id" => 38,	    
		"drname" => 'Venus MRI & MDCT Centre',	    
		"address" => '6,1/2Bus Stop,Shivaji Nagar Bhopal',
		"speciality"=>'',
		"contact"=>0755-4218801,
		"time"=>'',
		"city"=>'Bhopal'	    
		),	
	"38" => array
		(
		"id" => 39,	    
		"drname" => 'MEDI SCAN',	    
		"address" => 'Opp.Motia Talab,Tajul Masjid,Bhopal',
		"speciality"=>'',
		"contact"=>0755-2739577,
		"time"=>'',
		"city"=>'Bhopal'	    
		),	
	"39" => array
		(
		"id" => 40,	    
		"drname" => 'Bhopal Medical Centre',	    
		"address" => 'Indrapuri2,MP Nagar Bhopal',
		"speciality"=>'',
		"contact"=>0755-4273739,
		"time"=>'',
		"city"=>'Bhopal'	    
		),
//MEDICAL SUPPLIERS MANUFACTURES & FITNESS			
	"40" => array
		(
		"id" => 41,	    
		"drname" => 'Bombay Medical Hall',	    
		"address" => 'Jumerati,Bhopal',
		"speciality"=>'Homeopathic',
		"contact"=>0755-2733052,
		"time"=>'',
		"city"=>'Bhopal'	    
		),	
	"41" => array
		(
		"id" => 42,	    
		"drname" => 'Jain Homoeo Hall',	    
		"address" => 'Bima Kunj,Kolar Road Bhopal',
		"speciality"=>'Homeopathic',
		"contact"=>9329026250,
		"time"=>'',
		"city"=>'Bhopal'	    
		),	
	"42" => array
		(
		"id" => 43,	    
		"drname" => 'Kasturi Homoeo',	    
		"address" => 'Zone-2,MP Nagar,Bhopal',
		"speciality"=>'Homeopathic',
		"contact"=>0755-4272228,
		"time"=>'',
		"city"=>'Bhopal'	    
		),	
	"43" => array
		(
		"id" => 44,	    
		"drname" => 'New Life Homoeo Centre',	    
		"address" => 'Budhwara Char Batfi,Bhopal',
		"speciality"=>'Homeopathic',
		"contact"=>0755-2744160,
		"time"=>'',
		"city"=>'Bhopal'	    
		),	
	"44" => array
		(
		"id" => 45,	    
		"drname" => 'S.N. Homoeo Pharmacy',	    
		"address" => 'Indra Market,Jawahar Chowk Bhopal',
		"speciality"=>'Homeopathic',
		"contact"=>0755-2775303,
		"time"=>'',
		"city"=>'Bhopal'	    
		),			
	"45" => array
		(
		"id" => 46,	    
		"drname" => 'Garimas Herbal Beauty Care Centre',	    
		"address" => 'E-3/112,Sharda Cmplx 10 Market,Bhopal',
		"speciality"=>'Health & Beauty Care',
		"contact"=>0755-4277537,
		"time"=>'',
		"city"=>'Bhopal'	    
		),	
	"46" => array
		(
		"id" => 47,	    
		"drname" => 'Lavanya GYM & Fitness Centre',	    
		"address" => 'M 1st.Floor,Westent Plaza,Chuna Bhatti Sq.Bhopal',
		"speciality"=>'Health & Beauty Care',
		"contact"=>0755-3251024,
		"time"=>'',
		"city"=>'Bhopal'	    
		),	
	"47" => array
		(
		"id" => 48,	    
		"drname" => 'Vishal Fitness Planet',	    
		"address" => '4E-3/45,10 Cross Rd.Building 10 No.Mrkt.Bhopal',
		"speciality"=>'Health & Beauty Care',
		"contact"=>0755-2460123,
		"time"=>'',
		"city"=>'Bhopal'	    
		),	
	"48" => array
		(
		"id" => 49,	    
		"drname" => 'VLCC Slimming Beauty Fitness',	    
		"address" => '47-A,Malviya Nagar,New Market,Bhopal',
		"speciality"=>'Health & Beauty Care',
		"contact"=>0755-4232201,
		"time"=>'',
		"city"=>'Bhopal'	    
		),	
	"49" => array
		(
		"id" => 50,	    
		"drname" => 'Eastern Health Care',	    
		"address" => '303, Dawa Bazar,13-14mt,Marg Indore',
		"speciality"=>'Health & Beauty Care',
		"contact"=>0731-2463780,
		"time"=>'',
		"city"=>'Indore'	    
		),
//DOCTOR		
	"50" => array
		(
		"id" => 51,	    
		"drname" => 'Nisha Mishra (MBBS)',	    
		"address" => 'E-7/9,Char Imli,Behind CBI Office,Bhopal',
		"speciality"=>'Ophtho.',
		"contact"=>9425028573,
		"time"=>'06:00 TO 08:00PM',
		"city"=>'Bhopal'	    
		),	
	"51" => array
		(
		"id" => 52,	    
		"drname" => 'Jayshree Beedkar (MBBS,MS)',	    
		"address" => 'E-4/151,Arera Colony 10 No.Stop,Bhopal',
		"speciality"=>'Obs.& Gyn.',
		"contact"=>0755-2464616,
		"time"=>'06:00PM To 08:30PM',
		"city"=>'Bhopal'	    
		),	
	"52" => array
		(
		"id" => 53,	    
		"drname" => 'Jyoti Jain (MBBS,DGO)',	    
		"address" => 'Sujyoti Hospital,G-3/358,Gulmohar,Arera Clny Bhopal',
		"speciality"=>'',
		"contact"=>0755-2427363,
		"time"=>'10:00AM To 01:00PM 06:00 To 09:00PM',
		"city"=>'Bhopal'	    
		),	
	"53" => array
		(
		"id" => 54,	    
		"drname" => 'Kala Gidwani(MD)',	    
		"address" => 'E/5,108,Arera Colony Bhopal.',
		"speciality"=>'Obs.& Gyn.',
		"contact"=>9826055237,
		"time"=>'05PM TO 07:00PM',
		"city"=>'Bhopal'	    
		),	
	"54" => array
		(
		"id" => 55,	    
		"drname" => 'Krishna Sharma(MBBS,DGO)',	    
		"address" => '101/13,Shivaji Nagar Bhopal',
		"speciality"=>'',
		"contact"=>0755-2556776,
		"time"=>'08:00AM To 02:00PM 06:00 To 08:00PM',
		"city"=>'Bhopal'	    
		),	
	"55" => array
		(
		"id" => 56,	    
		"drname" => 'Malti Bhojwani (MBBS,MD)',	    
		"address" => 'HIG/451-452,E-7,Arera Colony,Bhopal',
		"speciality"=>'',
		"contact"=>0755-2468092,
		"time"=>'12:00PM To 07:00 PM',
		"city"=>'Bhopal'	    
		),	
	"56" => array
		(
		"id" => 57,	    
		"drname" => 'Meenakshi Verma(MBBS,MD)',	    
		"address" => 'Meenakshi Hospital,E-5/38 Arera Colony,Bhopal',
		"speciality"=>'',
		"contact"=>0755-2466033,
		"time"=>'10AM To 02:30PM  06:30 To 09:30PM',
		"city"=>'Bhopal'	    
		),	
	"57" => array
		(
		"id" =>58 ,	    
		"drname" => 'Salil Kumar(MS)',	    
		"address" => 'E-3/73,Arera Colony,Bhopal',
		"speciality"=>'Ophtho.',
		"contact"=>9425028444,
		"time"=>'05:30 To 08:30 PM',
		"city"=>'Bhopal'	    
		),	
	"58" => array
		(
		"id" => 59,	    
		"drname" => 'Neelima Agrawal(MBBS,DGO)',	    
		"address" => 'Agrawal Hospital,E-3/34,AreraColony Bhopal',
		"speciality"=>'',
		"contact"=>9826027878,
		"time"=>'10:00AM To 01:30PM 05:30 PM To  08:30PM',
		"city"=>'Bhopal'	    
		),	
	"59" => array
		(
		"id" => 60,	    
		"drname" => 'Sadhna Shrivastava(MBBS,DGO,DMCH)',	    
		"address" => 'Shekhar Hospital,A-69,Near Manisha Market,Shahpura,Bhopal',
		"speciality"=>'Obs.Gyn.',
		"contact"=>0755-2425242,
		"time"=>'10:00AM To 12:00PM  06:00PM To 08:30PM',
		"city"=>'Bhopal'	    
		),	
	"60" => array
		(
		"id" => 61,	    
		"drname" => 'Shobha Saran(MS)',	    
		"address" => 'C-4,BDA,24,Bungalow,6No.Stop.Shivaji Nagar,Bhopal',
		"speciality"=>'Obs.Gyn.',
		"contact"=>0755-2554502,
		"time"=>'09:00 To12:00 PM 05:00PM To 08:00 PM',
		"city"=>'Bhopal'	    
		),	
	"61" => array
		(
		"id" => 62,	    
		"drname" => 'Varuna Pathak(MBBS,MS,DNB)',	    
		"address" => '3,Nupur Kunj,E-3,Arera Colony,Bhopal',
		"speciality"=>'',
		"contact"=>0755-2465466,
		"time"=>'05:30PM To 08:30PM',
		"city"=>'Bhopal'	    
		),
	"62" => array
		(
		"id" => 63,	    
		"drname" => 'Kavita Saluja(MBBS,PGDMCH)',	    
		"address" => 'Saluja Nursing Home,ChollaNaka,Old City,Bhopal',
		"speciality"=>'',
		"contact"=>0755-2725980,
		"time"=>'03:00PM To 06:00PM',
		"city"=>'Bhopal'	    
		),
	"63" => array
		(
		"id" => 64,	    
		"drname" => 'Swagata Bramachari',	    
		"address" => 'Speciality Clinic,C-4,Parijat Complex,Bittan Market,Bhopal',
		"speciality"=>'Female Surgeon',
		"contact"=>9425310784,
		"time"=>'06:00 To 08:00PM',
		"city"=>'Bhopal'	    
		),
	"64" => array
		(
		"id" => 65,	    
		"drname" => 'Gajendra Chawla(MS)',	    
		"address" => 'E-7,/378,Arera Colony,Opp.Hanuman Mandir,Bhopal',
		"speciality"=>'Ophtho.',
		"contact"=>9425376207,
		"time"=>'06:30 To 08:30PM',
		"city"=>'Bhopal'	    
		),	
	"65" => array
		(
		"id" => 66,	    
		"drname" => 'A.P.Khalkho',	    
		"address" => '4 TCH Peoples Hospital,151/C,Indrapuri,Bhopal',
		"speciality"=>'Gyn.',
		"contact"=>0755-2488637,
		"time"=>'09:00AM To 01:00PM 03:00PM To 05:00PM',
		"city"=>'Bhopal'	    
		),	
	"66" => array
		(
		"id" => 67,	    
		"drname" => 'A.P.Khalkho',	    
		"address" => '656,Sector-9B, Saket  Nagar Bhopal',
		"speciality"=>'Ophthalmologists',
		"contact"=>0755-2435120,
		"time"=>'09:30Am To 01:00PM',
		"city"=>'Bhopal'	    
		),	
	"67" => array
		(
		"id" => 68,	    
		"drname" => 'Divya Batra(MBBS,DGO,)',	    
		"address" => 'Sec.-A,Indrapuri,Raisen Rd.Gate 1,Bhopal',
		"speciality"=>'Gynaecologist',
		"contact"=>0755-4262151,
		"time"=>'10:30AM TO 05:00PM',
		"city"=>'Bhopal'	    
		),	
	"68" => array
		(
		"id" => 69,	    
		"drname" => 'Hemlata Parashar(MS)',	    
		"address" => 'Jeewandhara Hos.2,Santoshi Vihar,Rajeev Nagar,Ayodhya By Pass Rd.Bhopal',
		"speciality"=>'Obst.Gyn.',
		"contact"=>9425302019,
		"time"=>'09:00 To 10:00 AM 04:00 To 06:30 PM',
		"city"=>'Bhopal'	    
		),	
	"69" => array
		(
		"id" => 70,	    
		"drname" => 'Amruta Girish Lale (MBBS,DOMS)',	    
		"address" => 'M-102,Baghmugalia,Bhopal',
		"speciality"=>'Opthalmologist',
		"contact"=>9425079859,
		"time"=>'09:30AM To 01:30PM 06:30 To 08:30',
		"city"=>'Bhopal'	    
		),
	"70" => array
		(
		"id" => 71,	    
		"drname" => 'Mukul Mathur(MBBS,DRM,DOMS)',	    
		"address" => 'Jawahar Lal Nehru Cancer Hosp.,Bhopal',
		"speciality"=>'',
		"contact"=>9424401854,
		"time"=>'09:00AM To 05:00PM',
		"city"=>'Bhopal'	    
		),	
	"71" => array
		(
		"id" => 72,	    
		"drname" => 'Sarita Agarwal (B.sc,MBBS,DGO)',	    
		"address" => 'Anugrah Clinic,189,Z-2,MP.Nagar,Bhopal',
		"speciality"=>'Obst.Gyn.',
		"contact"=>0755-2580225,
		"time"=>'06:30 PM To 08:30PM',
		"city"=>'Bhopal'	    
		),	
	"72" => array
		(
		"id" => 73,	    
		"drname" => 'Usha Mehta(MBBS,DGO)',	    
		"address" => '54,sector-A,Sonagiri,Opp.Piplani Petrol Pump,Bhopal',
		"speciality"=>'Obs.Gyn.',
		"contact"=>0755-2756493,
		"time"=>' 09:00AM To12:00 PM  06:00 To 08:00PM',
		"city"=>'Bhopal'	    
		),
	"73" => array
		(
		"id" => 74,	    
		"drname" => 'Bimla Gultani',	    
		"address" => 'Bimla Nursing Home,29,Idgah Hills,Bhopal',
		"speciality"=>'',
		"contact"=>0755-2541486,
		"time"=>'09:00 To11:00AM 05:00 To 07:00PM',
		"city"=>'Bhopal'	    
		),	
	"74" => array
		(
		"id" => 75,	    
		"drname" => 'Neelu Mehrotra(MBBS,DGO)',	    
		"address" => 'Jawaharlal Nehru, Cancer Hospital Research Center,Idgah Hills,Bhopal',
		"speciality"=>'Gyn.& Breast',
		"contact"=>9826483481,
		"time"=>'09:00AM T0 05:00PM',
		"city"=>'Bhopal'	    
		),	
	"75" => array
		(
		"id" => 76,	    
		"drname" => 'B.Bhardwaj(MBBS,MS)',	    
		"address" => '47,MLA,Quarter,Bhopal',
		"speciality"=>'',
		"contact"=>8989208333,
		"time"=>'06:30PM TO 08:30PM',
		"city"=>'Bhopal'	    
		),	
	"76" => array
		(
		"id" => 77,	    
		"drname" => 'Neelima Dhawale(MBBS,DGO,DNB)',	    
		"address" => '63,MLA Qutr.Jawahar ChowkBhopa',
		"speciality"=>'',
		"contact"=>9479102468,
		"time"=>'l.12:00 To 02:00PM 07:00 TO 09:00PM',
		"city"=>'Bhopal'	    
		),
	"77" => array
		(
		"id" => 78,	    
		"drname" => 'Savita Jain (MBBS,DGO)',	    
		"address" => 'Sharmanm Clinic,L.G.-8,Minal Mall,J.K. Rd.Bhopal',
		"speciality"=>'Obst.Gyn.',
		"contact"=>9926353492,
		"time"=>'12:00 To 01:00PM 06:00 To 09:00PM',
		"city"=>'Bhopal'	    
		),	
	"78" => array
		(
		"id" => 79,	    
		"drname" => 'Anuradha Bhargava (MBBS,DGO)',	    
		"address" => 'Vardan Hospital,Jahangirabad,Bhopal',
		"speciality"=>'',
		"contact"=>0755-2765621,
		"time"=>'11:00AM To 01:30PM',
		"city"=>'Bhopal'	    
		),	
	"79" => array
		(
		"id" => 80,	    
		"drname" => 'Kusum Saxena(MBBS,DGO)',	    
		"address" => 'Tanushree Hos.84,Shahzadrai Bhawan,ChiklodRd.Jahangirabad,Bhopal',
		"speciality"=>'',
		"contact"=>0755-2766966,
		"time"=>'11:00AM To 01:00PM 05:00 To 07:00PM',
		"city"=>'Bhopal'	    
		),	
	"80" => array
		(
		"id" => 81,	    
		"drname" => 'Vandna Chourasia(MBBS,MS)',	    
		"address" => 'B-66,Kasturba Nagar,Nr.Chetak Bridge,Bhopal',
		"speciality"=>'Infertility Spclst.',
		"contact"=>9827054013,
		"time"=>'11:00AM TO 02:00PM  07:30 To 09:30 PM',
		"city"=>'Bhopal'	    
		),	
	"81" => array
		(
		"id" => 82,	    
		"drname" => 'Manisha Jain(MS)',	    
		"address" => 'Suyash Hospital,45-A,Janki nagar,Chuna Bhatti,Bhopal.',
		"speciality"=>'Gynaecologist',
		"contact"=>0755-4279220,
		"time"=>'12:00 To02:00PM 07:00 To 09:00PM',
		"city"=>'Bhopal'	    
		),	
	"82" => array
		(
		"id" => 83,	    
		"drname" => 'Vandna Agarwal(MBBS,DGO,DNB)',	    
		"address" => 'Matratva Hos.Saevdharam Bhopal',
		"speciality"=>'Infertility Spclst.',
		"contact"=>0755-2734640,
		"time"=>'11:00AM To 02:00PM  06:00 To 09:00PM',
		"city"=>'Bhopal'	    
		),	
	"83" => array
		(
		"id" => 84,	    
		"drname" => 'Tanuja Saxena(MBBS,DGO)',	    
		"address" => 'C-69,Housing Board Clny.Koh-E-Fiza,Bhopal',
		"speciality"=>' Delivery & Operation',
		"contact"=>0755-2546201,
		"time"=>'05:00 To 08:00PM',
		"city"=>'Bhopal'	    
		),	
	"84" => array
		(
		"id" => 85,	    
		"drname" => 'Aruna Kumar(MBBS,MS,HOD,GMC)',	    
		"address" => 'Sultania JananaHos.Nr.Rly.Rd. Bhopal',
		"speciality"=>'Gyn.Dept.',
		"contact"=>0755-4050574,
		"time"=>'06:00 To 09:00PM',
		"city"=>'Bhopal'	    
		),
	"85" => array
		(
		"id" => 86,	    
		"drname" => 'Azra Khurram(MBBS,MS)',	    
		"address" => 'Hafees Eye Hos. MarernityHome,Opp.Lal Pared Grnd.Jahangirabad,Bhopal',
		"speciality"=>'',
		"contact"=>0755-2571160,
		"time"=>'09:00AM To 12:00PM',
		"city"=>'Bhopal'	    
		),	
	"86" => array
		(
		"id" => 87,	    
		"drname" => 'Vaibhav Dubey (MD)Psychiatry',	    
		"address" => '30,Civil Line,Bhopal',
		"speciality"=>'Psychiatrist & Neurologist',
		"contact"=>9424401688,
		"time"=>'09:00AM To 01:00PM 06:00 To 08:00PM',
		"city"=>'Bhopal'	    
		),	
	"87" => array
		(
		"id" => 88,	    
		"drname" => 'Veena Pandey(MBBS,DGO)',	    
		"address" => 'H.No.1,Prakash Nagar,By Pass Rd.BHEL Piplani Bhopal',
		"speciality"=>'',
		"contact"=>9179008009,
		"time"=>'09:00AM To 12:00PM  06:00 To 08:00PM',
		"city"=>'Bhopal'	    
		),	
	"88" => array
		(
		"id" => 89,	    
		"drname" => 'Anjana Chaturvedi',	    
		"address" => 'Chaturvedi Maternity & Gen.Hos.Raisen Rd.Pul Bogda Bhopal',
		"speciality"=>'Child & Female',
		"contact"=>9826023188,
		"time"=>'10:00AM To 01:30PM 06:00 To 09:00PM',
		"city"=>'Bhopal'	    
		),	
	"89" => array
		(
		"id" => 90,	    
		"drname" => 'Bharti Yadav(MBBS)',	    
		"address" => '239-A,Old Ashoka Garden,Prabhat Prtrol Pump,Nr.Hotel Silver In,Bhopal',
		"speciality"=>'Gyn.',
		"contact"=>9303132391,
		"time"=>'11:00AM TO 01:00PM 07:00 To 09:00PM',
		"city"=>'Bhopal'	    
		),
	"90" => array
		(
		"id" => 91,	    
		"drname" => 'Indubala Jain(MBBS,MS)',	    
		"address" => 'Pushkom  Maternity & Nursing Home,62,Old,Ashoka Garden,Bhopal',
		"speciality"=>'Gyn.',
		"contact"=>0755-2582550,
		"time"=>'10:00AM To 01:00PM 06:00 To 09:00PM',
		"city"=>'Bhopal'	    
		),
	"91" => array
		(
		"id" => 92,	    
		"drname" => 'Vaijayanti  Kolekar(MBBS,MD)',	    
		"address" => 'LBS,Hos.73,Tajul Masjid, Rd.Bhopal',
		"speciality"=>'',
		"contact"=>0755-2531678,
		"time"=>'11:00AM TO 03:00PM',
		"city"=>'Bhopal'	    
		),	
	"92" => array
		(
		"id" => 93,	    
		"drname" => 'Malti Bhojwani(MBBS,MD)',	    
		"address" => 'HIG/451-452,E-7,Arera Clny.Bhopal.',
		"speciality"=>'',
		"contact"=>0755-2468092,
		"time"=>'12:00 To 07:00 PM',
		"city"=>'Bhopal'	    
		),	
	"93" => array
		(
		"id" => 94,	    
		"drname" => 'Prabhakar Kawathekar(MD,DCP)',	    
		"address" => 'Shop No.1,Sterling Enclave,Phase-1,Bhopal',
		"speciality"=>'Pathologist',
		"contact"=>0755-2421628,
		"time"=>'06:00 To 09:00PM',
		"city"=>'Bhopal'	    
		),	
	"94" => array
		(
		"id" => 95,	    
		"drname" => 'Ashok Kumar Awasthi(MD)',	    
		"address" => 'B-288,Shahpura,C-sector,Opp.MPEB,Bhopal',
		"speciality"=>'Pathologist',
		"contact"=>9827056443,
		"time"=>'08:00AM To 08:00PM',
		"city"=>'Bhopal'	    
		),	
	"95" => array
		(
		"id" => 96,	    
		"drname" => 'Ajit Verma(MD,DM)',	    
		"address" => 'Akshey Heart Hospital,Char Imli.Bhopal',
		"speciality"=>'',
		"contact"=>9425013169,
		"time"=>'09:30AM To 03:00PM',
		"city"=>'Bhopal'	    
		),	
	"96" => array
		(
		"id" => 97,	    
		"drname" => 'Sunil Malik(MD)',	    
		"address" => 'C-11,BDA Colony,6No.Stop,Shivaji Nagar ,Bhopal',
		"speciality"=>'Neurology',
		"contact"=>0755-2711722,
		"time"=>'10:00AM TO 06:00PM',
		"city"=>'Bhopal'	    
		),	
	"97" => array
		(
		"id" => 98,	    
		"drname" => 'S.K.Jain(DM)',	    
		"address" => 'MLA Qrts.Jawahar Chowk,Bhopal.',
		"speciality"=>'Neurology',
		"contact"=>0755-2763838,
		"time"=>'11:00AM To 03:00PM',
		"city"=>'Bhopal'	    
		),	
	"98" => array
		(
		"id" => 99,	    
		"drname" => 'Raj Kishor Tiwari(MD)',	    
		"address" => 'Kamla Nehru Hos.GMC.Campus, Bhopal',
		"speciality"=>'Pathologist',
		"contact"=>9827011430,
		"time"=>'08:00AM To 02:00PM',
		"city"=>'Bhopal'	    
		),
	"99" => array
		(
		"id" => 100,	    
		"drname" => 'I.D.Chourasia (Ms,Mch,HH & GMC)',	    
		"address" => 'E-47 Bunglow,Bhopal',
		"speciality"=>'Neurosurgery',
		"contact"=>9826071926,
		"time"=>'07:00am To 08:00AM 04:00 To 08:00PM',
		"city"=>'Bhopal'	    
		),																																																																																																																	);
	 		
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
		"drname" => 'Bhopal Medical Store',	    
		"address" => 'E-3,28-A,Arera Colony,E-3,28-A,Arera Colony,Crossing,Bhopal',
		"speciality"=>'',
		"contact"=>0755-4266480,
		"time"=>'',
		"city"=>'Bhopal'	    
		),
	"1" => array
		(
		"id" => 2,	    
		"drname" => 'Deep Medical',	    
		"address" => 'Deep Hospital,Opp.Sargam Talkies,Hoshangabad Rd.Bhopal',
		"speciality"=>'',
		"contact"=>0755-2573583,
		"time"=>'',
		"city"=>'Bhopal'	    
		),
	"2" => array
		(
		"id" => 3,	    
		"drname" => 'National Medical',	    
		"address" => 'National Hospital,E-3/61,Appo.Old Csmpion School Ground,Arera Cly.Bhopal',
		"speciality"=>'',
		"contact"=>0755-2440004-05-08,
		"time"=>'',
		"city"=>'Bhopal'	    
		),
	"3" => array
		(
		"id" => 4,	    
		"drname" => 'Narmada Medical',	    
		"address" => 'Narmada Advance Trauma& Critical Care Institute,E-3E-3/23,Arera Cly.Bhopal',
		"speciality"=>'',
		"contact"=>0755-2404000,
		"time"=>'',
		"city"=>'Bhopal'	    
		),		
	"4" => array
		(
		"id" => 5,	    
		"drname" => 'Shivam Medical',	    
		"address" => 'Shivam Hospital,E-8/3,Rly.Society,12 No.Stop,Arera Colony,Bhopal',
		"speciality"=>'',
		"contact"=>0755-4221469,
		"time"=>'',
		"city"=>'Bhopal'	    
		),		
	"5" => array
		(
		"id" => 6,	    
		"drname" => 'Shradha Medical',	    
		"address" => 'Shekhar Hospital,A-69,Shahpura,Near Manisha Market,Bhopal',
		"speciality"=>'',
		"contact"=>0755-2425242,
		"time"=>'',
		"city"=>'Bhopal'	    
		),		
	"6" => array
		(
		"id" => 7,	    
		"drname" => 'Suyash Medical',	    
		"address" => 'Malti Hospital,E-7/HIG-451,Arera Colony,Bhopal',
		"speciality"=>'',
		"contact"=>0755-2432908,
		"time"=>'',
		"city"=>'Bhopal'	    
		),		
	"7" => array
		(
		"id" => 8,	    
		"drname" => 'Pragya Medical',	    
		"address" => 'Meenakshi Hospital,E-5/38,Arera Colony,Bhopal',
		"speciality"=>'',
		"contact"=>0755-2466034,
		"time"=>'',
		"city"=>'Bhopal'	    
		),
	"8" => array
		(
		"id" => 9,	    
		"drname" => 'Vardhman Medical',	    
		"address" => 'Global Hospital E-5/24,Opp.,Bhopal',
		"speciality"=>'',
		"contact"=>0755-4290820,
		"time"=>'',
		"city"=>'Bhopal'	    
		),
	"9" => array
		(
		"id" => 10,	    
		"drname" => 'Vaibhav Medical Store',	    
		"address" => 'Niramay Hospital E-2/13,Arera Colony,Bhopal',
		"speciality"=>'',
		"contact"=>0755-2453448,
		"time"=>'',
		"city"=>'Bhopal'	    
		),
//BLOOD BANK
	"10" => array
		(
		"id" =>11 ,	    
		"drname" => 'Arpan Blod Bank',	    
		"address" => '131/6, Kiran Complex,Near Sargam Talkies,MP Nagar,Bhopal',
		"speciality"=>'',
		"contact"=>0755-3295142,
		"time"=>'',
		"city"=>'Bhopal'	    
		),
	"11" => array
		(
		"id" => 12,	    
		"drname" => 'Bhopal Blod Bank',	    
		"address" => '4,Near Hamidia HospitalFateh Garh,Bhopal',
		"speciality"=>'',
		"contact"=>0755-2538891,
		"time"=>'',
		"city"=>'Bhopal'	    
		),	
	"12" => array
		(
		"id" => 13,	    
		"drname" => 'Chirayu Blod Bank',	    
		"address" => '6,Malipura,Hawa Mahal road Opp.Nirmal Meera School,Bhopal',
		"speciality"=>'',
		"contact"=>0755-2531212,
		"time"=>'',
		"city"=>'Bhopal'	    
		),	
	"13" => array
		(
		"id" =>14 ,	    
		"drname" => 'Hamidia Hospital Blod Bank',	    
		"address" => 'Royal market ,Bhopal',
		"speciality"=>'',
		"contact"=>0755-2540222,2540051,
		"time"=>'',
		"city"=>'Bhopal'	    
		),	
	"14" => array
		(
		"id" => 15,	    
		"drname" => 'Red Cross Society',	    
		"address" => 'Shivaji Nagar,Bhopal',
		"speciality"=>'',
		"contact"=>922949551,0755-2550441,
		"time"=>'',
		"city"=>'Bhopal'	    
		),
//MEDICAL COLLEGE
	"15" => array
		(
		"id" => 16,	    
		"drname" => 'Chirayu Medical College And Hospital',	    
		"address" => 'Berahgarh Bhopal (MP)',
		"speciality"=>'',
		"contact"=>0755-6679132,
		"time"=>'',
		"city"=>'Bhopal'	    
		),
	"16" => array
		(
		"id" => 17,	    
		"drname" => 'Gandhi Medical College',	    
		"address" => 'Royal Market Bhopal',
		"speciality"=>'',
		"contact"=>0755-2541376,
		"time"=>'',
		"city"=>'Bhopal'	    
		),	
	"17" => array
		(
		"id" => 18,	    
		"drname" => 'L.N.Medical College And Research Centre',	    
		"address" => 'JK Town,Sarvdharan C-Sector Kolar Road,Bhopal',
		"speciality"=>'',
		"contact"=>'',
		"time"=>'',
		"city"=>'Bhopal'	    
		),	
	"18" => array
		(
		"id" => 19,	    
		"drname" => 'All India Institute Of Medical Sciences (AIMS)',	    
		"address" => 'Saket Nagar ,Bhopal',
		"speciality"=>'',
		"contact"=>0755-2902025,
		"time"=>'',
		"city"=>'Bhopal'	    
		),	
	"19" => array
		(
		"id" => 20,	    
		"drname" => 'Peoples College Of Medical Science And Research Centre',	    
		"address" => 'Bhanpur,By Pass Road,Bhopal',
		"speciality"=>'',
		"contact"=>0755-4005008,
		"time"=>'',
		"city"=>'Bhopal'	    
		),	
//GOVT.HOSPITAL	
	"20" => array
		(
		"id" => 21,	    
		"drname" => 'Civil Hospital',	    
		"address" => 'Bairagarh',
		"speciality"=>'Genral',
		"contact"=>0755-2711096,
		"time"=>'',
		"city"=>'Bhopal'	    
		),	
	"21" => array
		(
		"id" => 22,	    
		"drname" => 'Sultania Zanana Hospital',	    
		"address" => 'Near Kali Mandir,Rly. Station Road Bhopal',
		"speciality"=>'Maternity',
		"contact"=>0755-4050430,
		"time"=>'',
		"city"=>'Bhopal'	    
		),	
	"22" => array
		(
		"id" => 23,	    
		"drname" => 'Indian Red Cross Society',	    
		"address" => 'Near Mayur Park Link Road Bhopal',
		"speciality"=>'Genral',
		"contact"=>0755-2526100,
		"time"=>'',
		"city"=>'Bhopal'	    
		),	
	"23" => array
		(
		"id" =>24 ,	    
		"drname" => 'Jawahar Lal Nehru Hospital',	    
		"address" => 'DIG Square  Berasiya Road Bhopal',
		"speciality"=>'Genral',
		"contact"=>0755-2730178,
		"time"=>'',
		"city"=>'Bhopal'	    
		),	
	"24" => array
		(
		"id" => 25,	    
		"drname" => 'Katju Hospital',	    
		"address" => ' Jawahar Chowk,New Market,Bhopal',
		"speciality"=>'Genral',
		"contact"=>0755-4251639,
		"time"=>'',
		"city"=>'Bhopal'	    
		),
//PRIVATE HOSPITAL			
	"25" => array
		(
		"id" => 26,	    
		"drname" => 'Aashirwad Nursing Home',	    
		"address" => '48,MLA Qrt. Jawahar Chowk Bhopal',
		"speciality"=>'Gynaecologist And Genral',
		"contact"=>0755-2779636,
		"time"=>'',
		"city"=>'Bhopal'	    
		),	
	"26" => array
		(
		"id" => 27,	    
		"drname" => 'Agarwal Hospital',	    
		"address" => 'E-3/34,Arera Clny.Near Habibganj Rly.Crossing,Bhopal',
		"speciality"=>'Chest Phisician And Gynaecologist',
		"contact"=>0755-4283383,
		"time"=>'',
		"city"=>'Bhopal'	    
		),	
	"27" => array
		(
		"id" => 28,	    
		"drname" => 'Agarwal Nursing Home',	    
		"address" => 'Bajaria,Near Rly.Stn.Bhopal',
		"speciality"=>'Gynaecologist And Genral',
		"contact"=>0755-2734640,
		"time"=>'',
		"city"=>'Bhopal'	    
		),	
	"28" => array
		(
		"id" => 29,	    
		"drname" => 'Ajwani Eye Hospital',	    
		"address" => '115,Berasia Road,Sindhi Colony, Bhopal',
		"speciality"=>'Eye Specialist',
		"contact"=>0755-2745700,
		"time"=>'',
		"city"=>'Bhopal'	    
		),	
	"29" => array
		(
		"id" => 30,	    
		"drname" => 'A.K.Hospital',	    
		"address" => '7th Block,Sanjay Complex Nr.Mata Mandir Bhopal',
		"speciality"=>'Genral',
		"contact"=>0755-2776619,
		"time"=>'',
		"city"=>'Bhopal'	    
		),
//PATHOLOGY LAB			
	"30" => array
		(
		"id" => 31,	    
		"drname" => 'Alliance Medical Imaging Clinic',	    
		"address" => 'Near Tajul Maszid,Opp.Motiya Talab 76,1st Flr.Bhopal',
		"speciality"=>'',
		"contact"=>0755-4990899,9302250001,
		"time"=>'',
		"city"=>'Bhopal'	    
		),	
	"31" => array
		(
		"id" => 32,	    
		"drname" => 'Apollo Diagnostic Centre',	    
		"address" => '18,Taj Market Bhopal',
		"speciality"=>'',
		"contact"=>9826054433,
		"time"=>'',
		"city"=>'Bhopal'	    
		),	
	"32" => array
		(
		"id" => 33,	    
		"drname" => 'Delta Pathology Lab',	    
		"address" => '77,Motia TalabOpp.tajul Masjid,Bhopal',
		"speciality"=>'',
		"contact"=>0755-2531363,
		"time"=>'',
		"city"=>'Bhopal'	    
		),	
	"33" => array
		(
		"id" => 34,	    
		"drname" => 'Final Dignostics Centre',	    
		"address" => '45,Taj MarketBhopal',
		"speciality"=>'',
		"contact"=>0755-2541932,
		"time"=>'',
		"city"=>'Bhopal'	    
		),	
	"34" => array
		(
		"id" => 35,	    
		"drname" => 'Glaze X-Ray Pathology',	    
		"address" => '34,Taj Market Bhopal',
		"speciality"=>'',
		"contact"=>9303131253,
		"time"=>'',
		"city"=>'Bhopal'	    
		),
//C.T.SCAN AND M.R.I CENTRE			
	"35" => array
		(
		"id" => 36,	    
		"drname" => 'Sanya Dignostic',	    
		"address" => 'E-3/15,Arera Colony,Bhopal',
		"speciality"=>'',
		"contact"=>0755-462016,
		"time"=>'',
		"city"=>'Bhopal'	    
		),	
	"36" => array
		(
		"id" => 37,	    
		"drname" => 'Shivam Dignostic',	    
		"address" => 'Retghat Kamla Park Bhopal',
		"speciality"=>'',
		"contact"=>0755-4225514,
		"time"=>'',
		"city"=>'Bhopal'	    
		),	
	"37" => array
		(
		"id" => 38,	    
		"drname" => 'Venus MRI & MDCT Centre',	    
		"address" => '6,1/2Bus Stop,Shivaji Nagar Bhopal',
		"speciality"=>'',
		"contact"=>0755-4218801,
		"time"=>'',
		"city"=>'Bhopal'	    
		),	
	"38" => array
		(
		"id" => 39,	    
		"drname" => 'MEDI SCAN',	    
		"address" => 'Opp.Motia Talab,Tajul Masjid,Bhopal',
		"speciality"=>'',
		"contact"=>0755-2739577,
		"time"=>'',
		"city"=>'Bhopal'	    
		),	
	"39" => array
		(
		"id" => 40,	    
		"drname" => 'Bhopal Medical Centre',	    
		"address" => 'Indrapuri2,MP Nagar Bhopal',
		"speciality"=>'',
		"contact"=>0755-4273739,
		"time"=>'',
		"city"=>'Bhopal'	    
		),
//MEDICAL SUPPLIERS MANUFACTURES & FITNESS			
	"40" => array
		(
		"id" => 41,	    
		"drname" => 'Bombay Medical Hall',	    
		"address" => 'Jumerati,Bhopal',
		"speciality"=>'Homeopathic',
		"contact"=>0755-2733052,
		"time"=>'',
		"city"=>'Bhopal'	    
		),	
	"41" => array
		(
		"id" => 42,	    
		"drname" => 'Jain Homoeo Hall',	    
		"address" => 'Bima Kunj,Kolar Road Bhopal',
		"speciality"=>'Homeopathic',
		"contact"=>9329026250,
		"time"=>'',
		"city"=>'Bhopal'	    
		),	
	"42" => array
		(
		"id" => 43,	    
		"drname" => 'Kasturi Homoeo',	    
		"address" => 'Zone-2,MP Nagar,Bhopal',
		"speciality"=>'Homeopathic',
		"contact"=>0755-4272228,
		"time"=>'',
		"city"=>'Bhopal'	    
		),	
	"43" => array
		(
		"id" => 44,	    
		"drname" => 'New Life Homoeo Centre',	    
		"address" => 'Budhwara Char Batfi,Bhopal',
		"speciality"=>'Homeopathic',
		"contact"=>0755-2744160,
		"time"=>'',
		"city"=>'Bhopal'	    
		),	
	"44" => array
		(
		"id" => 45,	    
		"drname" => 'S.N. Homoeo Pharmacy',	    
		"address" => 'Indra Market,Jawahar Chowk Bhopal',
		"speciality"=>'Homeopathic',
		"contact"=>0755-2775303,
		"time"=>'',
		"city"=>'Bhopal'	    
		),			
	"45" => array
		(
		"id" => 46,	    
		"drname" => 'Garimas Herbal Beauty Care Centre',	    
		"address" => 'E-3/112,Sharda Cmplx 10 Market,Bhopal',
		"speciality"=>'Health & Beauty Care',
		"contact"=>0755-4277537,
		"time"=>'',
		"city"=>'Bhopal'	    
		),	
	"46" => array
		(
		"id" => 47,	    
		"drname" => 'Lavanya GYM & Fitness Centre',	    
		"address" => 'M 1st.Floor,Westent Plaza,Chuna Bhatti Sq.Bhopal',
		"speciality"=>'Health & Beauty Care',
		"contact"=>0755-3251024,
		"time"=>'',
		"city"=>'Bhopal'	    
		),	
	"47" => array
		(
		"id" => 48,	    
		"drname" => 'Vishal Fitness Planet',	    
		"address" => '4E-3/45,10 Cross Rd.Building 10 No.Mrkt.Bhopal',
		"speciality"=>'Health & Beauty Care',
		"contact"=>0755-2460123,
		"time"=>'',
		"city"=>'Bhopal'	    
		),	
	"48" => array
		(
		"id" => 49,	    
		"drname" => 'VLCC Slimming Beauty Fitness',	    
		"address" => '47-A,Malviya Nagar,New Market,Bhopal',
		"speciality"=>'Health & Beauty Care',
		"contact"=>0755-4232201,
		"time"=>'',
		"city"=>'Bhopal'	    
		),	
	"49" => array
		(
		"id" => 50,	    
		"drname" => 'Eastern Health Care',	    
		"address" => '303, Dawa Bazar,13-14mt,Marg Indore',
		"speciality"=>'Health & Beauty Care',
		"contact"=>0731-2463780,
		"time"=>'',
		"city"=>'Indore'	    
		),
//DOCTOR		
	"50" => array
		(
		"id" => 51,	    
		"drname" => 'Nisha Mishra (MBBS)',	    
		"address" => 'E-7/9,Char Imli,Behind CBI Office,Bhopal',
		"speciality"=>'Ophtho.',
		"contact"=>9425028573,
		"time"=>'06:00 TO 08:00PM',
		"city"=>'Bhopal'	    
		),	
	"51" => array
		(
		"id" => 52,	    
		"drname" => 'Jayshree Beedkar (MBBS,MS)',	    
		"address" => 'E-4/151,Arera Colony 10 No.Stop,Bhopal',
		"speciality"=>'Obs.& Gyn.',
		"contact"=>0755-2464616,
		"time"=>'06:00PM To 08:30PM',
		"city"=>'Bhopal'	    
		),	
	"52" => array
		(
		"id" => 53,	    
		"drname" => 'Jyoti Jain (MBBS,DGO)',	    
		"address" => 'Sujyoti Hospital,G-3/358,Gulmohar,Arera Clny Bhopal',
		"speciality"=>'',
		"contact"=>0755-2427363,
		"time"=>'10:00AM To 01:00PM 06:00 To 09:00PM',
		"city"=>'Bhopal'	    
		),	
	"53" => array
		(
		"id" => 54,	    
		"drname" => 'Kala Gidwani(MD)',	    
		"address" => 'E/5,108,Arera Colony Bhopal.',
		"speciality"=>'Obs.& Gyn.',
		"contact"=>9826055237,
		"time"=>'05PM TO 07:00PM',
		"city"=>'Bhopal'	    
		),	
	"54" => array
		(
		"id" => 55,	    
		"drname" => 'Krishna Sharma(MBBS,DGO)',	    
		"address" => '101/13,Shivaji Nagar Bhopal',
		"speciality"=>'',
		"contact"=>0755-2556776,
		"time"=>'08:00AM To 02:00PM 06:00 To 08:00PM',
		"city"=>'Bhopal'	    
		),	
	"55" => array
		(
		"id" => 56,	    
		"drname" => 'Malti Bhojwani (MBBS,MD)',	    
		"address" => 'HIG/451-452,E-7,Arera Colony,Bhopal',
		"speciality"=>'',
		"contact"=>0755-2468092,
		"time"=>'12:00PM To 07:00 PM',
		"city"=>'Bhopal'	    
		),	
	"56" => array
		(
		"id" => 57,	    
		"drname" => 'Meenakshi Verma(MBBS,MD)',	    
		"address" => 'Meenakshi Hospital,E-5/38 Arera Colony,Bhopal',
		"speciality"=>'',
		"contact"=>0755-2466033,
		"time"=>'10AM To 02:30PM  06:30 To 09:30PM',
		"city"=>'Bhopal'	    
		),	
	"57" => array
		(
		"id" =>58 ,	    
		"drname" => 'Salil Kumar(MS)',	    
		"address" => 'E-3/73,Arera Colony,Bhopal',
		"speciality"=>'Ophtho.',
		"contact"=>9425028444,
		"time"=>'05:30 To 08:30 PM',
		"city"=>'Bhopal'	    
		),	
	"58" => array
		(
		"id" => 59,	    
		"drname" => 'Neelima Agrawal(MBBS,DGO)',	    
		"address" => 'Agrawal Hospital,E-3/34,AreraColony Bhopal',
		"speciality"=>'',
		"contact"=>9826027878,
		"time"=>'10:00AM To 01:30PM 05:30 PM To  08:30PM',
		"city"=>'Bhopal'	    
		),	
	"59" => array
		(
		"id" => 60,	    
		"drname" => 'Sadhna Shrivastava(MBBS,DGO,DMCH)',	    
		"address" => 'Shekhar Hospital,A-69,Near Manisha Market,Shahpura,Bhopal',
		"speciality"=>'Obs.Gyn.',
		"contact"=>0755-2425242,
		"time"=>'10:00AM To 12:00PM  06:00PM To 08:30PM',
		"city"=>'Bhopal'	    
		),	
	"60" => array
		(
		"id" => 61,	    
		"drname" => 'Shobha Saran(MS)',	    
		"address" => 'C-4,BDA,24,Bungalow,6No.Stop.Shivaji Nagar,Bhopal',
		"speciality"=>'Obs.Gyn.',
		"contact"=>0755-2554502,
		"time"=>'09:00 To12:00 PM 05:00PM To 08:00 PM',
		"city"=>'Bhopal'	    
		),	
	"61" => array
		(
		"id" => 62,	    
		"drname" => 'Varuna Pathak(MBBS,MS,DNB)',	    
		"address" => '3,Nupur Kunj,E-3,Arera Colony,Bhopal',
		"speciality"=>'',
		"contact"=>0755-2465466,
		"time"=>'05:30PM To 08:30PM',
		"city"=>'Bhopal'	    
		),
	"62" => array
		(
		"id" => 63,	    
		"drname" => 'Kavita Saluja(MBBS,PGDMCH)',	    
		"address" => 'Saluja Nursing Home,ChollaNaka,Old City,Bhopal',
		"speciality"=>'',
		"contact"=>0755-2725980,
		"time"=>'03:00PM To 06:00PM',
		"city"=>'Bhopal'	    
		),
	"63" => array
		(
		"id" => 64,	    
		"drname" => 'Swagata Bramachari',	    
		"address" => 'Speciality Clinic,C-4,Parijat Complex,Bittan Market,Bhopal',
		"speciality"=>'Female Surgeon',
		"contact"=>9425310784,
		"time"=>'06:00 To 08:00PM',
		"city"=>'Bhopal'	    
		),
	"64" => array
		(
		"id" => 65,	    
		"drname" => 'Gajendra Chawla(MS)',	    
		"address" => 'E-7,/378,Arera Colony,Opp.Hanuman Mandir,Bhopal',
		"speciality"=>'Ophtho.',
		"contact"=>9425376207,
		"time"=>'06:30 To 08:30PM',
		"city"=>'Bhopal'	    
		),	
	"65" => array
		(
		"id" => 66,	    
		"drname" => 'A.P.Khalkho',	    
		"address" => '4 TCH Peoples Hospital,151/C,Indrapuri,Bhopal',
		"speciality"=>'Gyn.',
		"contact"=>0755-2488637,
		"time"=>'09:00AM To 01:00PM 03:00PM To 05:00PM',
		"city"=>'Bhopal'	    
		),	
	"66" => array
		(
		"id" => 67,	    
		"drname" => 'A.P.Khalkho',	    
		"address" => '656,Sector-9B, Saket  Nagar Bhopal',
		"speciality"=>'Ophthalmologists',
		"contact"=>0755-2435120,
		"time"=>'09:30Am To 01:00PM',
		"city"=>'Bhopal'	    
		),	
	"67" => array
		(
		"id" => 68,	    
		"drname" => 'Divya Batra(MBBS,DGO,)',	    
		"address" => 'Sec.-A,Indrapuri,Raisen Rd.Gate 1,Bhopal',
		"speciality"=>'Gynaecologist',
		"contact"=>0755-4262151,
		"time"=>'10:30AM TO 05:00PM',
		"city"=>'Bhopal'	    
		),	
	"68" => array
		(
		"id" => 69,	    
		"drname" => 'Hemlata Parashar(MS)',	    
		"address" => 'Jeewandhara Hos.2,Santoshi Vihar,Rajeev Nagar,Ayodhya By Pass Rd.Bhopal',
		"speciality"=>'Obst.Gyn.',
		"contact"=>9425302019,
		"time"=>'09:00 To 10:00 AM 04:00 To 06:30 PM',
		"city"=>'Bhopal'	    
		),	
	"69" => array
		(
		"id" => 70,	    
		"drname" => 'Amruta Girish Lale (MBBS,DOMS)',	    
		"address" => 'M-102,Baghmugalia,Bhopal',
		"speciality"=>'Opthalmologist',
		"contact"=>9425079859,
		"time"=>'09:30AM To 01:30PM 06:30 To 08:30',
		"city"=>'Bhopal'	    
		),
	"70" => array
		(
		"id" => 71,	    
		"drname" => 'Mukul Mathur(MBBS,DRM,DOMS)',	    
		"address" => 'Jawahar Lal Nehru Cancer Hosp.,Bhopal',
		"speciality"=>'',
		"contact"=>9424401854,
		"time"=>'09:00AM To 05:00PM',
		"city"=>'Bhopal'	    
		),	
	"71" => array
		(
		"id" => 72,	    
		"drname" => 'Sarita Agarwal (B.sc,MBBS,DGO)',	    
		"address" => 'Anugrah Clinic,189,Z-2,MP.Nagar,Bhopal',
		"speciality"=>'Obst.Gyn.',
		"contact"=>0755-2580225,
		"time"=>'06:30 PM To 08:30PM',
		"city"=>'Bhopal'	    
		),	
	"72" => array
		(
		"id" => 73,	    
		"drname" => 'Usha Mehta(MBBS,DGO)',	    
		"address" => '54,sector-A,Sonagiri,Opp.Piplani Petrol Pump,Bhopal',
		"speciality"=>'Obs.Gyn.',
		"contact"=>0755-2756493,
		"time"=>' 09:00AM To12:00 PM  06:00 To 08:00PM',
		"city"=>'Bhopal'	    
		),
	"73" => array
		(
		"id" => 74,	    
		"drname" => 'Bimla Gultani',	    
		"address" => 'Bimla Nursing Home,29,Idgah Hills,Bhopal',
		"speciality"=>'',
		"contact"=>0755-2541486,
		"time"=>'09:00 To11:00AM 05:00 To 07:00PM',
		"city"=>'Bhopal'	    
		),	
	"74" => array
		(
		"id" => 75,	    
		"drname" => 'Neelu Mehrotra(MBBS,DGO)',	    
		"address" => 'Jawaharlal Nehru, Cancer Hospital Research Center,Idgah Hills,Bhopal',
		"speciality"=>'Gyn.& Breast',
		"contact"=>9826483481,
		"time"=>'09:00AM T0 05:00PM',
		"city"=>'Bhopal'	    
		),	
	"75" => array
		(
		"id" => 76,	    
		"drname" => 'B.Bhardwaj(MBBS,MS)',	    
		"address" => '47,MLA,Quarter,Bhopal',
		"speciality"=>'',
		"contact"=>8989208333,
		"time"=>'06:30PM TO 08:30PM',
		"city"=>'Bhopal'	    
		),	
	"76" => array
		(
		"id" => 77,	    
		"drname" => 'Neelima Dhawale(MBBS,DGO,DNB)',	    
		"address" => '63,MLA Qutr.Jawahar ChowkBhopa',
		"speciality"=>'',
		"contact"=>9479102468,
		"time"=>'l.12:00 To 02:00PM 07:00 TO 09:00PM',
		"city"=>'Bhopal'	    
		),
	"77" => array
		(
		"id" => 78,	    
		"drname" => 'Savita Jain (MBBS,DGO)',	    
		"address" => 'Sharmanm Clinic,L.G.-8,Minal Mall,J.K. Rd.Bhopal',
		"speciality"=>'Obst.Gyn.',
		"contact"=>9926353492,
		"time"=>'12:00 To 01:00PM 06:00 To 09:00PM',
		"city"=>'Bhopal'	    
		),	
	"78" => array
		(
		"id" => 79,	    
		"drname" => 'Anuradha Bhargava (MBBS,DGO)',	    
		"address" => 'Vardan Hospital,Jahangirabad,Bhopal',
		"speciality"=>'',
		"contact"=>0755-2765621,
		"time"=>'11:00AM To 01:30PM',
		"city"=>'Bhopal'	    
		),	
	"79" => array
		(
		"id" => 80,	    
		"drname" => 'Kusum Saxena(MBBS,DGO)',	    
		"address" => 'Tanushree Hos.84,Shahzadrai Bhawan,ChiklodRd.Jahangirabad,Bhopal',
		"speciality"=>'',
		"contact"=>0755-2766966,
		"time"=>'11:00AM To 01:00PM 05:00 To 07:00PM',
		"city"=>'Bhopal'	    
		),	
	"80" => array
		(
		"id" => 81,	    
		"drname" => 'Vandna Chourasia(MBBS,MS)',	    
		"address" => 'B-66,Kasturba Nagar,Nr.Chetak Bridge,Bhopal',
		"speciality"=>'Infertility Spclst.',
		"contact"=>9827054013,
		"time"=>'11:00AM TO 02:00PM  07:30 To 09:30 PM',
		"city"=>'Bhopal'	    
		),	
	"81" => array
		(
		"id" => 82,	    
		"drname" => 'Manisha Jain(MS)',	    
		"address" => 'Suyash Hospital,45-A,Janki nagar,Chuna Bhatti,Bhopal.',
		"speciality"=>'Gynaecologist',
		"contact"=>0755-4279220,
		"time"=>'12:00 To02:00PM 07:00 To 09:00PM',
		"city"=>'Bhopal'	    
		),	
	"82" => array
		(
		"id" => 83,	    
		"drname" => 'Vandna Agarwal(MBBS,DGO,DNB)',	    
		"address" => 'Matratva Hos.Saevdharam Bhopal',
		"speciality"=>'Infertility Spclst.',
		"contact"=>0755-2734640,
		"time"=>'11:00AM To 02:00PM  06:00 To 09:00PM',
		"city"=>'Bhopal'	    
		),	
	"83" => array
		(
		"id" => 84,	    
		"drname" => 'Tanuja Saxena(MBBS,DGO)',	    
		"address" => 'C-69,Housing Board Clny.Koh-E-Fiza,Bhopal',
		"speciality"=>' Delivery & Operation',
		"contact"=>0755-2546201,
		"time"=>'05:00 To 08:00PM',
		"city"=>'Bhopal'	    
		),	
	"84" => array
		(
		"id" => 85,	    
		"drname" => 'Aruna Kumar(MBBS,MS,HOD,GMC)',	    
		"address" => 'Sultania JananaHos.Nr.Rly.Rd. Bhopal',
		"speciality"=>'Gyn.Dept.',
		"contact"=>0755-4050574,
		"time"=>'06:00 To 09:00PM',
		"city"=>'Bhopal'	    
		),
	"85" => array
		(
		"id" => 86,	    
		"drname" => 'Azra Khurram(MBBS,MS)',	    
		"address" => 'Hafees Eye Hos. MarernityHome,Opp.Lal Pared Grnd.Jahangirabad,Bhopal',
		"speciality"=>'',
		"contact"=>0755-2571160,
		"time"=>'09:00AM To 12:00PM',
		"city"=>'Bhopal'	    
		),	
	"86" => array
		(
		"id" => 87,	    
		"drname" => 'Vaibhav Dubey (MD)Psychiatry',	    
		"address" => '30,Civil Line,Bhopal',
		"speciality"=>'Psychiatrist & Neurologist',
		"contact"=>9424401688,
		"time"=>'09:00AM To 01:00PM 06:00 To 08:00PM',
		"city"=>'Bhopal'	    
		),	
	"87" => array
		(
		"id" => 88,	    
		"drname" => 'Veena Pandey(MBBS,DGO)',	    
		"address" => 'H.No.1,Prakash Nagar,By Pass Rd.BHEL Piplani Bhopal',
		"speciality"=>'',
		"contact"=>9179008009,
		"time"=>'09:00AM To 12:00PM  06:00 To 08:00PM',
		"city"=>'Bhopal'	    
		),	
	"88" => array
		(
		"id" => 89,	    
		"drname" => 'Anjana Chaturvedi',	    
		"address" => 'Chaturvedi Maternity & Gen.Hos.Raisen Rd.Pul Bogda Bhopal',
		"speciality"=>'Child & Female',
		"contact"=>9826023188,
		"time"=>'10:00AM To 01:30PM 06:00 To 09:00PM',
		"city"=>'Bhopal'	    
		),	
	"89" => array
		(
		"id" => 90,	    
		"drname" => 'Bharti Yadav(MBBS)',	    
		"address" => '239-A,Old Ashoka Garden,Prabhat Prtrol Pump,Nr.Hotel Silver In,Bhopal',
		"speciality"=>'Gyn.',
		"contact"=>9303132391,
		"time"=>'11:00AM TO 01:00PM 07:00 To 09:00PM',
		"city"=>'Bhopal'	    
		),
	"90" => array
		(
		"id" => 91,	    
		"drname" => 'Indubala Jain(MBBS,MS)',	    
		"address" => 'Pushkom  Maternity & Nursing Home,62,Old,Ashoka Garden,Bhopal',
		"speciality"=>'Gyn.',
		"contact"=>0755-2582550,
		"time"=>'10:00AM To 01:00PM 06:00 To 09:00PM',
		"city"=>'Bhopal'	    
		),
	"91" => array
		(
		"id" => 92,	    
		"drname" => 'Vaijayanti  Kolekar(MBBS,MD)',	    
		"address" => 'LBS,Hos.73,Tajul Masjid, Rd.Bhopal',
		"speciality"=>'',
		"contact"=>0755-2531678,
		"time"=>'11:00AM TO 03:00PM',
		"city"=>'Bhopal'	    
		),	
	"92" => array
		(
		"id" => 93,	    
		"drname" => 'Malti Bhojwani(MBBS,MD)',	    
		"address" => 'HIG/451-452,E-7,Arera Clny.Bhopal.',
		"speciality"=>'',
		"contact"=>0755-2468092,
		"time"=>'12:00 To 07:00 PM',
		"city"=>'Bhopal'	    
		),	
	"93" => array
		(
		"id" => 94,	    
		"drname" => 'Prabhakar Kawathekar(MD,DCP)',	    
		"address" => 'Shop No.1,Sterling Enclave,Phase-1,Bhopal',
		"speciality"=>'Pathologist',
		"contact"=>0755-2421628,
		"time"=>'06:00 To 09:00PM',
		"city"=>'Bhopal'	    
		),	
	"94" => array
		(
		"id" => 95,	    
		"drname" => 'Ashok Kumar Awasthi(MD)',	    
		"address" => 'B-288,Shahpura,C-sector,Opp.MPEB,Bhopal',
		"speciality"=>'Pathologist',
		"contact"=>9827056443,
		"time"=>'08:00AM To 08:00PM',
		"city"=>'Bhopal'	    
		),	
	"95" => array
		(
		"id" => 96,	    
		"drname" => 'Ajit Verma(MD,DM)',	    
		"address" => 'Akshey Heart Hospital,Char Imli.Bhopal',
		"speciality"=>'',
		"contact"=>9425013169,
		"time"=>'09:30AM To 03:00PM',
		"city"=>'Bhopal'	    
		),	
	"96" => array
		(
		"id" => 97,	    
		"drname" => 'Sunil Malik(MD)',	    
		"address" => 'C-11,BDA Colony,6No.Stop,Shivaji Nagar ,Bhopal',
		"speciality"=>'Neurology',
		"contact"=>0755-2711722,
		"time"=>'10:00AM TO 06:00PM',
		"city"=>'Bhopal'	    
		),	
	"97" => array
		(
		"id" => 98,	    
		"drname" => 'S.K.Jain(DM)',	    
		"address" => 'MLA Qrts.Jawahar Chowk,Bhopal.',
		"speciality"=>'Neurology',
		"contact"=>0755-2763838,
		"time"=>'11:00AM To 03:00PM',
		"city"=>'Bhopal'	    
		),	
	"98" => array
		(
		"id" => 99,	    
		"drname" => 'Raj Kishor Tiwari(MD)',	    
		"address" => 'Kamla Nehru Hos.GMC.Campus, Bhopal',
		"speciality"=>'Pathologist',
		"contact"=>9827011430,
		"time"=>'08:00AM To 02:00PM',
		"city"=>'Bhopal'	    
		),
	"99" => array
		(
		"id" => 100,	    
		"drname" => 'I.D.Chourasia (Ms,Mch,HH & GMC)',	    
		"address" => 'E-47 Bunglow,Bhopal',
		"speciality"=>'Neurosurgery',
		"contact"=>9826071926,
		"time"=>'07:00am To 08:00AM 04:00 To 08:00PM',
		"city"=>'Bhopal'	    
		),																																																																																																																	);
	 		
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
		"drname" => 'Bhopal Medical Store',	    
		"address" => 'E-3,28-A,Arera Colony,E-3,28-A,Arera Colony,Crossing,Bhopal',
		"speciality"=>'',
		"contact"=>0755-4266480,
		"time"=>'',
		"city"=>'Bhopal'	    
		),
	"1" => array
		(
		"id" => 2,	    
		"drname" => 'Deep Medical',	    
		"address" => 'Deep Hospital,Opp.Sargam Talkies,Hoshangabad Rd.Bhopal',
		"speciality"=>'',
		"contact"=>0755-2573583,
		"time"=>'',
		"city"=>'Bhopal'	    
		),
	"2" => array
		(
		"id" => 3,	    
		"drname" => 'National Medical',	    
		"address" => 'National Hospital,E-3/61,Appo.Old Csmpion School Ground,Arera Cly.Bhopal',
		"speciality"=>'',
		"contact"=>0755-2440004-05-08,
		"time"=>'',
		"city"=>'Bhopal'	    
		),
	"3" => array
		(
		"id" => 4,	    
		"drname" => 'Narmada Medical',	    
		"address" => 'Narmada Advance Trauma& Critical Care Institute,E-3E-3/23,Arera Cly.Bhopal',
		"speciality"=>'',
		"contact"=>0755-2404000,
		"time"=>'',
		"city"=>'Bhopal'	    
		),		
	"4" => array
		(
		"id" => 5,	    
		"drname" => 'Shivam Medical',	    
		"address" => 'Shivam Hospital,E-8/3,Rly.Society,12 No.Stop,Arera Colony,Bhopal',
		"speciality"=>'',
		"contact"=>0755-4221469,
		"time"=>'',
		"city"=>'Bhopal'	    
		),		
	"5" => array
		(
		"id" => 6,	    
		"drname" => 'Shradha Medical',	    
		"address" => 'Shekhar Hospital,A-69,Shahpura,Near Manisha Market,Bhopal',
		"speciality"=>'',
		"contact"=>0755-2425242,
		"time"=>'',
		"city"=>'Bhopal'	    
		),		
	"6" => array
		(
		"id" => 7,	    
		"drname" => 'Suyash Medical',	    
		"address" => 'Malti Hospital,E-7/HIG-451,Arera Colony,Bhopal',
		"speciality"=>'',
		"contact"=>0755-2432908,
		"time"=>'',
		"city"=>'Bhopal'	    
		),		
	"7" => array
		(
		"id" => 8,	    
		"drname" => 'Pragya Medical',	    
		"address" => 'Meenakshi Hospital,E-5/38,Arera Colony,Bhopal',
		"speciality"=>'',
		"contact"=>0755-2466034,
		"time"=>'',
		"city"=>'Bhopal'	    
		),
	"8" => array
		(
		"id" => 9,	    
		"drname" => 'Vardhman Medical',	    
		"address" => 'Global Hospital E-5/24,Opp.,Bhopal',
		"speciality"=>'',
		"contact"=>0755-4290820,
		"time"=>'',
		"city"=>'Bhopal'	    
		),
	"9" => array
		(
		"id" => 10,	    
		"drname" => 'Vaibhav Medical Store',	    
		"address" => 'Niramay Hospital E-2/13,Arera Colony,Bhopal',
		"speciality"=>'',
		"contact"=>0755-2453448,
		"time"=>'',
		"city"=>'Bhopal'	    
		),
//BLOOD BANK
	"10" => array
		(
		"id" =>11 ,	    
		"drname" => 'Arpan Blod Bank',	    
		"address" => '131/6, Kiran Complex,Near Sargam Talkies,MP Nagar,Bhopal',
		"speciality"=>'',
		"contact"=>0755-3295142,
		"time"=>'',
		"city"=>'Bhopal'	    
		),
	"11" => array
		(
		"id" => 12,	    
		"drname" => 'Bhopal Blod Bank',	    
		"address" => '4,Near Hamidia HospitalFateh Garh,Bhopal',
		"speciality"=>'',
		"contact"=>0755-2538891,
		"time"=>'',
		"city"=>'Bhopal'	    
		),	
	"12" => array
		(
		"id" => 13,	    
		"drname" => 'Chirayu Blod Bank',	    
		"address" => '6,Malipura,Hawa Mahal road Opp.Nirmal Meera School,Bhopal',
		"speciality"=>'',
		"contact"=>0755-2531212,
		"time"=>'',
		"city"=>'Bhopal'	    
		),	
	"13" => array
		(
		"id" =>14 ,	    
		"drname" => 'Hamidia Hospital Blod Bank',	    
		"address" => 'Royal market ,Bhopal',
		"speciality"=>'',
		"contact"=>0755-2540222,2540051,
		"time"=>'',
		"city"=>'Bhopal'	    
		),	
	"14" => array
		(
		"id" => 15,	    
		"drname" => 'Red Cross Society',	    
		"address" => 'Shivaji Nagar,Bhopal',
		"speciality"=>'',
		"contact"=>922949551,0755-2550441,
		"time"=>'',
		"city"=>'Bhopal'	    
		),
//MEDICAL COLLEGE
	"15" => array
		(
		"id" => 16,	    
		"drname" => 'Chirayu Medical College And Hospital',	    
		"address" => 'Berahgarh Bhopal (MP)',
		"speciality"=>'',
		"contact"=>0755-6679132,
		"time"=>'',
		"city"=>'Bhopal'	    
		),
	"16" => array
		(
		"id" => 17,	    
		"drname" => 'Gandhi Medical College',	    
		"address" => 'Royal Market Bhopal',
		"speciality"=>'',
		"contact"=>0755-2541376,
		"time"=>'',
		"city"=>'Bhopal'	    
		),	
	"17" => array
		(
		"id" => 18,	    
		"drname" => 'L.N.Medical College And Research Centre',	    
		"address" => 'JK Town,Sarvdharan C-Sector Kolar Road,Bhopal',
		"speciality"=>'',
		"contact"=>'',
		"time"=>'',
		"city"=>'Bhopal'	    
		),	
	"18" => array
		(
		"id" => 19,	    
		"drname" => 'All India Institute Of Medical Sciences (AIMS)',	    
		"address" => 'Saket Nagar ,Bhopal',
		"speciality"=>'',
		"contact"=>0755-2902025,
		"time"=>'',
		"city"=>'Bhopal'	    
		),	
	"19" => array
		(
		"id" => 20,	    
		"drname" => 'Peoples College Of Medical Science And Research Centre',	    
		"address" => 'Bhanpur,By Pass Road,Bhopal',
		"speciality"=>'',
		"contact"=>0755-4005008,
		"time"=>'',
		"city"=>'Bhopal'	    
		),	
//GOVT.HOSPITAL	
	"20" => array
		(
		"id" => 21,	    
		"drname" => 'Civil Hospital',	    
		"address" => 'Bairagarh',
		"speciality"=>'Genral',
		"contact"=>0755-2711096,
		"time"=>'',
		"city"=>'Bhopal'	    
		),	
	"21" => array
		(
		"id" => 22,	    
		"drname" => 'Sultania Zanana Hospital',	    
		"address" => 'Near Kali Mandir,Rly. Station Road Bhopal',
		"speciality"=>'Maternity',
		"contact"=>0755-4050430,
		"time"=>'',
		"city"=>'Bhopal'	    
		),	
	"22" => array
		(
		"id" => 23,	    
		"drname" => 'Indian Red Cross Society',	    
		"address" => 'Near Mayur Park Link Road Bhopal',
		"speciality"=>'Genral',
		"contact"=>0755-2526100,
		"time"=>'',
		"city"=>'Bhopal'	    
		),	
	"23" => array
		(
		"id" =>24 ,	    
		"drname" => 'Jawahar Lal Nehru Hospital',	    
		"address" => 'DIG Square  Berasiya Road Bhopal',
		"speciality"=>'Genral',
		"contact"=>0755-2730178,
		"time"=>'',
		"city"=>'Bhopal'	    
		),	
	"24" => array
		(
		"id" => 25,	    
		"drname" => 'Katju Hospital',	    
		"address" => ' Jawahar Chowk,New Market,Bhopal',
		"speciality"=>'Genral',
		"contact"=>0755-4251639,
		"time"=>'',
		"city"=>'Bhopal'	    
		),
//PRIVATE HOSPITAL			
	"25" => array
		(
		"id" => 26,	    
		"drname" => 'Aashirwad Nursing Home',	    
		"address" => '48,MLA Qrt. Jawahar Chowk Bhopal',
		"speciality"=>'Gynaecologist And Genral',
		"contact"=>0755-2779636,
		"time"=>'',
		"city"=>'Bhopal'	    
		),	
	"26" => array
		(
		"id" => 27,	    
		"drname" => 'Agarwal Hospital',	    
		"address" => 'E-3/34,Arera Clny.Near Habibganj Rly.Crossing,Bhopal',
		"speciality"=>'Chest Phisician And Gynaecologist',
		"contact"=>0755-4283383,
		"time"=>'',
		"city"=>'Bhopal'	    
		),	
	"27" => array
		(
		"id" => 28,	    
		"drname" => 'Agarwal Nursing Home',	    
		"address" => 'Bajaria,Near Rly.Stn.Bhopal',
		"speciality"=>'Gynaecologist And Genral',
		"contact"=>0755-2734640,
		"time"=>'',
		"city"=>'Bhopal'	    
		),	
	"28" => array
		(
		"id" => 29,	    
		"drname" => 'Ajwani Eye Hospital',	    
		"address" => '115,Berasia Road,Sindhi Colony, Bhopal',
		"speciality"=>'Eye Specialist',
		"contact"=>0755-2745700,
		"time"=>'',
		"city"=>'Bhopal'	    
		),	
	"29" => array
		(
		"id" => 30,	    
		"drname" => 'A.K.Hospital',	    
		"address" => '7th Block,Sanjay Complex Nr.Mata Mandir Bhopal',
		"speciality"=>'Genral',
		"contact"=>0755-2776619,
		"time"=>'',
		"city"=>'Bhopal'	    
		),
//PATHOLOGY LAB			
	"30" => array
		(
		"id" => 31,	    
		"drname" => 'Alliance Medical Imaging Clinic',	    
		"address" => 'Near Tajul Maszid,Opp.Motiya Talab 76,1st Flr.Bhopal',
		"speciality"=>'',
		"contact"=>0755-4990899,9302250001,
		"time"=>'',
		"city"=>'Bhopal'	    
		),	
	"31" => array
		(
		"id" => 32,	    
		"drname" => 'Apollo Diagnostic Centre',	    
		"address" => '18,Taj Market Bhopal',
		"speciality"=>'',
		"contact"=>9826054433,
		"time"=>'',
		"city"=>'Bhopal'	    
		),	
	"32" => array
		(
		"id" => 33,	    
		"drname" => 'Delta Pathology Lab',	    
		"address" => '77,Motia TalabOpp.tajul Masjid,Bhopal',
		"speciality"=>'',
		"contact"=>0755-2531363,
		"time"=>'',
		"city"=>'Bhopal'	    
		),	
	"33" => array
		(
		"id" => 34,	    
		"drname" => 'Final Dignostics Centre',	    
		"address" => '45,Taj MarketBhopal',
		"speciality"=>'',
		"contact"=>0755-2541932,
		"time"=>'',
		"city"=>'Bhopal'	    
		),	
	"34" => array
		(
		"id" => 35,	    
		"drname" => 'Glaze X-Ray Pathology',	    
		"address" => '34,Taj Market Bhopal',
		"speciality"=>'',
		"contact"=>9303131253,
		"time"=>'',
		"city"=>'Bhopal'	    
		),
//C.T.SCAN AND M.R.I CENTRE			
	"35" => array
		(
		"id" => 36,	    
		"drname" => 'Sanya Dignostic',	    
		"address" => 'E-3/15,Arera Colony,Bhopal',
		"speciality"=>'',
		"contact"=>0755-462016,
		"time"=>'',
		"city"=>'Bhopal'	    
		),	
	"36" => array
		(
		"id" => 37,	    
		"drname" => 'Shivam Dignostic',	    
		"address" => 'Retghat Kamla Park Bhopal',
		"speciality"=>'',
		"contact"=>0755-4225514,
		"time"=>'',
		"city"=>'Bhopal'	    
		),	
	"37" => array
		(
		"id" => 38,	    
		"drname" => 'Venus MRI & MDCT Centre',	    
		"address" => '6,1/2Bus Stop,Shivaji Nagar Bhopal',
		"speciality"=>'',
		"contact"=>0755-4218801,
		"time"=>'',
		"city"=>'Bhopal'	    
		),	
	"38" => array
		(
		"id" => 39,	    
		"drname" => 'MEDI SCAN',	    
		"address" => 'Opp.Motia Talab,Tajul Masjid,Bhopal',
		"speciality"=>'',
		"contact"=>0755-2739577,
		"time"=>'',
		"city"=>'Bhopal'	    
		),	
	"39" => array
		(
		"id" => 40,	    
		"drname" => 'Bhopal Medical Centre',	    
		"address" => 'Indrapuri2,MP Nagar Bhopal',
		"speciality"=>'',
		"contact"=>0755-4273739,
		"time"=>'',
		"city"=>'Bhopal'	    
		),
//MEDICAL SUPPLIERS MANUFACTURES & FITNESS			
	"40" => array
		(
		"id" => 41,	    
		"drname" => 'Bombay Medical Hall',	    
		"address" => 'Jumerati,Bhopal',
		"speciality"=>'Homeopathic',
		"contact"=>0755-2733052,
		"time"=>'',
		"city"=>'Bhopal'	    
		),	
	"41" => array
		(
		"id" => 42,	    
		"drname" => 'Jain Homoeo Hall',	    
		"address" => 'Bima Kunj,Kolar Road Bhopal',
		"speciality"=>'Homeopathic',
		"contact"=>9329026250,
		"time"=>'',
		"city"=>'Bhopal'	    
		),	
	"42" => array
		(
		"id" => 43,	    
		"drname" => 'Kasturi Homoeo',	    
		"address" => 'Zone-2,MP Nagar,Bhopal',
		"speciality"=>'Homeopathic',
		"contact"=>0755-4272228,
		"time"=>'',
		"city"=>'Bhopal'	    
		),	
	"43" => array
		(
		"id" => 44,	    
		"drname" => 'New Life Homoeo Centre',	    
		"address" => 'Budhwara Char Batfi,Bhopal',
		"speciality"=>'Homeopathic',
		"contact"=>0755-2744160,
		"time"=>'',
		"city"=>'Bhopal'	    
		),	
	"44" => array
		(
		"id" => 45,	    
		"drname" => 'S.N. Homoeo Pharmacy',	    
		"address" => 'Indra Market,Jawahar Chowk Bhopal',
		"speciality"=>'Homeopathic',
		"contact"=>0755-2775303,
		"time"=>'',
		"city"=>'Bhopal'	    
		),			
	"45" => array
		(
		"id" => 46,	    
		"drname" => 'Garimas Herbal Beauty Care Centre',	    
		"address" => 'E-3/112,Sharda Cmplx 10 Market,Bhopal',
		"speciality"=>'Health & Beauty Care',
		"contact"=>0755-4277537,
		"time"=>'',
		"city"=>'Bhopal'	    
		),	
	"46" => array
		(
		"id" => 47,	    
		"drname" => 'Lavanya GYM & Fitness Centre',	    
		"address" => 'M 1st.Floor,Westent Plaza,Chuna Bhatti Sq.Bhopal',
		"speciality"=>'Health & Beauty Care',
		"contact"=>0755-3251024,
		"time"=>'',
		"city"=>'Bhopal'	    
		),	
	"47" => array
		(
		"id" => 48,	    
		"drname" => 'Vishal Fitness Planet',	    
		"address" => '4E-3/45,10 Cross Rd.Building 10 No.Mrkt.Bhopal',
		"speciality"=>'Health & Beauty Care',
		"contact"=>0755-2460123,
		"time"=>'',
		"city"=>'Bhopal'	    
		),	
	"48" => array
		(
		"id" => 49,	    
		"drname" => 'VLCC Slimming Beauty Fitness',	    
		"address" => '47-A,Malviya Nagar,New Market,Bhopal',
		"speciality"=>'Health & Beauty Care',
		"contact"=>0755-4232201,
		"time"=>'',
		"city"=>'Bhopal'	    
		),	
	"49" => array
		(
		"id" => 50,	    
		"drname" => 'Eastern Health Care',	    
		"address" => '303, Dawa Bazar,13-14mt,Marg Indore',
		"speciality"=>'Health & Beauty Care',
		"contact"=>0731-2463780,
		"time"=>'',
		"city"=>'Indore'	    
		),
//DOCTOR		
	"50" => array
		(
		"id" => 51,	    
		"drname" => 'Nisha Mishra (MBBS)',	    
		"address" => 'E-7/9,Char Imli,Behind CBI Office,Bhopal',
		"speciality"=>'Ophtho.',
		"contact"=>9425028573,
		"time"=>'06:00 TO 08:00PM',
		"city"=>'Bhopal'	    
		),	
	"51" => array
		(
		"id" => 52,	    
		"drname" => 'Jayshree Beedkar (MBBS,MS)',	    
		"address" => 'E-4/151,Arera Colony 10 No.Stop,Bhopal',
		"speciality"=>'Obs.& Gyn.',
		"contact"=>0755-2464616,
		"time"=>'06:00PM To 08:30PM',
		"city"=>'Bhopal'	    
		),	
	"52" => array
		(
		"id" => 53,	    
		"drname" => 'Jyoti Jain (MBBS,DGO)',	    
		"address" => 'Sujyoti Hospital,G-3/358,Gulmohar,Arera Clny Bhopal',
		"speciality"=>'',
		"contact"=>0755-2427363,
		"time"=>'10:00AM To 01:00PM 06:00 To 09:00PM',
		"city"=>'Bhopal'	    
		),	
	"53" => array
		(
		"id" => 54,	    
		"drname" => 'Kala Gidwani(MD)',	    
		"address" => 'E/5,108,Arera Colony Bhopal.',
		"speciality"=>'Obs.& Gyn.',
		"contact"=>9826055237,
		"time"=>'05PM TO 07:00PM',
		"city"=>'Bhopal'	    
		),	
	"54" => array
		(
		"id" => 55,	    
		"drname" => 'Krishna Sharma(MBBS,DGO)',	    
		"address" => '101/13,Shivaji Nagar Bhopal',
		"speciality"=>'',
		"contact"=>0755-2556776,
		"time"=>'08:00AM To 02:00PM 06:00 To 08:00PM',
		"city"=>'Bhopal'	    
		),	
	"55" => array
		(
		"id" => 56,	    
		"drname" => 'Malti Bhojwani (MBBS,MD)',	    
		"address" => 'HIG/451-452,E-7,Arera Colony,Bhopal',
		"speciality"=>'',
		"contact"=>0755-2468092,
		"time"=>'12:00PM To 07:00 PM',
		"city"=>'Bhopal'	    
		),	
	"56" => array
		(
		"id" => 57,	    
		"drname" => 'Meenakshi Verma(MBBS,MD)',	    
		"address" => 'Meenakshi Hospital,E-5/38 Arera Colony,Bhopal',
		"speciality"=>'',
		"contact"=>0755-2466033,
		"time"=>'10AM To 02:30PM  06:30 To 09:30PM',
		"city"=>'Bhopal'	    
		),	
	"57" => array
		(
		"id" =>58 ,	    
		"drname" => 'Salil Kumar(MS)',	    
		"address" => 'E-3/73,Arera Colony,Bhopal',
		"speciality"=>'Ophtho.',
		"contact"=>9425028444,
		"time"=>'05:30 To 08:30 PM',
		"city"=>'Bhopal'	    
		),	
	"58" => array
		(
		"id" => 59,	    
		"drname" => 'Neelima Agrawal(MBBS,DGO)',	    
		"address" => 'Agrawal Hospital,E-3/34,AreraColony Bhopal',
		"speciality"=>'',
		"contact"=>9826027878,
		"time"=>'10:00AM To 01:30PM 05:30 PM To  08:30PM',
		"city"=>'Bhopal'	    
		),	
	"59" => array
		(
		"id" => 60,	    
		"drname" => 'Sadhna Shrivastava(MBBS,DGO,DMCH)',	    
		"address" => 'Shekhar Hospital,A-69,Near Manisha Market,Shahpura,Bhopal',
		"speciality"=>'Obs.Gyn.',
		"contact"=>0755-2425242,
		"time"=>'10:00AM To 12:00PM  06:00PM To 08:30PM',
		"city"=>'Bhopal'	    
		),	
	"60" => array
		(
		"id" => 61,	    
		"drname" => 'Shobha Saran(MS)',	    
		"address" => 'C-4,BDA,24,Bungalow,6No.Stop.Shivaji Nagar,Bhopal',
		"speciality"=>'Obs.Gyn.',
		"contact"=>0755-2554502,
		"time"=>'09:00 To12:00 PM 05:00PM To 08:00 PM',
		"city"=>'Bhopal'	    
		),	
	"61" => array
		(
		"id" => 62,	    
		"drname" => 'Varuna Pathak(MBBS,MS,DNB)',	    
		"address" => '3,Nupur Kunj,E-3,Arera Colony,Bhopal',
		"speciality"=>'',
		"contact"=>0755-2465466,
		"time"=>'05:30PM To 08:30PM',
		"city"=>'Bhopal'	    
		),
	"62" => array
		(
		"id" => 63,	    
		"drname" => 'Kavita Saluja(MBBS,PGDMCH)',	    
		"address" => 'Saluja Nursing Home,ChollaNaka,Old City,Bhopal',
		"speciality"=>'',
		"contact"=>0755-2725980,
		"time"=>'03:00PM To 06:00PM',
		"city"=>'Bhopal'	    
		),
	"63" => array
		(
		"id" => 64,	    
		"drname" => 'Swagata Bramachari',	    
		"address" => 'Speciality Clinic,C-4,Parijat Complex,Bittan Market,Bhopal',
		"speciality"=>'Female Surgeon',
		"contact"=>9425310784,
		"time"=>'06:00 To 08:00PM',
		"city"=>'Bhopal'	    
		),
	"64" => array
		(
		"id" => 65,	    
		"drname" => 'Gajendra Chawla(MS)',	    
		"address" => 'E-7,/378,Arera Colony,Opp.Hanuman Mandir,Bhopal',
		"speciality"=>'Ophtho.',
		"contact"=>9425376207,
		"time"=>'06:30 To 08:30PM',
		"city"=>'Bhopal'	    
		),	
	"65" => array
		(
		"id" => 66,	    
		"drname" => 'A.P.Khalkho',	    
		"address" => '4 TCH Peoples Hospital,151/C,Indrapuri,Bhopal',
		"speciality"=>'Gyn.',
		"contact"=>0755-2488637,
		"time"=>'09:00AM To 01:00PM 03:00PM To 05:00PM',
		"city"=>'Bhopal'	    
		),	
	"66" => array
		(
		"id" => 67,	    
		"drname" => 'A.P.Khalkho',	    
		"address" => '656,Sector-9B, Saket  Nagar Bhopal',
		"speciality"=>'Ophthalmologists',
		"contact"=>0755-2435120,
		"time"=>'09:30Am To 01:00PM',
		"city"=>'Bhopal'	    
		),	
	"67" => array
		(
		"id" => 68,	    
		"drname" => 'Divya Batra(MBBS,DGO,)',	    
		"address" => 'Sec.-A,Indrapuri,Raisen Rd.Gate 1,Bhopal',
		"speciality"=>'Gynaecologist',
		"contact"=>0755-4262151,
		"time"=>'10:30AM TO 05:00PM',
		"city"=>'Bhopal'	    
		),	
	"68" => array
		(
		"id" => 69,	    
		"drname" => 'Hemlata Parashar(MS)',	    
		"address" => 'Jeewandhara Hos.2,Santoshi Vihar,Rajeev Nagar,Ayodhya By Pass Rd.Bhopal',
		"speciality"=>'Obst.Gyn.',
		"contact"=>9425302019,
		"time"=>'09:00 To 10:00 AM 04:00 To 06:30 PM',
		"city"=>'Bhopal'	    
		),	
	"69" => array
		(
		"id" => 70,	    
		"drname" => 'Amruta Girish Lale (MBBS,DOMS)',	    
		"address" => 'M-102,Baghmugalia,Bhopal',
		"speciality"=>'Opthalmologist',
		"contact"=>9425079859,
		"time"=>'09:30AM To 01:30PM 06:30 To 08:30',
		"city"=>'Bhopal'	    
		),
	"70" => array
		(
		"id" => 71,	    
		"drname" => 'Mukul Mathur(MBBS,DRM,DOMS)',	    
		"address" => 'Jawahar Lal Nehru Cancer Hosp.,Bhopal',
		"speciality"=>'',
		"contact"=>9424401854,
		"time"=>'09:00AM To 05:00PM',
		"city"=>'Bhopal'	    
		),	
	"71" => array
		(
		"id" => 72,	    
		"drname" => 'Sarita Agarwal (B.sc,MBBS,DGO)',	    
		"address" => 'Anugrah Clinic,189,Z-2,MP.Nagar,Bhopal',
		"speciality"=>'Obst.Gyn.',
		"contact"=>0755-2580225,
		"time"=>'06:30 PM To 08:30PM',
		"city"=>'Bhopal'	    
		),	
	"72" => array
		(
		"id" => 73,	    
		"drname" => 'Usha Mehta(MBBS,DGO)',	    
		"address" => '54,sector-A,Sonagiri,Opp.Piplani Petrol Pump,Bhopal',
		"speciality"=>'Obs.Gyn.',
		"contact"=>0755-2756493,
		"time"=>' 09:00AM To12:00 PM  06:00 To 08:00PM',
		"city"=>'Bhopal'	    
		),
	"73" => array
		(
		"id" => 74,	    
		"drname" => 'Bimla Gultani',	    
		"address" => 'Bimla Nursing Home,29,Idgah Hills,Bhopal',
		"speciality"=>'',
		"contact"=>0755-2541486,
		"time"=>'09:00 To11:00AM 05:00 To 07:00PM',
		"city"=>'Bhopal'	    
		),	
	"74" => array
		(
		"id" => 75,	    
		"drname" => 'Neelu Mehrotra(MBBS,DGO)',	    
		"address" => 'Jawaharlal Nehru, Cancer Hospital Research Center,Idgah Hills,Bhopal',
		"speciality"=>'Gyn.& Breast',
		"contact"=>9826483481,
		"time"=>'09:00AM T0 05:00PM',
		"city"=>'Bhopal'	    
		),	
	"75" => array
		(
		"id" => 76,	    
		"drname" => 'B.Bhardwaj(MBBS,MS)',	    
		"address" => '47,MLA,Quarter,Bhopal',
		"speciality"=>'',
		"contact"=>8989208333,
		"time"=>'06:30PM TO 08:30PM',
		"city"=>'Bhopal'	    
		),	
	"76" => array
		(
		"id" => 77,	    
		"drname" => 'Neelima Dhawale(MBBS,DGO,DNB)',	    
		"address" => '63,MLA Qutr.Jawahar ChowkBhopa',
		"speciality"=>'',
		"contact"=>9479102468,
		"time"=>'l.12:00 To 02:00PM 07:00 TO 09:00PM',
		"city"=>'Bhopal'	    
		),
	"77" => array
		(
		"id" => 78,	    
		"drname" => 'Savita Jain (MBBS,DGO)',	    
		"address" => 'Sharmanm Clinic,L.G.-8,Minal Mall,J.K. Rd.Bhopal',
		"speciality"=>'Obst.Gyn.',
		"contact"=>9926353492,
		"time"=>'12:00 To 01:00PM 06:00 To 09:00PM',
		"city"=>'Bhopal'	    
		),	
	"78" => array
		(
		"id" => 79,	    
		"drname" => 'Anuradha Bhargava (MBBS,DGO)',	    
		"address" => 'Vardan Hospital,Jahangirabad,Bhopal',
		"speciality"=>'',
		"contact"=>0755-2765621,
		"time"=>'11:00AM To 01:30PM',
		"city"=>'Bhopal'	    
		),	
	"79" => array
		(
		"id" => 80,	    
		"drname" => 'Kusum Saxena(MBBS,DGO)',	    
		"address" => 'Tanushree Hos.84,Shahzadrai Bhawan,ChiklodRd.Jahangirabad,Bhopal',
		"speciality"=>'',
		"contact"=>0755-2766966,
		"time"=>'11:00AM To 01:00PM 05:00 To 07:00PM',
		"city"=>'Bhopal'	    
		),	
	"80" => array
		(
		"id" => 81,	    
		"drname" => 'Vandna Chourasia(MBBS,MS)',	    
		"address" => 'B-66,Kasturba Nagar,Nr.Chetak Bridge,Bhopal',
		"speciality"=>'Infertility Spclst.',
		"contact"=>9827054013,
		"time"=>'11:00AM TO 02:00PM  07:30 To 09:30 PM',
		"city"=>'Bhopal'	    
		),	
	"81" => array
		(
		"id" => 82,	    
		"drname" => 'Manisha Jain(MS)',	    
		"address" => 'Suyash Hospital,45-A,Janki nagar,Chuna Bhatti,Bhopal.',
		"speciality"=>'Gynaecologist',
		"contact"=>0755-4279220,
		"time"=>'12:00 To02:00PM 07:00 To 09:00PM',
		"city"=>'Bhopal'	    
		),	
	"82" => array
		(
		"id" => 83,	    
		"drname" => 'Vandna Agarwal(MBBS,DGO,DNB)',	    
		"address" => 'Matratva Hos.Saevdharam Bhopal',
		"speciality"=>'Infertility Spclst.',
		"contact"=>0755-2734640,
		"time"=>'11:00AM To 02:00PM  06:00 To 09:00PM',
		"city"=>'Bhopal'	    
		),	
	"83" => array
		(
		"id" => 84,	    
		"drname" => 'Tanuja Saxena(MBBS,DGO)',	    
		"address" => 'C-69,Housing Board Clny.Koh-E-Fiza,Bhopal',
		"speciality"=>' Delivery & Operation',
		"contact"=>0755-2546201,
		"time"=>'05:00 To 08:00PM',
		"city"=>'Bhopal'	    
		),	
	"84" => array
		(
		"id" => 85,	    
		"drname" => 'Aruna Kumar(MBBS,MS,HOD,GMC)',	    
		"address" => 'Sultania JananaHos.Nr.Rly.Rd. Bhopal',
		"speciality"=>'Gyn.Dept.',
		"contact"=>0755-4050574,
		"time"=>'06:00 To 09:00PM',
		"city"=>'Bhopal'	    
		),
	"85" => array
		(
		"id" => 86,	    
		"drname" => 'Azra Khurram(MBBS,MS)',	    
		"address" => 'Hafees Eye Hos. MarernityHome,Opp.Lal Pared Grnd.Jahangirabad,Bhopal',
		"speciality"=>'',
		"contact"=>0755-2571160,
		"time"=>'09:00AM To 12:00PM',
		"city"=>'Bhopal'	    
		),	
	"86" => array
		(
		"id" => 87,	    
		"drname" => 'Vaibhav Dubey (MD)Psychiatry',	    
		"address" => '30,Civil Line,Bhopal',
		"speciality"=>'Psychiatrist & Neurologist',
		"contact"=>9424401688,
		"time"=>'09:00AM To 01:00PM 06:00 To 08:00PM',
		"city"=>'Bhopal'	    
		),	
	"87" => array
		(
		"id" => 88,	    
		"drname" => 'Veena Pandey(MBBS,DGO)',	    
		"address" => 'H.No.1,Prakash Nagar,By Pass Rd.BHEL Piplani Bhopal',
		"speciality"=>'',
		"contact"=>9179008009,
		"time"=>'09:00AM To 12:00PM  06:00 To 08:00PM',
		"city"=>'Bhopal'	    
		),	
	"88" => array
		(
		"id" => 89,	    
		"drname" => 'Anjana Chaturvedi',	    
		"address" => 'Chaturvedi Maternity & Gen.Hos.Raisen Rd.Pul Bogda Bhopal',
		"speciality"=>'Child & Female',
		"contact"=>9826023188,
		"time"=>'10:00AM To 01:30PM 06:00 To 09:00PM',
		"city"=>'Bhopal'	    
		),	
	"89" => array
		(
		"id" => 90,	    
		"drname" => 'Bharti Yadav(MBBS)',	    
		"address" => '239-A,Old Ashoka Garden,Prabhat Prtrol Pump,Nr.Hotel Silver In,Bhopal',
		"speciality"=>'Gyn.',
		"contact"=>9303132391,
		"time"=>'11:00AM TO 01:00PM 07:00 To 09:00PM',
		"city"=>'Bhopal'	    
		),
	"90" => array
		(
		"id" => 91,	    
		"drname" => 'Indubala Jain(MBBS,MS)',	    
		"address" => 'Pushkom  Maternity & Nursing Home,62,Old,Ashoka Garden,Bhopal',
		"speciality"=>'Gyn.',
		"contact"=>0755-2582550,
		"time"=>'10:00AM To 01:00PM 06:00 To 09:00PM',
		"city"=>'Bhopal'	    
		),
	"91" => array
		(
		"id" => 92,	    
		"drname" => 'Vaijayanti  Kolekar(MBBS,MD)',	    
		"address" => 'LBS,Hos.73,Tajul Masjid, Rd.Bhopal',
		"speciality"=>'',
		"contact"=>0755-2531678,
		"time"=>'11:00AM TO 03:00PM',
		"city"=>'Bhopal'	    
		),	
	"92" => array
		(
		"id" => 93,	    
		"drname" => 'Malti Bhojwani(MBBS,MD)',	    
		"address" => 'HIG/451-452,E-7,Arera Clny.Bhopal.',
		"speciality"=>'',
		"contact"=>0755-2468092,
		"time"=>'12:00 To 07:00 PM',
		"city"=>'Bhopal'	    
		),	
	"93" => array
		(
		"id" => 94,	    
		"drname" => 'Prabhakar Kawathekar(MD,DCP)',	    
		"address" => 'Shop No.1,Sterling Enclave,Phase-1,Bhopal',
		"speciality"=>'Pathologist',
		"contact"=>0755-2421628,
		"time"=>'06:00 To 09:00PM',
		"city"=>'Bhopal'	    
		),	
	"94" => array
		(
		"id" => 95,	    
		"drname" => 'Ashok Kumar Awasthi(MD)',	    
		"address" => 'B-288,Shahpura,C-sector,Opp.MPEB,Bhopal',
		"speciality"=>'Pathologist',
		"contact"=>9827056443,
		"time"=>'08:00AM To 08:00PM',
		"city"=>'Bhopal'	    
		),	
	"95" => array
		(
		"id" => 96,	    
		"drname" => 'Ajit Verma(MD,DM)',	    
		"address" => 'Akshey Heart Hospital,Char Imli.Bhopal',
		"speciality"=>'',
		"contact"=>9425013169,
		"time"=>'09:30AM To 03:00PM',
		"city"=>'Bhopal'	    
		),	
	"96" => array
		(
		"id" => 97,	    
		"drname" => 'Sunil Malik(MD)',	    
		"address" => 'C-11,BDA Colony,6No.Stop,Shivaji Nagar ,Bhopal',
		"speciality"=>'Neurology',
		"contact"=>0755-2711722,
		"time"=>'10:00AM TO 06:00PM',
		"city"=>'Bhopal'	    
		),	
	"97" => array
		(
		"id" => 98,	    
		"drname" => 'S.K.Jain(DM)',	    
		"address" => 'MLA Qrts.Jawahar Chowk,Bhopal.',
		"speciality"=>'Neurology',
		"contact"=>0755-2763838,
		"time"=>'11:00AM To 03:00PM',
		"city"=>'Bhopal'	    
		),	
	"98" => array
		(
		"id" => 99,	    
		"drname" => 'Raj Kishor Tiwari(MD)',	    
		"address" => 'Kamla Nehru Hos.GMC.Campus, Bhopal',
		"speciality"=>'Pathologist',
		"contact"=>9827011430,
		"time"=>'08:00AM To 02:00PM',
		"city"=>'Bhopal'	    
		),
	"99" => array
		(
		"id" => 100,	    
		"drname" => 'I.D.Chourasia (Ms,Mch,HH & GMC)',	    
		"address" => 'E-47 Bunglow,Bhopal',
		"speciality"=>'Neurosurgery',
		"contact"=>9826071926,
		"time"=>'07:00am To 08:00AM 04:00 To 08:00PM',
		"city"=>'Bhopal'	    
		),																																																																																																																	);
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