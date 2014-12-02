<?php /* Smarty version Smarty-3.1.6, created on 2014-12-02 20:44:50
         compiled from "D:/wamp/www/blog/myblog/capsule_v1/home/Tpl\Public\footer.html" */ ?>
<?php /*%%SmartyHeaderCode:5210547db442a4ab81-58272577%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '67b6e040a90acbcbfc617eef05bfcebe098ea0ab' => 
    array (
      0 => 'D:/wamp/www/blog/myblog/capsule_v1/home/Tpl\\Public\\footer.html',
      1 => 1417522283,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5210547db442a4ab81-58272577',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_547db442ae6f8',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_547db442ae6f8')) {function content_547db442ae6f8($_smarty_tpl) {?>				<script src="__PUBLIC__/js/per_config.js" type="text/javascript"></script>
				<a href="#back" class="back-top"></a>
				<div class="overburden"></div>
				<div class="login-window">
					<div class="left-per-title">
						<span class="per-title">登录 太空鱼</span>
						<div class="edit global_close"></div>
					</div>
					<div class="login-box">
						<form action="__APP__/Public/checklogin" method="postsssss">
							<div class="boxA">
								登录名：
								<input class="fm1" type="text" name="username" placeholder="用户名/Email地址" >
								<a target="_blank" href="#">立即注册</a>
							</div>
							<div class="boxA">
								密&nbsp; 码：
								<input class="fm1" type="password" name="password">
								<a target="_blank" href="#">找回密码</a>
							</div>
							<div class="boxA">
								验证码：
								<input class="fm2" type="text" name="verify">
								<img src="__APP__/Public/verify/" class="re-vertify-img vimg"/>
							</div>
							<div class="boxB">
								<input type="submit" value="登 录" name="button" id="button">
							</div>
						</form>
					</div>
				</div>

				<div class="foot">
					<ul class="foot-content">
						<li>Copyright  ©2014 <span>jCapsule</span> 联系方式 QQ:1617507676</li>		
					</ul>
					<div class="bottom-height"></div>
				</div>
			</div>
		</div>
	</body>
</html><?php }} ?>