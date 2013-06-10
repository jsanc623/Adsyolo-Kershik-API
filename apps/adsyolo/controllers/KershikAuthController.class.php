<?php
Library::import('recess.framework.controllers.Controller');
Library::import('adsyolo.models.Auth');
Library::import('adsyolo.models.Users');

/**
 * !RespondsWith Json
 * !Prefix Routes: /auth
 */
class KershikAuthController extends Controller {
	/** @var Date */
	private $Date;
	
	/** @var Auth */
	private $Auth;
	
	/** @var User */
	private $User;
	
	function init(){
		$this->Date = new DateTime();
		$this->Auth = new Auth();
		$this->User = new Users();	
	}
	
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
		// Max 3 tries in 10 minutes. 
		// Max 10 tries in 1 hour. 
		// Max 15 tries in 1 day.
		// Max 15 tries = administrative Lock 
		$this->RequestPath = "/auth";
		if(empty($username) || empty($password)){
			$this->LoginStatus = "Fail";
			$this->FailureReason = "Incorrect credentials.";
		} else {
			
			$this->User->username = $username;
			$this->User->password = $password;
			
			if($this->User->exists() === true){
				$this->username = $username;
				$this->timestamp = $this->Date->format('Y-m-d H:i:s');
				$this->sessionid = $this->Auth->generateSessionId();			
			} else {
				$this->LoginStatus = "Fail"; 
				$this->FailureReason = "Incorrect credentials or user does not exist.";
			}
		}
	}
	
	/**
	 * !Route GET, /auth/auxiliary/deploy/decoy
	 */
	function auxDeploySalt(){
		$Auth = new Auth();
		$this->decoy = $this->Auth->getApplicationSalt();
	}
	
	/**
	 * !Route POST, /auth/logout/$username
	 */
	function logout($username){
		if(empty($username)){
			$this->LogoutStatus = "Fail";
			$this->FailureReason = "Session expired.";
		} else {
			# TODO: Logout code
		}
	}
	
	/**
	 * !Route POST, /auth/register/$username/$password/$first_name/$last_name
	 */
	function register($username, $password, $first_name, $last_name){
		$Auth = new Auth();
		$password_hash = $Auth->getHash($username, $password);
		
	}
}
?>
