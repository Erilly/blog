<?php /* Smarty version Smarty-3.1.6, created on 2014-12-04 17:34:32
         compiled from "D:/wamp2/wamp/www/blog/myblog/capsule_v1/home/Tpl\Article\content.html" */ ?>
<?php /*%%SmartyHeaderCode:3218254802aa8262959-02467886%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2141f588ac1db015f1984bd7c4d8601ecd300e0e' => 
    array (
      0 => 'D:/wamp2/wamp/www/blog/myblog/capsule_v1/home/Tpl\\Article\\content.html',
      1 => 1417661234,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3218254802aa8262959-02467886',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'userinfo' => 0,
    'article' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_54802aa8400ac',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54802aa8400ac')) {function content_54802aa8400ac($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'D:\\wamp2\\wamp\\www\\blog\\myblog\\ThinkPHP\\Extend\\Vendor\\Smarty\\plugins\\modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate ("Public/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		<div class="right">
			<div class="left-per-title">
				<span class="per-title"><a href="__URL__/articlelist/uid/<?php echo $_smarty_tpl->tpl_vars['userinfo']->value['id'];?>
/cid/<?php echo $_smarty_tpl->tpl_vars['article']->value['cid'];?>
.html"><?php echo getClassName($_smarty_tpl->tpl_vars['article']->value['cid']);?>
</a> > <?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
</span>
			</div>
			<div class="right-content-box">
				<div class="right-content">
					<div class="right-title-box">
						<h3 class="right-title"><?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
</h3>
						<span><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['article']->value['ctime'],'%Y-%m-%d');?>
</span>
					</div>
					<div class="right-article">
						<?php echo $_smarty_tpl->tpl_vars['article']->value['content'];?>

						<div class="bottom-height"></div>
					</div>

					<div class="right-article-bar">
						<span class="article-discuss-left">评论(2)</span>
						<span class="article-discuss-right">[发评论]</span>
					</div>
					<div class="discuss-content">
						<ul>
							<li>
								<a href="#">圣斗士星矢</a>
								<p>本文章很好，本文章很好，本文章很好，本文章很好，本文章很好，本文章很好，本文章很好，本文章很好，本文章很好，本文章很好，本文章很好，本文章很好，本文章很好，本文章很好，本文章很好，本文章很好，本文章很好，本文章很好，本文章很好，本文章很好，本文章很好，本文章很好，本文章很好，本文章很好，本文章很好，本文章很好，本文章很好，本文章很好，本文章很好，本文章很好，本文章很好，本文章很好，本文章很好，本文章很好。</p>
								<div class="discuss-ctime">
									<span>2014-11-26 22:30</span>
								</div>
							</li>
							<li>
								<a href="#">圣斗士星矢</a>
								<p>本文章很好，本文章很好，本文章很好，本文章很好，本文章很好，本文章很好，本文章很好，本文章很好，本文章很好，本文章很好，本文章很好，本文章很好，本文章很好，本文章很好，本文章很好，本文章很好，本文章很好，本文章很好，本文章很好，本文章很好，本文章很好，本文章很好，本文章很好，本文章很好，本文章很好，本文章很好，本文章很好，本文章很好，本文章很好，本文章很好，本文章很好，本文章很好，本文章很好，本文章很好。</p>
								<div class="discuss-ctime">
									<span>2014-11-26 22:30</span>
								</div>
							</li>
						</ul>
					</div>
					<div class="right-article-bar">
						<span class="article-discuss-left">发表评论</span>
					</div>
					<div class="right-discuss-box">
						<form action="" method="post">
							<ul>
								<li><textarea class="discuss-area"></textarea></li>
								<li>
									<label>用户名：</label><input type="text"class="discuss-input-text">
									<label>密码：</label><input type="password"class="discuss-input-pass">
								</li>
								<li>
									<div class="discuss-vertify">
										<label>验证码：</label><input type="text"class="discuss-input-text"> 
										<img src="./images/vertify.png" class="img-vertify">
									</div>
									<div class="discuss-sub"><input type="submit" value="评论" class="sub-it"/></div>
								</li>
							</ul>
							
						</form>
					</div>
				</div>
				<div class="bottom-height"></div>
			</div>
		</div>
	</div>

<?php echo $_smarty_tpl->getSubTemplate ("Public/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>