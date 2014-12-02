<?php
/**
*自定义公共函数库
*/

#表单防xss攻击过滤
function input_filter($data){
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
#加密算法
function secret($data){
	return md5(C('SITE_KEY').'+-*/'.md5($data));
}
#字符串截取操作
function mbsubstr($txt, $length){
	return (mb_strlen($txt, 'utf-8') <= $length) ? $txt : mb_substr($txt, 0, $length, 'utf-8').'…';
}

#获取用户头像
function getheadpic($uid){
	$pic=M('User')->where('id='.$uid)->getField('headpic');
	return $pic;
}
#获取用户名
function getuname($uid){
	$name=M('User')->where('id='.$uid)->getField('kidname');
	return $name;
}