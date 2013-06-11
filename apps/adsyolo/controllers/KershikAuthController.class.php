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
	 * !Route GET, /auth/login/$username/$password/$timestamp/$hash
	 */
	function login($username, $password, $timestamp, $hash){
		$this->RequestPath = "/auth/login";
			
		// If username/password are empty, just return out.
		if(empty($username) || empty($password) || empty($timestamp) || empty($hash)){
			$this->LoginStatus = "Fail";
			$this->FailureReason = "Incorrect credentials.";
			return;
		}
		
		$hashLocal = $this->Auth->generateHMACHash($username, $timestamp);
		
		// Save a 'try' attached to username with request date and time.
		$this->Auth->AddTry($username, $this->Date->format('Y-m-d H:i:s'));
		
		if($hash === $hashLocal){
			// Check that the user account is not temporarily locked out.
			if($this->Auth->CheckTries($username) == 'ok'){
				$this->User->username = $username;
				$this->User->password = $password;
			
				if($this->User->exists() === true){
					$this->username = $username;
					$this->timestamp = $this->Date->format('Y-m-d H:i:s');
					$this->sessionid = $this->Auth->generateSessionId();			
				} else {
					$this->LoginStatus = "Fail"; 
					$this->FailureReason = "Incorrect credentials or user does not exist (B).";
				}
			} else {
				$this->LoginStatus = "Fail"; 
				$this->FailureReason = "Login tries exceeded. Account blocked temporarily or permanently.";
			}
		} else {
			$this->LoginStatus = "Fail"; 
			$this->FailureReason = "Incorrect credentials or user does not exist (A).";
		}
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
		$password_hash = $Auth->createHash($username, $password);
		
	}
}
?>
