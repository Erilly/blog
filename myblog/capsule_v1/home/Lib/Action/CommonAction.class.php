<?php
/*
*公共类库
*/
class CommonAction extends Action{
	#初始化用户数据
	public function _initialize()
	{
		//获取用户的基本信息
		if(isset($_REQUEST['uid'])){
	       	$map['id']=$_REQUEST['uid'];
	    	$userinfo=M('User')->where($map)->find();
	    	if(!$userinfo){ $this->error('对不起,用户不存在!'); }
	    	$this->assign('userinfo',$userinfo);
		}
		//获取文章信息
		if(isset($_REQUEST['aid'])){
			$map['id']=$_REQUEST['aid'];
			$article=M('Article')->where($map)->find();
	    	if(!$article){ $this->error('对不起,文章不存在!'); }
			$this->assign('article',$article);
		}
		//获取文章分类
		$this->assign('class',M('Class')->where('status=1')->select());

	}
	/*
	* 公共分页函数
	* @param $count数据条数
	* @param $limit每页显示条数
	*/
	public function dopage($count,$limit){
        import('ORG.Util.Page');// 导入分页类
        $p=new Page($count,$limit);
        $p->lastSuffix=false;
        $p->setConfig('header','<li class="rows">第<b>%nowPage%</b>页/共<b>%totalPage%</b>页</li>');
        $p->setConfig('prev','上一页');
        $p->setConfig('next','下一页');
        $p->setConfig('last','末页');
        $p->setConfig('first','首页');
        $p->setConfig('theme','%first% %upPage% %linkPage% %downPage% %end% %header%');
        return $p;
    }
}