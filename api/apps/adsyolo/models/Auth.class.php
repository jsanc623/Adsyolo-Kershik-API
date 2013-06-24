<?php
Library::import('adsyolo.models.Users');
Library::import('adsyolo.models.UserTries');

class Auth extends Model {
	protected $privateKey;
	protected $applicationSalt;
	
	function __construct(){
		$this->privateKey = "$Adfk34ra0ef9uSADFjalkj23$!2340394ASDfz90234@#$23509123lkh2!#@";
		$this->applicationSalt = "#$k3rs4ik$#";
	}
	
	function createHash($username, $password){
		$salt = $this->applicationSalt;
		$secret = $this->applicationSalt . "<+r+>" . strrev($this->applicationSalt);
		$password = $username . $password . $salt;
        return hash_hmac("whirlpool", hash_hmac("sha512", $password, $secret) . $salt,  $secret);
	}
	
	function generateHMACHash($username, $timestamp){
		if(empty($username) || empty($timestamp)){
			return 1;
		}
		
		$timeNow = time();
		$difference = abs($timeNow - $timestamp);

		// if the timestamps are more than 3 minutes apart, return error
		if($difference <= 180){
			$hash = hash_hmac("ripemd160", $username + $timestamp + $this->privateKey, $username);
		} else {
			$hash = hash_hmac("ripemd160", $username + $timeNow + $this->privateKey, strrev($username));
		}
		
		return $hash;
	}

	function generateSessionId(){
		$date = new DateTime();
		$datem =  strrev(rand($date->format('mis'), $date->format('dHis')));
		$randl = rand($date->format('Ym'), $date->format('dHis'));
		$randr = rand($date->format('mdH'), $date->format('His'));
		
		$session_id = $randl . $datem . $randr;
		return $session_id;
	}
	
	function AddTry($username, $timestamp){
		$User = new Users();
		
		$User->username = $username;
		if($User->exists() === true){
			$Tries = new UserTries();
			
			$Tries->userid = $User->id;
			if($Tries->exists() === true){
				$Tries->timestamp = $timestamp;
				$Tries->tries = $Tries->tries + 1;
				$Tries->save();
			} else {
				$Tries->userid = $User->id;
				$Tries->timestamp = $timestamp;
				$Tries->tries = 1;
				$Tries->save();
			}
			return $Tries->tries;
		}
		return 0;
	}
	
	function CheckTries($username){
		$User = new Users();
		
		$User->username = $username;
		if($User->exists() === true){
			$Tries = new UserTries();
			$Tries->all();
			$Tries->like("userid", $User->id); 
			if($Tries->exists()){
				$now = time();
				$timestamp = $Tries->timestamp;
				$difference = $now - $timestamp;
				
				if($difference <= (30*60) && $Tries->tries <= 3){ // 3 Tries in 30 Minutes
					$User->blocked = 0; // temporarily blocked
				} else if($difference <= (60*60) && $Tries->tries <= 10){ // 6 Tries in 1 hour
					$User->blocked = 0; // temporarily blocked
				} else if($difference <= (24*60*60) && $Tries->tries <= 15){ // 10 Tries in 1 day
					$User->blocked = 0; // temmporarily blocked
				} else if($difference <= (2*(24*60*60)) && $Tries->tries > 20){ // More than 15 tries in 2 days 
					$User->blocked = 2; // administrative block
				} else {
					$User->blocked = 1; // not blocked
				}
				$User->save();
			} else {
				$this->AddTry($username, time());
			}
		} else {
			return "Error.";
		}
	}

	function adminLogin($username, $password, $timestamp, $hash){			
		// If username/password are empty, just return out.
		if(empty($username) || empty($password) || empty($timestamp) || empty($hash)){
			return "Incorrect credentials.";
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
					return array(
							"username" => $username,
							"timestamp" => $this->Date->format('Y-m-d H:i:s'),
							"sessionid" => $this->Auth->generateSessionId()
						   );
				} else {
					return "Incorrect credentials.";
				}
			} else {
				return "Login tries exceeded.";
			}
		} else {
			return "Incorrect credentials.";
		}
	}
}
?>


			
