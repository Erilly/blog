<?php
// 本类由系统自动生成，仅供测试用途
class IndexAction extends CommonAction {

    public function index(){
        //判断是否有搜索词
        if(isset($_REQUEST['kwords'])&&!empty($_REQUEST['kwords'])){
            $map['title']=array('like',"%{$_REQUEST['kwords']}%");
        }
        //获取文章列表
        $m=M('Article');
        $map['status']=1;
        $_REQUEST['cid']?$map['cid']=$_REQUEST['cid']:'';
        // var_dump($map);die;
        //调用分页方法
    	$count=$m->where($map)->count();
        $limit=3;
    	$p=$this->dopage($count,$limit);
    	$res=$m->where($map)->limit($p->firstRow.','.$p->listRows)->order('readnum desc')->select();

    	$this->assign('page',$p->show());
        $this->assign('res',$res);
		$this->display();
	}
}