<?php /* Smarty version Smarty-3.1.6, created on 2014-12-02 21:20:12
         compiled from "D:/wamp/www/blog/myblog/capsule_v1/home/Tpl\Public\jump.html" */ ?>
<?php /*%%SmartyHeaderCode:2008547dbc8c252c49-51329357%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1e07aafbd93fe217174ac40ab4ab5b6743cd38fc' => 
    array (
      0 => 'D:/wamp/www/blog/myblog/capsule_v1/home/Tpl\\Public\\jump.html',
      1 => 1417286857,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2008547dbc8c252c49-51329357',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'message' => 0,
    'jumpUrl' => 0,
    'waitSecond' => 0,
    'error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_547dbc8c4f115',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_547dbc8c4f115')) {function content_547dbc8c4f115($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>跳转提示</title>
<style type="text/css">
*{ padding: 0; margin: 0; }
body{ background: #fff; font-family: '微软雅黑'; color: #333; font-size: 16px; }
.system-message{ padding: 24px 48px;width:40%;height:240px;margin:150px auto; border:1px solid #c3c3c3;
	background:#fff url("__PUBLIC__/images/cheng.jpg") no-repeat 142px 0;}
.system-message h1{ font-size: 100px; font-weight: normal; line-height: 120px; margin-bottom: 12px; }
.system-message .jump{ padding-top: 10px}
.system-message .jump a{ color: #333;}
.system-message .success,.system-message .error{ line-height: 1.8em; font-size: 36px }
.system-message .detail{ font-size: 12px; line-height: 20px; margin-top: 12px; display:none}

.system-message2{ padding: 24px 48px;width:40%;height:240px;margin:150px auto; border:1px solid #c3c3c3;
	background:#fff url("__PUBLIC__/images/bai.jpg") no-repeat 142px 0;}
.system-message2 h1{ font-size: 100px; font-weight: normal; line-height: 120px; margin-bottom: 12px; }
.system-message2 .jump{ padding-top: 10px}
.system-message2 .jump a{ color: #333;}
.system-message2 .success,.system-message2 .error{ line-height: 1.8em; font-size: 36px }
.system-message2 .detail{ font-size: 12px; line-height: 20px; margin-top: 12px; display:none}
</style>
</head>
<body>
<?php if (isset($_smarty_tpl->tpl_vars['message']->value)){?>
<div class="system-message">
<p class="success"><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</p>
<p class="detail"></p>
<p class="jump">
页面自动 <a id="href" href="<?php echo $_smarty_tpl->tpl_vars['jumpUrl']->value;?>
">跳转</a> 等待时间： <b id="wait"><?php echo $_smarty_tpl->tpl_vars['waitSecond']->value;?>
</b>
</p>
</div>
<?php }else{ ?>
<div class="system-message2">
<p class="error"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</p>
<p class="detail"></p>
<p class="jump">
页面自动 <a id="href" href="<?php echo $_smarty_tpl->tpl_vars['jumpUrl']->value;?>
">跳转</a> 等待时间： <b id="wait"><?php echo $_smarty_tpl->tpl_vars['waitSecond']->value;?>
</b>
</p>
</div>
<?php }?>
<script type="text/javascript">
(function(){
var wait = document.getElementById('wait'),href = document.getElementById('href').href;
var interval = setInterval(function(){
	var time = --wait.innerHTML;
	if(time == 0) {
		location.href = href;
		clearInterval(interval);
	};
}, 1000);
})();
</script>
</body>
</html><?php }} ?>