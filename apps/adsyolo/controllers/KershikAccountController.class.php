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
}
?>
