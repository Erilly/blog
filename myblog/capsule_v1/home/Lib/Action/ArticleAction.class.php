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
		//判断是否有搜索词
		if(isset($_REQUEST['kwords'])&&!empty($_REQUEST['kwords'])){
			$map['title']=array('like',"%{$_REQUEST['kwords']}%");
		}

		$m=M('Article');
		//封装条件
		$map['cuid']=$_REQUEST['uid'];
		if(isset($_REQUEST['cid'])){
			$map['cid']=$_REQUEST['cid'];
		}
		session('uid')!=$_REQUEST['uid']?$map['status']=1:'';

		//调用分页函数
		$limit=1;
		$count=$m->where($map)->count();
		$p=$this->dopage($count,$limit);
		$articlelist=$m
					->field('id,cuid,title,ctime,status,readnum')
					->where($map)
					->limit($p->firstRow.','.$p->listRows)
					->select();

		$this->assign('page',$p->show());
		$this->assign('articlelist',$articlelist);
		$this->display();
	}



}