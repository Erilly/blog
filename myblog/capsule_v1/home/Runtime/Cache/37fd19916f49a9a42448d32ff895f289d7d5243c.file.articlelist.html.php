<?php /* Smarty version Smarty-3.1.6, created on 2014-12-03 17:29:42
         compiled from "D:/wamp2/wamp/www/blog/myblog/capsule_v1/home/Tpl\Article\articlelist.html" */ ?>
<?php /*%%SmartyHeaderCode:29681547ed80698d628-63963735%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '37fd19916f49a9a42448d32ff895f289d7d5243c' => 
    array (
      0 => 'D:/wamp2/wamp/www/blog/myblog/capsule_v1/home/Tpl\\Article\\articlelist.html',
      1 => 1417598966,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29681547ed80698d628-63963735',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'articlelist' => 0,
    'v' => 0,
    'userinfo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_547ed806b0467',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_547ed806b0467')) {function content_547ed806b0467($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'D:\\wamp2\\wamp\\www\\blog\\myblog\\ThinkPHP\\Extend\\Vendor\\Smarty\\plugins\\modifier.date_format.php';
?>	<?php echo $_smarty_tpl->getSubTemplate ("Public/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

			<div class="right">
				<div class="left-per-title">
					<span class="per-title">文章列表</span>
				</div>
				<div class="right-content-box">
						<ul class="article-list-box">
							<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['articlelist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
							<li class="article-list">
								<a href="#" class="right-title"><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</a>
								<span class="article-time"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['v']->value['ctime'],'%Y-%m-%d');?>
 <label>阅读次数：</label>(<?php echo $_smarty_tpl->tpl_vars['v']->value['readnum'];?>
)</span>
								<?php if ($_SESSION['uid']&&$_SESSION['uid']!=$_smarty_tpl->tpl_vars['v']->value['cuid']){?>
								<div class="turn-it">
									<em></em>
									<span>转发</span>
								</div>
								<?php }else{ ?>
								<div class="turn-it">
									<span>开启</span>
									<span><a href="__URL__/edit/uid/<?php echo $_smarty_tpl->tpl_vars['userinfo']->value['id'];?>
/aid/<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">编辑</a></span>
								</div>
								<?php }?>
							</li>
							<?php } ?>
						</ul>
					<div class="bottom-height"></div>
				</div>
			</div>
		</div>
<?php echo $_smarty_tpl->getSubTemplate ("Public/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>