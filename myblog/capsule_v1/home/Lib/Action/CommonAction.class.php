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
}