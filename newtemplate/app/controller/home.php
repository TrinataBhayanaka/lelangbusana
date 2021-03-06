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
        $this->contentHelper = $this->loadModel('contentHelper');
	}
	
	function index(){
		
		$page = intval(_g('pid'));

		$paging = simple_paging($page, 10);
		// pr($paging);
		$getTopContent = $this->contentHelper->getArticle(false, array('topcontent'=>true));
		$getSlider = $this->contentHelper->getArticle(false, array('slider'=>true));
		$getOtherProduct = $this->contentHelper->getArticle(false, array('random'=>true));
		$getProduk = $this->contentHelper->getArticle(false,false,$paging,10);
		
		// pr($getProduk);

		$this->view->assign('topcontent', $getTopContent[0]);
		$this->view->assign('slider', $getSlider);
		$this->view->assign('produk', $getProduk);
		$this->view->assign('otherproduct', $getOtherProduct);

		$this->view->assign('next', $page+1);
		$this->view->assign('prev', $page-1);

    	return $this->loadView('home');
    }

    function detail(){
		
		

    	return $this->loadView('paket/detail');
    }
    function categori(){
		
		
    	return $this->loadView('paket/categori-paket');
    }
}

?>
