<?php
Library::import('recess.framework.controllers.Controller');

/**
 * !RespondsWith Json
 * !Prefix Routes: /account
 */
class KershikAccountController extends Controller {
	/**
	 * !Route GET, /account
	 */
	function index() {
		$this->RequestPath = '/account';
	}
	
	/**
	 * !Route POST, /account/get/$username/$password
	 */
	function getAccount($username, $password){
		if($this->VerifyAccount($username, $password)){
			
		}
	}
	
	/**
	 * !Route POST, /account/verify/$username/$password
	 */
	function VerifyAccount($username, $password){
		
	}
	
	/**
	 * !Route POST, /account/update/password/$username/$oldpassword/$newpassword/$newpasswordverify
	 */
	function changePassword($username, $oldpassword, $newpassword, $newpasswordverify){
		
	}
	
	/**
	 * !Route POST, /account/get/minutes/won/$username
	 */
	 function getMinutesWon($username){
	 	
	 }
}
?>
