<?php
/**
*前台登陆注册退出
*/
class PublicAction extends Action{
	#显示登录页面
    public function login(){
		$this->display();
	}
	#用户登录验证
	public function checklogin(){
		//接收并处理登录表单数据
		$name=input_filter($_REQUEST['username']); 
		$pass=input_filter($_REQUEST['password']); 
		$verify=input_filter($_REQUEST['verify']); 

		//验证登录
		if(session('verify')!=md5($verify)){
			$this->error('验证码错误！');
			exit();
		}
		
		$map['name']=$name;
		$userinfo=M('Users')->where($map)->find();//获取用户信息

		if($userinfo['password']!=$pass){
			$this->error('密码错误!');
			exit();
		}
		session('name',$userinfo['name']);
		session('uid',$userinfo['id']);

		$this->success('登陆成功！','__APP__');
	}
	#退出登录
	public function loginout(){
		session(null);
		$this->success('已退出登录！');
	}

	#显示注册页面
    public function regist(){
		$this->display();
	}

	#查询email是否已被注册
	public function checkemail(){
		$map['email']=$_REQUEST['reg-email'];
		$count=M('User')->where($map)->count();
		if($count>0){
			$this->error();
		}else{
			$this->success();
		}
	}
	#注册新用户
	public function doregist(){ 
		//验证验证码
		if(session('verify')!=md5($_POST['verify'])){
			$this->error('验证码错误！');
			exit();
		}
		//预处理注册数据
		unset($_POST['verify']);
		$_POST['ctime']=time();
		$_POST['birth']=strtotime($_POST['birth']);
		$_POST['password']=secret($_POST['password']);
		//插入数据
		$id=M('User')->data($_POST)->add();
		if($id){
			$this->success('注册成功！','Index/index');
		}else{
			$this->error('注册失败！');
		}

	}
	#创建验证码
	public function verify(){
		import('ORG.Util.Image');
		Image::buildImageVerify(5,1,gif,60,26,'verify'); //数字验证码
		//Image::GBVerify(4,'png',100,50,'msyh.ttf'); //中文验证码
	}
}