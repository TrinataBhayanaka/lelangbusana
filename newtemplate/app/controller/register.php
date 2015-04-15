<?php

class register extends Controller {
    
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

        global $basedomain;

        $getCity = $this->contentHelper->getCity();
        // pr($getCity);
        
        $this->view->assign('city', $getCity);
        return $this->loadView('akun/register');
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

    function signup()
    {
        global $CONFIG, $basedomain;
        // pr($_POST);

        ini_set('sendmail_from', 'admin@lelangbusana.com');

        if ($_POST['token']){

            $register = $this->loginHelper->signUp($_POST);
            if ($register){

                $data['email'] = $register['email'];
                $data['validby'] = $register['validby'];
                
                $generate = encode($data);
                
                $this->view->assign('email',$data['email']);
                $this->view->assign('encode',$generate);
                $msg = "<p>Hi ".$data['email']."!</p>";
                $msg .= $this->loadView('akun/emailTemplate');

                sleep(1);

                $sendMail = sendGlobalMail($register['email'], $CONFIG['email']['EMAIL_FROM_DEFAULT'],$msg);
                if ($sendMail['result']){
                    redirect($basedomain.'register/status');
                }else{
                    redirect($basedomain.'register');
                }
                

            } 
            else redirect($basedomain.'register');

            exit;
        }
    }

    function status()
    {

        $getToken = _g('token');

        $this->view->assign('msg', 'Silahkan verifikasi email anda untuk mengaktifkan akun');
        return $this->loadView('akun/register_status');
    }

    function login(){

        global $basedomain;

        

        return $this->loadView('user/login');
    }
    
    function register(){
        return $this->loadView('user/register');
    }
    
    

    function ajax()
    {
        $email = @_p('email');

        if ($email){

            $validate = $this->userHelper->validateEmail($email);
            if ($validate){

                print json_encode(array('status'=>true));
            }else{
                print json_encode(array('status'=>false));
            }
        }
        

        $idprovinsi = @_p('idprovinsi');
        if ($idprovinsi){
            $getCity = $this->contentHelper->getCity($idprovinsi);
            // pr($getCity);
            if ($getCity){

                print json_encode(array('status'=>true, 'res'=>$getCity));
            }else{
                print json_encode(array('status'=>false));
            }
        }
        exit;
    }

    function setting(){

        return $this->loadView('user/setting');
    }

    function validate()
    {
        global $basedomain;
        $data = _g('ref');
        
        // exit;
        logFile($data);
        if ($data){

            $decode = decode($data);
           
            // check if token is valid
            $userMail = $decode['email'];

            $getToken = $this->loginHelper->getEmailToken($decode['email']);

            if ($getToken['email_token']==$decode['validby']){
    
                // is valid, then create account and set status to validate

                $updateAccount = $this->loginHelper->updateUserStatus($decode['email']);

                // pr($updateAccount);
                if ($updateAccount){

                    $this->view->assign('msg',"Validasi account berhasil, <a href='".$basedomain."'>[Lanjutkan]</a>");
                }else{
                    
                    $this->view->assign('msg','Validate account error');
                    logFile('update n_status user '.$decode['email'].' failed');
                }

            }else{

                // invalid token
                $this->view->assign('msg','Validate account error');
                logFile('token mismatch');
            }

            
            
        }
        
        return $this->loadView('akun/register_status');
    }
}

?>
