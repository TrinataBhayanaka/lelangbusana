<?php
class contentHelper extends Database {
	
	var $prefix = "lelang";
	var $salt = "";
	function __construct()
	{
		// $this->db = new Database;
		$this->salt = "ovancop1234";
		$this->token = str_shuffle('cmsaj23y4ywdni237yeisa');
		$this->date = date('Y-m-d H:i:s');

	}

    function getCity($cityid=false, $debug=false)
    {

        $filter = "";
        if ($cityid) $filter .= " AND kode_wilayah = '{$cityid}'";
        $sql = array(
                'table'=>"{$this->prefix}_city",
                'field'=>"*",
                'condition' => "parent = 0 {$filter}",
                );

        $res = $this->lazyQuery($sql,$debug);
        if ($res){

            foreach ($res as $key => $value) {

                $sql = array(
                        'table'=>"{$this->prefix}_city",
                        'field'=>"*",
                        'condition' => "parent != 0 AND parent = '{$value['kode_wilayah']}'",
                        );

                $result = $this->lazyQuery($sql,$debug);
                
                if ($result) $res[$key]['city'] = $result;
                
            }
            
            return $res;
        }

        return false;
    }
    
	function createAccount($data,$debug=false)
    {

        
        $field = array('email'); 

        foreach ($data as $key => $value) {
            
            if (in_array($key, $field)){
                $tmpF[] = $key;
                $tmpV[] = "'".$value."'";
            }
        }

        $tmpF[] = "register_date";
        $tmpF[] = "usertype";
        $tmpF[] = "email_token";
        $tmpF[] = "salt";
        $tmpF[] = "password";

        $pass = sha1($this->salt.$data['password']);
        $tmpV[] = "'".$this->date."'";
        $tmpV[] = 1;
        $tmpV[] = "'".$this->token."'";
        $tmpV[] = "'".$this->salt."'";
        $tmpV[] = "'{$pass}'";


        // pr($tmpV);
        $impField = implode(',', $tmpF);
        $impData = implode(',', $tmpV);

        // $sql = "INSERT IGNORE INTO social_member ({$impField}) VALUES ({$impData})";
        $sql = array(
                'table'=>'social_member',
                'field'=>"{$impField}",
                'value' => "{$impData}",
                );

        $res = $this->lazyQuery($sql,$debug,1);

        if ($res){

        	$_SESSION['newuser']['email'] = $data['email'];
        	$_SESSION['newuser']['id'] = $this->insert_id();

            // $data = array('email'=>$data['email'], 'token'=>$this->token);
            // $msg = encode(serialize($data));
            // logFile($msg);
            // $html = "klik link berikut ini {$basedomain}register/validate/?ref={$msg}";
            // $send = sendGlobalMail($email,'noreply@pindai.co.id',$html);
            return true;
        } 

        
        return false;

    }

    function updateBiodata($data,$debug=false)
    {

    	$email = $_SESSION['newuser']['email'];

    	
    	foreach ($data as $key => $value) {

    		
			$tmpV[] = "{$key} = '" .$value."'";
    		
    		

    	}
    	
    	$impData = implode(',', $tmpV);

    	$sql = array(
                'table'=>'social_member',
                'field'=>"{$impData}",
                'condition' => "email = '{$email}'",
                );

        $res = $this->lazyQuery($sql,$debug,2);

        if ($res){

        	return true;
        }
        return false;
    }

    function updateRiwayat($data,$debug=false)
    {

    	$userid = $_SESSION['newuser']['id'];

    	
    	// pr($data);


    	for ($i=1; $i <= 3; $i++) { 
    		
    		for ($j=0; $j <= 2  ; $j++){ 
  				$datatahun[$i][$j]['tahun'] = $data['tahun_'.$i][$j];
  				$datatahun[$i][$j]['judul'] = $data['judul_'.$i][$j];
  				$datatahun[$i][$j]['keterangan'] = $data['keterangan_'.$i][$j];
  				$datatahun[$i][$j]['type'] = ($i-1);
  				$datatahun[$i][$j]['userid'] = $userid;
  				$datatahun[$i][$j]['createDate'] = $this->date;
  			}
    		
    	}


    	// pr($datatahun);
    	
    	
    	foreach ($datatahun as $key => $value) {

    		$impf = array();
    		$impd = array();
    		


    		foreach ($value as $val) {
    			
    			$tmp = array();
    			$tmpV = array();
    			foreach ($val as $keys => $vals) {
    				$tmp[] = $keys;
    				$tmpV[] = "'".$vals."'";
    			}
    			$impf = implode(',', $tmp);
    			$impd = implode(',', $tmpV);

    			$sql[] = "INSERT INTO {$this->prefix}_riwayat_pendidikan ({$impf}) VALUES ({$impd})";
    		}

    	}
    	
    	
    	// pr($sql);exit;
        if ($sql){
        	foreach ($sql as $value) {
        		$res = $this->query($value);
        	}

        	if ($res)return true;
        }
        
        return false;
    }

    function updateKeberhasilan($data,$debug=false)
    {

    	$userid = $_SESSION['newuser']['id'];
    	$keberhasilan = $data['keberhasilan'];
    	$sql = array(
                'table'=>'social_member',
                'field'=>"keberhasilan = '{$keberhasilan}'",
                'condition' => "id = '{$userid}'",
                );

        $res = $this->lazyQuery($sql,$debug,2);

        if ($res){

        	return true;
        }
        return false;
    }

    function updatePersetujuan($data,$debug=false)
    {

        $userid = $_SESSION['newuser']['id'];
        $persetujuan = $data['full_name'];
        $sql = array(
                'table'=>'social_member',
                'field'=>"img = '{$persetujuan}'",
                'condition' => "id = '{$userid}'",
                );

        $res = $this->lazyQuery($sql,$debug,2);

        if ($res){

            return true;
        }
        return false;
    }


    function getNomenklatur($id=false, $rumpunid=false, $debug=false)
    {

        $filter = "";
        if ($id) $filter .= " AND n.id = {$id}";
        if ($rumpunid) $filter .= " AND n.rumpun_id = {$rumpunid}";
        
        $sql = array(
                'table'=>'{$this->prefix}_nomenklatur AS n, {$this->prefix}_nomenklatur_rumpun AS nr',
                'field'=>"n.*, nr.rumpun",
                'condition' => "n.n_status = 1 {$filter}",
                'joinmethod' => 'LEFT JOIN',
                'join'=> "n.rumpun_id = nr.id"
                );

        $res = $this->lazyQuery($sql,$debug);

        if ($res){

            return $res;
        }
        return false;
    }
}
?>