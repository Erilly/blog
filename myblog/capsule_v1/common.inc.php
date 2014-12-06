<?php
/**
*自定义公共函数库
*/

/**
*表单防xss攻击过滤
*@param string $data 处理的字符串
*@return string 
*/
function input_filter($data){
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

/**
*加密算法
*@param string $data 处理的字符串
*@return string 
*/
function secret($data){
	return md5(C('SITE_KEY').'+-*/'.md5($data));
}

/**
*字符串截取操作
*@param string $txt 处理的字符串
*@param int $length 截取的长度
*@return string 
*/
function mbsubstr($txt, $length){
	return (mb_strlen($txt, 'utf-8') <= $length) ? $txt : mb_substr($txt, 0, $length, 'utf-8').'…';
}


/**
*获取用户头像
*@param int $uid 处理的id
*@return string 返回图片地址
*/
function getheadpic($uid){
	$head=M('User')->field('gender,headpic')->find($uid);
	if($head['headpic']){
		return $head['headpic'];
	}else{
		return "/public/images/{$head['gender']}.jpg";
	}
}

/**
*获取用户名
*@param int $uid 处理的id
*@return string 
*/
function getName($uid){
	return M('User')->where('id='.$uid)->getField('kidname');
}

/**
*获取用户性别
*@param int $gender 处理的id
*@return string 
*/
function getGender($gender){
	return $gender==2?'女':'男';
}

/**
*获取用户年龄
*@param int $birth 处理的时间戳
*@return int
*/
function getAge($birth){
	return floor((time()-$birth)/(3600*365*24));
}

/**
*获取用户星座
*@param int $birth 处理的时间戳
*@return string 
*/
function getStar($birth){
	$m=date('md',$birth);
	// 双鱼座：2月20日 - 3月20日
	if('0220'<=$m && $m<='0320' ){ return getIcon('双鱼座',-91,-10); exit();}
	// 	白羊座：3月21日 - 4月20日
	if('0321'<=$m && $m<='0420' ){ return getIcon('白羊座',-14,-10); exit();}
	// 金牛座：4月21日 - 5月21日
	if('0421'<=$m && $m<='0521' ){ return getIcon('金牛座',-53,-40); exit();}
	// 双子座：5月22日 - 6月21日
	if('0522'<=$m && $m<='0621' ){ return getIcon('双子座',-91,-40); exit();}
	// 巨蟹座：6月22日 - 7月22日 
	if('0622'<=$m && $m<='0722' ){ return getIcon('巨蟹座',-14,-70); exit();}
	// 狮子座：7月23日 - 8月23日 
	if('0723'<=$m && $m<='0823' ){ return getIcon('狮子座',-53,-70); exit();}
	// 处女座：8月24日 - 9月23日
	if('0824'<=$m && $m<='0923' ){ return getIcon('处女座',-91,-70); exit();}
	// 天秤座：9月24日 - 10月23日
	if('0924'<=$m && $m<='1023' ){ return getIcon('天秤座',-14,-100); exit();}
	// 天蝎座：10月24日 - 11月22日
	if('1024'<=$m && $m<='1122' ){ return getIcon('天蝎座',-53,-100); exit();}
	// 射手座：11月23日 - 12月21日 
	if('1123'<=$m && $m<='1221' ){ return getIcon('射手座',-91,-100); exit();}
 	// 魔羯座：12月22日 - 1月20日 
 	if('1222'<=$m && $m<='0120' ){ return getIcon('摩羯座',-14,-40); exit();}
	// 水瓶座：1月21日 - 2月19日
	if('0121'<=$m && $m<='0219' ){ return getIcon('水瓶座',-53,-10); exit();}
}

/**
*获取星座图标样式
*@param string $name 星座名
*@param int $x X方向距离
*@param int $y Y方向距离
*@return string 返回拼装好的信息
*/
function getIcon($name,$x,$y){
	$str=$name;
	$str.="<div style=\"
			width:20px;
			height:20px;
			background:url('__PUBLIC__/images/start.png') no-repeat {$x}px {$y}px;
			position:absolute;
			top:-5px;
			left:50px;
		\">";
	return $str;
}

/**
*获取类下文章的总数
*@param int $cid 文章类id
*@param int $cuid 文章作者id
*@return int 
*/
function getClassCount($cid,$cuid){
	$map['cid']=$cid;
	$cuid!=0?$map['cuid']=$cuid:'';
	return M('Article')->where($map)->count();
	
}

/**
*获取用户的网龄
*@param int $ctime 用户注册时间戳
*@return float 返回一个精确到小数点后两位的浮点数 
*/
function getNetAge($ctime){
	return number_format((time()-$ctime)/(3600*365*24),2);
}

/**
*获取类名
*@param int $cid 文章类id
*@return string 
*/
function getClassName($cid){
	return M('Class')->where('id='.$cid)->getField('class');
}