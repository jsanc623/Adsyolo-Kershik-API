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
	
	/**
	 * !Route GET, /offers/get/new/$username
	 */
	function getNewOffers($username){
		
	}
	
	/**
	 * !Route GET, /offers/get/completed/$username
	 */
	function getCompletedOffers($username){
		
	}
	
	/**
	 * !Route GET, /offers/get/single/$username
	 */
	function getSingleOffer($username){
		
	}
}
?>
