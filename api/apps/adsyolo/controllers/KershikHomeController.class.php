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
		$this->Uhm = "No thank you.";
	}
	
	/**
	 * !Route GET, /status
	 */
	function getAPIStatus(){
		$this->Status    = "Green";
		$this->Health    = "Green";
		$this->Heartbeat = "Green";
		$this->Sanity    = "Green";
		$this->Uptime    = "Green";
		# TODO: Actual status
	}
}
?>
