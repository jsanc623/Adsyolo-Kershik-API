<?php
Library::import('adsyolo.models.OpenOffers');
Library::import('recess.framework.forms.ModelForm');

/**
 * !RespondsWith Json
 * !Prefix openOffers/
 */
class OpenOffersController extends Controller {
	
	/** @var OpenOffers */
	protected $openOffers;
	
	/** @var Form */
	protected $_form;
	
	function init() {
		$this->openOffers = new OpenOffers();
		$this->_form = new ModelForm('openOffers', $this->request->data('openOffers'), $this->openOffers);
	}
	
	/** !Route GET */
	function index() {
		$this->openOffersSet = $this->openOffers->all();
		if(isset($this->request->get['flash'])) {
			$this->flash = $this->request->get['flash'];
		}
	}
	
	/** !Route GET, $id */
	function details($id) {
		$this->openOffers->id = $id;
		if($this->openOffers->exists()) {
			return $this->ok('details');
		} else {
			return $this->forwardNotFound($this->urlTo('index'));
		}
	}
}
?>