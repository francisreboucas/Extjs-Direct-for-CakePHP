<?php

App::import('Vendor','Direct.ExtDirect', array('file' => 'ExtDirect.php'));

class DirectController extends DirectAppController{
	
	
	public $uses = array();
	public $layout = 'ajax';
	/*
	* ExtJS Direct API
	*/
	public function index(){	
		
		ExtDirect::$namespace = 'Ext.app';
		ExtDirect::$descriptor = 'Ext.app.REMOTING_API';
		ExtDirect::$url = Router::url(array('controller'=>'direct','action'=>'index','plugin'=>'direct'));
		ExtDirect::provide( $this->controllers() );
		
		
	}

	
}
?>