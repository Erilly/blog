<?php
/*
*文章页
*/
class ArticleAction extends CommonAction {
	#个人博客首页
	public function person(){
		$map['cuid']=$_REQUEST['uid'];
		$map['status']=1;
		//获取最热10条记录
		$hotlist=M('Article')->where($map)->order('readnum desc')->limit(5)->select();
		// echo M()->getlastsql();die;
		//获取最新10条记录
		$newlist=M('Article')->where($map)->order('ctime desc')->limit(5)->select();

		$this->assign('hotlist',$hotlist);
		$this->assign('newlist',$newlist);
		$this->display();
	}
	#创建文章
	public function docreate(){
		if(!$_POST['title']){ $this->error('标题不能为空');exit();}
		if(!$_POST['content']){ $this->error('内容不能为空');exit();}
		$_POST['ctime']=time();
		$_POST['cuid']=session('uid');

		$id=M('Article')->data($_POST)->add();
		if($id){
			$this->success('创建成功！',"__URL__/articlelist/uid/{$_SESSION['uid']}/cid/{$_POST['cid']}");
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

		$id=M('Article')->where('id='.$_GET['id'])->save($_POST);
		if($id){
			$this->success('修改成功！',"__URL__/articlelist/uid/{$_SESSION['uid']}/cid/{$_POST['cid']}");
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
		$limit=15;
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

	#修改个人资料
	public function setinfo(){
		$res=M('User')->find($_GET['uid']);
		$this->assign('info',$res);
		$this->display();
	}
    #在content页面显示评论信息
    public function content(){
    	$read['aid']=$map['aid']=$_REQUEST['aid'];
    	$read['ip']=$_SERVER['REMOTE_ADDR'];
    	$read['ctime']=date('Ymd',time());
    	//检查是否阅读过此文章,第一次访问记录访问记录
    	$vist=M('ReadLog')->where($read)->count();
    	if($vist==0){
    		$log=M('ReadLog')->data($read)->add();
    		if($log){
    			unset($read);
    			M('Article')->where('id='.$_REQUEST['aid'])->setInc('readnum');
    		}
    	}
    	//查询统计评论数据
        $count=M('Comment')->where($map)->count();
        $res=M('Comment')->where($map)->limit(3)->order('ctime desc')->select();
        //设置一个状态用来判断是否需要加载评论
        $countres=count($res);
        $count>$countres?$loadStatus=1:$loadStatus=0;

       	$this->assign('loadStatus',$loadStatus);
        $this->assign('commentCount',$count);
        $this->assign('comment',$res);
        $this->display();
    }

    #密码重置页面
    public function reset(){
    	if(session('uid')){
    		$this->display();
    	}else{
    		header($_SERVER['HTTP_REFERER']);
    	}
    }

}