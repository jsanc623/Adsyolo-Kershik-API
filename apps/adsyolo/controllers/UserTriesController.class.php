<?php
Library::import('adsyolo.models.UserTries');
Library::import('recess.framework.forms.ModelForm');

/**
 * !RespondsWith Layouts
 * !Prefix userTries/
 */
class UserTriesController extends Controller {
	
	/** @var UserTries */
	protected $userTries;
	
	/** @var Form */
	protected $_form;
	
	function init() {
		$this->userTries = new UserTries();
		$this->_form = new ModelForm('userTries', $this->request->data('userTries'), $this->userTries);
	}
}
?>