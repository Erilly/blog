<?php
/**
*前台登陆注册退出
*/
class PublicAction extends Action
{
	#用户登录验证
	public function checklogin()
	{
		//接收并处理登录表单数据
		$name=input_filter($_REQUEST['username']); 
		$pass=input_filter($_REQUEST['password']); 
		$verify=input_filter($_REQUEST['verify']); 

		//验证登录
		if(session('verify')!=md5($verify)){
			$this->error('验证码错误！');
			exit();
		}
		//使用用户名登陆
		$map['kidname']=$name;
		$userinfo=M('User')->where($map)->find();//获取用户信息
		//判断不是用户名的话用Email登陆
		if(!$userinfo){
			unset($map['kidname']);
			$map['email']=$name;
			$userinfo=M('User')->where($map)->find();//获取用户信息
		}

		if($userinfo['password']!=secret($pass)){
			$this->error('密码错误!');
			exit();
		}
		
		if($userinfo['status']!=1){
			$this->error('请先通过邮件激活!');
			exit();
		}
		//记录用户登录ip和时间
		$log['logip']=$_SERVER['REMOTE_ADDR'];
		$log['lastlog']=date('Y-m-d H:i:s',time());

		M('User')->where('id='.$userinfo['id'])->save($log);
		//登录成功，记录session
		session('name',$userinfo['kidname']);
		session('uid',$userinfo['id']);

		unset($userinfo,$map,$log);
		$this->success('登陆成功！');
		exit();
	}
	#退出登录
	public function loginout()
	{
		session(null);
		$this->success('已退出登录！','__APP__');
	}

	#查询email是否已被注册
	public function checkemail()
	{
		$map['email']=$_REQUEST['reg-email'];
		$count=M('User')->where($map)->count();
		if($count>0){
			$this->error();
		}else{
			$this->success();
		}
	}
	#查询用户名是否已被注册
	public function checkname()
	{
		$map['kidname']=$_REQUEST['reg-kidname'];
		$count=M('User')->where($map)->count();
		if($count>0){
			$this->error();
			exit();
		}else{
			$this->success();
			exit();
		}
	}
	#注册新用户
	public function doregist()
	{ 
		//验证验证码
		if(session('verify')!=md5($_POST['verify'])){
			$this->error('验证码错误！');
			exit();
		}
		//预处理注册数据
		unset($_POST['verify']);
		$map['email']=$_POST['mail'];
		$map['user']=$_POST['name'];
		$map['kidname']=$_POST['kname'];
		$map['gender']=$_POST['sex'];
		$map['job']=$_POST['job'];
		$map['merry']=$_POST['mestatus'];
		$map['live_province']=$_POST['live_province'];
		$map['live_city']=$_POST['live_city'];
		$map['ht_province']=$_POST['ht_province'];
		$map['ht_city']=$_POST['ht_city'];
		$map['ctime']=time();
		$map['birth']=strtotime($_POST['birthday']);
		$map['password']=secret($_POST['pass']);
		$map['status']=2;
		//插入数据
		$id=M('User')->data($map)->add();

		if($id){
			//拼接url验证地址链接
			$keyId = $id;
			$token = md5(md5($id.'-'.$map['email'].'-'.$map['ctime'].'-'.$map['status']."-".C('SITE_KEY')));
			$url = SITE_DOMAIN.'/index.php/public/active?keyId='.$keyId.'&token='.$token.'&time='.time();
			//获取网站名称
			$site_name = C('SITE_NAME'); 
			//邮件主题
			$mailsubj = '激活'.C('SITE_NAME').'用户信息'; 
			//邮件内容
			$mailbody = $map['user'].'你好：<br>您在'.$site_name.'已完成注册，请点击以下链接直接登录'.$site_name.'。<br><a href="'.$url.'" target="_blank">'.$url.'</a><br/>(如果上面不是链接形式，请将地址手工粘贴到浏览器地址栏再访问)<br/><br/>';
			//发送邮件
			$re=SendMail($map['email'],$mailsubj,$mailbody);

			if($re==1){
				$this->success('注册成功！','__APP__/index');
				exit();
			}
		}else{
			$this->error('注册失败！');
			exit();
		}

	}
	#激活用户账号
	public function active(){
        $keyId = trim($_GET['keyId']);
		$token = trim($_GET['token']);
		if(empty($keyId) || empty($token)){
			$this->error('操作错误！');
			exit();
		}
		
		//获取用户信息
		$uid = $keyId;
		$user = M('User')->find($uid);
		//判断用户是否存在
		if(empty($user)){
			$this->error('操作错误！');
			exit();
		}
		//判断token是否正确
		$upass = md5(md5($user['id'].'-'.$user['email'].'-'.$user['ctime'].'-'.$user['status'].'-'.C('SITE_KEY')));
		if($token != $upass){
			$this->error('访问链接发生错误！');
            exit();
		}
		//修改用户的激活状态
		$map['id']     = $uid;
		$map['status'] = 1;
		$bool = M('User')->save($map);

		if($bool){
			$this->success('激活成功,请重新登录！','__APP__');
			exit();
		}else{
			$this->error('激活失败！');
			exit();
		}
    }
	#修改用户信息
	public function updateinfo(){
		// var_dump($_POST);
		//验证验证码
		if(session('verify')!=md5($_POST['verify'])){
			$this->error('验证码错误！');
			exit();
		}
		//预处理注册数据
		$uid=$_POST['uid'];
		unset($_POST['verify'],$_POST['uid']);
		$_POST['ctime']=time();
		$_POST['birth']=strtotime($_POST['birth']);
		//插入数据
		$id=M('User')->where('id='.$uid)->save($_POST);

		if($id){
			$this->success('修改成功！');
			exit();
		}else{
			$this->error('修改失败！');
			exit();
		}

	}
	#重置用户密码
	public function reset(){
		$map['id']=session('uid');
		$map['password']=secret($_POST['re-reset']);

		$id=M('User')->save($map);
		if($id){
			session(null);
			$this->success('重置成功,请重新登录！','__APP__');
		}else{
			$this->error('重置失败,请重新重置！');
		}
	}

	#发送找回密码邮件
	public function dogetpass(){
		//验证提交信息
		$email = trim($_POST["mail"]);
		$verify = trim($_POST["verify"]);
		
		if(md5($verify) != $_SESSION['verify']){
			$this->error('输入验证码错误');
			exit();
		}
		
		$user = M('User')->where("email='$email'")->find();
		if(!$user){
			$this->error('邮箱输入错误');
			exit();
		}
		
		//生成重置密码链接
		$uid = $user["id"];
		$name = $user["user"];
		$password = $user["password"];
		$code = base64_encode($uid.".".substr(md5($uid."|".$password),8,16).".".time());
		$url = SITE_DOMAIN.'/index.php/public/resetpass?code='.$code;
		//发送重置邮件
		$mailsubj = "重置密码[".C("SITE_NAME")."]";
		$mailbody = <<<EMAIL
		<strong>$name，你好！</strong><br/>
		你只需通过点击下面的链接重置你的密码：<br/>
		<a href="$url" target='_blank'>$url</a><br/>
		(如果上面不是链接形式，请将地址手工粘贴到浏览器地址栏再访问)<br/>
		上面的页面打开后，输入新的密码后提交，之后你即可使用新的密码登录了。<br/><br/>
EMAIL;

		if(SendMail($email,$mailsubj,$mailbody)==1){
			$this->success('请通过邮件重置密码！');
			exit();
		} else {
			$this->error('重置密码邮件发送失败');
			exit();
		}
	}
	#重置密码
	public function resetpass(){
		//取得重置密码code
		(isset($_GET['code']) && !empty($_GET['code'])) ? $code =trim($_GET['code']) : '';
		if(empty($code)) header('Location:'.__APP__.'/');

		$info = explode(".",base64_decode($code));
		
		//判断重置密码的时效性
		$time = $info[2] + 10*60*60;
		if(time() > $time){
			$this->error("重置链接失效！", __APP__.'/public/getpass');
			exit();
		}
		$map["id"] = intval($info[0]);
		$userinfo = M("User")->where($map)->find();
		if(!$userinfo){
			$this->error("重置链接错误");
			exit();
		}
		$checkcode = substr(md5($userinfo['id']."|".$userinfo['password']),8,16);
		//显示重置密码页面
		if($info[1] == $checkcode){
			$this->assign("code", $code);
			$this->display();
		} else {
			$this->error("重置链接错误");
			exit();
		}
	}
	#重置密码处理操作
	public function doresetpass(){
		$code = trim($_POST["code"]);
		if(empty($code)) $this->error("操作错误");
		
		//取得新密码 验证提交信息
		$password = trim($_POST["pass"]);
		$verify = trim($_POST["verify"]);
		$len = mb_strlen($password, "utf-8");

		if(md5($verify) != $_SESSION['verify']){
			$this->error('输入验证码错误');
			exit();
		} 
		
		//验证重置密码code
		$info = explode(".",base64_decode($code));
		
		$uid = intval($info[0]);
		$dao = M("User");
		$userinfo = $dao->find($uid);
		if(!$userinfo){
			$this->error("重置密码错误");
			exit();
		}
		$checkcode = substr(md5($userinfo['id']."|".$userinfo['password']),8,16);
		
		//重置密码
		if($info[1] == $checkcode){
			if($userinfo["password"] == secret($password)){
				$this->success("密码修改成功");
				exit();
			}
			$map["id"] = $uid;
			$map["password"] = secret($password);
			$bool = $dao->save($map);
			if($bool){ 
				$this->success("密码修改成功",'__APP__');
				exit();
			}else {
				$this->error("密码修改失败");
				exit();
			}
			
		} else {
			$this->error("重置密码链接错误");
			exit();
		}
	}
	#创建验证码
	public function verify()
	{
		import('ORG.Util.Image');
		Image::buildImageVerify(5,1,gif,60,26,'verify'); //数字验证码
		//Image::GBVerify(4,'png',100,50,'msyh.ttf'); //中文验证码
	}
}