<?php
// 本类由系统自动生成，仅供测试用途
class IndexAction extends CommonAction {
    public function index(){
    	// $hot=D('Class')->getName();
    	// echo D()->getlastsql();
    	$hot=D('Class')->relation('hot')->select();
		$this->assign('hot',$hot);
		$this->display();
	}
}