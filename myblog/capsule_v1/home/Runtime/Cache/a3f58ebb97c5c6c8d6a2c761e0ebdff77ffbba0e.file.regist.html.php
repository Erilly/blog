<?php /* Smarty version Smarty-3.1.6, created on 2014-12-01 21:36:04
         compiled from "D:/wamp/www/blog/myblog/capsule_v1/home/Tpl\Public\regist.html" */ ?>
<?php /*%%SmartyHeaderCode:25534547c6b782c03b0-93460628%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a3f58ebb97c5c6c8d6a2c761e0ebdff77ffbba0e' => 
    array (
      0 => 'D:/wamp/www/blog/myblog/capsule_v1/home/Tpl\\Public\\regist.html',
      1 => 1417440949,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '25534547c6b782c03b0-93460628',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_547c6b787460c',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_547c6b787460c')) {function content_547c6b787460c($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>JC</title>
		<link type="text/css" rel="stylesheet" href="__PUBLIC__/formValidator/style/validator.css"></link>
		<link href="__PUBLIC__/css/register.css" rel="stylesheet" type="text/css" />
		<script src="__PUBLIC__/js/jquery-1.8.0.min.js" type="text/javascript"></script>
  		<script src="__PUBLIC__/js/city.js" type="text/javascript"></script>
		<script src="__PUBLIC__/formValidator/jquery_last.js" type="text/javascript"></script>
		<script src="__PUBLIC__/formValidator/formValidator.js" type="text/javascript" charset="UTF-8"></script>
		<script src="__PUBLIC__/formValidator/formValidatorRegex.js" type="text/javascript" charset="UTF-8"></script>
		<script language="javascript" src="__PUBLIC__/formValidator/DateTimeMask.js" type="text/javascript"></script>

		<script type="text/javascript">
			$(document).ready(function(){

			   	//表单验证
				$.formValidator.initConfig({ formid:"form1",onerror:function(msg){ return false;}});
				$("#reg-email").formValidator({ onshow:"请输入邮箱",onfocus:"邮箱至少6个字符",oncorrect:"该用户名可以注册"}).inputValidator({ min:6,max:50,onerror:"你输入的Email地址非法,请确认"}).regexValidator({ regexp:"email",datatype:"enum",onerror:"Email格式不正确"})
				    .ajaxValidator({
				    type : "get",
					url : "__APP__/public/checkemail",
					datatype : "json",
					success : function(data){	
			            if( data.status == "1" )
						{
			                return true;
						}
			            else
						{
			                return false;
						}
					},
					error: function(){ alert("服务器没有返回数据，可能服务器忙，请重试");},
					onerror : "该Email已被注册，请更换",
					onwait : "正在对Email进行合法性校验，请稍候..."
				});
				$("#reg-password").formValidator({ onshow:"请输入密码",onfocus:"6-12位数字字母下划线",oncorrect:"密码合法"}).inputValidator({ min:6,max:12,empty:{ leftempty:false,rightempty:false,emptyerror:"密码两边不能有空符号"},onerror:"密码为6-12位,请确认"});
				$("#reg-repassword").formValidator({ onshow:"请输入重复密码",onfocus:"两次密码必须一致哦",oncorrect:"密码一致"}).inputValidator({ min:1,empty:{ leftempty:false,rightempty:false,emptyerror:"重复密码两边不能有空符号"},onerror:"重复密码不能为空,请确认"}).compareValidator({ desid:"reg-password",operateor:"=",onerror:"2次密码不一致,请确认"});
				$("#reg-name").formValidator({ onshow:"请输入您的姓名",onfocus:"名字2-8个汉字",oncorrect:"该用户名可以注册"}).inputValidator({ min:4,max:16,onerror:"你输入的姓名非法，请确认"}).regexValidator({ regexp:"chinese",datatype:"enum",onerror:"姓名只能是汉字"});
				$("#reg-kidname").formValidator({ onshow:"请输入您的用户名",onfocus:"1-10个数字字母或汉字",oncorrect:"该用户名可以注册"}).inputValidator({ min:1,max:20,onerror:"你输入的用户名非法，请确认"}).regexValidator({ regexp:"kidname",datatype:"enum",onerror:"请确认字数符合规则"})
				    .ajaxValidator({
				    type : "get",
					url : "__APP__/public/checkname",
					datatype : "json",
					success : function(data){	
			            if( data.status == "1" )
						{
			                return true;
						}
			            else
						{
			                return false;
						}
					},
					error: function(){ alert("服务器没有返回数据，可能服务器忙，请重试");},
					onerror : "该用户名已被注册，请更换",
					onwait : "正在对用户名进行合法性校验，请稍候..."
				});
				$("#csny").focus(function(){ WdatePicker({ skin:'whyGreen',oncleared:function(){$(this).blur();},onpicked:function(){ $(this).blur();}})}).formValidator({ onshow:"请输入的出生日期",onfocus:"请输入的出生日期，不能全部是0哦",oncorrect:"你输入的日期合法"}).inputValidator({ min:"1900-01-01",max:"2015-01-01",type:"date",onerror:"日期必须在\"1900-01-01\"和\"2000-01-01\"之间"});
				$("#reg-verify").formValidator({ onshow:"请输入验证码",onfocus:"5位字母验证码"}).inputValidator({ min:5,max:5,onerror:"验证码只能是字母",empty:{ leftempty:false,rightempty:false,emptyerror:"不能有空格"},onerror:"验证码只能是5位字母,请确认"});

				//更换验证码
				$(".vimg").click(function(){
					var d = new Date();
					$(this).attr('src', "__APP__/public/verify/"+d.getTime());
				});
				//城市选择
				showprovince('live_province', 'live_city', '');
                showcity('live_city', '', 'live_province');
				showprovince('ht_province', 'ht_city', '');
                showcity('ht_city', '', 'ht_province');
			});
	</script>
	</head>
	<body>
		<?php echo $_smarty_tpl->getSubTemplate ("Public/headbar.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		<div id="back"></div>
		<div class="bg">
			<div class="box">
				<div class="register-box">
					<form action="" method="post" id="form1" name="form1">
						<ul>
							<li>
								<label><i>*</i>邮&nbsp;&nbsp;&nbsp;&nbsp;箱：</label>
								<div class="re-input"><input type="text" name="email" class="re-input-bor" id="reg-email"/></div>
								<span id="reg-emailTip"></span>
							</li>
							<li>
								<label><i>*</i>密&nbsp;&nbsp;&nbsp;&nbsp;码：</label>
								<div class="re-input"><input type="password" name="password" class="re-input-bor" id="reg-password"/></div>
								<span id="reg-passwordTip"></span>
							</li>
							<li>
								<label><i>*</i>重复密码：</label>
								<div class="re-input"><input type="password" name="password" class="re-input-bor" id="reg-repassword"/></div>
								<span id="reg-repasswordTip"></span>
							</li>
							<li>
								<label><i>*</i>姓&nbsp;&nbsp;&nbsp;&nbsp;名：</label>
								<div class="re-input"><input type="text" name="name" class="re-input-bor" id="reg-name"/></div>
								<span id="reg-nameTip"></span>
							</li>
							<li>
								<label><i>*</i>用&nbsp;户&nbsp;名：</label>
								<div class="re-input"><input type="text" name="kidname" class="re-input-bor" id="reg-kidname"/></div>
								<span id="reg-kidnameTip"></span>
							</li>
							<li>
								<label><i></i>性&nbsp;&nbsp;&nbsp;&nbsp;别：</label>
								<div class="re-input re-clear">
									<input type="radio" name="gender" value="1" checked/> 男
									<input type="radio" name="gender" value="2"/> 女
								</div>
								
							</li>
							<li>
								<label><i></i>婚&nbsp;&nbsp;&nbsp;&nbsp;姻：</label>
								<div class="re-input">
									<select name="merry">
										<option value="保密">保密</option>
										<option value="单身">单身</option>
										<option value="恋爱中">恋爱中</option>
										<option value="已婚">已婚</option>
									</select> 
								</div>
								
							</li>
							<li>
								<label><i>*</i>生&nbsp;&nbsp;&nbsp;&nbsp;日：</label>
								<div class="re-input ">
									<input type="text" id="csny" class="re-input-bor" style="width:120px" value="1980-01-01" />
								</div>
								<span id="csnyTip"></span>
							</li>
							<li>
								<label><i></i>职&nbsp;&nbsp;&nbsp;&nbsp;业：</label>
								<div class="re-input">
									<select name="merry">
										<option value="保密">保密</option>
										<option value="学生">学生</option>
										<option value="政府机关/干部">政府机关/干部</option>
										<option value="邮电/通信/电子">邮电/通信/电子</option>
										<option value="计算机/网络">计算机/网络</option>
										<option value="互联网/软件">互联网/软件</option>
										<option value="商业/外贸/个体商户">商业/贸易/个体商户</option>
										<option value="银行/金融/证券/保险/投资">银行/金融/证券/保险/投资</option>
										<option value="税务/咨询">税务/咨询</option>
										<option value="旅游/酒店/餐饮">旅游/酒店/餐饮</option>
										<option value="健康/医疗">健康/医疗</option>
										<option value="房地产/交通运输/物流">房地产/交通运输/物流</option>
										<option value="法律/司法">法律/司法</option>
										<option value="文化/娱乐/体育">文化/娱乐/体育</option>
										<option value="广告/传媒/中介">已广告/传媒/中介婚</option>
										<option value="科研/教育">科研/教育</option>
										<option value="农业/渔业/畜牧/林业">农业/渔业/畜牧/林业</option>
										<option value="矿业/冶金">矿业/冶金</option>
										<option value="设计/制造业">设计/制造业</option>
										<option value="自由职业">自由职业</option>
										<option value="其他">其他</option>
									</select> 
								</div>
								<span id="test1Tip"></span>
							</li>
							<li>
								<label><i></i>现&nbsp;居&nbsp;地：</label>
								<div class="re-input re-clear">
									<select name="live_province" id="live_province">
										<!-- <option value="0">请选择省份</option> -->
									</select> 
									<select name="live_city" id="live_city">
										<option value="0">请选择城市</option>
									</select> 
								</div>
								
							</li>
							<li>
								<label><i></i>家&nbsp;&nbsp;&nbsp;&nbsp;乡：</label>
								<div class="re-input ">
									<select name="ht_province" id="ht_province">
									<!-- <option value="0">请选择省份</option> -->
									</select> 
									<select name="ht_city" id="ht_city">
										<option value="0">请选择城市</option>
									</select>  
								</div>
								
							</li>
							<li>
								<label><i>*</i>验&nbsp;证&nbsp;码：</label>
								<div class="re-input re-verify"><input type="text" name="verify" class="re-input-bor re-verify-input" id="reg-verify"/><img src="__APP__/Public/verify/" class="re-vertify-img vimg"/></div>
								<span id="reg-verifyTip"></span>
							</li>
							<li>
								<div class="re-submit"><input type="submit" value="注 册" class="re-sub-btn"/></div>
							</li>
						</ul>
					</form>
				</div>
				<script defer="defer" src="__PUBLIC__/formValidator/datepicker/WdatePicker.js" type="text/javascript"></script>
		<!-- 导入页脚部分 -->
		<?php echo $_smarty_tpl->getSubTemplate ("Public/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>