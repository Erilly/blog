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

        import('ORG.Util.Page');// 导入分页类

    	$count=$m->where($map)->count();

    	$p=new Page($count,20);
        $p->lastSuffix=false;
        $p->setConfig('header','<li class="rows">第<b>%nowPage%</b>页/共<b>%totalPage%</b>页</li>');
        $p->setConfig('prev','上一页');
        $p->setConfig('next','下一页');
        $p->setConfig('last','末页');
        $p->setConfig('first','首页');
        $p->setConfig('theme','%first% %upPage% %linkPage% %downPage% %end% %header%');

    	$res=$m->where($map)->limit($p->firstRow.','.$p->listRows)->order('readnum desc')->select();

    	$this->assign('page',$p->show());
        $this->assign('res',$res);
		$this->display();
	}

}