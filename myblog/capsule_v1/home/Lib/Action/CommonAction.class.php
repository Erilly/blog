<?php
/*
*公共类库
*/
class CommonAction extends Action{
	#初始化用户数据
	public function _initialize()
	{
		//获取当前模块Action名
		$acname=$this->getActionName();

		if(($acname=='Aticle'|| $acname=='aticle')){
			//获取用户的基本信息
			if(isset($_REQUEST['uid'])){
		       	$map['id']=$_REQUEST['uid'];
		    	$userinfo=M('User')->where($map)->find();
		    	if(!$userinfo){ $this->error('对不起,用户不存在!'); }
		    	$this->assign('userinfo',$userinfo);
			}
			//
		}
		
	}
	/**
	 * TODO 基础分页的相同代码封装，使前台的代码更少
	 * @param $m 模型，引用传递
	 * @param $where 查询条件
	 * @param int $pagesize 每页查询条数
	 * @return \Think\Page
	 */
	public function getpage(&$m,$where,$pagesize=10){
	    $m1=clone $m;//浅复制一个模型
	    $count = $m->where($where)->count();//连惯操作后会对join等操作进行重置
	    $m=$m1;//为保持在为定的连惯操作，浅复制一个模型
	    
	    import('ORG.Util.Page');// 导入分页类
	    $p=new Page($count,$pagesize);
	    $p->lastSuffix=false;
	    $p->setConfig('header','<li class="rows">共<b>%TOTAL_ROW%</b>条记录&nbsp;&nbsp;每页<b>%LIST_ROW%</b>条&nbsp;&nbsp;第<b>%NOW_PAGE%</b>页/共<b>%TOTAL_PAGE%</b>页</li>');
	    $p->setConfig('prev','上一页');
	    $p->setConfig('next','下一页');
	    $p->setConfig('last','末页');
	    $p->setConfig('first','首页');
	    $p->setConfig('theme','%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END% %HEADER%');

	    //$p->parameter=I('get.');

	    $m->limit($p->firstRow,$p->listRows);

	    return $p;
	}
}