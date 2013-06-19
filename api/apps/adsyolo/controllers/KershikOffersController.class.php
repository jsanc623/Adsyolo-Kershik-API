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
	 * !Route GET, /offers/get/new/offers/$username
	 */
	function getNewOffers($username){
		$this->offersCount = 0;
		$this->offers = array();
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
