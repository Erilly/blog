<?php /* Smarty version Smarty-3.1.6, created on 2014-12-03 17:55:04
         compiled from "D:/wamp2/wamp/www/blog/myblog/capsule_v1/home/Tpl\Index\index.html" */ ?>
<?php /*%%SmartyHeaderCode:9098547eddf8842555-85694519%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7af8e276c242d25ce8a56525ea9e3ba456b5af7c' => 
    array (
      0 => 'D:/wamp2/wamp/www/blog/myblog/capsule_v1/home/Tpl\\Index\\index.html',
      1 => 1417591812,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9098547eddf8842555-85694519',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'class' => 0,
    'v' => 0,
    'res' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_547eddf8ac2fe',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_547eddf8ac2fe')) {function content_547eddf8ac2fe($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'D:\\wamp2\\wamp\\www\\blog\\myblog\\ThinkPHP\\Extend\\Vendor\\Smarty\\plugins\\modifier.date_format.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>JC</title>
		<link href="__PUBLIC__/css/page.css" rel="stylesheet" type="text/css" />
		<link href="__PUBLIC__/css/blog-1.css" rel="stylesheet" type="text/css" />
		<script src="__PUBLIC__/js/jquery-1.8.0.min.js" type="text/javascript"></script>
		<script type="text/javascript">
			$(function(){
				//更换验证码
				$(".vimg").click(function(){
					var d = new Date();
					$(this).attr('src', "__APP__/public/verify/"+d.getTime());
				});
			});	
		</script>
	</head>
	<body>
		<!-- 导入头顶条 -->
		<?php echo $_smarty_tpl->getSubTemplate ("Public/headbar.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		<div id="back"></div>
		<div class="index-head">
					<div class="title-box">
						<div class="user-info">
							<!-- <h1><a href="#"><span>Ryan的太空舱</span></a></h1> -->
							<div><a>http://www.jcapsule.com/1</a></div>
							<div class="user-say"><span class="say-title"></span>
								<span class="say-content">你从哪里来我的朋友，好像一只蝴蝶飞进我的窗口，好像一只蝴蝶飞进我的窗口，好像一只蝴蝶飞进我的窗口
								</span>
							</div>
						</div>
						
						<div class="user-line"></div>
						
					</div>
					
				</div>

		<div class="index-bg">

			<div class="box">
				<div class="class-list-top">
					<div class="class-list-box">
						<ul>
							<?php  $_smarty_tpl->tpl_vars["v"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["v"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['class']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["v"]->key => $_smarty_tpl->tpl_vars["v"]->value){
$_smarty_tpl->tpl_vars["v"]->_loop = true;
?>
							<li>
								<a href="__URL__/index/cid/<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
.html">
									<div class="class-list-block 
									<?php if ($_smarty_tpl->tpl_vars['v']->value['id']==$_GET['cid']||(!$_GET['cid']&&$_smarty_tpl->tpl_vars['v']->value['id']==1)){?>select-it<?php }?>"><?php echo $_smarty_tpl->tpl_vars['v']->value['class'];?>
</div>
								</a>
							</li>
							<?php } ?>
						</ul>
					</div>
				</div>
				<div class="index-main">
					<ul>
						<?php  $_smarty_tpl->tpl_vars["v"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["v"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['res']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["v"]->key => $_smarty_tpl->tpl_vars["v"]->value){
$_smarty_tpl->tpl_vars["v"]->_loop = true;
?>
						<li class="index-article-list">
							<a href="__APP__/article/person/uid/<?php echo $_smarty_tpl->tpl_vars['v']->value['cuid'];?>
.html">
								<img src="<?php echo getheadpic($_smarty_tpl->tpl_vars['v']->value['cuid']);?>
" alt="" class="index-head-pic">
							</a>
							<div class="index-author">
								<a href="__APP__/article/person/uid/<?php echo $_smarty_tpl->tpl_vars['v']->value['cuid'];?>
.html"><?php echo getName($_smarty_tpl->tpl_vars['v']->value['cuid']);?>
</a>
								<div class="index-article-title">
									<a href="__APP__/article/content/uid/<?php echo $_smarty_tpl->tpl_vars['v']->value['cuid'];?>
/aid/<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
.html" class="article-title-style"><?php echo mbsubstr($_smarty_tpl->tpl_vars['v']->value['title'],16);?>
</a>
									<div class="index-article-time">
										<span>创作时间：<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['v']->value['ctime'],"%Y-%m-%d");?>
</span>
										<span>访问次数：(<?php echo $_smarty_tpl->tpl_vars['v']->value['readnum'];?>
)</span>
									</div>
								</div>
							</div>
						</li>
						<?php } ?>
					</ul>

				</div>
				<div class="meneame pagebox"><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</div>

				<!-- 导入页脚 -->
				<?php echo $_smarty_tpl->getSubTemplate ("Public/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>