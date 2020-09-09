<?php  
	

	class Controller_User{

		static function getUser($id){
			return json_encode(array(
				'status'=>'OK',
				'message'=>'getUser desde controller_user el ID es: '.$id
			));
		}
		
	}