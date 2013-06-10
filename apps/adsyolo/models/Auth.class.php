<?php
define('APPLICATION_SALT', '#$k3rs4ik$#');

class Auth extends Model {
	function getHash($username, $password){
		$salt = APPLICATION_SALT;
		$secret = APPLICATION_SALT . "<+r+>" . strrev(APPLICATION_SALT);
		$password = $username . $password . $salt;
        return hash_hmac("whirlpool", hash_hmac("sha512", $password, $secret) . $salt,  $secret);
	}
	
	function getApplicationSalt(){
		return APPLICATION_SALT;
	}
	
	function generateSessionId(){
		$date = new DateTime();
		$datem =  strrev(rand($date->format('mis'), $date->format('dHis')));
		$randl = rand($date->format('Ym'), $date->format('dHis'));
		$randr = rand($date->format('mdH'), $date->format('His'));
		
		$session_id = $randl . $datem . $randr;
		return $session_id;
	}
}
?>


			
