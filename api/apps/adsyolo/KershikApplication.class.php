<?php
Library::import('recess.framework.Application');

class KershikApplication extends Application {
	public function __construct() {
		
		$this->name = 'Kershik API';
		
		$this->viewsDir = $_ENV['dir.apps'] . 'adsyolo/views/';	
		
		$this->modelsPrefix = 'adsyolo.models.';
		
		$this->controllersPrefix = 'adsyolo.controllers.';
		
		$this->routingPrefix = '/';
		
		$this->assetUrl = 'recess/recess/apps/tools/public/';
		
	}
}
?>