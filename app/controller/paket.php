<?php

class paket extends Controller {
	
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
        $this->biddingHelper = $this->loadModel('biddingHelper');
	}
	
	function index(){
		
		$testBidd = $this->biddingHelper->isMemberAllowToBidding(false);

    	return $this->loadView('paket/detail');
    }

    function detail(){
		
		

    	return $this->loadView('detail');
    }
    function register(){
		
		

    	return $this->loadView('register');
    }
}

?>
