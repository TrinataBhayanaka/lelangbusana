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

    function getArticle($id=false, $data=array(), $debug=false)
    {

        $filter = "";
        
        if ($id) $filter .= " AND id = {$id}";
        // pr($data);

        $topcontent = "";
        if ($data['topcontent']) $topcontent .= " AND topcontent = 1";
        else $topcontent .= " AND topcontent = 0";

        $slider_image = "";
        if ($data['slider']) $slider_image .= " AND slider_image = 1";
        else $slider_image .= " AND slider_image = 0";

        $orderby = "";
        if ($data['random']) $orderby .= " AND topcontent != 1 AND slider_image != 1 ORDER BY RAND()";
        else $orderby .= " ORDER BY posted_date DESC";

        $type = "";
        
        if ($data['type']) $type .= " AND articleType IN ({$data['type']})";
        else $type .= " AND articleType IN (1,2,3)";

        $n_status = "";
        if ($data['sold']) $n_status .= " n_status IN ({$data['sold']})";
        else $n_status .= " n_status IN (1)";

        if (empty($data) and !$id) $all = " AND topcontent != 1 AND slider_image != 1";
        $sql = array(
                'table'=>"{$this->prefix}_news_content ",
                'field'=>"*",
                'condition' => "{$n_status} {$type} {$filter} {$topcontent} {$slider_image} {$all} {$orderby}",
                'limit' => '100',
                );

        $res = $this->lazyQuery($sql,$debug);
        if ($res) return $res;
        return false;
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
}
?>