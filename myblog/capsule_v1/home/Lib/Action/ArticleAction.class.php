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
    #在content页面增加评论信息
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
        $res=M('Comment')->where($map)->select();
        
        $this->assign('commentCount',$count);
        $this->assign('comment',$res);
        $this->display();
    }

    #增加评论
    public function doComment(){
        if(!$_POST['content']){ $this->error('评论不能为空！');exit;}
        $_POST['comment']=$_POST['content'];
        $_POST['euid']=session('uid');
        $_POST['ctime']=time();

        $id=M('Comment')->data($_POST)->add();
        if($id){
            $this->success('评论成功！');
            exit();
        }else{
            $this->error('评论超时！');
            exit();
        }
    }


}