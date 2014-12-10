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
	#开关文章对外的显示
	public function turnLock(){
		 $map['id']=$_POST['aid'];
		 $id=M('Article')->where($map)->getField('status');
		 if($id==1){
		 	$data['status']=0;
		 	M('Article')->where($map)->save($data);
		 	echo json_encode($data);
		 	exit();
		 }else{
		 	$data['status']=1;
		 	M('Article')->where($map)->save($data);
		 	echo json_encode($data);
		 	exit();
		 }
	}
	#删除文章
	public function delIt(){
		$m=M('Article');
		$map['id']=$_POST['aid'];
		//查找文章内容
		$content=$m->where($map)->getField('content');
		//删除文章中的图片
		if($content){
			$ext = 'gif|jpg|jpeg|bmp|png';
			preg_match_all("/(src)=([\"|']?)([^ \"'>]+\.($ext))\\2/i", $content, $matches); 
			if(!empty($matches[3])&&is_array($matches[3])){
				foreach ($matches[3] as $value) {
					if(file_exists(SITE_PATH.$value)){
						unlink(SITE_PATH.$value);
					}else{
						continue;
					}
				}
			}
		}
		//删除文章
		$id=$m->where($map)->delete();
		//返回状态json
		$data['status']=$id;
		if($id){
			echo json_encode($data);
		 	exit();
		}
	}
	#检验密码的正确性
	public function checkpass(){
		$map['id']=session('uid');
		$pass=M('User')->where($map)->getField('password');
		
		if($pass!=secret($_REQUEST['oldpass'])){
			$this->error('密码错误!');
			exit();
		}
		$this->success();
		exit();

	}
	#加载文章评论
	public function loadMore(){
		$map['aid']=$_POST['aid'];
		$limit=3;
		$start=$_POST['p'];
		$list=M('Comment')->where($map)->limit($start,$limit)->order('ctime desc')->select();
		//拼装返回的html string
		$html="";
		foreach ($list as $v) {
			$html.="<li>";
			$html.="<div class=\"comment-pic\">";
			$html.="<a href=\"__URL__/person/uid/{$v['euid']}.html\">";
			$html.="<img src=\"".getheadpic($v['euid'])."\" width=\"50\" height=\"50\" class=\"comment-imag\"/>";
			$html.="</a>";
			$html.="<a href=\"__URL__/person/uid/{$v['euid']}.html\" class=\"comment-uname\">".getName($v['euid'])."</a>";
			$html.="</div>";
			$html.="<div class=\"comment-content\">{$v['comment']}</div>";
			$html.="<div class=\"clearres\"></div>";
			$html.="<div class=\"discuss-ctime\">";
			$html.="<span>".date('Y-m-d H:s',$v['ctime'])."</span>";
			$html.="</div>";
			$html.="</li>";
		}
		//拼装返回的状态
		$count=count($list);//统计查询出的数据条数
		$count==$limit?$status=1:$status=0;//状态
		$count>0?$info=1:$info=0;//信息
		$this->ajaxReturn($html,$info,$status);
	}
}