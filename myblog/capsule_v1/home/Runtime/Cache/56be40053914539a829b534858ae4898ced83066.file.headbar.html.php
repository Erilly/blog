<?php /* Smarty version Smarty-3.1.6, created on 2014-12-04 19:16:56
         compiled from "D:/wamp/www/blog/myblog/capsule_v1/home/Tpl\Public\headbar.html" */ ?>
<?php /*%%SmartyHeaderCode:27222548042a87d02b8-79081343%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '56be40053914539a829b534858ae4898ced83066' => 
    array (
      0 => 'D:/wamp/www/blog/myblog/capsule_v1/home/Tpl\\Public\\headbar.html',
      1 => 1417691587,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '27222548042a87d02b8-79081343',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_548042a8900e0',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548042a8900e0')) {function content_548042a8900e0($_smarty_tpl) {?>		<div class="head-top">
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