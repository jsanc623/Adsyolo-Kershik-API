<?php
define('APPLICATION_SALT', '#$k3rs4ik$#');
define('PRIVATE_KEY', '$Adfk34ra0ef9uSADFjalkj23$!2340394ASDfz90234@#$23509123lkh2!#@');

class Auth extends Model {
	function createHash($username, $password){
		$salt = APPLICATION_SALT;
		$secret = APPLICATION_SALT . "<+r+>" . strrev(APPLICATION_SALT);
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
			$hash = hash_hmac("ripemd160", $username + $timestamp + PRIVATE_KEY, $username);
		} else {
			$hash = hash_hmac("ripemd160", $username + $timeNow + PRIVATE_KEY, strrev($username));
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
		
	}
	
	function CheckTries($username){
		// Max 3 tries in 10 minutes. 
		// Max 10 tries in 1 hour. 
		// Max 15 tries in 1 day.
		// Max 15 tries = administrative Lock 
		return 'ok';
	}
}
?>


			
