<?php
Library::import('adsyolo.models.Users');
Library::import('recess.framework.forms.ModelForm');

/**
 * !RespondsWith Layouts
 * !Prefix users/
 */
class UsersController extends Controller {
	
	/** @var Users */
	protected $users;
	
	/** @var Form */
	protected $_form;
	
	function init() {
		$this->users = new Users();
		$this->_form = new ModelForm('users', $this->request->data('users'), $this->users);
	}
	
	/** !Route GET */
	function index() {
		$this->usersSet = $this->users->all();
		if(isset($this->request->get['flash'])) {
			$this->flash = $this->request->get['flash'];
		}
	}
	
	/** !Route GET, $id */
	function details($id) {
		$this->users->id = $id;
		if($this->users->exists()) {
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
		try {
			$this->users->insert();
			return $this->created($this->urlTo('details', $this->users->id));		
		} catch(Exception $exception) {
			return $this->conflict('editForm');
		}
	}
	
	/** !Route GET, $id/edit */
	function editForm($id) {
		$this->users->id = $id;
		if($this->users->exists()) {
			$this->_form->to(Methods::PUT, $this->urlTo('update', $id));
		} else {
			return $this->forwardNotFound($this->urlTo('index'), 'Users does not exist.');
		}
	}
	
	/** !Route PUT, $id */
	function update($id) {
		$oldUsers = new Users($id);
		if($oldUsers->exists()) {
			$oldUsers->copy($this->users)->save();
			return $this->forwardOk($this->urlTo('details', $id));
		} else {
			return $this->forwardNotFound($this->urlTo('index'), 'Users does not exist.');
		}
	}
	
	/** !Route DELETE, $id */
	function delete($id) {
		$this->users->id = $id;
		if($this->users->delete()) {
			return $this->forwardOk($this->urlTo('index'));
		} else {
			return $this->forwardNotFound($this->urlTo('index'), 'Users does not exist.');
		}
	}
}
?>