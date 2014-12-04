<?php /* Smarty version Smarty-3.1.6, created on 2014-12-04 19:26:51
         compiled from "D:/wamp/www/blog/myblog/capsule_v1/home/Tpl\Article\person.html" */ ?>
<?php /*%%SmartyHeaderCode:26411548044fba7fd52-66727370%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7eaaa891cefc94bfc35d73c0e96e418d62cfefc6' => 
    array (
      0 => 'D:/wamp/www/blog/myblog/capsule_v1/home/Tpl\\Article\\person.html',
      1 => 1417522283,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26411548044fba7fd52-66727370',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'article' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_548044fbdcf8a',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548044fbdcf8a')) {function content_548044fbdcf8a($_smarty_tpl) {?>			<!-- 导入header头 -->
			<?php echo $_smarty_tpl->getSubTemplate ("Public/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

					<div class="right">
						<div class="left-per-title">
							<span class="per-title">文章正文</span>
						</div>
						<div class="right-content-box">
							<div class="right-content">
								<div class="right-title-box">
									<h3 class="right-title">白警杀黑男不起诉 美大陪审团裁决引发骚乱</h3>
									<span>2014-11-26</span>
									<div class="turn-it">
										<em></em>
										<span>转发</span>
									</div>
								</div>
								<div class="right-article">
									<?php echo $_smarty_tpl->tpl_vars['article']->value;?>

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

				<!-- 导入footer页尾 -->
				<?php echo $_smarty_tpl->getSubTemplate ("Public/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>