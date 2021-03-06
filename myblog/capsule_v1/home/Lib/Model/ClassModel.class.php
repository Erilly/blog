<?php
//定义文章类别表的关联查询
class ClassModel extends RelationModel{
	//创建关联查询
	protected $_link = array(
		//类别表与文章表 一对多的关系
		'Article'=>array(
			'mapping_type'=>HAS_MANY,
			'class_name'=>'Article',
			'foreign_key'=>'cid',
			'mapping_name'=>'hot',
			'mapping_order'=>'readnum desc',
			'condition'=>'status=1',
		),
	);
	
	#获取所有类别
	public function getName(){
		return $this->field('class')->select();
	}

	#获取相应类别及文章
	public function getArticles($map){
		// $this->join("Article on $map ")->where();
	}
}


	
	
	
	
