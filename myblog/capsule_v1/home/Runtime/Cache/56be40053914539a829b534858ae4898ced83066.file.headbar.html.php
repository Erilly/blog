<?php /* Smarty version Smarty-3.1.6, created on 2014-12-02 20:44:50
         compiled from "D:/wamp/www/blog/myblog/capsule_v1/home/Tpl\Public\headbar.html" */ ?>
<?php /*%%SmartyHeaderCode:19461547db4428e3566-12708649%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '56be40053914539a829b534858ae4898ced83066' => 
    array (
      0 => 'D:/wamp/www/blog/myblog/capsule_v1/home/Tpl\\Public\\headbar.html',
      1 => 1417522283,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19461547db4428e3566-12708649',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_547db442a0c37',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_547db442a0c37')) {function content_547db442a0c37($_smarty_tpl) {?>		<div class="head-top">
			<div class="top-content">
				<div class='logo'></div>
				<div class='search'>
					<form action="" method="get">
						<input type="text" class="input-text"/>
						<input type="submit" value="" class="input-sub"/>
					</form>
				</div>
				<ul class="perinfo">
					<li>欢迎,</li>
					<?php if (!$_SESSION['uid']){?>
					<li>[<a class="global_log_btn"><span>登录</span></a>]</li>
					<li><a href="__APP__/public/regist">注册</a></li>
					<?php }else{ ?>
					<li>[<a href="__APP__/article/person/uid/<?php echo $_SESSION['uid'];?>
.html"><span><?php echo $_SESSION['name'];?>
</span></a>]
						<ul>
							<li><a href="__APP__/public/loginout">退出</a></li>
						</ul>
					</li>
					<li><a href="#">消息</a>
						<ul>
							<li><a href="__APP__/article/comment">查看评论</a></li>
							<li><a href="__APP__/article/message/uid/<?php echo $_SESSION['uid'];?>
">查看留言</a></li>
						</ul>
					</li>
					<?php }?>
				</ul>
			</div>
		</div><?php }} ?>