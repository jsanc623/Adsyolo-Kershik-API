<?php
Library::import('recess.framework.controllers.Controller');

/**
 * !RespondsWith Json
 * !Prefix Routes: /
 */
class KershikHomeController extends Controller {
	/**
	 * !Route GET, /
	 */
	function index() {
		$this->RequestPath = '/api';
		$this->Message = "Welcome to the Kershik RESTful API.";
	}
	
	/**
	 * !Route PUT, /
	 * !Route POST, /
	 * !Route DELETE, /
	 */
	function onPostRoot(){
		$this->Fuck = "You";
	}
	
	/**
	 * !Route GET, /status
	 */
	function getAPIStatus(){
		$this->Status = "Ok";
		$this->Health = "Good";
		$this->Heartbeat = "Good";
		$this->Sanity = "Passed";
		$this->Uptime = "99.5%";
	}
}
?>
