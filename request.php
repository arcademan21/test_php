<?php  
	
	$request = json_decode(file_get_contents('php://input'));

	require_once 'controllers/Controller_User.php';

	switch($request->classMethod){
		
		case 'getUser':
			echo Controller_User::getUser($request->id);
		break;
		
	}


	
	