<?php /* Smarty version Smarty-3.1.6, created on 2014-12-02 18:02:22
         compiled from "D:/wamp2/wamp/www/blog/myblog/capsule_v1/home/Tpl\Index\index.html" */ ?>
<?php /*%%SmartyHeaderCode:11165547d2409e727d0-88277050%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7af8e276c242d25ce8a56525ea9e3ba456b5af7c' => 
    array (
      0 => 'D:/wamp2/wamp/www/blog/myblog/capsule_v1/home/Tpl\\Index\\index.html',
      1 => 1417514541,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11165547d2409e727d0-88277050',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_547d240a24941',
  'variables' => 
  array (
    'class' => 0,
    'v' => 0,
    'p' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_547d240a24941')) {function content_547d240a24941($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
		<!-- 导入头顶条 -->
		<?php echo $_smarty_tpl->getSubTemplate ("Public/headbar.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		<div id="back"></div>
		<div class="index-head">
					<div class="title-box">
						<div class="user-info">
							<!-- <h1><a href="#"><span>Ryan的太空舱</span></a></h1> -->
							<div><a href="#">http://www.jcapsule.com/1</a></div>
							<div class="user-say"><span class="say-title"></span>
								<span class="say-content">你从哪里来我的朋友，好像一只蝴蝶飞进我的窗口，好像一只蝴蝶飞进我的窗口，好像一只蝴蝶飞进我的窗口
								</span>
							</div>
						</div>
						
						<div class="user-line"></div>
						<!-- <div class="user-block">
							<span><a href="#">首页</a></span>
							<span><a href="#">博文目录</a></span>
							<span><a href="#">关注</a></span>
							<span><a href="#">关于我</a></span>
						</div> -->
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
">
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
						<li class="index-article-list">
							<a href="#"><img src="./images/shuai.jpg" alt="" class="index-head-pic"></a>
							<div class="index-author">
								<a href="#">Ryan</a>
								<div class="index-article-title">
									<a href="#" class="article-title-style">中国文化的前前后后</a>
									<div class="index-article-time">
										<span>创作时间：2014-12-01</span>
										<span>访问次数：(100)</span>
									</div>
								</div>
							</div>
						</li>
						<li class="index-article-list">
							<a href="#"><img src="./images/shuai.jpg" alt="" class="index-head-pic"></a>
							<div class="index-author">
								<a href="#">Ryan</a>
								<div class="index-article-title">
									<a href="#" class="article-title-style">中国文化的前前后后</a>
									<div class="index-article-time">
										<span>创作时间：2014-12-01</span>
										<span>访问次数：(100)</span>
									</div>
								</div>
							</div>
						</li>
						<li class="index-article-list">
							<a href="#"><img src="./images/shuai.jpg" alt="" class="index-head-pic"></a>
							<div class="index-author">
								<a href="#">Ryan</a>
								<div class="index-article-title">
									<a href="#" class="article-title-style">中国文化的前前后后</a>
									<div class="index-article-time">
										<span>创作时间：2014-12-01</span>
										<span>访问次数：(100)</span>
									</div>
								</div>
							</div>
						</li>
						<li class="index-article-list">
							<a href="#"><img src="./images/shuai.jpg" alt="" class="index-head-pic"></a>
							<div class="index-author">
								<a href="#">Ryan</a>
								<div class="index-article-title">
									<a href="#" class="article-title-style">中国文化的前前后后</a>
									<div class="index-article-time">
										<span>创作时间：2014-12-01</span>
										<span>访问次数：(100)</span>
									</div>
								</div>
							</div>
						</li>
						<li class="index-article-list">
							<a href="#"><img src="./images/shuai.jpg" alt="" class="index-head-pic"></a>
							<div class="index-author">
								<a href="#">Ryan</a>
								<div class="index-article-title">
									<a href="#" class="article-title-style">中国文化的前前后后</a>
									<div class="index-article-time">
										<span>创作时间：2014-12-01</span>
										<span>访问次数：(100)</span>
									</div>
								</div>
							</div>
						</li>
						<li class="index-article-list">
							<a href="#"><img src="./images/shuai.jpg" alt="" class="index-head-pic"></a>
							<div class="index-author">
								<a href="#">Ryan</a>
								<div class="index-article-title">
									<a href="#" class="article-title-style">中国文化的前前后后</a>
									<div class="index-article-time">
										<span>创作时间：2014-12-01</span>
										<span>访问次数：(100)</span>
									</div>
								</div>
							</div>
						</li>
						<li class="index-article-list">
							<a href="#"><img src="./images/shuai.jpg" alt="" class="index-head-pic"></a>
							<div class="index-author">
								<a href="#">Ryan</a>
								<div class="index-article-title">
									<a href="#" class="article-title-style">中国文化的前前后后</a>
									<div class="index-article-time">
										<span>创作时间：2014-12-01</span>
										<span>访问次数：(100)</span>
									</div>
								</div>
							</div>
						</li>
						<li class="index-article-list">
							<a href="#"><img src="./images/shuai.jpg" alt="" class="index-head-pic"></a>
							<div class="index-author">
								<a href="#">Ryan</a>
								<div class="index-article-title">
									<a href="#" class="article-title-style">中国文化的前前后后</a>
									<div class="index-article-time">
										<span>创作时间：2014-12-01</span>
										<span>访问次数：(100)</span>
									</div>
								</div>
							</div>
						</li>
						<li class="index-article-list">
							<a href="#"><img src="./images/shuai.jpg" alt="" class="index-head-pic"></a>
							<div class="index-author">
								<a href="#">Ryan</a>
								<div class="index-article-title">
									<a href="#" class="article-title-style">中国文化的前前后后</a>
									<div class="index-article-time">
										<span>创作时间：2014-12-01</span>
										<span>访问次数：(100)</span>
									</div>
								</div>
							</div>
						</li>
						<li class="index-article-list">
							<a href="#"><img src="./images/shuai.jpg" alt="" class="index-head-pic"></a>
							<div class="index-author">
								<a href="#">Ryan</a>
								<div class="index-article-title">
									<a href="#" class="article-title-style">中国文化的前前后后</a>
									<div class="index-article-time">
										<span>创作时间：2014-12-01</span>
										<span>访问次数：(100)</span>
									</div>
								</div>
							</div>
						</li>
					</ul>
					<div><?php echo $_smarty_tpl->tpl_vars['p']->value;?>
</div>
				</div>
				<!-- 导入页脚 -->
				<?php echo $_smarty_tpl->getSubTemplate ("Public/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>