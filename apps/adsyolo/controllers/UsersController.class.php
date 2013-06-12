<?php
Library::import('adsyolo.models.Users');
Library::import('recess.framework.forms.ModelForm');

/**
 * !RespondsWith Json
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
}
?>