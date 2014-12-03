<?php
/*
*文章页
*/
class ArticleAction extends CommonAction {
	#创建文章
	public function docreate(){
		$_POST['ctime']=time();
		$_POST['cuid']=session('uid');

		$id=M('Article')->data($_POST)->add();
		if($id){
			$this->success('创建成功！');
			exit();
		}else{
			$this->error('创建失败！');
			exit();
		}
	}
	#显示文章编辑
	public function edit(){
		$this->assign('edit',ACTION_NAME);
		$this->display('Article:create');
	}
	#保存文章编辑
	public function update(){
		// var_dump($_POST);die;
		$id=M('Article')->where('id='.$_GET['id'])->save($_POST);
		if($id){
			$this->success('修改成功！');
			exit();
		}else{
			$this->error('修改失败！');
			exit();
		}
	}
	#文章列表
	public function articlelist(){
		$map['cuid']=$_REQUEST['uid'];
		session('uid')!=$_REQUEST['uid']?$map['status']=1:'';
		$articlelist=M('Article')->field('id,cuid,title,ctime,status,readnum')->where($map)->select();
		// var_dump($res);die;
		$this->assign('articlelist',$articlelist);
		$this->display();
	}

}