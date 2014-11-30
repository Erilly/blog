<?php
//定义User表的关联查询
class UserModel extends RelationModel{
	protected $_link = array(
		//用户表与文章表 一对多的关系
		'Article'=>array(
			'mapping_type'=>HAS_MANY,
			'class_name'=>'Article',
			'foreign_key'=>'cuid',
			'mapping_name'=>'mycreats',
			'mapping_order'=>'ctime desc',
		),
		//用户表与标签表，多对多的关系
		'Article'=>array(
			'mapping_type'=>MANY_TO_MANY,
			'class_name'=>'Article',
			'mapping_name'=>'myarticles',
			'foreign_key'=>'uid',
			'relation_foreign_key'=>'aid',
			'relation_table'=>'user_article',
		),
	);
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
}