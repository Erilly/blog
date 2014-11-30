<?php
$config1=require ('./config.inc.php');//导入项目公共配置
$config2=array(
	// //定义auth权限控制数据表
	// 'AUTH_CONFIG'=>array(
	// 	'AUTH_ON' => true, //认证开关
	// 	'AUTH_TYPE' => 1, // 认证方式，1为时时认证；2为登录认证。
	// 	'AUTH_GROUP' => 'v_auth_group', //用户组数据表名
	// 	'AUTH_GROUP_ACCESS' => 'v_auth_group_access', //用户组明细表
	// 	'AUTH_RULE' => 'v_auth_rule', //权限规则表
	// 	'AUTH_USER' => 'v_users'//用户信息表
	// )
);
return array_merge($config1,$config2);
?>