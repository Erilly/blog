<?php /* Smarty version Smarty-3.1.6, created on 2014-12-01 23:47:34
         compiled from "D:/wamp/www/blog/myblog/capsule_v1/home/Tpl\Public\headbar.html" */ ?>
<?php /*%%SmartyHeaderCode:22861547c6aebc92662-71634271%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '56be40053914539a829b534858ae4898ced83066' => 
    array (
      0 => 'D:/wamp/www/blog/myblog/capsule_v1/home/Tpl\\Public\\headbar.html',
      1 => 1417448853,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '22861547c6aebc92662-71634271',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_547c6aebd4a00',
  'variables' => 
  array (
    '_SESSION' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_547c6aebd4a00')) {function content_547c6aebd4a00($_smarty_tpl) {?>		<div class="head-top">
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
					<?php if (!$_smarty_tpl->tpl_vars['_SESSION']->value['uid']){?>
					<li>[<a class="global_log_btn"><span>登录</span></a>]</li>
					<li><a href="__APP__/public/regist">注册</a></li>
					<?php }else{ ?>
					<li>[<a href="#"><span>Ryan</span></a>]
						<ul>
							<li><a href="__APP__/public/loginout">退出</a></li>
						</ul>
					</li>
					<li><a href="#">消息</a>
						<ul>
							<li><a href="#">查看评论</a></li>
							<li><a href="#">查看留言</a></li>
						</ul>
					</li>
					<?php }?>
				</ul>
			</div>
		</div><?php }} ?>