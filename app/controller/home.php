<?php

class home extends Controller {
	
	var $models = FALSE;
	var $view;

	
	function __construct()
	{
		global $basedomain;
		$this->loadmodule();
		$this->view = $this->setSmarty();
		$this->view->assign('basedomain',$basedomain);
    }
	
	function loadmodule()
	{
        // $this->contentHelper = $this->loadModel('contentHelper');
	}
	
	function index(){
		
		

    	return $this->loadView('landing');
    }

    function detail(){
		
		

    	return $this->loadView('detail');
    }
    function register(){
		
		

    	return $this->loadView('register');
    }
}

?>
