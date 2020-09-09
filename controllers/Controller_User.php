<?php  

	class Controller_User{

		static function getUser(){
			return json_decode(array(
				'status'=>'OK',
				'message'=>'getUser desde controller_user'
			));
		}
	}