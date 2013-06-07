<?php
Library::import('recess.framework.controllers.Controller');

/**
 * !RespondsWith Json
 * !Prefix Routes: /auth
 */
class KershikAuthController extends Controller {
	/**
	 * !Route GET, /auth
	 */
	function index() {
		$this->RequestPath = '/auth';
	}
	
	/**
	 * !Route POST, /auth/login/$username/$password
	 */
	function login($username, $password){
		$this->RequestPath = "/auth";
		if(empty($username) || empty($password)){
			$this->LoginStatus = "Fail";
			$this->FailureReason = "Incorrect username or password.";
		} else {
			$Auth = new Auth();
			$password_hash = $Auth->getHash($username, $password);
			$this->username = $username;
			$this->password = $password_hash;
			# TODO: Match against database and output fail or pass JSON
		}
	}
	
	/**
	 * !Route POST, /auth/logout/$username/$key
	 */
	function logout($username, $key){
		if(empty($username) || empty($key)){
			$this->LogoutStatus = "Fail";
			$this->FailureReason = "Session expired.";
		} else {
			# TODO: Logout code
		}
	}
	
	/**
	 * !Route POST, /auth/renewsession/$username/$key
	 */
	function renewsession($username, $key){
		if(empty($username) || empty($key)){
			$this->LogoutStatus = "Fail";
			$this->FailureReason = "Session expired.";
		} else {
			# TODO: Renew session code
		}
	}
}
?>
