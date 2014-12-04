<?php /* Smarty version Smarty-3.1.6, created on 2014-12-04 17:13:01
         compiled from "D:/wamp2/wamp/www/blog/myblog/capsule_v1/home/Tpl\Article\articlelist.html" */ ?>
<?php /*%%SmartyHeaderCode:1954854802235d0d452-24228456%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '37fd19916f49a9a42448d32ff895f289d7d5243c' => 
    array (
      0 => 'D:/wamp2/wamp/www/blog/myblog/capsule_v1/home/Tpl\\Article\\articlelist.html',
      1 => 1417684380,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1954854802235d0d452-24228456',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_54802235eb32b',
  'variables' => 
  array (
    'articlelist' => 0,
    'v' => 0,
    'userinfo' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54802235eb32b')) {function content_54802235eb32b($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'D:\\wamp2\\wamp\\www\\blog\\myblog\\ThinkPHP\\Extend\\Vendor\\Smarty\\plugins\\modifier.date_format.php';
?>	<?php echo $_smarty_tpl->getSubTemplate ("Public/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

			<div class="right">
				<div class="left-per-title">
					<span class="per-title">
						<?php echo getClassName($_REQUEST['cid']);?>

						<?php if ($_REQUEST['kwords']){?>
							关于<span style="color:red;margin:0 10px">"<?php echo $_REQUEST['kwords'];?>
"</span>的搜索结果：
						<?php }?>
					</span>
				</div>
				<div class="right-content-box">
						<ul class="article-list-box">
							<?php if ($_smarty_tpl->tpl_vars['articlelist']->value){?>
								<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['articlelist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
								<li class="article-list">
									<a href="__APP__/article/content/uid/<?php echo $_smarty_tpl->tpl_vars['v']->value['cuid'];?>
/aid/<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
.html" class="right-title"><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</a>
									<span class="article-time"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['v']->value['ctime'],'%Y-%m-%d');?>
 <label>阅读次数：</label>(<?php echo $_smarty_tpl->tpl_vars['v']->value['readnum'];?>
)</span>
									<?php if ($_SESSION['uid']&&$_SESSION['uid']==$_smarty_tpl->tpl_vars['v']->value['cuid']){?>
									<div class="turn-it">
										<span id="turn" style="color:red">开启</span>
										<span><a href="__URL__/edit/uid/<?php echo $_smarty_tpl->tpl_vars['userinfo']->value['id'];?>
/aid/<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">编辑</a></span>
									</div>
									<?php }?>
								</li>
								<?php } ?>
								<div class="meneame pagebox"><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</div>
							<?php }else{ ?>
							<li><h1 style="margin:100px auto;width:65%;">对不起该类下还没有文章！</h1></li>
							<?php }?>

						</ul>
					<div class="bottom-height"></div>
				</div>
			</div>
		</div>
<?php echo $_smarty_tpl->getSubTemplate ("Public/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>