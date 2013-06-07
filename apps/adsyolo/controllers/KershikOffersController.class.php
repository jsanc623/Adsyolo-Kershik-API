<?php
Library::import('recess.framework.controllers.Controller');

/**
 * !RespondsWith Json
 * !Prefix Routes: /offers
 */
class KershikOffersController extends Controller {
	/**
	 * !Route GET, /offers
	 */
	function index() {
		$this->RequestPath = '/offers';
	}
}
?>
