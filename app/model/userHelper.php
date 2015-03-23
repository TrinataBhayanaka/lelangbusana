<?php
class userHelper extends Database {
	
    function __construct()
    {
        $session = new Session;
        $getSessi = $session->get_session();
        $this->user = $getSessi['login'];
        $this->prefix = "lelang";
    }
    
    /**
     * @todo edit user profile, update user data from inputed data
     */
    function editProfile($data=false){
        if($data==false) return false;
        
        if (empty($data['twitter'])){
            $dataTwitter = 'NULL';
        }else{
            $dataTwitter = "'".$data['twitter']."'";
        }
        
        if (empty($data['website'])){
            $dataWeb = 'NULL';
        }else{
            $dataWeb = "'".$data['website']."'";
        }
        
        if (empty($data['phone'])){
            $dataPhone = 'NULL';
        }else{
            $dataPhone = "'".$data['phone']."'";
        }
        
        $session = new Session;
        $ses_user = $session->get_session();
        $user = $ses_user;                
             
        $sql = "UPDATE `person` SET `name` = '".$data['name']."', `email` = '".$data['email']."', `project` = '".$data['project']."', `institutions` = '".$data['institutions']."', `twitter` = $dataTwitter, `website` = $dataWeb, `phone` = $dataPhone WHERE `id` = '".$user['login']['id']."' ";
        $res = $this->query($sql,0);
        //$sql2 = "UPDATE `florakb_person` SET `username` = '".$data['username']."' WHERE `id` = '".$user['login']['id']."' ";
        //$res2 = $this->query($sql2,1);
        //if($res && $res2){return true;}
        if($res){return true;}
    }
    
    /**
     * @todo edit user password
     */
    function editPassword($data=false){
        if($data==false) return false;
        
        global $CONFIG;
		$salt = $CONFIG['default']['salt'];
		$password = sha1($data['newPassword'].$salt);
        
        $session = new Session;
        $ses_user = $session->get_session();
        $user = $ses_user;
        
        $sql = "UPDATE `florakb_person` SET `password` = '".$password."', `salt` = '".$salt."' WHERE `id` = '".$user['login']['id']."' ";
        $res = $this->query($sql,1);
        if($res){return true;}
    }
    
    /**
     * @todo get data user/person
     * 
     * @param $data = 
     * @param $field =  field name
     */
    function getUserData($field,$data){
        if($data==false) return false;
        $sql = "SELECT * FROM `person` WHERE `$field` = '".$data."' ";
        $res = $this->fetch($sql,0);  
        if(empty($res)){return false;}
        return $res; 
    }
    
    /**
     * @todo get data user/person app
     * 
     * @param $data = 
     * @param $field =  field name
     */
    function getUserappData($field,$data,$n_status=0){
        if($data==false) return false;
        $filter = "";
        if ($n_status) $filter = " AND n_status = {$n_status}";

        $sql = "SELECT * FROM `florakb_person` WHERE `$field` = '".$data."' {$filter}";
        $res = $this->fetch($sql,0,1);  
        if(empty($res)){return false;}
        return $res; 
    }

    function validateEmail($email, $debug=false)
    {

        $sql = array(
                'table'=>'social_member',
                'field'=>"COUNT(email) AS total",
                'condition' => "email = '{$email}'",
                );

        $res = $this->lazyQuery($sql,$debug);
        if ($res[0]['total']>0) return true;
        return false;

    } 

    function getCity($all=false, $data=array(), $debug=false)
    {
    
        $filter = "";
        
        $provinsi = $data['provinsi'];
    
        $kabupaten = $data['kabupaten'];
        
        $kecamatan = $data['kecamatan'];
        
        if ($all){
            if ($provinsi) $filter .= " WHERE parent = 0";
            if ($kabupaten) $filter .= " WHERE parent <> 0";
            
        }else{
        
            if ($provinsi) $filter .= " WHERE kode_wilayah = {$provinsi}";
            if ($kabupaten) $filter .= " WHERE kode_wilayah = {$kabupaten}";
            // if ($kecamatan) $filter .= "AND p.id_kecamatan = {$kecamatan}";
        }
        
        
        $data = array();
        
        $sql = array(
                'table'=>"{$this->prefix}_city",
                'field'=>'*',
                'condition' => "1 {$filter} ORDER BY nama_wilayah",
                );
        $res = $this->lazyQuery($sql,$debug);

        if ($res){
            
            $data['wilayah'] = $res;
            // pr($data['wilayah']);
            if (!$all){
                foreach ($res as $val){
                    if ($val['parent']!=0){
                        $subsql = "SELECT * FROM {$this->prefix}_city WHERE kode_wilayah = {$val['parent']}
                                ORDER BY nama_wilayah ";
                        $subres = $this->fetch($subsql,1);
                        $data['subwilayah'] = $subres;
                        
                    }
                }
                
            }
            
        }
        if ($data)return $data;
        return false;
    }
    

    
    function getDataLokasi($id=false, $iskab=false, $debug=false){

        $filter = "";
        if ($id) $filter .= "AND kode_wilayah = '{$id}'";
        if ($iskab) $filter .= "AND parent = 0";
        else $filter .= "AND parent != 0";

        $sql = array(
                'table'=>"{$this->prefix}_city",
                'field'=>'kode_wilayah,nama_wilayah',
                'condition' => "1 {$filter}",
                );
        $result = $this->lazyQuery($sql,$debug);
        if ($result) return $result;
        return false;
    }


}
?>

