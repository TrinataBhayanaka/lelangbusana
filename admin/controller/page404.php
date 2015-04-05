<?php

class page404 extends Controller {
	
	var $models = FALSE;
	var $sessi = null;
	
	public function __construct()
	{
		$this->loadmodule();
		$this->setSmarty();
	}
	public function loadmodule()
	{
		$this->loginHelper = $this->loadModel('loginHelper');
		$this->userHelper = $this->loadModel('userHelper');
		
	}
	
	
	
	public function index()
	{
		global $CONFIG;
		// pr($_SESSION);
		return $this->loadView('pages-404');
	}
	
	
  
}

?>
