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
	 * !Route GET, /auth/login/$username/$password
	 */
	function login($username, $password){
		$this->RequestPath = "/auth";
		if(empty($username) || empty($password)){
			$this->LoginStatus = "Fail";
			$this->FailureReason = "Incorrect username or password.";
		} else {
			$salt = APPLICATION_SALT;
			$secret = APPLICATION_SALT . "<+r+>" . strrev(APPLICATION_SALT);
			$password_hash = hash_hmac("whirlpool", 
									   hash_hmac("sha512", $username . $password . $salt, $secret) . $salt, 
									   $secret);
			$this->username = $username;
			$this->password = $password_hash;
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