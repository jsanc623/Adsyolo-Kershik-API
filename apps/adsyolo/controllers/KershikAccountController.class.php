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
	
	
	function VerifyAccount($username, $password){
		
	}
	
		/**getAccount [username, password]
	changePass [username, oldpassword, newpassword, newpasswordverify]
	getMinutesWon [username]*/
}
?>
