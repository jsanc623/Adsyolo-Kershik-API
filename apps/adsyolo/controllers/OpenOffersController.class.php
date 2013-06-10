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
	
	/** !Route GET, new */
	function newForm() {
		$this->_form->to(Methods::POST, $this->urlTo('insert'));
		return $this->ok('editForm');
	}
	
	/** !Route POST */
	function insert() {
		return 0;
		try { 
			$this->openOffers->insert();
			return $this->created($this->urlTo('details', $this->openOffers->id));		
		} catch(Exception $exception) {
			return $this->conflict('editForm');
		}
	}
	
	/** !Route GET, $id/edit */
	function editForm($id) {
		return 0;
		$this->openOffers->id = $id;
		if($this->openOffers->exists()) {
			$this->_form->to(Methods::PUT, $this->urlTo('update', $id));
		} else {
			return $this->forwardNotFound($this->urlTo('index'), 'OpenOffers does not exist.');
		}
	}
	
	/** !Route PUT, $id */
	function update($id) {
		return 0;
		$oldOpenOffers = new OpenOffers($id);
		if($oldOpenOffers->exists()) {
			$oldOpenOffers->copy($this->openOffers)->save();
			return $this->forwardOk($this->urlTo('details', $id));
		} else {
			return $this->forwardNotFound($this->urlTo('index'), 'OpenOffers does not exist.');
		}
	}
	
	/** !Route DELETE, $id */
	function delete($id) {
		return 0;
		$this->openOffers->id = $id;
		if($this->openOffers->delete()) {
			return $this->forwardOk($this->urlTo('index'));
		} else {
			return $this->forwardNotFound($this->urlTo('index'), 'OpenOffers does not exist.');
		}
	}
}
?>