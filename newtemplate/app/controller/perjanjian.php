<?php

class perjanjian extends Controller {
	
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
        $this->contentHelper = $this->loadModel('contentHelper');
        $this->loginHelper = $this->loadModel('loginHelper');
        $this->userHelper = $this->loadModel('userHelper');
	}
	
	function index(){
    	return $this->loadView('aturan/perjanjian');
    }
    
    function local()
    {
        if (isset($_POST['token'])){

            $validateData = $this->loginHelper->local($_POST);
            if ($validateData){
                $_SESSION['user'] = $validateData;
                print json_encode(array('status'=>true));
            }else{
                print json_encode(array('status'=>false));
            }

        }

        exit;
    }

    function login(){

        global $basedomain;

        

    	return $this->loadView('user/login');
    }
    
    
    function ajax()
    {
        $email = _p('email');

        $validate = $this->userHelper->validateEmail($email);
        if ($validate){

            print json_encode(array('status'=>true));
        }else{
            print json_encode(array('status'=>false));
        }

        exit;
    }

    function setting(){

        return $this->loadView('user/setting');
    }

}

?>
