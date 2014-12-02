<?php /* Smarty version Smarty-3.1.6, created on 2014-12-02 23:11:56
         compiled from "D:/wamp/www/blog/myblog/capsule_v1/home/Tpl\Public\header.html" */ ?>
<?php /*%%SmartyHeaderCode:15756547dd6bc7d1ac2-56814776%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4df93ee3c4287001419e72669a62c7e1b75ec858' => 
    array (
      0 => 'D:/wamp/www/blog/myblog/capsule_v1/home/Tpl\\Public\\header.html',
      1 => 1417522283,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15756547dd6bc7d1ac2-56814776',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'userinfo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_547dd6bcebf32',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_547dd6bcebf32')) {function content_547dd6bcebf32($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>JC</title>
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
		<?php echo $_smarty_tpl->getSubTemplate ("Public/headbar.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		<div id="back"></div>
		<div class="bg">
			<div class="box">
				<div class="head">
					<div class="title-box">
						<div class="user-info">
							<h1><a><span><?php echo $_smarty_tpl->tpl_vars['userinfo']->value['kidname'];?>
的太空鱼</span></a></h1>
							<div><a href="__URL__/person/uid/<?php echo $_smarty_tpl->tpl_vars['userinfo']->value['id'];?>
.html">__URL__/person/uid/<?php echo $_smarty_tpl->tpl_vars['userinfo']->value['id'];?>
.html</a></div>
							<div class="user-say" title="<?php echo $_smarty_tpl->tpl_vars['userinfo']->value['persign'];?>
"><span class="say-title">个人格言：</span>
								<span class="say-content">
									<?php echo mbsubstr($_smarty_tpl->tpl_vars['userinfo']->value['persign'],55);?>

								</span>
							</div>
						</div>
						
						<div class="user-line"></div>
						<div class="user-block">
							<span><a href="__APP__">首页</a></span>
							<span><a href="__URL__/list/uid/<?php echo $_smarty_tpl->tpl_vars['userinfo']->value['id'];?>
.html">博文目录</a></span>
							<span><a href="__URL__/person/uid/<?php echo $_smarty_tpl->tpl_vars['userinfo']->value['id'];?>
.html">关注</a></span>
							<span><a href="__URL__/person/uid/<?php echo $_smarty_tpl->tpl_vars['userinfo']->value['id'];?>
.html">关于我</a></span>
						</div>
					</div>
					<?php if ($_smarty_tpl->tpl_vars['userinfo']->value['id']==$_SESSION['uid']){?>
					<div class="user-do">
						<div class="user-do-list"><a href="__URL__/creat">编写文章</a></div>
						<div class="user-do-list"><a href="__URL__/person/uid/<?php echo $_smarty_tpl->tpl_vars['userinfo']->value['id'];?>
.html">个人中心</a></div>
						<div class="user-do-list"><a href="__URL__/setinfo/uid/<?php echo $_smarty_tpl->tpl_vars['userinfo']->value['id'];?>
.html">基本设置</a></div>
					</div>
					<?php }?>
				</div>
				<div class="main">
					<div class="left">
						<div class="left-list">
							<div class="left-per-title">
								<span class="per-title">个人资料</span>
								<?php if ($_smarty_tpl->tpl_vars['userinfo']->value['id']==$_SESSION['uid']){?>
								<div class="edit">【<a href=href="__URL__/setinfo/uid/<?php echo $_smarty_tpl->tpl_vars['userinfo']->value['id'];?>
.html">编辑</a>】</div>
								<?php }?>
							</div>

							<div class="left-per-pic">
								<a href="#"><img src="<?php echo getheadpic($_smarty_tpl->tpl_vars['userinfo']->value['id']);?>
" width="180" height="180" alt="个人头像" /></a>
							</div>
							<div class="left-per-name">
								<span>Ryan</span>
							</div>
							<div class="left-per-focus">
								<div class="btn-style per-btn1">关注</div>
								<?php if ($_smarty_tpl->tpl_vars['userinfo']->value['id']!=$_SESSION['uid']){?>
								<div class="btn-style per-btn2">留言</div>
								<?php }?>
							</div>
							<div class="left-per-info">
								<ul>
									<li class="info-style">
										<span>性别：</span>
										<span>男</span>
									</li>
									<li class="info-style">
										<span>年龄：</span>
										<span>25岁</span>
									</li>
									<li class="info-style">
										<span>星座：</span>
										<span>双鱼座</span>
									</li>
									<li class="info-style">
										<span>职业：</span>
										<span>PHPer</span>
									</li>
									<li class="info-style">
										<span>网龄：</span>
										<span>2年</span>
									</li>
								</ul>
							</div>
							<div class="bottom-height"></div>
						</div>
						<div class="left-list">
							<div class="left-per-title">
								<span class="per-title">文章分类</span>
								<?php if ($_smarty_tpl->tpl_vars['userinfo']->value['id']==$_SESSION['uid']){?>
								<div class="edit">【<a href="#">管理</a>】</div>
								<?php }?>
							</div>
							<div class="left-class-list">
								<ul>
									<li class="info-style"><a href="#">情感 (21)</a></li>
									<li class="info-style"><a href="#">科技 (123)</a></li>
									<li class="info-style"><a href="#">杂项 (1983)</a></li>

								</ul>
							</div>
							<div class="bottom-height"></div>
						</div>
						<?php if ($_smarty_tpl->tpl_vars['userinfo']->value['id']==$_SESSION['uid']){?>
						<div class="left-list">
							<div class="left-per-title">
								<span class="per-title">我的好友</span>
								<div class="edit">【<a href="#">管理</a>】</div>
							</div>
							<div class="left-class-list">
								<ul>
									<li class="left-friend"><a href="#">我关注的</a>
										<ul>
											<li class="info-style"><a href="#">朋友 (4)</a>
												<ul>
													<li>张三 <span>备注:张三</span></li>
													<li>李四 <span>备注:张三</span></li>
													<li>王五 <span>备注:张三</span></li>
													<li>赵六 <span>备注:张三</span></li>
												</ul>
											</li>
											<li class="info-style"><a href="#">同学 (123)</a></li>
											<li class="info-style"><a href="#">陌生人 (1983)</a></li>
											<li class="info-style"><a href="#">没名单 (1983)</a></li>
										</ul>
									</li>
								</ul>
							</div>
							<div class="bottom-height"></div>
						</div>
						<?php }?>
						<div class="left-list">
							<div class="left-per-title">
								<span class="per-title">搜索他的文章</span>
							</div>
							<div class="left-per-search">
								<div class="search" method="get">
									<form action="__URL__/list/uid/<?php echo $_smarty_tpl->tpl_vars['userinfo']->value['id'];?>
.html">
										<input type="text" name="kwords" class="input-text"/>
										<input type="submit" value="" class="input-sub"/>
									</form>
								</div>
							</div>
							<div class="bottom-height"></div>
						</div>
					</div><?php }} ?>