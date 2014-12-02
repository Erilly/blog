<?php
// 本类由系统自动生成，仅供测试用途
class IndexAction extends CommonAction {

    public function index(){
    	//获取文章分类
    	$class=M('Class')->select();
    	$this->assign('class',$class);

    	//获取文章列表
    	$m=M('Article');
    	$map['status']=1;
    	$map['cid']=$_REQUEST['cid'];
    	
    	$res=$m->where($map)->limit()->order()->select();

    	$p=$this->getpage($m,$map,$pagesize=10);

    	$this->assign('p',$p->show());
		$this->display();
		}

}