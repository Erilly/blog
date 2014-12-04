<?php /* Smarty version Smarty-3.1.6, created on 2014-12-04 17:15:24
         compiled from "D:/wamp2/wamp/www/blog/myblog/capsule_v1/home/Tpl\Public\header.html" */ ?>
<?php /*%%SmartyHeaderCode:11223548001e796fae2-55137788%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e383e45afe709c23ddf01ddbb87c1816284a39cc' => 
    array (
      0 => 'D:/wamp2/wamp/www/blog/myblog/capsule_v1/home/Tpl\\Public\\header.html',
      1 => 1417684523,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11223548001e796fae2-55137788',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_548001e7d62a6',
  'variables' => 
  array (
    'userinfo' => 0,
    'class' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548001e7d62a6')) {function content_548001e7d62a6($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>JC</title>
		<link href="__PUBLIC__/css/blog-1.css" rel="stylesheet" type="text/css" />
				<link href="__PUBLIC__/css/page.css" rel="stylesheet" type="text/css" />

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

		<div id="back" ></div>
		<div class="bg" <?php if ($_SESSION['uid']&&$_smarty_tpl->tpl_vars['userinfo']->value['id']==$_SESSION['uid']){?>style="background-image:url(__PUBLIC__/images/blogself.jpg)"<?php }?>>
			<div class="box">
				<div class="head">
					<div class="title-box">
						<div class="user-info">
							<h1><a><span><?php echo $_smarty_tpl->tpl_vars['userinfo']->value['kidname'];?>
的太空鱼</span></a></h1>
							<div><a href="__URL__/person/uid/<?php echo $_smarty_tpl->tpl_vars['userinfo']->value['id'];?>
.html">__URL__/person/uid/<?php echo $_smarty_tpl->tpl_vars['userinfo']->value['id'];?>
.html</a></div>
							<div class="user-say" ><span class="say-title">个人格言：</span>
								<span class="say-content" id="persign-show" title="<?php echo $_smarty_tpl->tpl_vars['userinfo']->value['persign'];?>
">
									<?php echo mbsubstr($_smarty_tpl->tpl_vars['userinfo']->value['persign'],55);?>

								</span>
								<?php if ($_SESSION['uid']&&$_smarty_tpl->tpl_vars['userinfo']->value['id']==$_SESSION['uid']){?>
								<div id="persign-change-box">
									<input type="text" value="<?php echo $_smarty_tpl->tpl_vars['userinfo']->value['persign'];?>
" id="persign-change"/>
									<em id="persign-edit"></em>
								</div>
								<?php }?>
							</div>
						</div>
						<?php if ($_SESSION['uid']&&$_smarty_tpl->tpl_vars['userinfo']->value['id']==$_SESSION['uid']){?>
						<script type="text/javascript">
							$(".user-say").dblclick(function(){
								$("#persign-show").hide();
								$("#persign-change-box").show();
							});
							$("#persign-edit").click(function(){
								var oin="";
								var nin=$("#persign-change").val();
								if(nin.length>55){
									var oin=nin.substring(0,55)+"...";
								}else{
									oin=nin;
								}
								$("#persign-show").html(oin).attr('title',nin).show();
								$("#persign-change-box").hide();
								$.ajax({ url:'__APP__/ajax/persign',type:'post',data:{uid:<?php echo $_SESSION['uid'];?>
,persign:nin},dataType:'json'});
							});
						</script>
						<?php }?>
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
						<div class="user-do-list"><a href="__URL__/create/uid/<?php echo $_SESSION['uid'];?>
.html">编写文章</a></div>
						<div class="user-do-list"><a href="__URL__/person/uid/<?php echo $_SESSION['uid'];?>
.html">个人中心</a></div>
						<div class="user-do-list"><a href="__URL__/setting/uid/<?php echo $_SESSION['uid'];?>
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
								<span><?php echo $_smarty_tpl->tpl_vars['userinfo']->value['kidname'];?>
</span>
							</div>
							<div class="left-per-focus">
								<?php if ($_SESSION['uid']){?>
								<div class="btn-style per-btn1">关注</div>
								<div class="btn-style per-btn2">留言</div>
								<?php }?>
							</div>
							<div class="left-per-info">
								<ul>
									<li class="info-style">
										<span>性别：</span>
										<span><?php echo getGender($_smarty_tpl->tpl_vars['userinfo']->value['gender']);?>
</span>
									</li>
									<li class="info-style">
										<span>年龄：</span>
										<span><?php echo getAge($_smarty_tpl->tpl_vars['userinfo']->value['birth']);?>
岁</span>
									</li>
									<li class="info-style">
										<span>星座：</span>
										<span style="position:relative"><?php echo getStar($_smarty_tpl->tpl_vars['userinfo']->value['birth']);?>
</span>
									</li>
									<li class="info-style">
										<span>职业：</span>
										<span><?php echo $_smarty_tpl->tpl_vars['userinfo']->value['job'];?>
</span>
									</li>
									<li class="info-style">
										<span>网龄：</span>
										<span><?php echo getNetAge($_smarty_tpl->tpl_vars['userinfo']->value['ctime']);?>
年</span>
									</li>
								</ul>
							</div>
							<div class="bottom-height"></div>
						</div>
						<div class="left-list">
							<div class="left-per-title">
								<span class="per-title">文章分类</span>
								<?php if ($_smarty_tpl->tpl_vars['userinfo']->value['id']==$_SESSION['uid']){?>
								<!-- <div class="edit">【<a href="#">管理</a>】</div> -->
								<?php }?>
							</div>
							<div class="left-class-list">
								<ul>
									<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['class']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
									<li class="info-style">
										<a href="__URL__/articlelist/uid/<?php echo $_smarty_tpl->tpl_vars['userinfo']->value['id'];?>
/cid/<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
.html"><?php echo $_smarty_tpl->tpl_vars['v']->value['class'];?>
 (<?php echo getClassCount($_smarty_tpl->tpl_vars['v']->value['id'],$_smarty_tpl->tpl_vars['userinfo']->value['id']);?>
)</a>
									</li>
									<?php } ?>
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
									<form action="__URL__/articlelist/uid/<?php echo $_smarty_tpl->tpl_vars['userinfo']->value['id'];?>
" method="get">
										<input type="text" name="kwords" value="<?php echo $_REQUEST['kwords'];?>
" class="input-text"/>
										<input type="submit" value="" class="input-sub"/>
									</form>
								</div>
							</div>
							<div class="bottom-height"></div>
						</div>
					</div><?php }} ?>