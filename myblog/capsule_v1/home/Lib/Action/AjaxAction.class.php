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
	#上传用户头像
	public function upfile(){
		// echo "__PUBLIC__";die;
		$uid=session('uid');
		$path = SITE_PATH."/uploads/headpic/";
		$filename = $uid.'_'.date('Ymd',time()).".jpg";  

		$src=base64_decode($_POST['pic']);
		$pic=base64_decode($_POST['pic1']);    

		file_put_contents($path.$filename,$pic);

		$rs['headpic']="/uploads/headpic/".$filename;
		$id=M('User')->where('id='.session('uid'))->save($rs);
		
		$rs['status'] = 1;
		echo json_encode($rs);
		
	}
}