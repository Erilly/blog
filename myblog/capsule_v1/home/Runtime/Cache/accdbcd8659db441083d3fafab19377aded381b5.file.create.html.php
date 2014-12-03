<?php /* Smarty version Smarty-3.1.6, created on 2014-12-03 17:53:12
         compiled from "D:/wamp2/wamp/www/blog/myblog/capsule_v1/home/Tpl\Article\create.html" */ ?>
<?php /*%%SmartyHeaderCode:30917547ed80ee94594-34319187%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'accdbcd8659db441083d3fafab19377aded381b5' => 
    array (
      0 => 'D:/wamp2/wamp/www/blog/myblog/capsule_v1/home/Tpl\\Article\\create.html',
      1 => 1417600390,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '30917547ed80ee94594-34319187',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_547ed80f082cd',
  'variables' => 
  array (
    'edit' => 0,
    'article' => 0,
    'v' => 0,
    'class' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_547ed80f082cd')) {function content_547ed80f082cd($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("Public/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

					
					<div class="right">
						<div class="left-per-title">
							<span class="per-title"><?php if ($_smarty_tpl->tpl_vars['edit']->value=='edit'){?>修改文章<?php }else{ ?>编写文章<?php }?></span>
						</div>
						<div class="right-content-box">
							 <script src="__PUBLIC__/ueditor1_4_3/ueditor.parse.js"></script>
							 <!-- 配置文件 -->
						    <script type="text/javascript" src="__PUBLIC__/ueditor1_4_3/ueditor.config.js"></script>
						    <!-- 编辑器源码文件 -->
						    <script type="text/javascript" src="__PUBLIC__/ueditor1_4_3/ueditor.all.min.js"></script>
							<div class="right-edit-content">
							    <form action="__URL__/<?php if ($_smarty_tpl->tpl_vars['edit']->value=='edit'){?>update/id/<?php echo $_smarty_tpl->tpl_vars['article']->value['id'];?>
<?php }else{ ?>docreate<?php }?>" method="post">
							    	<select name="cid" id="class-selector">
							    		<option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">选择文章分类</option>
							    		<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['class']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
							    		<option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"<?php if ($_smarty_tpl->tpl_vars['article']->value['cid']==$_smarty_tpl->tpl_vars['v']->value['id']){?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['v']->value['class'];?>
</option>
							    		<?php } ?>
							    	</select>
							    	<div>
								    	<input type="text" name="title" value="<?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
" placeholder="请输入文章标题" 
											style="border:1px solid #9fc1d5;width:270px;height:35px;margin-bottom:10px;font-size:20px;padding:0px 10px;border-radius:5px;"
								    	/>
								    	<input type="radio" name="status" value="1" <?php if ($_smarty_tpl->tpl_vars['article']->value['status']==1){?>checked<?php }?>/>开启
								    	<input type="radio" name="status" value="0" <?php if ($_smarty_tpl->tpl_vars['article']->value['status']==0){?>checked<?php }?>/>关闭
								    </div>

							        <!-- 加载编辑器的容器 -->
							        <script id="container" name="content" type="text/plain" style="height:300px;">
							        <?php echo $_smarty_tpl->tpl_vars['article']->value['content'];?>

							        </script>
							        <div class="edit-submit">
										<input class="edit-sub-btn" type="submit" value="提 交">
									</div>
							    </form>
							    <!-- 实例化编辑器 -->
							    <script type="text/javascript">
							        var ue = UE.getEditor('container',{ 
							        	autoHeightEnabled: false,
							        	autoFloatEnabled: true
							        }).setHeight(300);
									//uParse的语法
									uParse('.phpcontent',{
									    'highlightJsUrl':'./ueditor1_4_3/third-party/SyntaxHighlighter/shCore.js',
									    'highlightCssUrl':'./ueditor1_4_3/third-party/SyntaxHighlighter/shCoreDefault.css'
								    });

							    </script>
							</div>
							<div class="bottom-height"></div>
						</div>
					</div>
				</div>
<?php echo $_smarty_tpl->getSubTemplate ("Public/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>