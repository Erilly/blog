<?php /* Smarty version Smarty-3.1.6, created on 2014-12-04 17:27:46
         compiled from "D:/wamp2/wamp/www/blog/myblog/capsule_v1/home/Tpl\Public\headbar.html" */ ?>
<?php /*%%SmartyHeaderCode:23748548001e7ddc867-65031085%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e5619175797836e4263bd5e62930fbe0a53baa0b' => 
    array (
      0 => 'D:/wamp2/wamp/www/blog/myblog/capsule_v1/home/Tpl\\Public\\headbar.html',
      1 => 1417685265,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '23748548001e7ddc867-65031085',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_548001e7ebd89',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548001e7ebd89')) {function content_548001e7ebd89($_smarty_tpl) {?>		<div class="head-top">
			<div class="top-content">
				<div class='logo'></div>
				<div class='search'>
					<form action="__APP__/index" method="get">
						<input type="text" name="kwords" value="<?php echo $_REQUEST['kwords'];?>
" class="input-text"/>
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