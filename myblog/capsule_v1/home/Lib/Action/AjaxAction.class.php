<?php
/**
*前台登陆注册退出
*/
class AjaxAction extends Action
{
	#用户登录验证
	public function persign(){
		$map['persign']=$_POST['persign'];
		M('User')->where('id='.$_POST['uid'])->save($map);
		if($id){
			$this->success('修改成功！');
			exit();
		}else{
			$this->error('修改失败！');
			exit();
		}
	}
}