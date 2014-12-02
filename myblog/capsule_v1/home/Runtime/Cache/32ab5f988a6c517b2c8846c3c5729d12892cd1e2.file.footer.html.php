<?php /* Smarty version Smarty-3.1.6, created on 2014-12-02 12:57:05
         compiled from "D:/wamp2/wamp/www/blog/myblog/capsule_v1/home/Tpl\Public\footer.html" */ ?>
<?php /*%%SmartyHeaderCode:27619547d240a3a1069-64701148%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '32ab5f988a6c517b2c8846c3c5729d12892cd1e2' => 
    array (
      0 => 'D:/wamp2/wamp/www/blog/myblog/capsule_v1/home/Tpl\\Public\\footer.html',
      1 => 1417496222,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '27619547d240a3a1069-64701148',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_547d240a43578',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_547d240a43578')) {function content_547d240a43578($_smarty_tpl) {?>				<script src="__PUBLIC__/js/per_config.js" type="text/javascript"></script>
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