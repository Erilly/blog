<?php /* Smarty version Smarty-3.1.6, created on 2014-12-02 13:08:35
         compiled from "D:/wamp2/wamp/www/blog/myblog/capsule_v1/home/Tpl\Public\headbar.html" */ ?>
<?php /*%%SmartyHeaderCode:6162547d240a283da8-08077729%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e5619175797836e4263bd5e62930fbe0a53baa0b' => 
    array (
      0 => 'D:/wamp2/wamp/www/blog/myblog/capsule_v1/home/Tpl\\Public\\headbar.html',
      1 => 1417496899,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6162547d240a283da8-08077729',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_547d240a32bd4',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_547d240a32bd4')) {function content_547d240a32bd4($_smarty_tpl) {?>		<div class="head-top">
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