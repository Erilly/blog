<?php
/*
*公共类库
*/
class CommonAction extends Action{
	#初始化用户数据
	public function _initialize()
	{
		//获取用户的基本信息
		if(isset($_REQUEST['uid'])){
	       	$map['id']=$_REQUEST['uid'];
	    	$userinfo=M('User')->where($map)->find();
	    	if(!$userinfo){ $this->error('对不起,用户不存在!'); }
	    	$this->assign('userinfo',$userinfo);
		}
		//获取文章信息
		if(isset($_REQUEST['aid'])){
			$map['id']=$_REQUEST['aid'];
			$article=M('Article')->where($map)->find();
	    	if(!$article){ $this->error('对不起,文章不存在!'); }
			$this->assign('article',$article);
		}
		//获取文章分类
		$this->assign('class',M('Class')->where('status=1')->select());

	}
}