<?php

class kontak extends Controller {
	
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
    	return $this->loadView('kontak/kontak');
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

    public function proses_pesan(){
        global $basedomain;
        global $baseheader;
        
        $create_date=date("Y-m-d H:i:s");
    
        
        $result_data = $this->userHelper->insert_contact();


         echo "<script>alert('Terima kasih, Pesan anda sudah terkirim');window.location.href='".$basedomain."'</script>";
        
        // $this->view->assign('data',$result_data);
        // $this->view->assign('coba','coba data smarty');
        // return $this->loadView('contact');

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
